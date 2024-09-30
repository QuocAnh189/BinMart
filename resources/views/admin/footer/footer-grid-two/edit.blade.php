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
                            <h4>Edit Footer Item</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.footer-grid-two.update', $footer->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" name="name" type="text" value="{{ $footer->name }}">
                                </div>

                                <div class="form-group">
                                    <label>url</label>
                                    <input class="form-control" name="url" type="text" value="{{ $footer->url }}">
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select class="form-control" id="inputState" name="status">
                                        <option {{ $footer->status === 1 ? 'selected' : '' }} value="1">Active</option>
                                        <option {{ $footer->status === 0 ? 'selected' : '' }} value="0">Inactive
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
