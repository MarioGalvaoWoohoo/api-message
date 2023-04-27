<?php

namespace Tests\Feature;

use App\Http\Resources\MessagesResource;
use App\Models\Message;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Services\MessageService;
use App\Repositories\MessageRepositoryInterface;
use App\Models\User;

use Tests\TestCase;

class AuthenticationTest extends TestCase
{

    /** @test */
    public function it_unauthorized()
    {
        // Given

        // When
        $response = $this->getJson('/api/v1/messages');

        // Then
        $response->assertUnauthorized();
    }

}
