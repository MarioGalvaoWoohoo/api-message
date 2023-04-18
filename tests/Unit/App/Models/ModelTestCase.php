<?php

namespace Tests\Unit\App\Models;

use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\TestCase;

abstract class ModelTestCase extends TestCase
{

    abstract protected function model(): Model;
    abstract protected function traitsExpected(): array;
    abstract protected function fillableExpected(): array;
    abstract protected function castExpected(): array;

    public function test_traits()
    {
        $traits = array_keys(class_uses($this->model()));
        $this->assertEquals($this->traitsExpected(), $traits);
    }

    public function test_fillable()
    {
        $fillable = $this->model()->getFillable();

        $this->assertEquals($this->fillableExpected(), $fillable);
    }

    public function test_is_incrementing_is_false()
    {
        $this->assertFalse($this->model()->incrementing);
    }

    public function test_has_casts()
    {
        $cast = $this->model()->getCasts();

        $this->assertEquals($this->castExpected(), $cast);
    }
}
