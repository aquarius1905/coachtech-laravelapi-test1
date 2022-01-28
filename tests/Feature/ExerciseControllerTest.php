<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Exercise;

class ExerciseControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_exercise()
    {
        $item = Exercise::factory()->create();
        $response = $this->get('/api/exercise');
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'name' => $item->name,
            'email' => $item->email,
            'profile' => $item->profile
        ]);
    }

    public function test_store_exercise()
    {
        $data = [
            'name' => 'name_store',
            'email' => 'name_store@sample.com',
            'profile' => 'profile_store'
        ];
        $response = $this->post('/api/exercise', $data);
        $response->assertStatus(201);
        $response->assertJsonFragment($data);
        $this->assertDatabaseHas('exercises', $data);
    }

    public function test_show_exercise()
    {
        $item = Exercise::factory()->create();
        $response = $this->get('/api/exercise/'.$item->id);
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'name' => $item->name,
            'email' => $item->email,
            'profile' => $item->profile
        ]);
    }

    public function test_update_exercise()
    {
        $item = Exercise::factory()->create();
        $data = [
            'name' => 'name_update',
            'email' => 'name_update@example.com',
            'profile' => 'profile_update'
        ];
        $response = $this->put('/api/exercise/'.$item->id, $data);
        $response->assertStatus(200);
        $this->assertDatabaseHas('exercises', $data);
    }

    public function test_destory_exercise()
    {
        $item = Exercise::factory()->create();
        $response = $this->delete('/api/exercise/'.$item->id);
        $response->assertStatus(200);
        $this->assertDeleted($item);
    }
}
