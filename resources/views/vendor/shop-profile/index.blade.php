@extends('vendor.layouts.master')

@section('title')
    {{--    {{$settings->site_name}} || Shop Profile--}}
    Shop Profile
@endsection

@section('content')
    <section id="wsus__dashboard">
        <div class="container-fluid">
            @include('vendor.layouts.sidebar')
        </div>
    </section>
@endsection

