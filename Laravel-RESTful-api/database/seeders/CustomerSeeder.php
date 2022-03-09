<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->first_name = 'Nguyen';
        $customer->last_name = 'Hung';

        $customer = new Customer();
        $customer->first_name = 'Pham';
        $customer->last_name = 'Long';
    }
}
