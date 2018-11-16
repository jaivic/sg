<?php

namespace Tests\Feature;

use Faker\Factory as Faker;
use Tests\TestCase;
use App\Http\Models\admin1\roleUser;
use App\Http\service\admin1\roleUserService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class roleUserTest extends TestCase
{
    use RefreshDatabase;
public $role_id;
public $user_id;

    public function createData()
    {
        $fake = Faker::create();
        // $row["name"] = $fake->name;
        $row=[
       'user_id' => $fake->randomDigitNotNull,'role_id' => $fake->randomDigitNotNull
       ];
        if (!$this->role_id) {
            $item = new rolesTest();
            $response = $item->createItemBD($item->createData());
            $this->role_id = $response->id;
        } if (!$this->user_id) {
            $item = new usersTest();
            $response = $item->createItemBD($item->createData());
            $this->user_id = $response->id;
        }
        return $row;
    }
    public function buscarItem($row)
    {
        $where = [];
        foreach ($row as $key => $value) {
            $where[] = [$key, $value];
        }
        return roleUser::where($where)->first();
    }
    public function createItemBD($row)
    {
        $item = new roleUserService();
        $response = $item->create($row);
        return $response;
    }
    public function testCreate()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $this->assertDatabaseHas('roleUser', $row);
    }
    public function testUpdate()
    {
        $item = new roleUserService();
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $item->update($row, $data->id);
        $this->assertDatabaseHas('roleUser', $row);
    }
    public function testDelete()
    {
        $item = new roleUserService();
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $item->delete($data->id);
        $this->assertDatabaseMissing('roleUser', $row);
    }
    public function testCreateController()
    {
        $row = $this->createData();
        $response = $this->post('roleUser/store', $row);
        $x = $this->buscarItem($row);
        $this->assertDatabaseHas('roleUser', $row);
        $response->assertRedirect("roleUser/edit/" . $x->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testUpdateController()
    {
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->post('roleUser/update/' . $data->id, $row);
        $this->assertDatabaseHas('roleUser', $row);
        $response->assertRedirect("roleUser/edit/" . $data->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testDeleteController()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->delete('roleUser/delete/' . $data->id);
        $this->assertDatabaseMissing('roleUser', $row);
        $response->assertRedirect("roleUser/index");
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }
    public function testCreateAPI()
    {
        $row = $this->createData();
        $response = $this->json('POST', 'roleUser/api/store', $row);
        $this->assertDatabaseHas('roleUser', $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'roleUser guardado exitosamente'
            ]);
    }
    public function testReadAPI()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->json('GET', 'roleUser/api/detail/' . $data->id);
        $row['success'] = true;
        $row['message'] = 'success';
        $response->assertStatus(200)
            ->assertJsonFragment($row);
    }

    public function testUpdateAPI()
    {

        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->json('POST', 'roleUser/api/update/' . $data->id, $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'roleUser actualizado exitosamente'
            ]);

    }

    public function testDeleteAPI()
    {
        $data = $this->createItemBD($this->createData());
        $response = $this->json('POST', 'roleUser/api/delete/' . $data->id);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'roleUser eliminado correctamente'
            ]);
        $response = $this->json('GET', 'roleUser/api/detail/' . $data->id);
        $response->assertStatus(404)
            ->assertJsonFragment([
                'success' => false,
                'message' => 'No se encontro lo que se buscaba'
            ]);
    }
}
