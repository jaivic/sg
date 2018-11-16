<?php

namespace Tests\Feature;

use Faker\Factory as Faker;
use Tests\TestCase;
use App\Http\Models\admin1\permissionRole;
use App\Http\service\admin1\permissionRoleService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class permissionRoleTest extends TestCase
{
    use RefreshDatabase;
public $permission_id;
public $role_id;

    public function createData()
    {
        $fake = Faker::create();
        // $row["name"] = $fake->name;
        $row=[
       'permission_id' => $fake->randomDigitNotNull,'role_id' => $fake->randomDigitNotNull
       ];
        if (!$this->permission_id) {
            $item = new permissionsTest();
            $response = $item->createItemBD($item->createData());
            $this->permission_id = $response->id;
        } if (!$this->role_id) {
            $item = new rolesTest();
            $response = $item->createItemBD($item->createData());
            $this->role_id = $response->id;
        }
        return $row;
    }
    public function buscarItem($row)
    {
        $where = [];
        foreach ($row as $key => $value) {
            $where[] = [$key, $value];
        }
        return permissionRole::where($where)->first();
    }
    public function createItemBD($row)
    {
        $item = new permissionRoleService();
        $response = $item->create($row);
        return $response;
    }
    public function testCreate()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $this->assertDatabaseHas('permissionRole', $row);
    }
    public function testUpdate()
    {
        $item = new permissionRoleService();
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $item->update($row, $data->id);
        $this->assertDatabaseHas('permissionRole', $row);
    }
    public function testDelete()
    {
        $item = new permissionRoleService();
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $item->delete($data->id);
        $this->assertDatabaseMissing('permissionRole', $row);
    }
    public function testCreateController()
    {
        $row = $this->createData();
        $response = $this->post('permissionRole/store', $row);
        $x = $this->buscarItem($row);
        $this->assertDatabaseHas('permissionRole', $row);
        $response->assertRedirect("permissionRole/edit/" . $x->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testUpdateController()
    {
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->post('permissionRole/update/' . $data->id, $row);
        $this->assertDatabaseHas('permissionRole', $row);
        $response->assertRedirect("permissionRole/edit/" . $data->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testDeleteController()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->delete('permissionRole/delete/' . $data->id);
        $this->assertDatabaseMissing('permissionRole', $row);
        $response->assertRedirect("permissionRole/index");
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }
    public function testCreateAPI()
    {
        $row = $this->createData();
        $response = $this->json('POST', 'permissionRole/api/store', $row);
        $this->assertDatabaseHas('permissionRole', $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'permissionRole guardado exitosamente'
            ]);
    }
    public function testReadAPI()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->json('GET', 'permissionRole/api/detail/' . $data->id);
        $row['success'] = true;
        $row['message'] = 'success';
        $response->assertStatus(200)
            ->assertJsonFragment($row);
    }

    public function testUpdateAPI()
    {

        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->json('POST', 'permissionRole/api/update/' . $data->id, $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'permissionRole actualizado exitosamente'
            ]);

    }

    public function testDeleteAPI()
    {
        $data = $this->createItemBD($this->createData());
        $response = $this->json('POST', 'permissionRole/api/delete/' . $data->id);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'permissionRole eliminado correctamente'
            ]);
        $response = $this->json('GET', 'permissionRole/api/detail/' . $data->id);
        $response->assertStatus(404)
            ->assertJsonFragment([
                'success' => false,
                'message' => 'No se encontro lo que se buscaba'
            ]);
    }
}
