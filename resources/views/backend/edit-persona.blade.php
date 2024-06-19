@extends('backend.layouts.main')
@section('title', 'Add Persona')
@section('main-container')

    <section class="content-main">
        <form method="post" action="{{ route('persona.update', $persona->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                        <h2 class="content-title">Edit Persona</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Personas</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" placeholder="Type here" class="form-control" id="name"
                                    name="name" value="{{ old('name', $persona->name) }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="organization" class="form-label">Organization</label>
                                <input type="text" placeholder="Type here" class="form-control" id="organization"
                                    name="organization" value="{{ old('organization', $persona->organization) }}">
                                @if ($errors->has('organization'))
                                    <span class="text-danger">
                                        {{ $errors->first('organization') }}
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="message">Full description</label>
                                <textarea placeholder="Type here" class="form-control" id="message" name="message" rows="4">{{ old('message', $persona->message) }}</textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">
                                        {{ $errors->first('message') }}
                                    </span>
                                @endif
                            </div>
                            <input class="btn btn-md rounded font-sm hover-up" type="submit" name="submit"
                                value="Update Persona">
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
                                <img src="{{ url('storage/' . $persona->image) }}" alt="">
                                <input class="form-control" type="file" name="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
