<div aria-labelledby="list-razorpay-list" class="tab-pane fade" id="list-razorpay" role="tabpanel">
    <div class="card border">
        <div class="card-body">
            <form action="{{ route('admin.razorpay-setting.update', 1) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>RazorPay Status</label>
                    <select class="form-control" id="" name="status">
                        <option {{ $razorpaySetting->status === 1 ? 'selected' : '' }} value="1">Enable</option>
                        <option {{ $razorpaySetting->status === 0 ? 'selected' : '' }} value="0">Disable</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Country Name</label>
                    <select class="form-control select2" id="" name="country_name">
                        <option value="">Select</option>
                        @foreach (config('settings.country_list') as $country)
                            <option {{ $country === $razorpaySetting->country_name ? 'selected' : '' }}
                                value="{{ $country }}">{{ $country }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Currency Name</label>
                    <select class="form-control select2" id="" name="currency_name">
                        <option value="">Select</option>
                        @foreach (config('settings.currecy_list') as $key => $currency)
                            <option {{ $currency === $razorpaySetting->currency_name ? 'selected' : '' }}
                                value="{{ $currency }}">{{ $key }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Currency rate ( Per {{ $settings->currency_name }} )</label>
                    <input class="form-control" name="currency_rate" type="text"
                        value="{{ $razorpaySetting->currency_rate }}">
                </div>

                <div class="form-group">
                    <label>RazorPay Key</label>
                    <input class="form-control" name="razorpay_key" type="text"
                        value="{{ $razorpaySetting->razorpay_key }}">
                </div>
                <div class="form-group">
                    <label>Razorpay Secret Key</label>
                    <input class="form-control" name="razorpay_secret_key" type="text"
                        value="{{ $razorpaySetting->razorpay_secret_key }}">
                </div>

                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('.select2').select2()
    </script>
@endpush
