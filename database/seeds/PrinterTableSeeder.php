<?php

use Illuminate\Database\Seeder;
use App\Models\Printer;

class PrinterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'id' => 1,
            'name' => 'hp'
        ];

        Printer::forceCreate($data);

        $data = [
            'id' => 2,
            'name' => 'xerox'
        ];

        Printer::forceCreate($data);
    }
}
