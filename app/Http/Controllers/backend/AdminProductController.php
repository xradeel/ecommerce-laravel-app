<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminCategoryModel;
use App\Models\backend\AdminProductModel;
use App\Models\frontend\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = AdminCategoryModel::select('id', 'name')->get();
        $products = AdminProductModel::with('category:id,name')
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
        // dd($request);
        $request->validate([
            'product_name' => 'required|string|max:255',
            'shortDes' => 'required|string|max:200',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'content' => 'required|string',
            'thumbnail1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'thumbnail2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'product_images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'category' => 'required|integer',
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
        $product->accesstoken = $request->_token;
        $product->availability = $request->has('availability') ? 1 : 0;
        $product->featured = $request->has('featured') ? 1 : 0;
        $product->popular = $request->has('popular') ? 1 : 0;
        $product->category_id = $request->input('category');
        $product->tag = $request->input('tags');

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


        $productImages = [];
        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $file) {
                $imageName = 'product_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/product_images', $imageName);

                $productImages[] = 'product_images/' . $imageName;
            }
        }
        $images = json_encode($productImages);
        $product->images = $images;
        // $product->save();
        // return redirect()->back()->with('success', 'Product added successfully!');
        if ($product->save()) {
            Log::info('Product added successfully');
            return back()->with('success', 'Product added successfully');
        } else {
            Log::error('Failed to add product');
            return back()->with('error', 'Failed to add product');
        }
    }

    // public function store(Request $request)
    // {
    //     // Validate the request data
    //     $request->validate([
    //         'product_name' => 'required|string|max:255',
    //         'shortDes' => 'required|string|max:200',
    //         'price' => 'required|numeric',
    //         'discount' => 'nullable|numeric',
    //         'content' => 'required|string',
    //         'thumbnail1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'thumbnail2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'product_images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'category' => 'required|integer',
    //         'tags' => 'nullable|string',
    //     ]);

    //     $sizes = [
    //         's-size' => $request->has('s-size') ? '1' : '0',
    //         'm-size' => $request->has('m-size') ? '1' : '0',
    //         'l-size' => $request->has('l-size') ? '1' : '0',
    //         'xl-size' => $request->has('xl-size') ? '1' : '0',
    //         'xxl-size' => $request->has('xxl-size') ? '1' : '0',
    //     ];
    //     $sizeString = implode('', $sizes);

    //     $product = new ProductModel();
    //     $product->name = $request->input('product_name');
    //     $product->short_description = $request->input('shortDes');
    //     $product->price = $request->input('price');
    //     $product->discount = $request->input('discount');
    //     $product->long_description = $request->input('content');
    //     $product->size = $sizeString;
    //     $product->accesstoken = $request->_token;
    //     $product->availability = $request->has('availability') ? 1 : 0;
    //     $product->featured = $request->has('featured') ? 1 : 0;
    //     $product->popular = $request->has('popular') ? 1 : 0;
    //     $product->category_id = $request->input('category');
    //     $product->tag = $request->input('tags');

    //     // Handle and compress thumbnail1
    //     if ($request->hasFile('thumbnail1')) {
    //         $thumbnail1 = $request->file('thumbnail1');
    //         $thumbnail1Name = 'product_' . time() . '_1.' . $thumbnail1->getClientOriginalExtension();
    //         $thumbnail1Path = storage_path('app/public/products/' . $thumbnail1Name);

    //         // Compress and save the image
    //         Image::make($thumbnail1)->resize(800, 800, function ($constraint) {
    //             $constraint->aspectRatio();
    //         })->save($thumbnail1Path, 75); // Adjust the quality as needed

    //         $product->thumbnail1 = 'products/' . $thumbnail1Name;
    //     }

    //     // Handle and compress thumbnail2
    //     if ($request->hasFile('thumbnail2')) {
    //         $thumbnail2 = $request->file('thumbnail2');
    //         $thumbnail2Name = 'product_' . time() . '_2.' . $thumbnail2->getClientOriginalExtension();
    //         $thumbnail2Path = storage_path('app/public/products/' . $thumbnail2Name);

    //         // Compress and save the image
    //         Image::make($thumbnail2)->resize(800, 800, function ($constraint) {
    //             $constraint->aspectRatio();
    //         })->save($thumbnail2Path, 75); // Adjust the quality as needed

    //         $product->thumbnail2 = 'products/' . $thumbnail2Name;
    //     }

    //     // Handle and compress additional product images
    //     $productImages = [];
    //     if ($request->hasFile('product_images')) {
    //         foreach ($request->file('product_images') as $file) {
    //             $imageName = 'product_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
    //             $imagePath = storage_path('app/public/product_images/' . $imageName);

    //             // Compress and save the image
    //             Image::make($file)->resize(800, 800, function ($constraint) {
    //                 $constraint->aspectRatio();
    //             })->save($imagePath, 75); // Adjust the quality as needed

    //             $productImages[] = 'product_images/' . $imageName;
    //         }
    //     }

    //     $product->images = json_encode($productImages);

    //     // Save the product
    //     if ($product->save()) {
    //         Log::info('Product added successfully');
    //         return back()->with('success', 'Product added successfully');
    //     } else {
    //         Log::error('Failed to add product');
    //         return back()->with('error', 'Failed to add product');
    //     }
    // }

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
        $product = AdminProductModel::findOrFail($id);
        $categories = AdminCategoryModel::select('id', 'name')->get();
        return view('backend.edit-product', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    // AdminProductController.php

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'shortDes' => 'required|string|max:200',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'content' => 'required|string',
            'thumbnail1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'thumbnail2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'product_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'category' => 'required|integer',
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

        $product = AdminProductModel::findOrFail($id);
        $product->name = $request->input('product_name');
        $product->short_description = $request->input('shortDes');
        $product->price = $request->input('price');
        $product->discount = $request->input('discount');
        $product->long_description = $request->input('content');
        $product->size = $sizeString;
        $product->accesstoken = $request->_token;
        $product->availability = $request->has('availability') ? 1 : 0;
        $product->featured = $request->has('featured') ? 1 : 0;
        $product->popular = $request->has('popular') ? 1 : 0;
        $product->category_id = $request->input('category');
        $product->tag = $request->input('tags');

        if ($request->hasFile('thumbnail1')) {
            $thumbnail1 = $request->file('thumbnail1');
            $thumbnail1Name = 'product_' . time() . '_1.' . $thumbnail1->getClientOriginalExtension();
            $thumbnail1->storeAs('public/products', $thumbnail1Name);

            // Delete the old thumbnail if it exists
            if ($product->thumbnail1) {
                Storage::delete('public/' . $product->thumbnail1);
            }

            $product->thumbnail1 = 'products/' . $thumbnail1Name;
        }

        if ($request->hasFile('thumbnail2')) {
            $thumbnail2 = $request->file('thumbnail2');
            $thumbnail2Name = 'product_' . time() . '_2.' . $thumbnail2->getClientOriginalExtension();
            $thumbnail2->storeAs('public/products', $thumbnail2Name);

            // Delete the old thumbnail if it exists
            if ($product->thumbnail2) {
                Storage::delete('public/' . $product->thumbnail2);
            }

            $product->thumbnail2 = 'products/' . $thumbnail2Name;
        }

        $productImages = json_decode($product->images, true) ?: [];
        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $file) {
                $imageName = 'product_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/product_images', $imageName);

                $productImages[] = 'product_images/' . $imageName;
            }
        }

        $product->images = json_encode($productImages);

        if ($product->save()) {
            Log::info('Product updated successfully');
            return redirect()->route('products.list')->with('success', 'Product updated successfully');
        } else {
            Log::error('Failed to update product');
            return back()->with('error', 'Failed to update product');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            // Start a transaction
            DB::beginTransaction();

            // Find the product
            $product = ProductModel::findOrFail($id);

            // Delete product images
            $images = json_decode($product->images, true);
            if (is_array($images)) {
                foreach ($images as $image) {
                    // Delete the image files from storage
                    if (Storage::exists('public/' . $image)) {
                        Storage::delete('public/' . $image);
                    }
                }
            }

            // Delete the product
            $product->delete();

            // Commit the transaction
            DB::commit();

            Log::info('Product deleted successfully');
            return response()->json(['success' => 'Product deleted successfully']);
        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            DB::rollBack();
            Log::error('Failed to delete product: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to delete product'], 500);
        }
    }
}
