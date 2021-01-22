<?php

namespace Database\Factories;

use App\Models\Logs;
use Illuminate\Database\Eloquent\Factories\Factory;

class logsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Logs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function getAction() {
        $actions = array(
            'Changed to Pass – upgrade to GS03',    
            'Changed to Pass – upgrade to GS04',    
            'Changed to Fail – Criteria',    
            'Changed to Fail – Fraud',    
            'Changed to Self Upgrade GS02',
            'Changed to Retained GS01',     
        );
        
        shuffle($actions);
        return array_shift($actions);
    }
    public function definition()
    {   
        $name = $this->faker->name;
        $code = $this->faker->numerify('phcv0### - ');
        return [
            'username' => $code.$name,
            'action_taken' => $this->getAction(),
        ];
        
    }
}
