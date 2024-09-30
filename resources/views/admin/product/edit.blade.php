@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Preview</label>
                                    <br>
                                    <img alt="" src="{{ asset($product->thumb_image) }}" style="width:200px">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input class="form-control" name="image" type="file">
                                </div>

                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" name="name" type="text" value="{{ $product->name }}">
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputState">Category</label>
                                            <select class="form-control main-category" id="inputState" name="category">
                                                <option value="">Select</option>
                                                @foreach ($categories as $category)
                                                    <option {{ $category->id == $product->category_id ? 'selected' : '' }}
                                                        value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputState">Sub Category</label>
                                            <select class="form-control sub-category" id="inputState" name="sub_category">
                                                <option value="">Select</option>
                                                @foreach ($subCategories as $subCategory)
                                                    <option
                                                        {{ $subCategory->id == $product->sub_category_id ? 'selected' : '' }}
                                                        value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputState">Child Category</label>
                                            <select class="form-control child-category" id="inputState"
                                                name="child_category">
                                                <option value="">Select</option>
                                                @foreach ($childCategories as $childCategory)
                                                    <option
                                                        {{ $childCategory->id == $product->child_category_id ? 'selected' : '' }}
                                                        value="{{ $childCategory->id }}">{{ $childCategory->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Brand</label>
                                    <select class="form-control" id="inputState" name="brand">
                                        <option value="">Select</option>
                                        @foreach ($brands as $brand)
                                            <option {{ $brand->id == $product->brand_id ? 'selected' : '' }}
                                                value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>SKU</label>
                                    <input class="form-control" name="sku" type="text" value="{{ $product->sku }}">
                                </div>

                                <div class="form-group">
                                    <label>Price</label>
                                    <input class="form-control" name="price" type="text"
                                        value="{{ $product->price }}">
                                </div>

                                <div class="form-group">
                                    <label>Offer Price</label>
                                    <input class="form-control" name="offer_price" type="text"
                                        value="{{ $product->offer_price }}">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Offer Start Date</label>
                                            <input class="form-control datepicker" name="offer_start_date" type="text"
                                                value="{{ $product->offer_start_date }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Offer End Date</label>
                                            <input class="form-control datepicker" name="offer_end_date" type="text"
                                                value="{{ $product->offer_end_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Stock Quantity</label>
                                    <input class="form-control" min="0" name="qty" type="number"
                                        value="{{ $product->qty }}">
                                </div>

                                <div class="form-group">
                                    <label>Video Link</label>
                                    <input class="form-control" name="video_link" type="text"
                                        value="{{ $product->video_link }}">
                                </div>


                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea class="form-control" name="short_description">{!! $product->short_description !!}</textarea>
                                </div>


                                <div class="form-group">
                                    <label>Long Description</label>
                                    <textarea class="form-control summernote" name="long_description">{!! $product->long_description !!}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Product Type</label>
                                    <select class="form-control" id="inputState" name="product_type">
                                        <option value="">Select</option>
                                        <option {{ $product->product_type == 'new_arrival' ? 'selected' : '' }}
                                            value="new_arrival">New Arrival</option>
                                        <option {{ $product->product_type == 'featured_product' ? 'selected' : '' }}
                                            value="featured_product">Featured</option>
                                        <option {{ $product->product_type == 'top_product' ? 'selected' : '' }}
                                            value="top_product">Top Product</option>
                                        <option {{ $product->product_type == 'best_product' ? 'selected' : '' }}
                                            value="best_product">Best Product</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Seo Title</label>
                                    <input class="form-control" name="seo_title" type="text"
                                        value="{{ $product->seo_title }}">
                                </div>

                                <div class="form-group">
                                    <label>Seo Description</label>
                                    <textarea class="form-control" name="seo_description">{!! $product->seo_description !!}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select class="form-control" id="inputState" name="status">
                                        <option {{ $product->status == 1 ? 'selected' : '' }} value="1">Active
                                        </option>
                                        <option {{ $product->status == 0 ? 'selected' : '' }} value="0">Inactive
                                        </option>
                                    </select>
                                </div>
                                <button class="btn btn-primary" type="submmit">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('body').on('change', '.main-category', function(e) {
                $('.child-category').html('<option value="">Select</option>')
                let id = $(this).val();
                $.ajax({
                    method: 'GET',
                    url: "{{ route('admin.product.get-subcategories') }}",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('.sub-category').html('<option value="">Select</option>')

                        $.each(data, function(i, item) {
                            $('.sub-category').append(
                                `<option value="${item.id}">${item.name}</option>`)
                        })
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                })
            })

            /** get child categories **/
            $('body').on('change', '.sub-category', function(e) {
                let id = $(this).val();
                $.ajax({
                    method: 'GET',
                    url: "{{ route('admin.product.get-child-categories') }}",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('.child-category').html('<option value="">Select</option>')

                        $.each(data, function(i, item) {
                            $('.child-category').append(
                                `<option value="${item.id}">${item.name}</option>`)
                        })
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                })
            })
        })
    </script>
@endpush
