<?php

namespace App\Http\Controllers;

use App\Shop;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\AddShopRequest;
use App\Http\Requests\AddProductRequest;

class ShopsController extends Controller
{
    /**
     * Display a listing of the Shops.
     */
    public function index()
    {
        $shops = Shop::latest()->paginate(10);
        return view('shops.index', compact('shops'));
    }

        /**
     * Display a listing of the Products of a specified Shop.
     */
    public function products($id)
    {
        $products = Product::where('shops_id', $id)->latest()->paginate(10);
        return view('shops.products', compact('products'));
    }

    /**
     * Show the form for creating a new Shop.
     */
    public function create()
    {
        $shop = new Shop();
        return view('shops.create', compact('shop'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Shop::create($request->all());
        return redirect()->route('shops.index')->with('success', "Your Shop has been added");
    }

    /**
     * Display the specified Shop. UNUSED
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
    }

    /**
     * Show the form for editing the specified Shop.
     */
    public function edit($id)
    {
        $shop = Shop::find($id);
        return view('shops.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddShopRequest $request, Shop $shop)
    {
        $shop->update($request->all());
        return redirect()->route('shops.index')->with('success', "Your Shop has been updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (Shop::where([['id', '=', $id]])->exists()) {
            $related_products = Product::where('shops_id', $id);
            $related_products->delete();
            $shop = Shop::find($id);
            $shop->delete();

        return redirect()->route('shops.index')->with('success', "Your Shop:" . $shop->name ." has been deleted");
        } else {
            
        return redirect()->route('shops.index')->with('error', "Shop to delete not found");
        }
    }

    /**
     * Remove a shop Product from storage.
     */
    public function destroy_product($id) {
        if (Product::where([['id', '=', $id], ['shops_id', '!=', null]])->exists()) {
            $product = Product::find($id);
            $product->delete();

            return redirect()->route('shops.products', $product->shops_id)->with('success', "Shop Product has been deleted");
        } else {
            return redirect()->route('products.index')->with('error', "Product to delete not found");
        }
    }

    /**
     *  Show the form for editing a Shop's specified Product.
     */
    public function edit_product($id) {
        $product = Product::find($id);
        return view('shops.editproduct', compact('product'));
    }

     /**
     * Update a shop Product in storage.
     */
    public function update_product(AddProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('shops.products', $product->shops_id)->with('success', "Shop Product has been updated");
    }
}
