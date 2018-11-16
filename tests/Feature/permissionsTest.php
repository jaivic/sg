<?php

namespace Tests\Feature;

use Faker\Factory as Faker;
use Tests\TestCase;
use App\Http\Models\admin1\permissions;
use App\Http\service\admin1\permissionsService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class permissionsTest extends TestCase
{
    use RefreshDatabase;
public $permission_id;

    public function createData()
    {
        $fake = Faker::create();
        // $row["name"] = $fake->name;
        $row=[
       'name' => $fake->word,'display_name' => $fake->word,'description' => $fake->word
       ];
        if (!$this->permission_id) {
            $item = new rolesTest();
            $response = $item->createItemBD($item->createData());
            $this->permission_id = $response->id;
        }
        return $row;
    }
    public function buscarItem($row)
    {
        $where = [];
        foreach ($row as $key => $value) {
            $where[] = [$key, $value];
        }
        return permissions::where($where)->first();
    }
    public function createItemBD($row)
    {
        $item = new permissionsService();
        $response = $item->create($row);
        return $response;
    }
    public function testCreate()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $this->assertDatabaseHas('permissions', $row);
    }
    public function testUpdate()
    {
        $item = new permissionsService();
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $item->update($row, $data->id);
        $this->assertDatabaseHas('permissions', $row);
    }
    public function testDelete()
    {
        $item = new permissionsService();
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $item->delete($data->id);
        $this->assertDatabaseMissing('permissions', $row);
    }
    public function testCreateController()
    {
        $row = $this->createData();
        $response = $this->post('permissions/store', $row);
        $x = $this->buscarItem($row);
        $this->assertDatabaseHas('permissions', $row);
        $response->assertRedirect("permissions/edit/" . $x->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testUpdateController()
    {
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->post('permissions/update/' . $data->id, $row);
        $this->assertDatabaseHas('permissions', $row);
        $response->assertRedirect("permissions/edit/" . $data->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testDeleteController()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->delete('permissions/delete/' . $data->id);
        $this->assertDatabaseMissing('permissions', $row);
        $response->assertRedirect("permissions/index");
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }
    public function testCreateAPI()
    {
        $row = $this->createData();
        $response = $this->json('POST', 'permissions/api/store', $row);
        $this->assertDatabaseHas('permissions', $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'permissions guardado exitosamente'
            ]);
    }
    public function testReadAPI()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->json('GET', 'permissions/api/detail/' . $data->id);
        $row['success'] = true;
        $row['message'] = 'success';
        $response->assertStatus(200)
            ->assertJsonFragment($row);
    }

    public function testUpdateAPI()
    {

        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->json('POST', 'permissions/api/update/' . $data->id, $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'permissions actualizado exitosamente'
            ]);

    }

    public function testDeleteAPI()
    {
        $data = $this->createItemBD($this->createData());
        $response = $this->json('POST', 'permissions/api/delete/' . $data->id);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'permissions eliminado correctamente'
            ]);
        $response = $this->json('GET', 'permissions/api/detail/' . $data->id);
        $response->assertStatus(404)
            ->assertJsonFragment([
                'success' => false,
                'message' => 'No se encontro lo que se buscaba'
            ]);
    }
}
