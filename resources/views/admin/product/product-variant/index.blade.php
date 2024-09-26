@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>Product Variant</h1>
        </div>
        <div class="mb-3">
            <a href="{{route('admin.products.index')}}" class="btn btn-primary">Back</a>
        </div>
    </section>
@endsection
