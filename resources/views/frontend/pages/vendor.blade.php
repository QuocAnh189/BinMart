@extends('frontend.layouts.master')

@section('title')
    {{--    {{$settings->site_name}} || Vendor--}}
    Vendor
@endsection

@section('content')
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>vendors</h4>
                        <ul>
                            <li><a href="{{url('/')}}">home</a></li>
                            <li><a href="javascript:;">vendors</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')

@endpush
