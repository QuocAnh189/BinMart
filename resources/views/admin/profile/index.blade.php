@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form action="{{ route('admin.profile.update') }}" class="needs-validation"
                            enctype="multipart/form-data" method="post" novalidate="">
                            @csrf
                            <div class="card-header">
                                <h4>Update Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <div class="mb-3">
                                            <img alt="" src="{{ asset(Auth::user()->image) }}" width="100px">
                                        </div>
                                        <label>Image</label>
                                        <input class="form-control" name="image" type="file">

                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label>Name</label>
                                        <input class="form-control" name="name" type="text"
                                            value="{{ Auth::user()->name }}">

                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Email</label>
                                        <input class="form-control" name="email" type="text"
                                            value="{{ Auth::user()->email }}">

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form action="{{ route('admin.password.update') }}" class="needs-validation"
                            enctype="multipart/form-data" method="post" novalidate="">
                            @csrf
                            <div class="card-header">
                                <h4>Update Password</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-12">
                                        <label>Current Password</label>
                                        <input class="form-control" name="current_password" type="password">
                                    </div>
                                    <div class="form-group col-12">
                                        <label>New Password</label>
                                        <input class="form-control" name="password" type="password">
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Confirm Password</label>
                                        <input class="form-control" name="password_confirmation" type="password">
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
