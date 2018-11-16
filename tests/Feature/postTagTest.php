<?php

namespace Tests\Feature;

use Faker\Factory as Faker;
use Tests\TestCase;
use App\Http\Models\admin1\postTag;
use App\Http\service\admin1\postTagService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class postTagTest extends TestCase
{
    use RefreshDatabase;
public $post_id;
public $tag_id;

    public function createData()
    {
        $fake = Faker::create();
        // $row["name"] = $fake->name;
        $row=[
       'post_id' => $fake->randomDigitNotNull,'tag_id' => $fake->randomDigitNotNull
       ];
        if (!$this->post_id) {
            $item = new postsTest();
            $response = $item->createItemBD($item->createData());
            $this->post_id = $response->id;
        } if (!$this->tag_id) {
            $item = new tagsTest();
            $response = $item->createItemBD($item->createData());
            $this->tag_id = $response->id;
        }
        return $row;
    }
    public function buscarItem($row)
    {
        $where = [];
        foreach ($row as $key => $value) {
            $where[] = [$key, $value];
        }
        return postTag::where($where)->first();
    }
    public function createItemBD($row)
    {
        $item = new postTagService();
        $response = $item->create($row);
        return $response;
    }
    public function testCreate()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $this->assertDatabaseHas('postTag', $row);
    }
    public function testUpdate()
    {
        $item = new postTagService();
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $item->update($row, $data->id);
        $this->assertDatabaseHas('postTag', $row);
    }
    public function testDelete()
    {
        $item = new postTagService();
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $item->delete($data->id);
        $this->assertDatabaseMissing('postTag', $row);
    }
    public function testCreateController()
    {
        $row = $this->createData();
        $response = $this->post('postTag/store', $row);
        $x = $this->buscarItem($row);
        $this->assertDatabaseHas('postTag', $row);
        $response->assertRedirect("postTag/edit/" . $x->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testUpdateController()
    {
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->post('postTag/update/' . $data->id, $row);
        $this->assertDatabaseHas('postTag', $row);
        $response->assertRedirect("postTag/edit/" . $data->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testDeleteController()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->delete('postTag/delete/' . $data->id);
        $this->assertDatabaseMissing('postTag', $row);
        $response->assertRedirect("postTag/index");
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }
    public function testCreateAPI()
    {
        $row = $this->createData();
        $response = $this->json('POST', 'postTag/api/store', $row);
        $this->assertDatabaseHas('postTag', $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'postTag guardado exitosamente'
            ]);
    }
    public function testReadAPI()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->json('GET', 'postTag/api/detail/' . $data->id);
        $row['success'] = true;
        $row['message'] = 'success';
        $response->assertStatus(200)
            ->assertJsonFragment($row);
    }

    public function testUpdateAPI()
    {

        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->json('POST', 'postTag/api/update/' . $data->id, $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'postTag actualizado exitosamente'
            ]);

    }

    public function testDeleteAPI()
    {
        $data = $this->createItemBD($this->createData());
        $response = $this->json('POST', 'postTag/api/delete/' . $data->id);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'postTag eliminado correctamente'
            ]);
        $response = $this->json('GET', 'postTag/api/detail/' . $data->id);
        $response->assertStatus(404)
            ->assertJsonFragment([
                'success' => false,
                'message' => 'No se encontro lo que se buscaba'
            ]);
    }
}
