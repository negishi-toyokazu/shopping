<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Exports\OrdersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ExportController extends Controller
{
    public function userExport()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function orderExport()
    {
        return Excel::download(new OrdersExport, 'orders.xlsx');
    }
}
