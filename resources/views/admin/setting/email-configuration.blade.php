<div aria-labelledby="list-profile-list" class="tab-pane fade" id="list-profile" role="tabpanel">
    <div class="card border">
        <div class="card-body">
            <form action="{{ route('admin.email-setting-update') }}" method="POST">
                @csrf
                @method('PUT')
                <input class="form-control d-none" name="id" type="text" value="{{ $emailSettings->id }}">
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email" type="text" value="{{ $emailSettings->email }}">
                </div>

                <div class="form-group">
                    <label>Mail Host</label>
                    <input class="form-control" name="host" type="text" value="{{ $emailSettings->host }}">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Smtp username</label>
                            <input class="form-control" name="username" type="text"
                                value="{{ $emailSettings->username }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Smtp password</label>
                            <input class="form-control" name="password" type="text"
                                value="{{ $emailSettings->password }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mail port</label>
                            <input class="form-control" name="port" type="text"
                                value="{{ $emailSettings->port }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mail Encryption</label>
                            <select class="form-control" id="" name="encryption">
                                <option {{ $emailSettings->encryption == 'tls' ? 'selected' : '' }} value="tls">TLS
                                </option>
                                <option {{ $emailSettings->encryption == 'ssl' ? 'selected' : '' }} value="ssl">SSL
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
