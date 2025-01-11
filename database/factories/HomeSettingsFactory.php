<?php

namespace Database\Factories;

use App\Models\HomeSettings;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomeSettingsFactory extends Factory
{
    protected $model = HomeSettings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'channel_link' => $this->faker->url,
            'instagram_link' => $this->faker->url,
            'whatsapp_link' => $this->faker->url,
            'embeded_video_link' => $this->faker->url,
        ];
    }
}
