@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Blog</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Blog</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.blog.update', $blog->id) }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <img alt="" src="{{ asset($blog->image) }}" width="200px">
                                    <br>
                                    <label>Image</label>
                                    <input class="form-control" name="image" type="file">
                                </div>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" name="title" type="text" value="{{ $blog->title }}">
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Category</label>
                                    <select class="form-control main-category" id="inputState" name="category">
                                        <option value="">Select</option>
                                        @foreach ($categories as $category)
                                            <option {{ $category->id == $blog->category_id ? 'selected' : '' }}
                                                value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control summernote" name="description">{!! $blog->description !!}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Seo Title</label>
                                    <input class="form-control" name="seo_title" type="text"
                                        value="{{ $blog->seo_title }}">
                                </div>

                                <div class="form-group">
                                    <label>Seo Description</label>
                                    <textarea class="form-control" name="seo_description">{!! $blog->seo_description !!}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select class="form-control" id="inputState" name="status">
                                        <option {{ $blog->status == 1 ? 'selected' : '' }} value="1">Active</option>
                                        <option {{ $blog->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary" type="submmit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script></script>
@endpush
