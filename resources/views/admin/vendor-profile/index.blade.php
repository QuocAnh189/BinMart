@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Vendor Profile</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Vendor Profile</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.vendor-profile.store') }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Preview</label>
                                    <br>
                                    <img alt="" src="{{ asset($profile->banner) }}" width="200px">
                                </div>
                                <div class="form-group">
                                    <label>Banner</label>
                                    <input class="form-control" name="banner" type="file">
                                </div>

                                <div class="form-group">
                                    <label>Shop Name</label>
                                    <input class="form-control" name="shop_name" type="text"
                                        value="{{ $profile->shop_name }}">
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" name="phone" type="text" value="{{ $profile->phone }}">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="email" type="text" value="{{ $profile->email }}">
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" name="address" type="text"
                                        value="{{ $profile->address }}">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="summernote" name="description">{{ $profile->description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input class="form-control" name="fb_link" type="text"
                                        value="{{ $profile->fb_link }}">
                                </div>

                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input class="form-control" name="tw_link" type="text"
                                        value="{{ $profile->tw_link }}">
                                </div>

                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input class="form-control" name="insta_link" type="text"
                                        value="{{ $profile->insta_link }}">
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
