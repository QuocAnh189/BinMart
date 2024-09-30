@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Home Page Settings</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <div class="list-group" id="list-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                                            href="#list-profile" id="list-profile-list" role="tab">
                                            Popular Category Section
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list"
                                            href="#list-messages" id="list-messages-list" role="tab">
                                            Product Slider Section One
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list"
                                            href="#list-settings" id="list-settings-list" role="tab">
                                            Product Slider Section Two
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list"
                                            href="#list-slider-three" id="list-settings-list" role="tab">
                                            Product Slider Section Three
                                        </a>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="tab-content" id="nav-tabContent">
                                        @include('admin.home-page-setting.sections.popular-category-section')
                                        @include('admin.home-page-setting.sections.product-slider-section-one')
                                        @include('admin.home-page-setting.sections.product-slider-section-two')
                                        @include('admin.home-page-setting.sections.product-slider-section-three')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
