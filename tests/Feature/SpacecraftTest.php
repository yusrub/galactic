<?php

namespace Tests\Feature;

use App\Models\Spacecraft;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SpacecraftTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSpacecraftList()
    {
        $this->json('get', '/api/spacecrafts', [])
            ->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                ],
            ]);;
    }


    public function testSpacecraftListWhenRecordExists()
    {
        $spacecraft = Spacecraft::factory()->make();
        $this->json('get', '/api/spacecrafts', $spacecraft->toArray())
            ->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'id',
                        'name',
                        'status',
                    ],
                ],
            ]);;
    }


}
