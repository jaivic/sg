<?php

namespace Tests\Feature;

use Faker\Factory as Faker;
use Tests\TestCase;
use App\Http\Models\admin1\comments;
use App\Http\service\admin1\commentsService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class comments1Test extends TestCase
{
    use RefreshDatabase;
    public $user_id;
    public $post_id;
    public function createData()
    {
        $fake = Faker::create();
        // $row["name"] = $fake->name;
        if (!$this->user_id) {
            $item = new usersTest();
            $response = $item->createItemBD($item->createData());
            $this->user_id = $response->id;
        }
        if (!$this->post_id) {
            $item = new postsTest();
            $response = $item->createItemBD($item->createData());
            $this->post_id = $response->id;
        }
        $row = [
            'post_id' => $this->post_id,
            'user_id' => $this->user_id,
            'comment' => $fake->word,
            'approved' => $fake->randomDigitNotNull
        ];
        return $row;
    }
    public function buscarItem($row)
    {
        $where = [];
        foreach ($row as $key => $value) {
            $where[] = [$key, $value];
        }
        return comments::where($where)->first();
    }
    public function createItemBD($row)
    {
        $item = new commentsService();
        $response = $item->create($row);
        return $response;
    }
    public function testCreate()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $this->assertDatabaseHas('comments', $row);
    }
   /* public function testUpdate()
    {
        $item = new commentsService();
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $item->update($row, $data->id);
        $this->assertDatabaseHas('comments', $row);
    }
    public function testDelete()
    {
        $item = new commentsService();
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $item->delete($data->id);
        $this->assertDatabaseMissing('comments', $row);
    }
    public function testCreateController()
    {
        $row = $this->createData();
        $response = $this->post('comments/store', $row);
        $x = $this->buscarItem($row);
        $this->assertDatabaseHas('comments', $row);
        $response->assertRedirect("comments/edit/" . $x->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testUpdateController()
    {
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->post('comments/update/' . $data->id, $row);
        $this->assertDatabaseHas('comments', $row);
        $response->assertRedirect("comments/edit/" . $data->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testDeleteController()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->delete('comments/delete/' . $data->id);
        $this->assertDatabaseMissing('comments', $row);
        $response->assertRedirect("comments/index");
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }
    public function testCreateAPI()
    {
        $row = $this->createData();
        $response = $this->json('POST', 'comments/api/store', $row);
        $this->assertDatabaseHas('comments', $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'comments guardado exitosamente'
            ]);
    }
    public function testReadAPI()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->json('GET', 'comments/api/detail/' . $data->id);
        $row['success'] = true;
        $row['message'] = 'success';
        $response->assertStatus(200)
            ->assertJsonFragment($row);
    }

    public function testUpdateAPI()
    {

        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->json('POST', 'comments/api/update/' . $data->id, $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'comments actualizado exitosamente'
            ]);

    }

    public function testDeleteAPI()
    {
        $data = $this->createItemBD($this->createData());
        $response = $this->json('POST', 'comments/api/delete/' . $data->id);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'comments eliminado correctamente'
            ]);
        $response = $this->json('GET', 'comments/api/detail/' . $data->id);
        $response->assertStatus(404)
            ->assertJsonFragment([
                'success' => false,
                'message' => 'No se encontro lo que se buscaba'
            ]);
    }*/
}
