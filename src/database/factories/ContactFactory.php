<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->randomNumber,
            'category_id' => $this->randomNumber,
            'first_name' => $this->name,
            'last_name' => $this->name,
            'gender' => $this->number Between(1,3),
            'email' => $this->safeEmail,
            'tel' => $this->phoneNumber,
            'address' => $this->address,
            'building' => $this->numerify('マンション###号室'),
            'detail' => $this->sentence,
            'created_at' => $this->date,
            'updated_at' => $this->date
        ];
    }
}
