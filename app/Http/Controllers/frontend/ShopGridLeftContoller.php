<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminProductModel;
use Illuminate\Http\Request;

class ShopGridLeftContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = AdminProductModel::with('category:id,name')
            ->select('id', 'name', 'price', 'accesstoken', 'discount', 'thumbnail1', 'thumbnail2', 'tag')
            ->get();
        $latestThree = $dogs = AdminProductModel::select('id', 'name', 'price', 'accesstoken', 'discount', 'thumbnail1')->latest()->take(3)->get();
        return view('frontend.shop-grid-left', compact('products', 'latestThree'));
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
    public function show(string $id)
    {
        //
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
