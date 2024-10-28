<div aria-labelledby="list-home-list" class="tab-pane fade show active" id="list-home" role="tabpanel">
    <div class="card border">
        <div class="card-body">
            <form action="{{ route('admin.generale-setting-update') }}" method="POST">
                @csrf
                @method('PUT')
                <input class="form-control d-none" name="id" type="text" value="{{ @$generalSettings->id }}">
                <div class="form-group">
                    <label>Site Name</label>
                    <input class="form-control" name="site_name" type="text"
                        value="{{ @$generalSettings->site_name }}">
                </div>
                <div class="form-group">
                    <label>Layout</label>
                    <select class="form-control" id="" name="layout">
                        <option {{ @$generalSettings->layout == 'LTR' ? 'selected' : '' }} value="LTR">LTR</option>
                        <option {{ @$generalSettings->layout == 'RTL' ? 'selected' : '' }} value="RTL">RTL</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Contact Email</label>
                    <input class="form-control" name="contact_email" type="text"
                        value="{{ @$generalSettings->contact_email }}">
                </div>
                <div class="form-group">
                    <label>Contact Phone</label>
                    <input class="form-control" name="contact_phone" type="text"
                        value="{{ @$generalSettings->contact_phone }}">
                </div>
                <div class="form-group">
                    <label>Contact Address</label>
                    <input class="form-control" name="contact_address" type="text"
                        value="{{ @$generalSettings->contact_address }}">
                </div>
                <div class="form-group">
                    <label>Google Map Url</label>
                    <input class="form-control" name="map" type="text" value="{{ @$generalSettings->map }}">
                </div>
                <hr>
                <div class="form-group">
                    <label>Default Currecy Name</label>
                    <select class="form-control select2" id="" name="currency_name">
                        <option value="">Select</option>
                        @foreach (config('settings.currecy_list') as $currency)
                            <option {{ @$generalSettings->currency_name == $currency ? 'selected' : '' }}
                                value="{{ $currency }}">{{ $currency }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label>Currency Icon</label>
                    <input class="form-control" name="currency_icon" type="text"
                        value="{{ @$generalSettings->currency_icon }}">
                </div>
                <div class="form-group">
                    <label>Timezone</label>
                    <select class="form-control select2" id="" name="time_zone">
                        <option value="">Select</option>
                        @foreach (config('settings.time_zone') as $key => $timeZone)
                            <option {{ @$generalSettings->time_zone == $key ? 'selected' : '' }}
                                value="{{ $key }}">{{ $key }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
