<?php

namespace Tests\Feature;

use Faker\Factory as Faker;
use Tests\TestCase;
use App\Http\Models\admin1\postCategories;
use App\Http\service\admin1\postCategoriesService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class postCategoriesTest extends TestCase
{
    use RefreshDatabase;
public $category_id;
public $post_id;

    public function createData()
    {
        $fake = Faker::create();
        // $row["name"] = $fake->name;
        $row=[
       'post_id' => $fake->randomDigitNotNull,'category_id' => $fake->randomDigitNotNull
       ];
        if (!$this->category_id) {
            $item = new categoriesTest();
            $response = $item->createItemBD($item->createData());
            $this->category_id = $response->id;
        } if (!$this->post_id) {
            $item = new postsTest();
            $response = $item->createItemBD($item->createData());
            $this->post_id = $response->id;
        }
        return $row;
    }
    public function buscarItem($row)
    {
        $where = [];
        foreach ($row as $key => $value) {
            $where[] = [$key, $value];
        }
        return postCategories::where($where)->first();
    }
    public function createItemBD($row)
    {
        $item = new postCategoriesService();
        $response = $item->create($row);
        return $response;
    }
    public function testCreate()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $this->assertDatabaseHas('postCategories', $row);
    }
    public function testUpdate()
    {
        $item = new postCategoriesService();
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $item->update($row, $data->id);
        $this->assertDatabaseHas('postCategories', $row);
    }
    public function testDelete()
    {
        $item = new postCategoriesService();
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $item->delete($data->id);
        $this->assertDatabaseMissing('postCategories', $row);
    }
    public function testCreateController()
    {
        $row = $this->createData();
        $response = $this->post('postCategories/store', $row);
        $x = $this->buscarItem($row);
        $this->assertDatabaseHas('postCategories', $row);
        $response->assertRedirect("postCategories/edit/" . $x->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testUpdateController()
    {
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->post('postCategories/update/' . $data->id, $row);
        $this->assertDatabaseHas('postCategories', $row);
        $response->assertRedirect("postCategories/edit/" . $data->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testDeleteController()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->delete('postCategories/delete/' . $data->id);
        $this->assertDatabaseMissing('postCategories', $row);
        $response->assertRedirect("postCategories/index");
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }
    public function testCreateAPI()
    {
        $row = $this->createData();
        $response = $this->json('POST', 'postCategories/api/store', $row);
        $this->assertDatabaseHas('postCategories', $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'postCategories guardado exitosamente'
            ]);
    }
    public function testReadAPI()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->json('GET', 'postCategories/api/detail/' . $data->id);
        $row['success'] = true;
        $row['message'] = 'success';
        $response->assertStatus(200)
            ->assertJsonFragment($row);
    }

    public function testUpdateAPI()
    {

        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->json('POST', 'postCategories/api/update/' . $data->id, $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'postCategories actualizado exitosamente'
            ]);

    }

    public function testDeleteAPI()
    {
        $data = $this->createItemBD($this->createData());
        $response = $this->json('POST', 'postCategories/api/delete/' . $data->id);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'postCategories eliminado correctamente'
            ]);
        $response = $this->json('GET', 'postCategories/api/detail/' . $data->id);
        $response->assertStatus(404)
            ->assertJsonFragment([
                'success' => false,
                'message' => 'No se encontro lo que se buscaba'
            ]);
    }
}
