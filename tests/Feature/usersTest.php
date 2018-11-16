<?php

namespace Tests\Feature;

use Faker\Factory as Faker;
use Tests\TestCase;
use App\Http\Models\admin1\users;
use App\Http\service\admin1\usersService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class usersTest extends TestCase
{
    use RefreshDatabase;
public $user_id;

    public function createData()
    {
        $fake = Faker::create();
        // $row["name"] = $fake->name;
        $row=[
       'name' => $fake->word,'email' => $fake->word,'password' => $fake->word,'remember_token' => $fake->word,'phone_id' => $fake->word
       ];
        if (!$this->user_id) {
            $item = new rolesTest();
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
        return users::where($where)->first();
    }
    public function createItemBD($row)
    {
        $item = new usersService();
        $response = $item->create($row);
        return $response;
    }
    public function testCreate()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $this->assertDatabaseHas('users', $row);
    }
    public function testUpdate()
    {
        $item = new usersService();
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $item->update($row, $data->id);
        $this->assertDatabaseHas('users', $row);
    }
    public function testDelete()
    {
        $item = new usersService();
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $item->delete($data->id);
        $this->assertDatabaseMissing('users', $row);
    }
    public function testCreateController()
    {
        $row = $this->createData();
        $response = $this->post('users/store', $row);
        $x = $this->buscarItem($row);
        $this->assertDatabaseHas('users', $row);
        $response->assertRedirect("users/edit/" . $x->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testUpdateController()
    {
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->post('users/update/' . $data->id, $row);
        $this->assertDatabaseHas('users', $row);
        $response->assertRedirect("users/edit/" . $data->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testDeleteController()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->delete('users/delete/' . $data->id);
        $this->assertDatabaseMissing('users', $row);
        $response->assertRedirect("users/index");
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }
    public function testCreateAPI()
    {
        $row = $this->createData();
        $response = $this->json('POST', 'users/api/store', $row);
        $this->assertDatabaseHas('users', $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'users guardado exitosamente'
            ]);
    }
    public function testReadAPI()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->json('GET', 'users/api/detail/' . $data->id);
        $row['success'] = true;
        $row['message'] = 'success';
        $response->assertStatus(200)
            ->assertJsonFragment($row);
    }

    public function testUpdateAPI()
    {

        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->json('POST', 'users/api/update/' . $data->id, $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'users actualizado exitosamente'
            ]);

    }

    public function testDeleteAPI()
    {
        $data = $this->createItemBD($this->createData());
        $response = $this->json('POST', 'users/api/delete/' . $data->id);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'users eliminado correctamente'
            ]);
        $response = $this->json('GET', 'users/api/detail/' . $data->id);
        $response->assertStatus(404)
            ->assertJsonFragment([
                'success' => false,
                'message' => 'No se encontro lo que se buscaba'
            ]);
    }
}
