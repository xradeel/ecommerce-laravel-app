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
            'content' => 'required|string',
            'thumbnail1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'thumbnail2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required|integer',
            'badge' => 'required|integer',
            'tags' => 'nullable|string',
        ]);
        $sizes = [
            's-size' => $request->has('s-size') ? '1' : '0',
            'm-size' => $request->has('m-size') ? '1' : '0',
            'l-size' => $request->has('l-size') ? '1' : '0',
            'xl-size' => $request->has('xl-size') ? '1' : '0',
            'xxl-size' => $request->has('xxl-size') ? '1' : '0',
        ];
        $sizeString = implode('', $sizes);

        $product = new ProductModel();
        $product->name = $request->input('product_name');
        $product->short_description = $request->input('shortDes');
        $product->price = $request->input('price');
        $product->discount = $request->input('discount');
        $product->long_description = $request->input('content');
        $product->size = $sizeString;
        $product->availability = $request->has('availability') ? 1 : 0;
        $product->featured = $request->has('featured') ? 1 : 0;
        $product->popular = $request->has('popular') ? 1 : 0;
        $product->badge = $request->input('badge');
        $product->category_id = $request->input('category');
        $product->tags = $request->input('tags');

        if ($request->hasFile('thumbnail1')) {
            $thumbnail1 = $request->file('thumbnail1');
            $thumbnail1Name = 'product_' . time() . '_1.' . $thumbnail1->getClientOriginalExtension();
            $thumbnail1->storeAs('public/products', $thumbnail1Name);
            $product->thumbnail1 = 'products/' . $thumbnail1Name;
        }

        if ($request->hasFile('thumbnail2')) {
            $thumbnail2 = $request->file('thumbnail2');
            $thumbnail2Name = 'product_' . time() . '_2.' . $thumbnail2->getClientOriginalExtension();
            $thumbnail2->storeAs('public/products', $thumbnail2Name);
            $product->thumbnail2 = 'products/' . $thumbnail2Name;
        }

        if ($request->hasFile('product_images')) {
            $images = [];
            foreach ($request->file('product_images') as $image) {
                $imageName = 'product_images' . time() . '_' . $image->getClientOriginalExtension();
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
