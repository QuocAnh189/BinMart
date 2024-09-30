<div aria-labelledby="list-settings-list" class="tab-pane fade" id="list-settings" role="tabpanel">
    <div class="card border">
        <div class="card-body">
            <form action="{{ route('admin.homepage-banner-section-four') }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="">Status</label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input {{ @$homepage_section_banner_four->banner_one->status == 1 ? 'checked' : '' }}
                            class="custom-switch-input" name="status" type="checkbox">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>

                <div class="form-group">
                    <img alt="" src="{{ asset(@$homepage_section_banner_four->banner_one->banner_image) }}"
                        width="150px">
                </div>

                <div class="form-group">
                    <label>Banner Image</label>
                    <input class="form-control" name="banner_image" type="file" value="">
                    <input class="form-control" name="banner_old_image" type="hidden"
                        value="{{ @$homepage_section_banner_four->banner_one->banner_image }}">
                </div>

                <div class="form-group">
                    <label>Banner url</label>
                    <input class="form-control" name="banner_url" type="text"
                        value="{{ @$homepage_section_banner_four->banner_one->banner_url }}">
                </div>

                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
