@extends('backend.layouts.main')
@section('title', 'Personas')
@section('main-container')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Persona List</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
                <a href="{{ url('/persona/add') }}" class="btn btn-primary btn-sm rounded">Add New Persona</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                @foreach ($personas as $value)
                    <article class="itemlist">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                                <a class="itemside" href="#">
                                    <div class="left">
                                        <img src="{{ url('storage/' . $value->image) }}" class="img-sm img-thumbnail"
                                            alt="Item">
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-0">{{ $value->name }}</h6>
                                        <p>{{ $value->message }}</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-sm-2 col-4 col-action text-end">
                                <a href="{{ route('persona.edit', $value->id) }}"
                                    class="btn btn-sm font-sm rounded btn-brand mr-50">
                                    <i class="material-icons md-edit"></i> Edit
                                </a>
                                <a class="btn btn-sm font-sm btn-light rounded delete-persona"
                                    data-member-id="{{ $value->id }}">
                                    <i class="material-icons md-delete_forever"></i> Delete
                                </a>
                            </div>
                        </div>
                    </article>
                    {{-- {{ dd($value->id) }} --}}
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.delete-persona').click(function(e) {
                e.preventDefault();

                if (!confirm('Are you sure you want to delete this persona?')) {
                    return;
                }

                var memberId = $(this).data('member-id');
                var url = '{{ url('/persona') }}/' + memberId;

                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        alert(response.success);
                        // Optionally, you can remove the deleted item from the DOM
                        location.reload();
                    },
                    error: function(xhr) {
                        alert('Error deleting persona');
                    }
                });
            });
        });
    </script>
@endsection
