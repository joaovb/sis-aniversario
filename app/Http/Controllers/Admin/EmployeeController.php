<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Employee;


class EmployeeController extends Controller
{

    public function index()
    {
        return view('admin.employee.index');
    }

    public function create(Request $request)
    {
        dd($request->all());
    }

    public function list()
    {
        return view('admin.employee.list');
    }

}
