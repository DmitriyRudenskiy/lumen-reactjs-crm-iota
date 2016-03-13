<?php
namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Lumen\Routing\Controller;

/**
 * Class SiteController
 * @package App\Http\Controllers
 */
class OrderController extends Controller
{
    /**
     * @var Order
     */
    private $model;

    public function __construct()
    {
        $this->model = new Order();
    }


    public function index()
    {
        $list = $this->model->getList();
        $listCustomers = (new Customer())->getList();

        return view('order.list',
            [
                'list' => $list,
                'customer' =>  $listCustomers
            ]
        );
    }

    public function view()
    {
        return view('order.view', []);
    }

    public function create()
    {
        $listCustomers = (new Customer())->getList();

        return view(
            'order.create',
            [
                'customer' =>  $listCustomers
            ]
        );
    }

    public function insert(Request $request)
    {
        $data = $request->only(['customer_id', 'price', 'amount', 'sum', 'name', 'description', 'path', 'ready']);
        $data['user_id'] = Auth::user()->id;
        list($day, $month, $year) = explode('.', $data['ready']);
        $data['ready'] = sprintf("%s-%s-%s", $year, $month, $day);

        Order::forceCreate($data);

        return redirect()->route('order_list', ['success' => 1]);
    }
}