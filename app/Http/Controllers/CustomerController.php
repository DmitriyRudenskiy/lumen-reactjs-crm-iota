<?php
namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CustomerController extends Controller
{
    /**
     * @var Customer
     */
    private $model;

    public function __construct()
    {
        $this->model = new Customer();
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
            'customer.list',
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
        $customer = $this->model->get($id);

        return view('customer.view', ['customer' => $customer]);
    }

    public function update(Request $request)
    {
        $id = (int)$request->get('id');
        $name = $request->get('name');

        if (empty($name)) {
            return redirect()->route('customer_list');
        }

        if ($id < 1) {
            $this->model->forceCreate(['name' => $name]);
        } else {
            $customer = $this->model->get($id);
            $customer->name = $name;
            $customer->save();
        }

        return redirect()->route('customer_list', ['success' => 1]);
    }
}