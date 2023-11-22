<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     
    public function definition(): array
    {
        // $age=rand(3, 100);
        $weight=rand(30, 100);
        $heigth=rand(145, 180);
        $randomLetter = chr(rand(97, 122));
       
        return [
            //
            'first_name'=>$this->faker->firstName(),
            'last_name'=>$this->faker->lastName(),
            'middle_name'=>strtoupper($randomLetter),
            'gender'=>$this->faker->randomElement(['male','female']),
            'phone_number'=>$this->faker->phoneNumber(),
            'month_bdate'=>$this->faker->month($max = 'now'),
            'day_bdate'=>$this->faker->dayOfMonth($max = 'now'),
            'year_bdate'=>$this->faker->year($max = 'now'),
            'street_address'=>$this->faker->streetAddress(),
            'street_address_line_2'=>$this->faker->streetName(),
            'city'=>$this->faker->city(),
            'height'=>  $heigth,
            'weight'=>  $weight,
            'contact_first_name'=>$this->faker->firstNameMale(),
            'contact_last_name'=>$this->faker->lastName(),
            'contact_street_address'=>$this->faker->streetAddress(),
            'contact_street_address_line_2'=>$this->faker->streetName(),
            'contact_city'=>$this->faker->city(),

        ];
    }
}
