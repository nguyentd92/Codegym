<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Order;
use Session;

class ShopController extends Controller
{
    public function index(Request $request) {
        if (!Session::has('orders')) {
            $request->session()->put('orders');
        };
        $categoryid = $request->get('categoryid');
        $productid = $request->get('productid');
        if ($productid) {
            if (Session::has('orders')){
                if (!in_array($productid, Session::get('orders'))) {
                    $request->session()->push('orders', $productid);                
                }; 
            } else {
                $request->session()->push('orders', $productid);
            };
        };

        if ($categoryid) {
            return view('index', ['products' => Product::where('category_id', $categoryId)->get()]);
        };
       
        return view('index', ['products' => Product::paginate(8)]);
    }

    public function buy(Request $request) {

        $itemIds = Session::get('orders');
        $order = new Order;
        $order->save();
        $order->products()->attach($itemIds);
        
        return redirect()->route('receipt', $order->id);
    }

    public function receipt($id) {
        return view('receipt', ['order' => Order::find($id)]);
    }
    
    public function show($id) {
        $productKey = 'product_'.$id;
        if (!Session::has($productKey)) {
            Product::where('id', $id)->increment('viewed');
            Session::put($productKey, 1);
        }

        return view('show', ['product' => Product::findOrFail($id)]);
    }

    public function showCart(Request $request) {
        $removeId = $request->get('remove');
        $chosenIds = Session::get('orders');
        if (in_array($removeId, $chosenIds)) {
            $key = array_search($removeId, $chosenIds);
            array_splice($chosenIds, $key, 1);
            Session::forget('orders');
            Session::put('orders', $chosenIds);
            $chosenIds = Session::get('orders');
        }     
        $items = [];
        if ($chosenIds) {
            foreach($chosenIds as $id) {
                $items[] = Product::find($id);
            }
        }

        return view('cart', compact('items'));        
    }

    public function showProduct($id) {
        return view('show', ['product' => Product::find($id)]);
    }
}
