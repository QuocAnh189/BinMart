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
                                <div class="col-2">
                                    <div class="list-group" id="list-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                                            href="#list-home" id="list-home-list" role="tab">Paypal
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list"
                                            href="#list-stripe" id="list-stripe-list" role="tab">Stripe
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list"
                                            href="#list-razorpay" id="list-razorpay-list" role="tab">RazorPay
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list"
                                            href="#list-settings" id="list-settings-list" role="tab">COD
                                        </a>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="tab-content" id="nav-tabContent">
                                        @include('admin.payment-settings.sections.paypal-setting')
                                        @include('admin.payment-settings.sections.stripe-setting')
                                        @include('admin.payment-settings.sections.razorpay-setting')
                                        @include('admin.payment-settings.sections.cod-setting')
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
