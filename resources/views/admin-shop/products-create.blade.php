@extends('admin-shop.layout')

@section('title', 'Add Product')

@section('content')
<div class="container-fluid p-0">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex align-items-center gap-3">
            <a href="{{ route('shop.products') }}" class="text-dark"><i class="fas fa-arrow-left"></i></a>
            <h1 class="h4 fw-bold mb-0 text-dark">Add product</h1>
        </div>
        <div class="d-flex gap-2">
            <button class="p-btn">Discard</button>
            <button class="p-btn-primary">Save</button>
        </div>
    </div>

    <div class="row">
        <!-- Main Column -->
        <div class="col-lg-8">
            <!-- Title & Description -->
            <div class="card border-0 shadow-sm mb-3" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <div class="mb-3">
                        <label class="form-label fw-medium small">Title</label>
                        <input type="text" class="form-control" placeholder="Short sleeve t-shirt">
                    </div>
                    <div class="mb-0">
                        <label class="form-label fw-medium small">Description</label>
                        <textarea class="form-control" rows="6" placeholder="Describe this product"></textarea>
                    </div>
                </div>
            </div>

            <!-- Media -->
            <div class="card border-0 shadow-sm mb-3" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Media</h6>
                    <div class="border rounded p-4 text-center" style="border-style: dashed !important; background: #fafbfb;">
                        <i class="fas fa-cloud-upload-alt fa-2x mb-2 text-subdued"></i>
                        <p class="small text-subdued mb-2">Add images or drag and drop</p>
                        <button class="p-btn btn-sm">Add file</button>
                    </div>
                </div>
            </div>

            <!-- Pricing -->
            <div class="card border-0 shadow-sm mb-3" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Pricing</h6>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-medium small">Price</label>
                            <input type="text" class="form-control" placeholder="0.00">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-medium small">Compare-at price</label>
                            <input type="text" class="form-control" placeholder="0.00">
                        </div>
                    </div>
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" id="chargeTax">
                        <label class="form-check-label small" for="chargeTax">
                            Charge tax on this product
                        </label>
                    </div>
                </div>
            </div>

            <!-- Inventory -->
            <div class="card border-0 shadow-sm mb-3" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Inventory</h6>
                    <div class="mb-3">
                        <label class="form-label fw-medium small">SKU (Stock Keeping Unit)</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-medium small">Barcode (ISBN, UPC, GTIN, etc.)</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="trackQuantity" checked>
                        <label class="form-check-label small" for="trackQuantity">
                            Track quantity
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-medium small">Quantity</label>
                        <input type="number" class="form-control" value="0">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="continueWhenOut">
                        <label class="form-check-label small" for="continueWhenOut">
                            Continue selling when out of stock
                        </label>
                    </div>
                </div>
            </div>

            <!-- Shipping -->
            <div class="card border-0 shadow-sm mb-3" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Shipping</h6>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="physicalProduct" checked>
                        <label class="form-check-label small" for="physicalProduct">
                            This is a physical product
                        </label>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label fw-medium small">Weight</label>
                            <input type="text" class="form-control" placeholder="0.0">
                        </div>
                        <div class="col-md-8">
                            <label class="form-label fw-medium small">Unit</label>
                            <select class="form-select">
                                <option>kg</option>
                                <option>lb</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Variants -->
            <div class="card border-0 shadow-sm mb-3" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Variants</h6>
                    <p class="small text-subdued mb-3">Add variants if this product comes in multiple versions, like different sizes or colors</p>
                    <button class="p-btn btn-sm">Add variant</button>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Status -->
            <div class="card border-0 shadow-sm mb-3" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Product status</h6>
                    <select class="form-select">
                        <option>Active</option>
                        <option>Draft</option>
                    </select>
                </div>
            </div>

            <!-- Product organization -->
            <div class="card border-0 shadow-sm mb-3" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Product organization</h6>
                    <div class="mb-3">
                        <label class="form-label fw-medium small">Product type</label>
                        <input type="text" class="form-control" placeholder="e.g. Shirts">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-medium small">Vendor</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-medium small">Collections</label>
                        <select class="form-select">
                            <option>Select collections</option>
                        </select>
                    </div>
                    <div class="mb-0">
                        <label class="form-label fw-medium small">Tags</label>
                        <input type="text" class="form-control" placeholder="Enter tags">
                    </div>
                </div>
            </div>

            <!-- Online Store -->
            <div class="card border-0 shadow-sm mb-3" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Online Store</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="onlineStore" checked>
                        <label class="form-check-label small" for="onlineStore">
                            Publish to Online Store
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
