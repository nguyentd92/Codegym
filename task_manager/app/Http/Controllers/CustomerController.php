<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $customers = [
            '0' => [
                'id'  => 1,
                'name'=> 'customer1',
                'bod' => '1998-09-01',
                'email' => 'customer1@gmail.com'
            ],
      
            '1' => [
                'id'  => 2,
                'name'=> 'customer2',
                'bod' => '1998-09-01',
                'email' => 'customer2@gmail.com'
            ],
      
            '2' => [
                'id'  => 3,
                'name'=> 'customer3',
                'bod' => '1998-09-01',
                'email' => 'customer3@gmail.com'
            ],

            '3' => [
                'id' => 4,
                'name' => 'customer4',
                'bod' => '1996-10-10',
                'email' => 'customer4@gmail.com'
            ]
        ];
      
        //goi view va truyen du lieu sang view
        return view('modules.customer.list', compact('customers'));
    }

    public function create() {
        return view('modules.customer.create');
    }

    public function store(Request $request) {               

    }

    public function show($id) {
        return view('modules.customer.showbyid');
    }

    public function update($request, $id) {
        return view('modules.customer.update');
    }
}
