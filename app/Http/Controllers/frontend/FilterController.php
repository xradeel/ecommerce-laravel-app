<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminCategoryModel;
use App\Models\frontend\ProductModel;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($catId)
    {
        $category = AdminCategoryModel::where('id', $catId)->first();

        $selectedProducts = ProductModel::where('category_id', $catId)->get();
        $totalProducts = $selectedProducts->count();

        return view('frontend.shop-fullwidth', compact('selectedProducts', 'category', 'totalProducts'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $products = ProductModel::where('name', 'LIKE', "%$query%")
            ->orWhere('short_description', 'LIKE', "%$query%")
            ->orWhere('long_description', 'LIKE', "%$query%")
            ->get();
        $totalProducts = $products->count();

        return view('frontend.search-results', compact('products', 'query', 'totalProducts'));
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
