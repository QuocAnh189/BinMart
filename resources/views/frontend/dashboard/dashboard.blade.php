@extends('frontend.layouts.master')

@section('title')
    {{--    {{$settings->site_name}} || Dashboard--}}
    Dashboard
@endsection

@section('content')
    <section id="wsus__dashboard">
        <div class="container-fluid">
            @include('frontend.dashboard.layouts.sidebar')
        </div>
    </section>
@endsection

