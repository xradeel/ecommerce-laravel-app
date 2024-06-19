@extends('backend.layouts.main')
@section('title', 'Team Members')
@section('main-container')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Team Member List</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
                <a href="{{ url('/member/add') }}" class="btn btn-primary btn-sm rounded">Add New Member</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                @foreach ($members as $value)
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
                                    </div>
                                </a>
                            </div>
                            <!-- <div class="col-lg-4 col-sm-2 col-4 col-status">
                                                        <span class="badge rounded-pill {{ $value->status == 1 ? 'alert-success' : 'alert-danger' }}">
                                                            {{ $value->status == 1 ? 'Active' : 'Non-active' }}
                                                        </span>
                                                    </div> -->
                            <div class="col-lg-4 col-sm-2 col-4 col-status">
                                <span class="info">
                                    {{ $value->designation }}
                                </span>
                            </div>
                            <div class="col-lg-3 col-sm-2 col-4 col-action text-end">
                                <a href="{{ route('member.edit', $value->id) }}"
                                    class="btn btn-sm font-sm rounded btn-brand mr-50">
                                    <i class="material-icons md-edit"></i> Edit
                                </a>
                                <a class="btn btn-sm font-sm btn-light rounded delete-member"
                                    data-member-id="{{ $value->id }}">
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
    <script>
        $(document).ready(function() {
            $('.delete-member').on('click', function(e) {
                e.preventDefault();

                if (!confirm('Are you sure you want to delete this member?')) {
                    return;
                }

                const memberId = $(this).data('member-id');
                console.log(memberId);
                const url = `{{ url('/member') }}/${memberId}`;

                $.ajax({
                    url: url,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            alert(response.success);
                            location.reload();
                        } else {
                            alert('Something went wrong');
                        }
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr);
                        alert('Something went wrong');
                    }
                });
            });
        });
    </script>
@endsection
