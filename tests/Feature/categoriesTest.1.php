<?php

namespace Tests\Feature;

use Faker\Factory as Faker;
use Tests\TestCase;
use App\Http\Models\admin1\categories;
use App\Http\service\admin1\categoriesService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class categoriesTest extends TestCase
{
    use RefreshDatabase;

    public function createData()
    {
        $fake = Faker::create();
        // $row["name"] = $fake->name;
        $row=[
       'name' => $fake->word
       ];
       
        return $row;
    }
    public function buscarItem($row)
    {
        $where = [];
        foreach ($row as $key => $value) {
            $where[] = [$key, $value];
        }
        return categories::where($where)->first();
    }
    public function createItemBD($row)
    {
        $item = new categoriesService();
        $response = $item->create($row);
        return $response;
    }
    public function testCreate()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $this->assertDatabaseHas('categories', $row);
    }
    public function testUpdate()
    {
        $item = new categoriesService();
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $item->update($row, $data->id);
        $this->assertDatabaseHas('categories', $row);
    }
    public function testDelete()
    {
        $item = new categoriesService();
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $item->delete($data->id);
        $this->assertDatabaseMissing('categories', $row);
    }
    public function testCreateController()
    {
        $row = $this->createData();
        $response = $this->post('categories/store', $row);
        $x = $this->buscarItem($row);
        $this->assertDatabaseHas('categories', $row);
        $response->assertRedirect("categories/edit/" . $x->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testUpdateController()
    {
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->post('categories/update/' . $data->id, $row);
        $this->assertDatabaseHas('categories', $row);
        $response->assertRedirect("categories/edit/" . $data->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testDeleteController()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->delete('categories/delete/' . $data->id);
        $this->assertDatabaseMissing('categories', $row);
        $response->assertRedirect("categories/index");
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }
    public function testCreateAPI()
    {
        $row = $this->createData();
        $response = $this->json('POST', 'categories/api/store', $row);
        $this->assertDatabaseHas('categories', $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'categories guardado exitosamente'
            ]);
    }
    public function testReadAPI()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->json('GET', 'categories/api/detail/' . $data->id);
        $row['success'] = true;
        $row['message'] = 'success';
        $response->assertStatus(200)
            ->assertJsonFragment($row);
    }

    public function testUpdateAPI()
    {

        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->json('POST', 'categories/api/update/' . $data->id, $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'categories actualizado exitosamente'
            ]);

    }

    public function testDeleteAPI()
    {
        $data = $this->createItemBD($this->createData());
        $response = $this->json('POST', 'categories/api/delete/' . $data->id);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'categories eliminado correctamente'
            ]);
        $response = $this->json('GET', 'categories/api/detail/' . $data->id);
        $response->assertStatus(404)
            ->assertJsonFragment([
                'success' => false,
                'message' => 'No se encontro lo que se buscaba'
            ]);
    }
}
