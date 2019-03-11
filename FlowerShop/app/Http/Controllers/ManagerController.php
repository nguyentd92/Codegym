<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class ManagerController extends Controller
{
    //
    public function orderList() {
        $orders = Order::all();
        return view('manager.list', compact('orders'));
    }

    public function destroy($id) {
        $order = Order::find($id);
        $order->delete();
        $order->products()->detach();        
    }

    public function updateStatus($id, Request $request) {
        $statusCode = $request->input('status');
        $order = Order::find($id);
        $order->status_id = $statusCode;
        $order->save();
    }

    
}
