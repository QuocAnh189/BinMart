@extends('frontend.dashboard.layouts.master')

@section('title')
    {{--    {{$settings->site_name}} || Became a Vendor Today--}}
    Became a Vendor Today
@endsection

@section('content')
    <section id="wsus__dashboard">
        <div class="container-fluid">
            @include('frontend.dashboard.layouts.sidebar')

        </div>
    </section>
@endsection

