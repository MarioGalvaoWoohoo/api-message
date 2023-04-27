<?php

namespace Tests\Feature\App\Repository\Eloquent;

use App\Models\User;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;
use Tests\TestCase;

class UserRepositoryTest extends TestCase
{
    protected $repository;

    protected function setUp(): void
    {
        $this->repository = new UserRepository(new User());

        parent::setUp();
    }

    public function test_implements_interface()
    {
        $this->assertInstanceOf(
            UserRepositoryInterface::class,
            $this->repository
        );
    }

    public function test_find_all_empty()
    {
        $response = $this->repository->findAll()->toArray();
        $this->assertIsArray($response);
        $this->assertCount(0, $response);
    }

    public function test_find_all()
    {
        User::factory()->count(10)->create();

        $response = $this->repository->findAll();

        $this->assertCount(10, $response);
    }
}
