<?php
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Количество создаваемых записей
     */
    const COUNT = 5;

    /**
     * Пароль для всех записей
     */
    const PASSWORD_FOR_ALL = '123';

    public function run()
    {
        $faker = new Faker\Generator();
        $faker->addProvider(new Faker\Provider\ru_RU\Person($faker));
        $faker->addProvider(new Faker\Provider\Internet($faker));

        for ($i = 0; $i < self::COUNT; $i++) {
            $data = [
                'name' => $faker->firstName,
                'email' => strtolower($faker->unique()->email),
                'password' => md5(self::PASSWORD_FOR_ALL)
            ];

            User::create($data);
        }
    }
}