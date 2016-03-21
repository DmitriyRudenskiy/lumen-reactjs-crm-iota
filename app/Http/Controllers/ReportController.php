<?php
namespace App\Http\Controllers;

use App\Models\Customer;
use App\Services\PrinterService;
use Laravel\Lumen\Routing\Controller;

/**
 * Class SiteController
 * @package App\Http\Controllers
 */
class ReportController extends Controller
{
    public function index()
    {
        return view('report.index', []);
    }

    public function printer()
    {
        $list = (new PrinterService())->report();

        return view('report.list', ['list' => $list]);
    }
}