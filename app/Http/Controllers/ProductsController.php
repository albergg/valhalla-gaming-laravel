<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('name')->paginate(10);
		$allProducts = Product::all()->count();

		return view('products.index')->with( compact('products', 'allProducts') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();
		return view('products.form')->with(compact('brands', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {
        $product = new Product;

		self::storeOrUpdate($product, $request);

		return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

		return view('products.show')->with(compact('product'));
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

    	public function storeOrUpdate($product, $request)
	{
		$product->name = $request->name;
		$product->price = $request->price;
		$product->category_id = $request->category_id;
		$product->brand_id = $request->brand_id;
		$product->description = $request->description;

		// // Necesito el archivo en una variable esta vez
		// $file = $request->file("poster");

		// // Nombre final de la imagen
		// $finalName = strtolower(str_replace(" ", "_", $request->input("name")));

		// // Armo un nombre único para este archivo
		// $name = $finalName . uniqid('_image_') . "." . $file->extension();

		// // Guardo el archivo en la carpeta
		// $file->storePubliclyAs("public/posters", $name);

		// // Guardo en base de datos el nombre de la imagen
		// $product->poster = $name;
		// $product->save();
	}
}
