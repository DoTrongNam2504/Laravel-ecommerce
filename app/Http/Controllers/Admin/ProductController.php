<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CategoryAdmin;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productAdmin = Product::all(); 
        return view('admin.product.index', compact('productAdmin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryAdmin = CategoryAdmin::all(); 
        return view('admin.product.add', compact('categoryAdmin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product(); 
        if($request->hasFile('image'))
        {
            $path_local = 'upload/product'; 
            $image = $request->file('image'); 
            $img_name = $image->getClientOriginalName();
            $image->move($path_local, $img_name); 
            $product->image = $img_name; 
        }
        $product->category_id = $request->input('category_id');
        $product->name = $request->input('name'); 
        $product->slug = $request->input('slug');
        $product->description =$request->input('description');
        $product->content = $request->input('content');
        $product->price = $request->input('price');
        $product->seller_price =$request->input('seller_price');
        $product->qty =$request->input('qty');
        $product->tax =$request->input('tax');
        $product->status =$request->input('status') == "TRUE" ? '1' : '0';
        $product->trending =$request->input('trending') == "TRUE" ? '1' : '0';
        $product->meta_title =$request->input('meta_title');
        $product->meta_description =$request->input('meta_description');
        $product->meta_keywords =$request->input('meta_keywords');

        $product ->save(); 
        return redirect('/products')->with('status', 'Add product successfully');


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
        //
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
        //
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
    }
}
