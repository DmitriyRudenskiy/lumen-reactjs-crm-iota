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
        foreach ($this->getData() as $value) {
            Printer::forceCreate($value);
        }
    }

    public function getData()
    {
        return [
            [
                'id' => 1,
                'name' => 'Mimaki',
                'type_id' => 3
            ],
            [
                'id' => 2,
                'name' => 'Термопресс плоский',
                'type_id' => 3
            ],
            [
                'id' => 3,
                'name' => 'Силуэт',
                'type_id' => 3
            ],
            [
                'id' => 4,
                'name' => 'Сублимация',
                'type_id' => 3
            ]
        ];
    }
}



