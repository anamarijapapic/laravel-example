<?php

namespace AnamarijaPapic\Example\Database\Factories;

use AnamarijaPapic\Example\Models\MyModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class MyModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
