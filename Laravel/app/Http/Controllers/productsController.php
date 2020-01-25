<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();
      return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'price' => 'required',
        'discount' => 'required',
        'description' => 'required',
        'image' => 'image|nullable|max:1999'
      ]);
      //fil uplaud
      if ($request->hasFile('image')) {
        $FileNameWithExt = $request->file('image');
        $filename = pathinfo($FileNameWithExt, PATHINFO_FILENAME);
        $Ext = $request->file('image')->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$Ext;
        $imgpath = public_path('storage/');
        $imgUploaded = $request->file('image');
        $imgUploaded->move($imgpath, $fileNameToStore);
      } else $fileNameToStore = 'noimage.jgp';
      // Create post
      $sku = substr($request->input('name'), 0, 3).$request->input('price').substr($request->input('description'), 0, 3);
      $product = new Product;
      $product->name = $request->input('name');
      $product->status = $request->input('status');
      $product->price = $request->input('price');
      $product->discount = $request->input('discount');
      $product->image = $fileNameToStore;
      $product->description = $request->input('description');
      $product->SKU = $sku;
      $product->save();

      return redirect('/products')->with('success', 'Product added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $product->views += 1;
        $product->save();
        return view('products.template')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit')->with('product', $product);
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
      $product->status = $request->input('status');
      $product->price = $request->input('price');
      $product->discount = $request->input('discount');
      $product->description = $request->input('description');
      $product->save();

      return redirect('/products')->with('success', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        unlink('storage/'.$product->image);
        $product->delete();
        return redirect('/products')->with('success', 'Product Delete');
    }
}
