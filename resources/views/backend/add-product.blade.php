@extends('backend.layouts.main')
@section('title', 'Add Product')
@section('main-container')
    <section class="content-main">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    <h2 class="content-title">Add New Product</h2>
                </div>
            </div>

            <form method="post" action="{{ url('/products/add') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Basic</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Product title</label>
                                    <input type="text" placeholder="Type here" name="product_name" class="form-control"
                                        id="product_name">
                                    @if ($errors->has('product_name'))
                                        <span class="text-danger">
                                            {{ $errors->first('product_name') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Short Description</label>
                                    <textarea id="short-description" placeholder="Type here" name="shortDes" id="shortDes" class="form-control"
                                        rows="4" maxlength="200"></textarea>
                                    <small id="charCount">0 / 200</small>
                                    @if ($errors->has('shortDes'))
                                        <span class="text-danger">
                                            {{ $errors->first('shortDes') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label">Price</label>
                                            <div class="row gx-2">
                                                <input placeholder="$" name="price" id="price" type="text"
                                                    class="form-control">
                                            </div>
                                            @if ($errors->has('price'))
                                                <span class="text-danger">
                                                    {{ $errors->first('price') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label">Discount</label>
                                            <input placeholder="$" name="discount" id="discount" type="text"
                                                class="form-control">
                                        </div>
                                        @if ($errors->has('discount'))
                                            <span class="text-danger">
                                                {{ $errors->first('discount') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="mb-4" id="ckeditor">
                                    <label class="form-label">Long Description</label>
                                    <textarea name="content" id="content" cols="30" rows="10"></textarea>
                                    @if ($errors->has('content'))
                                        <span class="text-danger">
                                            {{ $errors->first('content') }}
                                        </span>
                                    @endif
                                </div>
                                <label class="form-label">Size </label>
                                <div class="row">
                                    <div class="custome-checkbox col-lg-1">
                                        <input class="form-check-input" type="checkbox" name="s-size" id="s-size"
                                            value="1">
                                        <label class="form-check-label" for="s-size">S</label>
                                    </div>
                                    <div class="custome-checkbox col-lg-1">
                                        <input class="form-check-input" type="checkbox" name="m-size" id="m-size"
                                            value="1">
                                        <label class="form-check-label" for="m-size">M</label>
                                    </div>
                                    <div class="custome-checkbox col-lg-1">
                                        <input class="form-check-input" type="checkbox" name="l-size" id="l-size"
                                            value="1">
                                        <label class="form-check-label" for="l-size">L</label>
                                    </div>
                                    <div class="custome-checkbox col-lg-1">
                                        <input class="form-check-input" type="checkbox" name="xl-size" id="xl-size"
                                            value="1">
                                        <label class="form-check-label" for="xl-size">XL</label>
                                    </div>
                                    <div class="custome-checkbox col-lg-1">
                                        <input class="form-check-input" type="checkbox" name="xxl-size" id="xxl-size"
                                            value="1">
                                        <label class="form-check-label" for="xxl-size">XXL</label>
                                    </div>
                                </div>
                                <label class="form-label">Others </label>
                                <div class="row">
                                    <div class="custome-checkbox col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="availability"
                                            id="availability" value="1" checked>
                                        <label class="form-check-label" for="availability"> Availability <span
                                                data-toggle="tooltip" data-placement="top"
                                                title="Check if item in the stock."><i
                                                    class="icon material-icons md-info"></i></span></label>
                                    </div>
                                    <div class="custome-checkbox col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="featured" id="featured"
                                            value="1">
                                        <label class="form-check-label" for="featured"> Featured <span
                                                data-toggle="tooltip" data-placement="top"
                                                title="Check if item is featured."><i
                                                    class="icon material-icons md-info"></i></span></label>
                                    </div>
                                    <div class="custome-checkbox col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="popular" id="popular"
                                            value="1">
                                        <label class="form-check-label" for="popular"> Popular <span
                                                data-toggle="tooltip" data-placement="top"
                                                title="Check if item is popular."><i
                                                    class="icon material-icons md-info"></i></span></label>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <select class="form-select" name="badge" required>
                                            <option disabled selected> Select badge for product </option>
                                            <option value="0">No badge</option>
                                            <option value="1">New</option>
                                            <option value="2">Best Sell</option>
                                            <option value="3">Hot</option>
                                            <option value="4">Discount of item</option>
                                        </select>
                                        @if ($errors->has('badge'))
                                            <span class="text-danger">
                                                {{ $errors->first('badge') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-md mt-4 rounded font-sm hover-up"
                                        type="submit">Publish</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Media</h4>
                            </div>
                            <div class="card-body">
                                <div class="input-upload" style="text-align:left">
                                    <img src="{{ url('backend/imgs/theme/upload.svg') }}" alt="">
                                    <label class=" p-1" for="thumbnail1">Select first thumbnail</label>
                                    <input class="form-control" name="thumbnail1" id="thumbnail1" type="file">
                                    @if ($errors->has('thumbnail1'))
                                        <span class="text-danger">
                                            {{ $errors->first('thumbnail 1') }}
                                        </span>
                                    @endif
                                    <label for="thumbnail2" class=" p-1">Select second thumbnail</label>
                                    <input class="form-control" name="thumbnail2" id="thumbnail2" type="file">
                                    @if ($errors->has('thumbnail2'))
                                        <span class="text-danger">
                                            {{ $errors->first('thumbnail 2') }}
                                        </span>
                                    @endif
                                    <label for="thumbnail2" class=" p-1">Select Product Images</label>
                                    <input class="form-control" name="product_images" multiple id="thumbnail2"
                                        type="file">
                                    @if ($errors->has('product_images'))
                                        <span class="text-danger">
                                            {{ $errors->first('product_images') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Category</h4>
                            </div>
                            <div class="card-body">
                                <div class="row gx-2">
                                    <div class="col-sm-12 mb-3">
                                        <select class="form-select" name="category" required>
                                            <option disabled selected> Select one </option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="tags" class="form-label">Tags (Separated by comma) <span
                                            data-toggle="tooltip" data-placement="top"
                                            title="Show when user search keywords"><i
                                                class="icon material-icons md-info"></i></span></label>
                                    <input type="text" class="form-control" name="tags"
                                        placeholder="like: sale, shirt, popular, mens">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script>
            // Initialize CKEditor
            ClassicEditor
                .create(document.querySelector('#content'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    </section>
@endsection
