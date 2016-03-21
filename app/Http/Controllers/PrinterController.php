<?php
namespace App\Http\Controllers;

use App\Models\Printer;
use App\Models\PrinterType;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

/**
 * Class SiteController
 * @package App\Http\Controllers
 */
class PrinterController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Printer();
    }

    public function index()
    {
        $list = $this->model->all();

        return view('printer.index', ['list' => $list]);
    }

    public function view($id)
    {
        $printer = $this->model->findOrFail($id);
        $type = PrinterType::all();

        return view('printer.view', ['printer' => $printer, 'type' => $type]);
    }

    public function create()
    {
        $printer = $this->model;
        $type = PrinterType::all();

        return view('printer.view', ['printer' => $printer, 'type' => $type]);
    }

    public function update(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $typeId = $request->get('type_id');

        $data = [
            'name' => trim($name),
            'type_id' => (int)$typeId
        ];

        if ($id > 0) {
            $model = $this->model->findOrFail($id);
            $model->name = trim($name);
            $model->type_id = (int)$typeId;
            $model->save();
        } else {
            $this->model->forceCreate($data);
        }

        return redirect()->route('printer_index', ['success' => 1]);
    }
}