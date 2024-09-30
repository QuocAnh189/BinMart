@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>Slider</h1>

        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Slider</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.slider.store') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Banner</label>
                                    <input class="form-control" name="banner" type="file">
                                </div>

                                <div class="form-group">
                                    <label>Type</label>
                                    <input class="form-control" name="type" type="text" value="{{ old('type') }}">
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" name="title" type="text" value="{{ old('title') }}">
                                </div>
                                <div class="form-group">
                                    <label>Starting Price</label>
                                    <input class="form-control" name="starting_price" type="text"
                                        value="{{ old('starting_price') }}">
                                </div>
                                <div class="form-group">
                                    <label>Button Url</label>
                                    <input class="form-control" name="btn_url" type="text" value="{{ old('btn_url') }}">
                                </div>
                                <div class="form-group">
                                    <label>Serial</label>
                                    <input class="form-control" name="serial" type="text" value="{{ old('serial') }}">
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
