<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;
use App\Http\Requests\ProductsRequest;


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
        $product = Product::findOrFail($id);
        $brands = Brand::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();
        

		return view('products.editForm')->with( compact('product', 'brands', 'categories') );
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

		self::storeOrUpdate($product, $request);

		return redirect('/products')->with('edited', "Product edited: $product->name");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		try {
			$product = Product::findOrFail($id);
			$product->delete();
			// Al hacer redirect se guarda en SESSION una posición deleted con el valor indicado
			return redirect('/products')->with('deleted', 'Product deleted');
		} catch (\Exception $e) {
			return redirect('/products/'.$id)->with('errorDeleted', 'Could not be deleted :(');
		}
    }

    	public function storeOrUpdate($product, $request)
	{
		$product->name = $request->name;
		$product->price = $request->price;
		$product->category_id = $request->category_id;
		$product->brand_id = $request->brand_id;
		$product->description = $request->description;

		// Necesito el archivo en una variable esta vez
		$file = $request->file("image");

		// Nombre final de la imagen
		$finalName = strtolower(str_replace(" ", "_", $request->input("name")));

		// Armo un nombre único para este archivo
		$name = $finalName . uniqid('_image_') . "." . $file->extension();

		// Guardo el archivo en la carpeta
		$file->storePubliclyAs("public/products", $name);

		// Guardo en base de datos el nombre de la imagen
		$product->image = $name;
		$product->save();
	}
}
