<div aria-labelledby="list-settings-list" class="tab-pane fade" id="list-settings" role="tabpanel">
    <div class="card border">
        <div class="card-body">
            <form action="{{ route('admin.cod-setting.update', 1) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>COD Status</label>
                    <select class="form-control" id="" name="status">
                        <option {{ $codSetting->status === 1 ? 'selected' : '' }} value="1">Enable</option>
                        <option {{ $codSetting->status === 0 ? 'selected' : '' }} value="0">Disable</option>
                    </select>
                </div>

                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
