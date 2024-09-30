@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Settings</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="list-group" id="list-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                                            href="#list-home" id="list-home-list" role="tab">Homepage banner section
                                            one</a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list"
                                            href="#list-profile" id="list-profile-list" role="tab">Homepage banner
                                            section two</a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list"
                                            href="#list-messages" id="list-messages-list" role="tab">Homepage banner
                                            section three</a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list"
                                            href="#list-settings" id="list-settings-list" role="tab">Homepage banner
                                            section four</a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list"
                                            href="#list-product" id="list-product-list" role="tab">Products page
                                            banner</a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list"
                                            href="#list-cart" id="list-cart-list" role="tab">Cart page banner</a>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="tab-content" id="nav-tabContent">
                                        @include('admin.advertisement.homepage-banner-one')
                                        @include('admin.advertisement.homepage-banner-two')
                                        @include('admin.advertisement.homepage-banner-three')
                                        @include('admin.advertisement.homepage-banner-four')
                                        @include('admin.advertisement.product-page-banner')
                                        @include('admin.advertisement.cart-page-banner')
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
