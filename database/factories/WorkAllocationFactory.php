<?php

namespace Database\Factories;

use App\Models\WorkAllocation;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkAllocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WorkAllocation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->Name,
            'allocation' => $this->faker->numerify('####'),
            'completed' => $this->faker->numerify('####'),
            'pending_SLA' => $this->faker->numerify('###'),
            'pending_SLA_breach' => $this->faker->numerify('##'),
        ];
    }
}
