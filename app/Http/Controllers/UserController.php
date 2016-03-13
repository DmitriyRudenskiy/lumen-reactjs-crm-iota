<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends Controller
{
    /**
     * @var User
     */
    private $model;

    public function __construct()
    {
        $this->model = new User();
    }

    /**
     * Список пользователей
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $success = $request->get('success');
        $list = $this->model->getList();

        return view(
            'user.list',
            [
                'list' => $list,
                'success' =>  $success
            ]
        );
    }

    /**
     * Просмотр пользователя
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function view($id)
    {
        $user = $this->model->getUser($id);

        return view('user.view', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $id = (int)$request->get('id');

        $user = $this->model->getUser($id);

        if ($user === null) {
            throw new NotFoundHttpException();
        }

        $data = $request->only(['email', 'name', 'password']);

        // TODO: настроить
        //$status = (new UserService())->validator($data);


        if (empty($data['password'])) {
            unset($data['password']);
        } else {
            $data['password'] = md5(trim($data['password']));
        }

        if (empty($data['email'])) {
            unset($data['email']);
        } else {
            $data['email'] = strtolower(trim($data['email']));
        }

        $user->update($data);

        return redirect()->route('user_list', ['success' => 1]);
    }


    public function login(Request $request)
    {
        $error = $request->get('error');

        return view('user.login', ['error' => $error]);
    }

    public function check(Request $request)
    {
        $data = $request->only('login', 'password');
        $user = (new UserService())->auth($data['login'], $data['password']);

        if ($user !== null) {
            session(['user' => serialize($user)]);
            return redirect()->route('root');
        }

        return redirect()->route('login', ['error' => 1]);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        session(['user' => null]);
        return redirect()->route('login');
    }
}