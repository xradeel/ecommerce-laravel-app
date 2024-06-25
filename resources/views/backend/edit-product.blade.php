<!-- resources/views/backend/edit-product.blade.php -->
@extends('backend.layouts.main')
@section('title', 'Edit Product')
@section('main-container')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Edit Product</h2>
            </div>
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <h4 class="card-title">Edit Product</h4>
            </header>
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Form fields for product details similar to add-product.blade.php -->
                    <!-- For example: -->
                    <div class="mb-4">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input type="text" name="product_name" value="{{ $product->name }}" class="form-control"
                            id="product_name" required>
                    </div>

                    <div class="mb-4">
                        <label for="shortDes" class="form-label">Short Description</label>
                        <textarea name="shortDes" class="form-control" id="shortDes" required>{{ $product->short_description }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" value="{{ $product->price }}" class="form-control"
                            id="price" required>
                    </div>
                    <div class="mb-4">
                        <label for="discount" class="form-label">Discount</label>
                        <input type="number" name="discount" value="{{ $product->discount }}" class="form-control"
                            id="discount" required>
                    </div>
                    <!-- Add other form fields as required -->

                    <div class="mb-4">
                        <label for="thumbnail1" class="form-label">Thumbnail 1</label>
                        <input type="file" name="thumbnail1" class="form-control" id="thumbnail1">
                        @if ($product->thumbnail1)
                            <img src="{{ asset('storage/' . $product->thumbnail1) }}" alt="Thumbnail 1"
                                class="img-thumbnail mt-2" width="150">
                        @endif
                    </div>

                    <div class="mb-4">
                        <label for="thumbnail2" class="form-label">Thumbnail 2</label>
                        <input type="file" name="thumbnail2" class="form-control" id="thumbnail2">
                        @if ($product->thumbnail2)
                            <img src="{{ asset('storage/' . $product->thumbnail2) }}" alt="Thumbnail 2"
                                class="img-thumbnail mt-2" width="150">
                        @endif
                    </div>

                    <div class="mb-4">
                        <label for="product_images" class="form-label">Product Images</label>
                        <input type="file" name="product_images[]" class="form-control" id="product_images" multiple>
                        @foreach (json_decode($product->images) as $image)
                            <img src="{{ asset('storage/' . $image) }}" alt="Product Image" class="img-thumbnail mt-2"
                                width="150">
                        @endforeach
                    </div>

                    <div class="mb-4">
                        <label for="category" class="form-label">Category</label>
                        <select name="category" class="form-select" id="category" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" name="tags" value="{{ $product->tag }}" class="form-control"
                            id="tags">
                    </div>
                    <div class="mb-4">
                        <label for="s-size" class="form-label">Size</label>
                        <div class="row">
                            <div class="form-check col-lg-1">
                                <input class="form-check-input" type="checkbox" value="1" id="s-size" name="s-size"
                                    {{ $product->size[0] == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="s-size">S</label>
                            </div>
                            <div class="form-check col-lg-1">
                                <input class="form-check-input" type="checkbox" value="1" id="m-size"
                                    name="m-size" {{ $product->size[1] == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="m-size">M</label>
                            </div>
                            <div class="form-check col-lg-1">
                                <input class="form-check-input" type="checkbox" value="1" id="l-size"
                                    name="l-size" {{ $product->size[2] == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="l-size">L</label>
                            </div>
                            <div class="form-check col-lg-1">
                                <input class="form-check-input" type="checkbox" value="1" id="xl-size"
                                    name="xl-size" {{ $product->size[3] == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="xl-size">XL</label>
                            </div>
                            <div class="form-check col-lg-1">
                                <input class="form-check-input" type="checkbox" value="1" id="xxl-size"
                                    name="xxl-size" {{ $product->size[4] == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="xxl-size">XXL</label>
                            </div>
                        </div>
                    </div>
                    <label for="s-size" class="form-label">Others</label>
                    <div class="row">
                        <div class="form-check mb-3 col-lg-2">
                            <input class="form-check-input" type="checkbox" id="availability" name="availability"
                                {{ $product->availability ? 'checked' : '' }}>
                            <label class="form-check-label" for="availability">Available</label>
                        </div>
                        <div class="form-check mb-3 col-lg-2">
                            <input class="form-check-input" type="checkbox" id="featured" name="featured"
                                {{ $product->featured ? 'checked' : '' }}>
                            <label class="form-check-label" for="featured">Featured</label>
                        </div>
                        <div class="form-check mb-3 col-lg-2">
                            <input class="form-check-input" type="checkbox" id="popular" name="popular"
                                {{ $product->popular ? 'checked' : '' }}>
                            <label class="form-check-label" for="popular">Popular</label>
                        </div>
                    </div>


                    <div class="mb-4" id="ckeditor">
                        <label class="form-label">Long Description</label>
                        <textarea name="content" id="content" cols="30" rows="10"> {{ $product->long_description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>
            </div>
        </div>
    </section>

    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
