<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        return view('modules.customer.index');
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
