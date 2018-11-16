<?php

namespace Tests\Feature;

use Faker\Factory as Faker;
use Tests\TestCase;
use App\Http\Models\admin1\passwordResets;
use App\Http\service\admin1\passwordResetsService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class passwordResetsTest extends TestCase
{
    use RefreshDatabase;

    public function createData()
    {
        $fake = Faker::create();
        // $row["name"] = $fake->name;
        $row=[
       'email' => $fake->word,'token' => $fake->word
       ];
       
        return $row;
    }
    public function buscarItem($row)
    {
        $where = [];
        foreach ($row as $key => $value) {
            $where[] = [$key, $value];
        }
        return passwordResets::where($where)->first();
    }
    public function createItemBD($row)
    {
        $item = new passwordResetsService();
        $response = $item->create($row);
        return $response;
    }
    public function testCreate()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $this->assertDatabaseHas('passwordResets', $row);
    }
    public function testUpdate()
    {
        $item = new passwordResetsService();
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $item->update($row, $data->id);
        $this->assertDatabaseHas('passwordResets', $row);
    }
    public function testDelete()
    {
        $item = new passwordResetsService();
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $item->delete($data->id);
        $this->assertDatabaseMissing('passwordResets', $row);
    }
    public function testCreateController()
    {
        $row = $this->createData();
        $response = $this->post('passwordResets/store', $row);
        $x = $this->buscarItem($row);
        $this->assertDatabaseHas('passwordResets', $row);
        $response->assertRedirect("passwordResets/edit/" . $x->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testUpdateController()
    {
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->post('passwordResets/update/' . $data->id, $row);
        $this->assertDatabaseHas('passwordResets', $row);
        $response->assertRedirect("passwordResets/edit/" . $data->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testDeleteController()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->delete('passwordResets/delete/' . $data->id);
        $this->assertDatabaseMissing('passwordResets', $row);
        $response->assertRedirect("passwordResets/index");
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }
    public function testCreateAPI()
    {
        $row = $this->createData();
        $response = $this->json('POST', 'passwordResets/api/store', $row);
        $this->assertDatabaseHas('passwordResets', $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'passwordResets guardado exitosamente'
            ]);
    }
    public function testReadAPI()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->json('GET', 'passwordResets/api/detail/' . $data->id);
        $row['success'] = true;
        $row['message'] = 'success';
        $response->assertStatus(200)
            ->assertJsonFragment($row);
    }

    public function testUpdateAPI()
    {

        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->json('POST', 'passwordResets/api/update/' . $data->id, $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'passwordResets actualizado exitosamente'
            ]);

    }

    public function testDeleteAPI()
    {
        $data = $this->createItemBD($this->createData());
        $response = $this->json('POST', 'passwordResets/api/delete/' . $data->id);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'passwordResets eliminado correctamente'
            ]);
        $response = $this->json('GET', 'passwordResets/api/detail/' . $data->id);
        $response->assertStatus(404)
            ->assertJsonFragment([
                'success' => false,
                'message' => 'No se encontro lo que se buscaba'
            ]);
    }
}
