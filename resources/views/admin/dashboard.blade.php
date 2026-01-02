@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<!-- Welcome Section -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 fw-bold text-dark mb-0">Home</h1>
    <div class="d-flex align-items-center gap-2">
        <span class="small text-subdued bg-white px-3 py-2 rounded shadow-sm border border-0">
            {{ date('M d, Y') }}
        </span>
    </div>
</div>

<!-- Metrics Grid -->
<div class="row g-3 mb-4">
    <!-- Total Sales -->
    <div class="col-12 col-md-4"> <!-- Simplified: Shopify often uses 3 cols or list view -->
        <div class="polaris-card h-100 position-relative">
            <a href="{{ route('admin.analytics') }}" class="stretched-link"></a>
            <div class="d-flex justify-content-between align-items-start mb-2">
                <h3 class="small fw-bold text-dark mb-0">Total Sales</h3>
                <i class="fas fa-ellipsis-h text-subdued small"></i>
            </div>
            <span class="fs-4 fw-bold text-dark d-block mb-1">₹45,231.00</span>
            <div class="d-flex align-items-center small text-subdued">
                <span class="text-success fw-medium me-1"><i class="fas fa-arrow-up"></i> 12%</span> 
                vs last period
            </div>
        </div>
    </div>

    <!-- Total Orders -->
    <div class="col-12 col-md-4">
        <div class="polaris-card h-100 position-relative">
            <a href="{{ route('admin.orders') }}" class="stretched-link"></a>
             <div class="d-flex justify-content-between align-items-start mb-2">
                <h3 class="small fw-bold text-dark mb-0">Total Orders</h3>
                <i class="fas fa-ellipsis-h text-subdued small"></i>
            </div>
            <span class="fs-4 fw-bold text-dark d-block mb-1">124</span>
             <div class="d-flex align-items-center small text-subdued">
                <span class="text-success fw-medium me-1"><i class="fas fa-arrow-up"></i> 8%</span> 
                vs last period
            </div>
        </div>
    </div>

    <!-- Customers -->
    <div class="col-12 col-md-4">
        <div class="polaris-card h-100 position-relative">
            <a href="{{ route('admin.customers') }}" class="stretched-link"></a>
             <div class="d-flex justify-content-between align-items-start mb-2">
                <h3 class="small fw-bold text-dark mb-0">New Customers</h3>
                <i class="fas fa-ellipsis-h text-subdued small"></i>
            </div>
            <span class="fs-4 fw-bold text-dark d-block mb-1">45</span>
             <div class="d-flex align-items-center small text-subdued">
                <span class="text-success fw-medium me-1"><i class="fas fa-arrow-up"></i> 4%</span> 
                vs last period
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <!-- Recent Orders -->
    <div class="col-12 col-lg-8">
        <div class="polaris-card h-100 p-0 overflow-hidden"> <!-- Remove padding for table header -->
            <div class="p-3 border-bottom d-flex justify-content-between align-items-center">
                <h2 class="h6 fw-bold text-dark mb-0">Recent Orders</h2>
                <a href="{{ route('admin.orders') }}" class="small text-decoration-none fw-medium" style="color: var(--p-primary);">View all</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" style="font-size: 0.9rem;">
                    <thead class="bg-light text-subdued small text-uppercase" style="background-color: #fafbfb;">
                        <tr>
                            <th class="px-3 py-2 border-0 fw-bold">Order</th>
                            <th class="px-3 py-2 border-0 fw-bold">Customer</th>
                            <th class="px-3 py-2 border-0 fw-bold">Total</th>
                            <th class="px-3 py-2 border-0 fw-bold">Payment</th>
                            <th class="px-3 py-2 border-0 fw-bold text-end">Items</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-3 py-3 fw-bold text-dark">#1024</td>
                            <td class="px-3 py-3 text-dark">Sarah Jenkins</td>
                            <td class="px-3 py-3 text-dark">₹8,400</td>
                            <td class="px-3 py-3"><span class="badge bg-warning bg-opacity-25 text-warning-emphasis px-2 rounded-pill fw-medium border border-warning border-opacity-25">Pending</span></td>
                            <td class="px-3 py-3 text-end text-subdued">3 items</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-3 fw-bold text-dark">#1023</td>
                            <td class="px-3 py-3 text-dark">Mike Ross</td>
                            <td class="px-3 py-3 text-dark">₹2,100</td>
                            <td class="px-3 py-3"><span class="badge bg-secondary bg-opacity-25 text-secondary-emphasis px-2 rounded-pill fw-medium border border-secondary border-opacity-25">Paid</span></td>
                            <td class="px-3 py-3 text-end text-subdued">1 item</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-3 fw-bold text-dark">#1022</td>
                            <td class="px-3 py-3 text-dark">Emma Watson</td>
                            <td class="px-3 py-3 text-dark">₹12,500</td>
                            <td class="px-3 py-3"><span class="badge bg-secondary bg-opacity-25 text-secondary-emphasis px-2 rounded-pill fw-medium border border-secondary border-opacity-25">Paid</span></td>
                            <td class="px-3 py-3 text-end text-subdued">4 items</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Things to do / Low Stock -->
    <div class="col-12 col-lg-4">
        <div class="polaris-card h-100">
            <h2 class="h6 fw-bold text-dark mb-3">Inventory Alerts</h2>
            
            <div class="d-flex flex-column gap-3">
                <div class="p-0">
                    <div class="d-flex justify-content-between align-items-start mb-1">
                        <span class="small fw-semibold text-dark">Black Musk (50ml)</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-10 rounded-1">2 left</span>
                    </div>
                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar bg-danger" style="width: 10%"></div>
                    </div>
                    <button class="btn btn-sm btn-light w-100 mt-2 border text-subdued hover-shadow-sm" style="font-size: 13px;">Restock Inventory</button>
                </div>

                <div class="p-0">
                    <div class="d-flex justify-content-between align-items-start mb-1">
                        <span class="small fw-semibold text-dark">Amber Wood (100ml)</span>
                        <span class="badge bg-warning bg-opacity-10 text-warning-emphasis border border-warning border-opacity-10 rounded-1">5 left</span>
                    </div>
                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar bg-warning" style="width: 25%"></div>
                    </div>
                     <button class="btn btn-sm btn-light w-100 mt-2 border text-subdued hover-shadow-sm" style="font-size: 13px;">Restock Inventory</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
