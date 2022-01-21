<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class ProjectFactory extends Factory
{
    protected $model = Project::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_name' => $this->faker->sentence(4)
        ];
    }

    public function fix()
    {
        return $this->state(function (array $attributes) {
            return [
                'project_name' => "riseMount"
            ];
        });
    }
}
