<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'appear'=>rand(1,0),
            'student_id'=>rand(1,10),
            'session_id'=>rand(1,10),
        ];
    }
}
