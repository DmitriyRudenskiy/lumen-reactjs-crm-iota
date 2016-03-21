<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model as BaseModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BaseModel::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(PrinterTypeTableSeeder::class);
        $this->call(PrinterTableSeeder::class);

        BaseModel::reguard();
    }
}