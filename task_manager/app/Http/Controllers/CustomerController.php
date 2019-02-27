<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $customers = array(
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
        );


    

    public function index() {
      $customers = $this->customers;
        //goi view va truyen du lieu sang view
        return view('modules.customer.list', compact('customers'));
    }

    public function create() {
        return view('modules.customer.create');
        
    }

    public function store(Request $request) {               
        $id = $request->id;
        $name = $request->name;
        $dob = $request->dob;
        $email = $request->email;        
        $customer = array('id' => $id,
        'name' => $name,
        'bod' => $dob,
        'email' => $email);
        $key = count($this->customers);
        $this->customers[$key++] = $customer;
        return view('modules.customer.list', ['customers' => $this->customers]);
    }

    public function show($id) {
        $customer = $this->customers[$id];
        $customers = array($id => $this->customers[$id]);
        return view('modules.customer.list', ['customers' => $customers]);
    }

    public function update(Request $request, $key) {
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $dob = $request->dob;

        $customer = $this->customers[$key];

        $this->customers[$key]['id'] = $id;
        $this->customers[$key]['name'] = $name;
        $this->customers[$key]['email'] = $email;
        $this->customers[$key]['bod'] = $dob;

        
        return view('modules.customer.list', ['customers' => $this->customers]);
    }

    public function edit($id) {        
        return view('modules.customer.edit' , ['id' => $id]);
    }

    public function delete(Request $request) {        

        $position = $request->id;
        for ($i = $position; $i < count($this->customers) - 1; $i++) {
            $this->customers[$i] = $this->customers[$i+1];            
        }
        array_pop($this->customers);

        return view('modules.customer.list', ['customers' => $this->customers]);

    }
}