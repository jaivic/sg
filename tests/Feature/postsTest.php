<?php

namespace Tests\Feature;

use Faker\Factory as Faker;
use Tests\TestCase;
use App\Http\Models\admin1\posts;
use App\Http\service\admin1\postsService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class postsTest extends TestCase
{
    use RefreshDatabase;
public $user_id;
public $post_id;


    public function createData()
    {
        $fake = Faker::create();
        // $row["name"] = $fake->name;
        $row=[
       'user_id' => $fake->randomDigitNotNull,'title' => $fake->word,'slug' => $fake->word,'body' => $fake->word,'type' => $fake->randomDigitNotNull,'image' => $fake->word,'postback' => $fake->word,'visits' => $fake->randomDigitNotNull,'likes' => $fake->randomDigitNotNull,'status' => $fake->randomDigitNotNull
       ];
        if (!$this->user_id) {
            $item = new usersTest();
            $response = $item->createItemBD($item->createData());
            $this->user_id = $response->id;
        } if (!$this->post_id) {
            $item = new categoriesTest();
            $response = $item->createItemBD($item->createData());
            $this->post_id = $response->id;
        } if (!$this->post_id) {
            $item = new tagsTest();
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
        return posts::where($where)->first();
    }
    public function createItemBD($row)
    {
        $item = new postsService();
        $response = $item->create($row);
        return $response;
    }
    public function testCreate()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $this->assertDatabaseHas('posts', $row);
    }
    public function testUpdate()
    {
        $item = new postsService();
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $item->update($row, $data->id);
        $this->assertDatabaseHas('posts', $row);
    }
    public function testDelete()
    {
        $item = new postsService();
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $item->delete($data->id);
        $this->assertDatabaseMissing('posts', $row);
    }
    public function testCreateController()
    {
        $row = $this->createData();
        $response = $this->post('posts/store', $row);
        $x = $this->buscarItem($row);
        $this->assertDatabaseHas('posts', $row);
        $response->assertRedirect("posts/edit/" . $x->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testUpdateController()
    {
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->post('posts/update/' . $data->id, $row);
        $this->assertDatabaseHas('posts', $row);
        $response->assertRedirect("posts/edit/" . $data->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testDeleteController()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->delete('posts/delete/' . $data->id);
        $this->assertDatabaseMissing('posts', $row);
        $response->assertRedirect("posts/index");
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }
    public function testCreateAPI()
    {
        $row = $this->createData();
        $response = $this->json('POST', 'posts/api/store', $row);
        $this->assertDatabaseHas('posts', $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'posts guardado exitosamente'
            ]);
    }
    public function testReadAPI()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->json('GET', 'posts/api/detail/' . $data->id);
        $row['success'] = true;
        $row['message'] = 'success';
        $response->assertStatus(200)
            ->assertJsonFragment($row);
    }

    public function testUpdateAPI()
    {

        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->json('POST', 'posts/api/update/' . $data->id, $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'posts actualizado exitosamente'
            ]);

    }

    public function testDeleteAPI()
    {
        $data = $this->createItemBD($this->createData());
        $response = $this->json('POST', 'posts/api/delete/' . $data->id);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'posts eliminado correctamente'
            ]);
        $response = $this->json('GET', 'posts/api/detail/' . $data->id);
        $response->assertStatus(404)
            ->assertJsonFragment([
                'success' => false,
                'message' => 'No se encontro lo que se buscaba'
            ]);
    }
}
