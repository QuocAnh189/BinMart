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
                            <form action="{{ route('admin.blog.store') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Image</label>
                                    <input class="form-control" name="image" type="file">
                                </div>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" name="title" type="text" value="{{ old('title') }}">
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Category</label>
                                    <select class="form-control main-category" id="inputState" name="category">
                                        <option value="">Select</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control summernote" name="description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Seo Title</label>
                                    <input class="form-control" name="seo_title" type="text"
                                        value="{{ old('seo_title') }}">
                                </div>

                                <div class="form-group">
                                    <label>Seo Description</label>
                                    <textarea class="form-control" name="seo_description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select class="form-control" id="inputState" name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary" type="submmit">Create</button>
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
