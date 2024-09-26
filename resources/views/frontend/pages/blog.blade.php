@extends('frontend.layouts.master')

@section('title')
    {{--    {{$settings->site_name}} || Blogs--}}
    Blogs
@endsection

@section('content')
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>our latest blogs</h4>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">blogs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')

@endpush
