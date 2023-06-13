<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $paid = $this->faker->boolean();
        return [
            //
            'user_id' => User::all()->random()->id, //Pegar um id aleátorio
            'type' => $this->faker->randomElement(['B', 'C', 'P']), //Tipo Boleto, Cartao, PIX
            'paid' => $paid, //0 para False e 1 True.
            'value' => $this->faker->numberBetween(1000, 10000), //Numero entre 1000 e 10000
            'payment_date' => $paid ? $this->faker->randomElement([$this->faker->dateTimeThisMonth()]) : NULL
        ];
    }
}