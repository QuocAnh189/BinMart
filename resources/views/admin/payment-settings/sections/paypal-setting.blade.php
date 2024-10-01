<div aria-labelledby="list-home-list" class="tab-pane fade show active" id="list-home" role="tabpanel">
    <div class="card border">
        <div class="card-body">
            <form action="{{ route('admin.paypal-setting.update', 1) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Paypal Status</label>
                    <select class="form-control" id="" name="status">
                        <option {{ $paypalSetting->status === 1 ? 'selected' : '' }} value="1">Enable</option>
                        <option {{ $paypalSetting->status === 0 ? 'selected' : '' }} value="0">Disable</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Account Mode</label>
                    <select class="form-control" id="" name="mode">
                        <option {{ $paypalSetting->mode === 0 ? 'selected' : '' }} value="0">Sandbox</option>
                        <option {{ $paypalSetting->mode === 1 ? 'selected' : '' }} value="1">Live</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Country Name</label>
                    <select class="form-control select2" id="" name="country_name">
                        <option value="">Select</option>
                        @foreach (config('settings.country_list') as $country)
                            <option {{ $country === $paypalSetting->country_name ? 'selected' : '' }}
                                value="{{ $country }}">{{ $country }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Currency Name</label>
                    <select class="form-control select2" id="" name="currency_name">
                        <option value="">Select</option>
                        @foreach (config('settings.currecy_list') as $key => $currency)
                            <option {{ $currency === $paypalSetting->currency_name ? 'selected' : '' }}
                                value="{{ $currency }}">{{ $key }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Currency rate ( Per {{ $settings->currency_name }} )</label>
                    <input class="form-control" name="currency_rate" type="text"
                        value="{{ $paypalSetting->currency_rate }}">
                </div>
                <div class="form-group">
                    <label>Paypal Client Id</label>
                    <input class="form-control" name="client_id" type="text"
                        value="{{ $paypalSetting->client_id }}">
                </div>
                <div class="form-group">
                    <label>Paypal Secret Key</label>
                    <input class="form-control" name="secret_key" type="text"
                        value="{{ $paypalSetting->secret_key }}">
                </div>

                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
