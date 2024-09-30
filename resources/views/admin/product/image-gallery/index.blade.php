@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Image Gallery</h1>
        </div>
        <div class="mb-3">
            <a class="btn btn-primary" href="{{ route('admin.products.index') }}">Back</a>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Product: {{ $product->name }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.products-image-gallery.store') }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Image <code>(Multiple image supported!)</code></label>
                                    <input class="form-control" multiple name="image[]" type="file">
                                    <input name="product" type="hidden" value="{{ $product->id }}">
                                </div>
                                <button class="btn btn-primary" type="submit">Upload</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Images</h4>
                        </div>
                        <div class="card-body">
                            {{ $dataTable->table() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
