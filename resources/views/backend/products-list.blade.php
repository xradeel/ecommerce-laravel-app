@extends('backend.layouts.main')
@section('title', 'Product List')
@section('main-container')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Products List</h2>
                <p>All the product listed here.</p>
            </div>
            <div>
                <a href="{{ url('/products/add') }}" class="btn btn-primary btn-sm rounded">Create new</a>
            </div>
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <select class="form-select">
                            <option selected>All category</option>
                            @foreach ($categories as $category)
                                <option>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </header>
            <div class="card-body">
                @foreach ($products as $product)
                    <article class="itemlist">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                                <a class="itemside" href="#">
                                    <div class="left">
                                        <img src="{{ asset('frontend/imgs/shop/' . $product->thumbnail1) }}"
                                            class="img-sm img-thumbnail" alt="Item">
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-0">{{ $product->name }}</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-price"> <span>{{ $product->price }}</span> </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-status">
                                <span
                                    class="badge rounded-pill alert-success">{{ $product->status ? 'Active' : 'Inactive' }}</span>
                            </div>
                            <div class="col-lg-1 col-sm-2 col-4 col-date" style="min-width: 9.33%">
                                <span>{{ $product->category->name }}</span>
                                {{-- <span>{{ \Carbon\Carbon::parse($product->created_at)->format('Y-m-d') }}</span> --}}
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                                <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                                    <i class="material-icons md-edit"></i> Edit
                                </a>
                                <a href="#" class="btn btn-sm font-sm btn-light rounded">
                                    <i class="material-icons md-delete_forever"></i> Delete
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
        <div class="pagination-area mt-30 mb-50">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-start">
                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i
                                class="material-icons md-chevron_right"></i></a></li>
                </ul>
            </nav>
        </div>
    </section>
@endsection
