@extends('backend.layouts.main')
@section('title', 'Add Team Member')
@section('main-container')
    <section class="content-main">
        <form method="post" action="{{ url('/member/add') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                        <h2 class="content-title">Add New Member</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Team Member</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="member_name" class="form-label">Name</label>
                                <input type="text" placeholder="Type here" required class="form-control" id="member_name"
                                    name="member_name">
                                @if ($errors->has('member_name'))
                                    <span class="text-danger">
                                        {{ $errors->first('member_name') }}
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="designation" class="form-label">Designation</label>
                                <input type="text" placeholder="Type here" required class="form-control" id="designation"
                                    name="designation">
                                @if ($errors->has('designation'))
                                    <span class="text-danger">
                                        {{ $errors->first('designation') }}
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="facebook" class="form-label">Facebook Bio</label>
                                <input type="text" placeholder="Facebook bio link" class="form-control" id="facebook"
                                    name="facebook">
                                @if ($errors->has('facebook'))
                                    <span class="text-danger">
                                        {{ $errors->first('facebook') }}
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="instagram" class="form-label">Instagram Bio</label>
                                <input type="text" placeholder="Instagram bio link" class="form-control" id="instagram"
                                    name="instagram">
                                @if ($errors->has('instagram'))
                                    <span class="text-danger">
                                        {{ $errors->first('instagram') }}
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="twitter" class="form-label">X Bio</label>
                                <input type="text" placeholder="X bio link" class="form-control" id="twitter"
                                    name="twitter">
                                @if ($errors->has('twitter'))
                                    <span class="text-danger">
                                        {{ $errors->first('twitter') }}
                                    </span>
                                @endif
                            </div>
                            <input class="btn btn-md rounded font-sm hover-up" type="submit" name="submit"
                                value="Add Member">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Media</h4>
                        </div>
                        <div class="card-body">
                            <div class="input-upload">
                                <img src="{{ url('backend/imgs/theme/upload.svg') }}" alt="">
                                <input class="form-control" type="file" name="image" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
