@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Slider</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Slider</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.slider.update', $slider->id) }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Preview</label>
                                    <br>
                                    <img alt="" src="{{ asset($slider->banner) }}" width="200">
                                </div>
                                <div class="form-group">
                                    <label>Banner</label>
                                    <input class="form-control" name="banner" type="file">
                                </div>

                                <div class="form-group">
                                    <label>Type</label>
                                    <input class="form-control" name="type" type="text" value="{{ $slider->type }}">
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" name="title" type="text" value="{{ $slider->title }}">
                                </div>
                                <div class="form-group">
                                    <label>Starting Price</label>
                                    <input class="form-control" name="starting_price" type="text"
                                        value="{{ $slider->starting_price }}">
                                </div>
                                <div class="form-group">
                                    <label>Button Url</label>
                                    <input class="form-control" name="btn_url" type="text"
                                        value="{{ $slider->btn_url }}">
                                </div>
                                <div class="form-group">
                                    <label>Serial</label>
                                    <input class="form-control" name="serial" type="text" value="{{ $slider->serial }}">
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select class="form-control" id="inputState" name="status">
                                        <option {{ $slider->status == 1 ? 'selected' : '' }} value="1">Active</option>
                                        <option {{ $slider->status == 0 ? 'selected' : '' }} value="0">Inactive
                                        </option>
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
