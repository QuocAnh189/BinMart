@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Footer</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Footer Info</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.footer-info.update', 1) }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <img alt="" src="{{ asset(@$footerInfo->logo) }}" width="150px">
                                    <br>
                                    <label>Footer Logo</label>
                                    <input class="form-control" name="logo" type="file">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>phone</label>
                                            <input class="form-control" name="phone" type="text"
                                                value="{{ @$footerInfo->phone }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>email</label>
                                            <input class="form-control" name="email" type="text"
                                                value="{{ @$footerInfo->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>address</label>
                                    <input class="form-control" name="address" type="text"
                                        value="{{ @$footerInfo->address }}">
                                </div>

                                <div class="form-group">
                                    <label>copyright</label>
                                    <input class="form-control" name="copyright" type="text"
                                        value="{{ @$footerInfo->copyright }}">
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
