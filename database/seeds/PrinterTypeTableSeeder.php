<?php

use Illuminate\Database\Seeder;
use App\Models\PrinterType;

class PrinterTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getData() as $value) {
            PrinterType::forceCreate($value);
        }
    }

    public function getData()
    {
        return [
            [
                'id' => 1,
                'name' => 'дизайн'
            ],
            [
                'id' => 2,
                'name' => 'ярче'
            ],
            [
                'id' => 3,
                'name' => 'поставщики'
            ],
        ];
    }
}
