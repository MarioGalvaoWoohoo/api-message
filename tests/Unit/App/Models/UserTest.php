<?php

namespace Tests\Unit\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;


class UserTest extends ModelTestCase
{
    protected function model(): Model
    {
        return new User();
    }

    protected function traitsExpected(): array
    {
        return [
            HasApiTokens::class,
            HasFactory::class,
            Notifiable::class
        ];
    }

    protected function fillableExpected(): array
    {
        return [
            'name',
            'email',
            'password',
        ];
    }

    protected function castExpected(): array
    {
        return [
            'id' => 'datetime',
            'email_verified_at' => 'datetime',
        ];
    }
}
