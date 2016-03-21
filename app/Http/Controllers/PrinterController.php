<?php
namespace App\Http\Controllers;

use App\Models\Printer;
use App\Services\PrinterService;
use Laravel\Lumen\Routing\Controller;

/**
 * Class SiteController
 * @package App\Http\Controllers
 */
class PrinterController extends Controller
{
    public function index()
    {
        $list = (new Printer())->all();

        return view('printer.index', ['list' => $list]);
    }

    public function printer()
    {
        $list = (new PrinterService())->report();

        return view('report.list', ['list' => $list]);
    }
}