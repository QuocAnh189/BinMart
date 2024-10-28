<div aria-labelledby="list-pusher-list" class="tab-pane fade" id="pusher-setting" role="tabpanel">
    <div class="card border">
        <div class="card-body">
            <form action="{{ route('admin.pusher-setting-update') }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <input class="form-control d-none" name="id" type="text" value="{{ $pusherSetting?->id }}">
                <div class="form-group">
                    <label>Puhser app id</label>
                    <input class="form-control" name="pusher_app_id" type="text"
                        value="{{ $pusherSetting?->pusher_app_id }}">
                </div>

                <div class="form-group">
                    <label>Puhser key</label>
                    <input class="form-control" name="pusher_key" type="text"
                        value="{{ $pusherSetting?->pusher_key }}">
                </div>

                <div class="form-group">
                    <label>Puhser secret</label>
                    <input class="form-control" name="pusher_secret" type="text"
                        value="{{ $pusherSetting?->pusher_secret }}">
                </div>

                <div class="form-group">
                    <label>Puhser cluster</label>
                    <input class="form-control" name="pusher_cluster" type="text"
                        value="{{ $pusherSetting?->pusher_cluster }}">
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
