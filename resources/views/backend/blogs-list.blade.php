@extends('backend.layouts.main')
@section('title', 'Product List')
@section('main-container')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Blogs List</h2>
                <p>All the blogs listed here.</p>
            </div>
            <div>
                <a href="{{ route('blogs.add') }}" class="btn btn-primary btn-sm rounded">Create new</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                @foreach ($blogs as $product)
                    <article class="itemlist">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                                <a class="itemside" href="#">
                                    <div class="left">
                                        <img src="{{ asset('storage/' . $product->image) }}" class="img-sm img-thumbnail"
                                            alt="Item">
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-0">{{ $product->title }}</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-price"> <span>{{ $product->read_time . 'mins' }}</span>
                            </div>

                            <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                                <a href="{{ route('blog.edit', $product->id) }}"
                                    class="btn btn-sm font-sm rounded btn-brand">
                                    <i class="material-icons md-edit"></i> Edit
                                </a>
                                <a class="btn btn-sm font-sm btn-light rounded delete-product"
                                    data-product-id="{{ $product->id }}">
                                    <i class="material-icons md-delete_forever"></i> Delete
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <script>
        $(document).on('click', '.delete-product', function(e) {
            e.preventDefault();
            var id = $(this).data('product-id');
            if (confirm('Are you sure you want to delete this blog?')) {
                $.ajax({
                    url: '{{ url('/admin/blogs') }}/' + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            alert('Product deleted successfully');
                            location.reload();
                        } else {
                            alert('Failed to delete product');
                        }
                    },
                    error: function(response) {
                        alert('Failed to delete product');
                    }
                });
            }
        });
    </script>
@endsection
