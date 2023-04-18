<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class MessageEndpointTest extends TestCase
{
    use WithoutMiddleware;

    public function testSendMessageEndpoint()
{
    // Cria um usuário falso
    $user = User::factory()->create();

    $data = [
        'content' => 'Hello, world!',
        'recipient_id' => 1,
    ];

    $response = $this->withHeaders([
        'Accept' => 'application/json',
        'Authorization' => 'Bearer ' . $user->api_token // usa o token do usuário falso para autenticação
    ])
    ->json('POST', '/api/messages', $data);

    $response->assertStatus(200);
}
}
