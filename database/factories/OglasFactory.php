<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Oglas>
 */
class OglasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'naslov'=>$this->faker->sentence(),
            'oznake' =>'studenti, životinje',
            'tvrtka' => $this->faker->company(),
            'lokacija'=>$this->faker->city(),
            'email'=>$this->faker->companyEmail(),
            'website'=>$this->faker->url(),
            'opis'=> $this->faker->paragraph(5)
        ];
    }
}
