@extends('backend.layouts.main')
@section('title', 'Categories list')
@section('main-container')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Categories </h2>
                <p>Add, edit or delete a category</p>
            </div>
            <div>
                <input type="text" placeholder="Search Categories" class="form-control bg-white">
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <form>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Name</label>
                                <input type="text" placeholder="Type here" class="form-control" id="product_name" />
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary">Create category</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-9">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Created At</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td><b>{{ $category->name }}</b></td>
                                            {{-- <td>Men clothes</td> --}}
                                            <td>{{ $category->created_at }}</td>
                                            <td>
                                                <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                                                    <i class="material-icons md-edit"></i> Edit
                                                </a>
                                                <a href="#" class="btn btn-sm font-sm btn-light rounded">
                                                    <i class="material-icons md-delete_forever"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
