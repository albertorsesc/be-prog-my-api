<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase;

    /**
     * factory(Model::class, $amount)->create($attributes);
     *
     * @param $class
     * @param array $attributes
     * @return mixed
     */
    public function create($class, $attributes = [])
    {
        return $class::factory()->create($attributes);
    }

    /**
     * factory()->make();
     *
     * @param $class
     * @param array $attributes
     * @return mixed
     */
    public function make($class, $attributes = [])
    {
        return $class::factory()->make($attributes);
    }
}
