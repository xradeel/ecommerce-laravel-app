<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminCategoryModel;
use App\Models\backend\AdminProductModel;
use App\Models\frontend\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = AdminCategoryModel::select('id', 'name')->get();
        $products = AdminProductModel::with('category:id,name') // Eager load category and select only id and name
            ->select('id', 'name', 'price', 'status', 'category_id', 'thumbnail1')
            ->get();

        return view('backend.products-list', compact('categories', 'products'));
    }

    public function addProduct()
    {
        $categories = AdminCategoryModel::select('id', 'name')->get();
        return view('backend.add-product', compact('categories'));
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
        dd($request);
        $request->validate([
            'product_name' => 'required|string|max:255',
            'shortDes' => 'required|string|max:200',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'long_description' => 'required|string',
            'thumbnail1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'thumbnail2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required|string',
            'tags' => 'nullable|string',
        ]);

        $product = new ProductModel();
        $product->name = $request->product_name;
        $product->short_description = $request->shortDes;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->long_description = $request->content;
        $product->category = $request->category;
        $product->tags = $request->tags;

        if ($request->hasFile('thumbnail1')) {
            $thumbnail1 = $request->file('thumbnail1');
            $thumbnail1Name = time() . '_1.' . $thumbnail1->getClientOriginalExtension();
            $thumbnail1->storeAs('public/products', $thumbnail1Name);
            $product->thumbnail1 = 'products/' . $thumbnail1Name;
        }

        if ($request->hasFile('thumbnail2')) {
            $thumbnail2 = $request->file('thumbnail2');
            $thumbnail2Name = time() . '_2.' . $thumbnail2->getClientOriginalExtension();
            $thumbnail2->storeAs('public/products', $thumbnail2Name);
            $product->thumbnail2 = 'products/' . $thumbnail2Name;
        }

        if ($request->hasFile('product_images')) {
            $images = [];
            foreach ($request->file('product_images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalExtension();
                $image->storeAs('public/products', $imageName);
                $images[] = 'products/' . $imageName;
            }
            $product->product_images = json_encode($images);
        }

        if ($product->save()) {
            Log::info('Product added successfully');
            return back()->with('success', 'Product added successfully');
        } else {
            Log::error('Failed to add product');
            return back()->with('error', 'Failed to add product');
        }
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
