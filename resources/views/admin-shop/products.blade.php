@extends('admin-shop.layout')

@section('title', 'Products')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Products</h1>
        <a href="{{ route('shop.products.create') }}" class="p-btn-primary">Add product</a>
    </div>

    <!-- Filters -->
    <div class="card border-0 shadow-sm mb-3" style="border-radius: 8px;">
        <div class="card-body p-3">
            <div class="row g-2">
                <div class="col-md-4">
                    <input type="search" class="form-control form-control-sm" placeholder="Search products" style="border-radius: 6px;">
                </div>
                <div class="col-md-2">
                    <select class="form-select form-select-sm" style="border-radius: 6px;">
                        <option>Status</option>
                        <option>Active</option>
                        <option>Draft</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Table -->
    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" style="font-size: 14px;">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-4 py-3 fw-semibold text-subdued border-0" style="width: 50px;">
                            <input type="checkbox" class="form-check-input">
                        </th>
                        <th class="fw-semibold text-subdued border-0">Product</th>
                        <th class="fw-semibold text-subdued border-0">Status</th>
                        <th class="fw-semibold text-subdued border-0">Inventory</th>
                        <th class="fw-semibold text-subdued border-0">Type</th>
                        <th class="fw-semibold text-subdued border-0">Vendor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="cursor: pointer;">
                        <td class="ps-4"><input type="checkbox" class="form-check-input"></td>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div style="width: 40px; height: 40px; background: #f1f2f3; border-radius: 6px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-gem text-subdued"></i>
                                </div>
                                <div>
                                    <div class="fw-medium text-dark">Gold Plated Bridal Necklace Set</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Active</span></td>
                        <td class="text-subdued">3 in stock</td>
                        <td class="text-subdued">Bridal Sets</td>
                        <td class="text-subdued">Royal Jewels</td>
                    </tr>
                    <tr style="cursor: pointer;">
                        <td class="ps-4"><input type="checkbox" class="form-check-input"></td>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div style="width: 40px; height: 40px; background: #f1f2f3; border-radius: 6px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-gem text-subdued"></i>
                                </div>
                                <div>
                                    <div class="fw-medium text-dark">Diamond Studded Bangles (Set of 4)</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Active</span></td>
                        <td class="text-subdued">5 sets in stock</td>
                        <td class="text-subdued">Bangles</td>
                        <td class="text-subdued">Elegance Collection</td>
                    </tr>
                    <tr style="cursor: pointer;">
                        <td class="ps-4"><input type="checkbox" class="form-check-input"></td>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div style="width: 40px; height: 40px; background: #f1f2f3; border-radius: 6px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-gem text-subdued"></i>
                                </div>
                                <div>
                                    <div class="fw-medium text-dark">Temple Jhumka Earrings</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Draft</span></td>
                        <td class="text-subdued">0 in stock</td>
                        <td class="text-subdued">Earrings</td>
                        <td class="text-subdued">Traditional Ornaments</td>
                    </tr>
                    <tr style="cursor: pointer;">
                        <td class="ps-4"><input type="checkbox" class="form-check-input"></td>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div style="width: 40px; height: 40px; background: #f1f2f3; border-radius: 6px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-gem text-subdued"></i>
                                </div>
                                <div>
                                    <div class="fw-medium text-dark">Antique Maang Tikka</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Active</span></td>
                        <td class="text-subdued">2 in stock</td>
                        <td class="text-subdued">Hair Accessories</td>
                        <td class="text-subdued">Heritage Collection</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="p-3 border-top">
            <small class="text-subdued">Showing 4 products</small>
        </div>
    </div>
</div>
@endsection
