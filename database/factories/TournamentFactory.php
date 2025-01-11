<?php

namespace Database\Factories;

use App\Models\Tournament;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TournamentFactory extends Factory
{
    protected $model = Tournament::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'is_active' => true,
            'form_view' => $this->faker->randomElement([
                'form1', 'form2', 'form3', 'form4', 'form5', 'form6']),
            'start_date' => $this->faker->date('Y-m-d', '-1 month'),
            'end_date' => $this->faker->date('Y-m-d', '+1 month'),
            'prize_pool' => rand(10000, 50000),
            'entry_fee' => rand(1000, 3000),
            'type' => $this->faker->randomElement([
                'CS_Solo', 'CS_Duo', 'CS_Squad', 'FM_Solo', 'FM_Duo', 'FM_Squad'
            ]),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
