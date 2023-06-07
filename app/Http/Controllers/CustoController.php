<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libaries\BaseApi;

class CustoController extends Controller
{
    public function index()
    {
        $data = (new BaseApi)->index('/api/customers');
        $customer = $data->json();

        return view ('.index')->with('customers', $customer['data']);
    }
    
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $upload = [
            'name' => $request->name,
            'id_number' => $request->id_number,
            'delivery_date' => $request->delivery_date,
            'email' => $request->email,
        ];

        $baseapi = new Baseapi;
        $response  = $baseapi->create('api/customers/store', $upload);
        return redirect('/customers');
    }

    public function show($id){
        $data = (new BaseApi)->detail('/api/customers', $id);
        $student = $data->json();
        return view ('show')->with('customers', $customer['data']);
    }

    public function edit($id){
        $data = (new BaseApi)->detail('/api/customers', $id);
        $customer = $data->json();
        return view ('edit')->with('customers', $customer['data']);
    }

    public function update(Request $request, $id){
        $upload = [
            'name' => $request->name,
            'id_number' => $request->id_number,
            'delivery_date' => $request->delivery_date,
            'email' => $request->email,
        ];

        $baseapi = new Baseapi;
        $response  = $baseapi->update('/api/customers/update',$id, $upload);
        return redirect('/customers');
    }

    public function destroy(Request $request, $id){
        $baseApi = new BaseApi; 
        $response = $baseApi->delete('/api/customers/delete', $id);
        return redirect ('customers');
    }
}
