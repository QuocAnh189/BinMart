<div aria-labelledby="list-messages-list" class="tab-pane fade" id="list-messages" role="tabpanel">
    <div class="card border">
        <div class="card-body">
            <form action="{{ route('admin.homepage-banner-section-three') }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <h5>banner one</h5>
                <div class="form-group">
                    <label for="">Status</label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input {{ @$homepage_section_banner_three->banner_one->status == 1 ? 'checked' : '' }}
                            class="custom-switch-input" name="banner_one_status" type="checkbox">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>

                <div class="form-group">
                    <img alt="" src="{{ asset(@$homepage_section_banner_two->banner_one->banner_image) }}"
                        width="150px">
                </div>

                <div class="form-group">
                    <label>Banner Image</label>
                    <input class="form-control" name="banner_one_image" type="file" value="">
                    <input class="form-control" name="banner_one_old_image" type="hidden"
                        value="{{ @$homepage_section_banner_three->banner_one->banner_image }}">
                </div>

                <div class="form-group">
                    <label>Banner url</label>
                    <input class="form-control" name="banner_one_url" type="text"
                        value="{{ @$homepage_section_banner_three->banner_one->banner_url }}">
                </div>

                <hr>

                <h5>banner two</h5>

                <div class="form-group">
                    <label for="">Status</label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input {{ @$homepage_section_banner_three->banner_two->status == 1 ? 'checked' : '' }}
                            class="custom-switch-input" name="banner_two_status" type="checkbox">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>

                <div class="form-group">
                    <img alt="" src="{{ asset(@$homepage_section_banner_three->banner_two->banner_image) }}"
                        width="150px">
                </div>

                <div class="form-group">
                    <label>Banner Image</label>
                    <input class="form-control" name="banner_two_image" type="file" value="">
                    <input class="form-control" name="banner_two_old_image" type="hidden"
                        value="{{ @$homepage_section_banner_three->banner_two->banner_image }}">
                </div>

                <div class="form-group">
                    <label>Banner url</label>
                    <input class="form-control" name="banner_two_url" type="text"
                        value="{{ @$homepage_section_banner_three->banner_two->banner_url }}">
                </div>

                <h5>banner Three</h5>

                <div class="form-group">
                    <label for="">Status</label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input {{ @$homepage_section_banner_three->banner_three->status == 1 ? 'checked' : '' }}
                            class="custom-switch-input" name="banner_three_status" type="checkbox">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>

                <div class="form-group">
                    <img alt="" src="{{ asset(@$homepage_section_banner_three->banner_three->banner_image) }}"
                        width="150px">
                </div>

                <div class="form-group">

                    <label>Banner Image</label>
                    <input class="form-control" name="banner_three_image" type="file" value="">
                    <input class="form-control" name="banner_three_old_image" type="hidden"
                        value="{{ @$homepage_section_banner_three->banner_three->banner_image }}">
                </div>

                <div class="form-group">
                    <label>Banner url</label>
                    <input class="form-control" name="banner_three_url" type="text"
                        value="{{ @$homepage_section_banner_three->banner_three->banner_url }}">
                </div>

                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
