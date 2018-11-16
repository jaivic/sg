<?php

namespace Tests\Feature;

use Faker\Factory as Faker;
use Tests\TestCase;
use App\Http\Models\admin1\roles;
use App\Http\service\admin1\rolesService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class rolesTest extends TestCase
{
    use RefreshDatabase;
    public $role_id;


    public function createData()
    {
        $fake = Faker::create();
        // $row["name"] = $fake->name;
        $row = [
            'name' => $fake->word, 'display_name' => $fake->word, 'description' => $fake->word
        ];
        if (!$this->role_id) {
            $item = new permissionsTest();
            $response = $item->createItemBD($item->createData());
            $this->role_id = $response->id;
        }
        if (!$this->role_id) {
            $item = new usersTest();
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
        return roles::where($where)->first();
    }
    public function createItemBD($row)
    {
        $item = new rolesService();
        $response = $item->create($row);
        return $response;
    }
    public function testCreate()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $this->assertDatabaseHas('roles', $row);
    }
    public function testUpdate()
    {
        $item = new rolesService();
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $item->update($row, $data->id);
        $this->assertDatabaseHas('roles', $row);
    }
    public function testDelete()
    {
        $item = new rolesService();
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $item->delete($data->id);
        $this->assertDatabaseMissing('roles', $row);
    }
    public function testCreateController()
    {
        $row = $this->createData();
        $response = $this->post('roles/store', $row);
        $x = $this->buscarItem($row);
        $this->assertDatabaseHas('roles', $row);
        $response->assertRedirect("roles/edit/" . $x->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testUpdateController()
    {
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->post('roles/update/' . $data->id, $row);
        $this->assertDatabaseHas('roles', $row);
        $response->assertRedirect("roles/edit/" . $data->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testDeleteController()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->delete('roles/delete/' . $data->id);
        $this->assertDatabaseMissing('roles', $row);
        $response->assertRedirect("roles/index");
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }
    public function testCreateAPI()
    {
        $row = $this->createData();
        $response = $this->json('POST', 'roles/api/store', $row);
        $this->assertDatabaseHas('roles', $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'roles guardado exitosamente'
            ]);
    }
    public function testReadAPI()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->json('GET', 'roles/api/detail/' . $data->id);
        $row['success'] = true;
        $row['message'] = 'success';
        $response->assertStatus(200)
            ->assertJsonFragment($row);
    }

    public function testUpdateAPI()
    {

        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->json('POST', 'roles/api/update/' . $data->id, $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'roles actualizado exitosamente'
            ]);

    }

    public function testDeleteAPI()
    {
        $data = $this->createItemBD($this->createData());
        $response = $this->json('POST', 'roles/api/delete/' . $data->id);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'roles eliminado correctamente'
            ]);
        $response = $this->json('GET', 'roles/api/detail/' . $data->id);
        $response->assertStatus(404)
            ->assertJsonFragment([
                'success' => false,
                'message' => 'No se encontro lo que se buscaba'
            ]);
    }
}
