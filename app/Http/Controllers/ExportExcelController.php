<?php

namespace App\Http\Controllers;

use App\Exports\ExportUsers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;

class ExportExcelController extends Controller
{
    public function index()
    {
       return view('index');
    }

    // public function export() 
    // {
    //     return Excel::download(new ExportUsers, 'users.xlsx');
    // }    
}