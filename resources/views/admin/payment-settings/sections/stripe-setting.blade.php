<div aria-labelledby="list-stripe-list" class="tab-pane fade show" id="list-stripe" role="tabpanel">
    <div class="card border">
        <div class="card-body">
            <form action="{{ route('admin.stripe-setting.update', 1) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Stripe Status</label>
                    <select class="form-control" id="" name="status">
                        <option {{ $stripeSetting->status === 1 ? 'selected' : '' }} value="1">Enable</option>
                        <option {{ $stripeSetting->status === 0 ? 'selected' : '' }} value="0">Disable</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Account Mode</label>
                    <select class="form-control" id="" name="mode">
                        <option {{ $stripeSetting->mode === 0 ? 'selected' : '' }} value="0">Sandbox</option>
                        <option {{ $stripeSetting->mode === 1 ? 'selected' : '' }} value="1">Live</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Country Name</label>
                    <select class="form-control select2" id="" name="country_name">
                        <option value="">Select</option>
                        @foreach (config('settings.country_list') as $country)
                            <option {{ $country === $stripeSetting->country_name ? 'selected' : '' }}
                                value="{{ $country }}">{{ $country }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Currency Name</label>
                    <select class="form-control select2" id="" name="currency_name">
                        <option value="">Select</option>
                        @foreach (config('settings.currecy_list') as $key => $currency)
                            <option {{ $currency === $stripeSetting->currency_name ? 'selected' : '' }}
                                value="{{ $currency }}">{{ $key }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Currency rate ( Per {{ $settings->currency_name }} )</label>
                    <input class="form-control" name="currency_rate" type="text"
                        value="{{ $stripeSetting->currency_rate }}">
                </div>

                <div class="form-group">
                    <label>Stripe Client Id</label>
                    <input class="form-control" name="client_id" type="text"
                        value="{{ $stripeSetting->client_id }}">
                </div>

                <div class="form-group">
                    <label>Stripe Secret Key</label>
                    <input class="form-control" name="secret_key" type="text"
                        value="{{ $stripeSetting->secret_key }}">
                </div>

                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
