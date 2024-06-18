<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()
        ->count(25)
        ->hasInvoices(10)->create();

        Customer::factory()
        ->count(100)
        ->hasInvoices(4)->create();
        


        Customer::factory()
        ->count(200)
        ->hasInvoices(2)->create();
    }
}
