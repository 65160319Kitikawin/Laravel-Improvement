<?php

namespace App\Http\Controllers;

use App\Models\CrudModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CrudController extends Controller
{
    public function index()
    {
        $data["customers"] = CrudModel::all();
        
        return view("Crud.main", $data);
    }

    public function create()
    {
        return view("Crud.add");
    }

    public function store(Request $request)
    {
        $name = $request->input("name");
        $phone = $request->input("phone");

        $customerModel = new CrudModel();

        $customerModel->c_name = $name;
        $customerModel->c_phone = $phone;

        $customerModel->save();

        return Redirect::to("/customers");
    }

    public function show($id)
    {
        $c_data = CrudModel::find($id);
        $customers = CrudModel::all();

        if ($c_data !== null) {
            return view('Crud.read', compact('c_data'));
        } else {
            return view("Crud.main", compact('customers'));
        }
    }

    public function edit($id)
    {
        $c_data = CrudModel::find($id);
        $customers = CrudModel::all();

        if ($c_data !== null) {
            return view('Crud.update', compact('c_data'));
        } else {
            return view("Crud.main", compact('customers'));
        }
    }

    public function update(Request $request, $id)
    {
        $name = $request->input("name");
        $phone = $request->input("phone");

        $customerModel = CrudModel::find($id);

        $customerModel->c_name = $name;
        $customerModel->c_phone = $phone;

        $customerModel->save();

        return Redirect::to("/customers");
    }

    public function destroy($id)
    {
        $customerModel = CrudModel::find($id);

        $customerModel->delete();

        return Redirect::to("/customers");
    }
}
