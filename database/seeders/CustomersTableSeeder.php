<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customerCount=(int)$this->command->ask('How many customers you would like?',50);
        
        Customer::factory($customerCount)->create();
    }
}
