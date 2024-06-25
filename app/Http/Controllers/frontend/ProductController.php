<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products = DB::table('products')
        //     ->select('products.id', 'products.name', 'products.short_description', 'products.long_description', 'products.size', 'products.color', 'products.availability', 'products.thumbnail1', 'products.thumbnail2', 'products.price', 'products.discount', 'product_images.image_path')
        //     ->leftJoin('product_images', 'products.id', '=', 'product_images.product_id')
        //     ->get()
        //     ->groupBy('id');
        return view("frontend.shop-product-full");
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $accesstoken)
    {
        $product = ProductModel::where('accesstoken', $accesstoken)->firstOrFail();

        // $product->load('images');
        $product->images = json_decode($product->images);
        return view('frontend.product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
