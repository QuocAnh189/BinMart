@extends('frontend.dashboard.layouts.master')

@section('title')
    {{--    {{$settings->site_name}} || Product--}}
    Product
@endsection

@section('content')
    <section id="wsus__dashboard">
        <div class="container-fluid">
            @include('frontend.dashboard.layouts.sidebar')

        </div>
    </section>
@endsection

