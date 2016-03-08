<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;

class UserService
{
    public function register()
    {
        $password = Hash::make('secret');

        if (Hash::check('secret', $hashedPassword)) {
            // The passwords match...
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $login = trim($data['login']);
        $password = md5($data['password']);

        try {
            return User::forceCreate([
                'login' => $login,
                'email' => $login,
                'password' => $password,
            ]);
        } catch (\Exception $e) {

        }
    }

    /**
     * @param string $login
     * @param string $password
     * @return bool
     */
    public function auth($login, $password)
    {
        $login = trim($login);
        $password = md5($password);

        $user = User::where('email', $login)->get()->first();

        if ($user !== null && $user->password == $password) {
            return $user;
        }

        return null;
    }

    /**
     * Получаем пользователя
     *
     * @param $data
     * @return mixed
     */
    public function get(array $data)
    {
        $login = trim($data['login']);

        return User::where('login', $login)->first();
    }
}