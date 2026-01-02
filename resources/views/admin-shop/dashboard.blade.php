@extends('admin-shop.layout')

@section('title', 'Shop Home')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h4 fw-bold mb-1 text-dark">Good morning, {{ Auth::user()->name }}</h1>
            <p class="text-subdued small mb-0">Here's what's happening in your shop today.</p>
        </div>
        <button class="p-btn">View Store</button>
    </div>

    <!-- Onboarding / Status Card -->
    <div class="card border-0 shadow-sm mb-4" style="border-radius: 8px;">
        <div class="card-body p-4 d-flex align-items-center justify-content-between">
            <div>
                <h5 class="fw-bold mb-1">Your shop is Active</h5>
                <p class="text-subdued small mb-0">You are ready to start adding products and accepting orders.</p>
            </div>
            <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2">Live</span>
        </div>
    </div>

    <!-- Mock Metrics -->
    <div class="row g-3">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-3 h-100" style="border-radius: 8px;">
                <h6 class="text-subdued text-uppercase fw-bold small">Total Sales</h6>
                <h2 class="fw-bold mb-0 text-dark">$0.00</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-3 h-100" style="border-radius: 8px;">
                <h6 class="text-subdued text-uppercase fw-bold small">Total Orders</h6>
                <h2 class="fw-bold mb-0 text-dark">0</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-3 h-100" style="border-radius: 8px;">
                 <h6 class="text-subdued text-uppercase fw-bold small">Products</h6>
                <h2 class="fw-bold mb-0 text-dark">0</h2>
            </div>
        </div>
    </div>
</div>
@endsection
