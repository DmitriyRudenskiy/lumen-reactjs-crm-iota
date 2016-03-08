<?php
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create(['name' => 'Первый заказчик']);
        Customer::create(['name' => 'Второй заказчик']);
        Customer::create(['name' => 'Третий заказчик']);
    }
}
