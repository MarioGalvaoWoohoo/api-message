<?php

use App\Models\{
    Comment,
    Course,
    Image,
    Permission,
    User,
    Preference,
    Tag
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message' => 'API - Message com TDD e CI Github Action'], 200);
});
