@extends('backend.layouts.main')
@section('title', 'Edit Team Member')
@section('main-container')
    <section class="content-main">
        <form method="post" action="{{ route('member.update', $member->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                        <h2 class="content-title">Edit Team Member</h2>
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
                                    name="member_name" value="{{ old('member_name', $member->name) }}">
                                @if ($errors->has('member_name'))
                                    <span class="text-danger">
                                        {{ $errors->first('member_name') }}
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="designation" class="form-label">Designation</label>
                                <input type="text" placeholder="Type here" required class="form-control" id="designation"
                                    name="designation" value="{{ old('designation', $member->designation) }}">
                                @if ($errors->has('designation'))
                                    <span class="text-danger">
                                        {{ $errors->first('designation') }}
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="facebook" class="form-label">Facebook Bio</label>
                                <input type="text" placeholder="Facebook bio link" class="form-control" id="facebook"
                                    name="facebook" value="{{ old('facebook', $member->facebook) }}">
                                @if ($errors->has('facebook'))
                                    <span class="text-danger">
                                        {{ $errors->first('facebook') }}
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="instagram" class="form-label">Instagram Bio</label>
                                <input type="text" placeholder="Instagram bio link" class="form-control" id="instagram"
                                    name="instagram" value="{{ old('insta', $member->insta) }}">
                                @if ($errors->has('instagram'))
                                    <span class="text-danger">
                                        {{ $errors->first('instagram') }}
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="twitter" class="form-label">X Bio</label>
                                <input type="text" placeholder="X bio link" class="form-control" id="twitter"
                                    name="twitter" value="{{ old('twitter', $member->twitter) }}">
                                @if ($errors->has('twitter'))
                                    <span class="text-danger">
                                        {{ $errors->first('twitter') }}
                                    </span>
                                @endif
                            </div>
                            <input class="btn btn-md rounded font-sm hover-up" type="submit" name="submit"
                                value="Update Member">
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
                                <img src="{{ url('storage/' . $member->image) }}" alt="Current image">
                                <input class="form-control" type="file" name="image">
                                @if ($errors->has('image'))
                                    <span class="text-danger">
                                        {{ $errors->first('image') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
