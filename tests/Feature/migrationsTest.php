<?php

namespace Tests\Feature;

use Faker\Factory as Faker;
use Tests\TestCase;
use App\Http\Models\admin1\migrations;
use App\Http\service\admin1\migrationsService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class migrationsTest extends TestCase
{
    use RefreshDatabase;

    public function createData()
    {
        $fake = Faker::create();
        // $row["name"] = $fake->name;
        $row=[
       'migration' => $fake->word,'batch' => $fake->randomDigitNotNull
       ];
       
        return $row;
    }
    public function buscarItem($row)
    {
        $where = [];
        foreach ($row as $key => $value) {
            $where[] = [$key, $value];
        }
        return migrations::where($where)->first();
    }
    public function createItemBD($row)
    {
        $item = new migrationsService();
        $response = $item->create($row);
        return $response;
    }
    public function testCreate()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $this->assertDatabaseHas('migrations', $row);
    }
    public function testUpdate()
    {
        $item = new migrationsService();
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $item->update($row, $data->id);
        $this->assertDatabaseHas('migrations', $row);
    }
    public function testDelete()
    {
        $item = new migrationsService();
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $item->delete($data->id);
        $this->assertDatabaseMissing('migrations', $row);
    }
    public function testCreateController()
    {
        $row = $this->createData();
        $response = $this->post('migrations/store', $row);
        $x = $this->buscarItem($row);
        $this->assertDatabaseHas('migrations', $row);
        $response->assertRedirect("migrations/edit/" . $x->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testUpdateController()
    {
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->post('migrations/update/' . $data->id, $row);
        $this->assertDatabaseHas('migrations', $row);
        $response->assertRedirect("migrations/edit/" . $data->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testDeleteController()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->delete('migrations/delete/' . $data->id);
        $this->assertDatabaseMissing('migrations', $row);
        $response->assertRedirect("migrations/index");
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }
    public function testCreateAPI()
    {
        $row = $this->createData();
        $response = $this->json('POST', 'migrations/api/store', $row);
        $this->assertDatabaseHas('migrations', $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'migrations guardado exitosamente'
            ]);
    }
    public function testReadAPI()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->json('GET', 'migrations/api/detail/' . $data->id);
        $row['success'] = true;
        $row['message'] = 'success';
        $response->assertStatus(200)
            ->assertJsonFragment($row);
    }

    public function testUpdateAPI()
    {

        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->json('POST', 'migrations/api/update/' . $data->id, $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'migrations actualizado exitosamente'
            ]);

    }

    public function testDeleteAPI()
    {
        $data = $this->createItemBD($this->createData());
        $response = $this->json('POST', 'migrations/api/delete/' . $data->id);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'migrations eliminado correctamente'
            ]);
        $response = $this->json('GET', 'migrations/api/detail/' . $data->id);
        $response->assertStatus(404)
            ->assertJsonFragment([
                'success' => false,
                'message' => 'No se encontro lo que se buscaba'
            ]);
    }
}
