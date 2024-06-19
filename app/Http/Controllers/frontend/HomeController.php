<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\HomeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = DB::table('bannerfeatures')->select('id', 'title', 'iconpath', 'status')->get();
        $popularCategories = DB::table('popularcategories')->select('id', 'title', 'image', 'url', 'status')->get();
        // $products = DB::table('products')->select('id', 'name', 'thumbnail1', 'thumbnail2', 'category_id', 'price', 'discount',)->get();

        $products = DB::table('products')
            ->select('products.id', 'products.name', 'products.thumbnail1', 'products.thumbnail2', 'products.price', 'products.tag', 'products.discount', 'products.accesstoken', 'categories.name as category_name')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->get();

        return view('frontend.index')->with('features', $features)->with('popularCategories', $popularCategories)->with('products', $products);
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
    public function show(HomeModel $homeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeModel $homeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomeModel $homeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeModel $homeModel)
    {
        //
    }
}
