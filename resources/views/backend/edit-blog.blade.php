@extends('backend.layouts.main')
@section('title', 'Edit Blog')
@section('main-container')
    <section class="content-main">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    <h2 class="content-title">Edit Blog</h2>
                </div>
            </div>

            <form method="post" action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Basic</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <label for="title" class="form-label">Blog title</label>
                                    <input type="text" placeholder="Type here" name="title" class="form-control"
                                        id="title" value="{{ $blog->title }}">
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Blog Summary</label>
                                    <textarea id="short-description" placeholder="Type here" name="summary" id="shortDes" class="form-control"
                                        rows="4" maxlength="200">{{ $blog->summary }}</textarea>
                                    <small id="charCount">0 / 200</small>
                                    @if ($errors->has('shortDes'))
                                        <span class="text-danger">
                                            {{ $errors->first('shortDes') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="author" class="form-label">Author Name</label>
                                    <input type="text" placeholder="Type here" name="author" class="form-control"
                                        id="author" value="{{ $blog->author }}">
                                    @if ($errors->has('author'))
                                        <span class="text-danger">{{ $errors->first('author') }}</span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label">Tags</label>
                                            <div class="row gx-2">
                                                <input placeholder="fashion" name="tags" id="tags" type="text"
                                                    class="form-control" value="{{ $blog->tags }}">
                                            </div>
                                            @if ($errors->has('tags'))
                                                <span class="text-danger">{{ $errors->first('tags') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label">Read Time</label>
                                            <input placeholder="10" name="read_time" id="read_time" type="text"
                                                class="form-control" value="{{ $blog->read_time }}">
                                            @if ($errors->has('read_time'))
                                                <span class="text-danger">{{ $errors->first('read_time') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4" id="ckeditor">
                                    <label class="form-label">Blog Content</label>
                                    <textarea name="content" id="content" cols="30" rows="10">{{ $blog->content }}</textarea>
                                    @if ($errors->has('content'))
                                        <span class="text-danger">{{ $errors->first('content') }}</span>
                                    @endif
                                </div>
                                <div>
                                    <button class="btn btn-md mt-4 rounded font-sm hover-up" type="submit">Update</button>
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
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="">
                                    <label class=" p-1" for="blog_pic">Select Blog thumbnail</label>
                                    <input class="form-control" name="blog_pic" id="blog_pic" type="file">
                                    @if ($errors->has('blog_pic'))
                                        <span class="text-danger">{{ $errors->first('blog_pic') }}</span>
                                    @endif
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
