<div aria-labelledby="list-messages-list" class="tab-pane fade" id="list-messages" role="tabpanel">
    <div class="card border">
        <div class="card-body">
            <form action="{{ route('admin.logo-setting-update') }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <img alt="" src="" width="150px">
                    <br>
                    <label>Logo</label>
                    <input class="form-control" name="logo" type="file" value="">
                    <input class="form-control" name="old_logo" type="hidden" value="">
                </div>

                <div class="form-group">
                    <img alt="" src="{{ asset(@$logoSetting->favicon) }}" width="150px">
                    <br>
                    <label>Favicon</label>
                    <input class="form-control" name="favicon" type="file" value="">
                    <input class="form-control" name="old_favicon" type="hidden" value="">
                </div>

                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
