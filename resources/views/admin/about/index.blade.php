@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>About</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            About
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.about.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea class="summernote" name="content">{!! @$content->content !!}</textarea>
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
