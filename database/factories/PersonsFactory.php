<?php

namespace Database\Factories;

use App\Models\Persons;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persons::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_number' => $this->faker->numerify('############'),
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'dob' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
            'opened_date' => $this->faker->dateTimeThisDecade->format('Y-m-d'),
            'nationality' => 'PH',
            'doc_no' => 'Full-09'.$this->faker->unique()->randomNumber($nbDigits = 9)
        ];
    }
}
