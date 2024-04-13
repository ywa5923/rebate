<?php

namespace Modules\Auth\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Auth\Models\Role::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}

