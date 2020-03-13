<?php

namespace App\Http\Controllers;

use App\Product;
use App\Shop;
use Illuminate\Http\Request;
use App\Http\Requests\AddProductRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        //
        $products = Product::where('shops_id', null)->latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        //
        $product = new Product();
        return view('products.create', compact('product'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(AddProductRequest $request)
    {
        if($request->hasfile('product_images'))
        {
            foreach($request->file('product_images') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/image/', $name); 
                $image_data[] = $name;  
            }
        }
        else {
            $image_data = [];
        }

        if($request->hasfile('user_manual'))
        {
            foreach($request->file('user_manual') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/image/', $name); 
                $manual_data[] = $name;  
            }
        }
        else {
            $manual_data = [];
        }
        $booking = new Product;
        $booking->product_name = $request->product_name;
        $booking->model_number = $request->model_number;
        $booking->sku = $request->sku;
        $booking->ean = $request->ean;
        $booking->description = $request->description;
        $booking->product_images = json_encode($image_data);
        $booking->user_manual = json_encode($manual_data);
        $booking->save();
        return redirect()->route('products.index')->with('success', "Your Product has been added");
    }

    /**
     * Display the specified resource. UNUSED
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(AddProductRequest $request, Product $product)
    {
        //
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', "Your Product has been updated");
    }

        /**
     * Show the form for editing the specified product.
     */
    public function select_shop($id)
    {
        //
        $product = Product::find($id);
        $shops = Shop::get();
        return view('products.assign', compact('product', 'shops'));
    }


        /**
     * Assign a Product to a Shop
     */
    public function assign_to(Request $request)
    {
        $product_id     = $request->input('id');
        $shops_id  = $request->input('shops_id');
        $data = Product::find($product_id);
        $newTask = $data->replicate();
        $newTask->shops_id = $shops_id;
        $newTask->save();
        return redirect()->route('products.index')->with('success', "Your Product has been added to the Shop");
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy($id)
    {
        if (Product::where([['id', '=', $id], ['shops_id', '=', null]])->exists()) {
            $product = Product::find($id);
            $product->delete();

        return redirect()->route('products.index')->with('success', "Your Product has been deleted");
        } else {
            
        return redirect()->route('products.index')->with('error', "Product to delete not found");
        }
    }

    public function administrator(Request $req){
        return view(‘middleware’)->withMessage(“Admin”);
        }
}
