@extends('backend.layouts.main')
@section('title', 'Add Product')
@section('main-container')

    <script src="https://cdn.ckeditor.com/4.24.0-lts/standard/ckeditor.js"></script>
    <section class="content-main">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    <h2 class="content-title">Add New Product</h2>

                </div>
            </div>

            <form method="post" action="{{ url('/products/add') }}" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Basic</h4>
                            </div>
                            <div class="card-body">
                                @csrf
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
                                    <textarea name="content" id="content" cols="30" rows="10"></textarea>
                                    @if ($errors->has('content'))
                                        <span class="text-danger">
                                            {{ $errors->first('content') }}
                                        </span>
                                    @endif
                                </div>
                                <div>
                                    <button class="btn btn-md mt-4 rounded font-sm hover-up" type="submit">Publich</button>
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
                                    <label for="thumbnail2" class=" p-1">Select second thumbnail</label>
                                    <input class="form-control" name="thumbnail2" id="thumbnail2" type="file">
                                    <label for="thumbnail2" class=" p-1">Select Product Images</label>
                                    <input class="form-control" name="product_images" multiple id="thumbnail2"
                                        type="file">

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
                                        <select class="form-select" required>
                                            <option disabled selected> Select one </option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Tag</label>
                                    <input type="text" class="form-control" placeholder="like: sale">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script>
            ClassicEditor
                .create(document.querySelector('#content'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    </section>
@endsection
