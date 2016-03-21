<?php
namespace App\Http\Controllers;

use App\Models\Printer;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Lumen\Routing\Controller;

/**
 * Class SiteController
 * @package App\Http\Controllers
 */
class TaskController extends Controller
{
    public function index()
    {
        $printer = Printer::where('type_id', 2)->get();
        return view('task.index', ['printer' => $printer]);
    }

    public function get()
    {
        $tmp = Task::all();

        $result = [];

        foreach ($tmp as $value) {
            $item = [
                'i' => $value->printer_id,
                'n' => $value->order->name,
                'o' => $value->order->id,
                'l' => []
            ];

            for ($i = 0; $i < $value->days; $i++) {
                $item['l'][] = strtotime("+" . $i . "days", strtotime($value->start_work));
            }

            $result[] =  $item;
        }

        return response()->json($result);
    }

    public function insert(Request $request)
    {
        $data = $request->only(['order_id', 'printer_id', 'start_work', 'days', 'price']);
        $data['user_id'] = Auth::user()->id;

        list($day, $month, $year) = explode('.', $data['start_work']);
        $data['start_work'] = sprintf("%s-%s-%s", $year, $month, $day);

        Task::forceCreate($data);

        return redirect()->back();
    }
}