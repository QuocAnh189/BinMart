@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Variant Items</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Variant Item</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.products-variant-item.update', $variantItem->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Variant Name</label>
                                    <input class="form-control" name="variant_name" readonly type="text"
                                        value="{{ $variantItem->productVariant->name }}">
                                </div>

                                <div class="form-group">
                                    <label>Item Name</label>
                                    <input class="form-control" name="name" type="text"
                                        value="{{ $variantItem->name }}">
                                </div>

                                <div class="form-group">
                                    <label>Price <code>(Set 0 for make it free)</code></label>
                                    <input class="form-control" name="price" type="text"
                                        value="{{ $variantItem->price }}">
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Is Default</label>
                                    <select class="form-control" id="inputState" name="is_default">
                                        <option value="">Select</option>
                                        <option {{ $variantItem->is_default == 1 ? 'selected' : '' }} value="1">Yes
                                        </option>
                                        <option {{ $variantItem->is_default == 0 ? 'selected' : '' }} value="0">No
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select class="form-control" id="inputState" name="status">
                                        <option {{ $variantItem->status == 1 ? 'selected' : '' }} value="1">Active
                                        </option>
                                        <option {{ $variantItem->status == 0 ? 'selected' : '' }} value="0">Inactive
                                        </option>
                                    </select>
                                </div>
                                <button class="btn btn-primary" type="submmit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
