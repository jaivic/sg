<?php

namespace Tests\Feature;

use Faker\Factory as Faker;
use Tests\TestCase;
use App\Http\Models\admin1\tags;
use App\Http\service\admin1\tagsService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class tagsTest extends TestCase
{
    use RefreshDatabase;
public $tag_id;

    public function createData()
    {
        $fake = Faker::create();
        // $row["name"] = $fake->name;
        $row=[
       'name' => $fake->word
       ];
        if (!$this->tag_id) {
            $item = new postsTest();
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
        return tags::where($where)->first();
    }
    public function createItemBD($row)
    {
        $item = new tagsService();
        $response = $item->create($row);
        return $response;
    }
    public function testCreate()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $this->assertDatabaseHas('tags', $row);
    }
    public function testUpdate()
    {
        $item = new tagsService();
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $item->update($row, $data->id);
        $this->assertDatabaseHas('tags', $row);
    }
    public function testDelete()
    {
        $item = new tagsService();
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $item->delete($data->id);
        $this->assertDatabaseMissing('tags', $row);
    }
    public function testCreateController()
    {
        $row = $this->createData();
        $response = $this->post('tags/store', $row);
        $x = $this->buscarItem($row);
        $this->assertDatabaseHas('tags', $row);
        $response->assertRedirect("tags/edit/" . $x->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testUpdateController()
    {
        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->post('tags/update/' . $data->id, $row);
        $this->assertDatabaseHas('tags', $row);
        $response->assertRedirect("tags/edit/" . $data->id);
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }

    public function testDeleteController()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->delete('tags/delete/' . $data->id);
        $this->assertDatabaseMissing('tags', $row);
        $response->assertRedirect("tags/index");
        $response->assertSessionHas('status', 'Cambios agregada correctamente');
    }
    public function testCreateAPI()
    {
        $row = $this->createData();
        $response = $this->json('POST', 'tags/api/store', $row);
        $this->assertDatabaseHas('tags', $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'tags guardado exitosamente'
            ]);
    }
    public function testReadAPI()
    {
        $row = $this->createData();
        $data = $this->createItemBD($row);
        $response = $this->json('GET', 'tags/api/detail/' . $data->id);
        $row['success'] = true;
        $row['message'] = 'success';
        $response->assertStatus(200)
            ->assertJsonFragment($row);
    }

    public function testUpdateAPI()
    {

        $data = $this->createItemBD($this->createData());
        $row = $this->createData();
        $response = $this->json('POST', 'tags/api/update/' . $data->id, $row);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'tags actualizado exitosamente'
            ]);

    }

    public function testDeleteAPI()
    {
        $data = $this->createItemBD($this->createData());
        $response = $this->json('POST', 'tags/api/delete/' . $data->id);
        $response->assertStatus(200)
            ->assertJsonFragment([
                'success' => true,
                'message' => 'tags eliminado correctamente'
            ]);
        $response = $this->json('GET', 'tags/api/detail/' . $data->id);
        $response->assertStatus(404)
            ->assertJsonFragment([
                'success' => false,
                'message' => 'No se encontro lo que se buscaba'
            ]);
    }
}
