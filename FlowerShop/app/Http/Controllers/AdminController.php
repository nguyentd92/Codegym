<?php

namespace App\Http\Controllers;
use DB;
use App\Promotion;
use App\Product;
use App\Category;
use Storage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('admin.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create', ['promotions' => Promotion::all(), 'categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');

        if ($request->hasFile('image')) {
            $image = $request->file('image');            
            $path = $image->store('images','public');
            $product->image = $path;
        };

        $product->save();  

        $product_promotions = $request->input('promotion');
        $product->promotions()->attach($product_promotions);

        return redirect()->route('admin.modify');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promotions = Promotion::get();
        $product = Product::find($id);
        $product_promotions = [];
        foreach($product->promotions as $promotion) {
            $product_promotions[] = $promotion->id;
        }
        return view('admin.edit', compact(['promotions','product','product_promotions']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->lastPrice = $product->price !== $request->input('price') ? $product->price : NULL;
        $product->price = $request->input('price');

        if ($request->hasFile('image')) {            
            $currentImg = $product->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            $image = $request->file('image');            
            $path = $image->store('images','public');
            $product->image = $path;
        };

        $product->save();  

        $product_promotions = $request->input('promotion');

        $product->promotions()->sync($product_promotions);

        return redirect()->route('admin.modify');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        $product->promotions()->detach();

        return redirect()->route('admin.modify');
    }

    public function modify() {
        $products = Product::orderBy('views','DESC')->paginate(10);
        return view('admin.modify', compact('products'));
    }

}
