<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoices>
 */
class InvoicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status=$this->faker->randomElement(['B','P','V']);
        return [
           'customer_id'=>Customer::factory(),
           'amount'=>$this->faker->numberBetween(10000,2000000),
           'status'=>$status,
           'billed_date'=>$this->faker->dateTimeThisDecade(),
           'paid_date'=>$status=='P' ? $this->faker->dateTimeThisDecade():NULL
           
        ];
    }
}
