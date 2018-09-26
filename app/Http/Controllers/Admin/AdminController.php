<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee;


class AdminController extends Controller
{
    public function index()
    {
        $employees = Employee::count();

        //return $employees;

        return view('admin.home.index', compact('employees'));
    }

    public function cpf()
    {
        return view('admin.home.cpf');
    }

    public function cpfCheck(Request $request)
    {
        $checkCpf = $this->validate($request, [
            'cpf' => 'required|cpf',
        ]);
            var_dump($checkCpf);
        
    }

    public function cnpj()
    {
        return view('admin.home.cnpj');
    }

    public function cnpjCheck(Request $request)
    {
        $checkCnpj = $this->validate($request, [
            'cnpj' => 'required|cnpj',
        ]);

        var_dump($checkCnpj);
    }
}
