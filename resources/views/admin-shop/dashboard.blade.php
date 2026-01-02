@extends('admin-shop.layout')

@section('title', 'Shop Home')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h4 fw-bold mb-1 text-dark">Welcome back!</h1>
            <p class="text-subdued mb-0">Here's what's happening with your jewelry rental shop today</p>
        </div>
    </div>

    <!-- Key Metrics Row -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Today's Rentals</small>
                <h3 class="fw-bold mb-1 mt-2">8</h3>
                <small class="text-success"><i class="fas fa-arrow-up"></i> 3 from yesterday</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">This Week</small>
                <h3 class="fw-bold mb-1 mt-2">$3,240</h3>
                <small class="text-success"><i class="fas fa-arrow-up"></i> 12% vs last week</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Pending Returns</small>
                <h3 class="fw-bold mb-1 mt-2">5</h3>
                <small class="text-subdued">Expected today</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Active Inventory</small>
                <h3 class="fw-bold mb-1 mt-2">42</h3>
                <small class="text-subdued">Items available</small>
            </div>
        </div>
    </div>

    <!-- Quick Actions & Recent Orders -->
    <div class="row g-3 mb-4">
        <!-- Quick Actions -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Quick Actions</h6>
                    <div class="d-grid gap-2">
                        <a href="{{ route('shop.orders') }}" class="p-btn text-start">
                            <i class="fas fa-plus me-2"></i> Create New Rental
                        </a>
                        <a href="{{ route('shop.products') }}" class="p-btn text-start">
                            <i class="fas fa-gem me-2"></i> Add Jewelry Item
                        </a>
                        <a href="{{ route('shop.customers') }}" class="p-btn text-start">
                            <i class="fas fa-user-plus me-2"></i> Add Customer
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Revenue Chart -->
        <div class="col-md-8">
            <div class="card border-0 shadow-sm" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Revenue (Last 7 days)</h6>
                    <div style="height: 180px; background: linear-gradient(180deg, rgba(0, 128, 96, 0.05) 0%, transparent 100%); border-radius: 6px; position: relative; display: flex; align-items: flex-end; padding: 15px; gap: 6px;">
                        <div style="flex: 1; background: #008060; height: 50%; border-radius: 3px 3px 0 0;"></div>
                        <div style="flex: 1; background: #008060; height: 65%; border-radius: 3px 3px 0 0;"></div>
                        <div style="flex: 1; background: #008060; height: 80%; border-radius: 3px 3px 0 0;"></div>
                        <div style="flex: 1; background: #008060; height: 60%; border-radius: 3px 3px 0 0;"></div>
                        <div style="flex: 1; background: #008060; height: 85%; border-radius: 3px 3px 0 0;"></div>
                        <div style="flex: 1; background: #008060; height: 95%; border-radius: 3px 3px 0 0;"></div>
                        <div style="flex: 1; background: #00a876; height: 100%; border-radius: 3px 3px 0 0;"></div>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <small class="text-subdued">Total: $17,480</small>
                        <small class="text-success"><i class="fas fa-arrow-up"></i> 15% increase</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity & Top Items -->
    <div class="row g-3 mb-4">
        <!-- Recent Orders -->
        <div class="col-md-7">
            <div class="card border-0 shadow-sm" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="fw-bold mb-0">Recent Rentals</h6>
                        <a href="{{ route('shop.orders') }}" class="text-decoration-none" style="color: var(--p-primary); font-size: 14px;">View all</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0" style="font-size: 14px;">
                            <tbody>
                                <tr>
                                    <td class="border-0 py-2">
                                        <span class="fw-medium">#1001</span>
                                        <small class="text-subdued d-block">Today at 2:45 PM</small>
                                    </td>
                                    <td class="border-0 py-2 text-subdued">John Smith</td>
                                    <td class="border-0 py-2 text-end fw-medium">$745.00</td>
                                    <td class="border-0 py-2 text-end">
                                        <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Unfulfilled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-0 py-2">
                                        <span class="fw-medium">#1002</span>
                                        <small class="text-subdued d-block">Today at 11:20 AM</small>
                                    </td>
                                    <td class="border-0 py-2 text-subdued">Sarah Johnson</td>
                                    <td class="border-0 py-2 text-end fw-medium">$89.99</td>
                                    <td class="border-0 py-2 text-end">
                                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill">Fulfilled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-0 py-2">
                                        <span class="fw-medium">#1003</span>
                                        <small class="text-subdued d-block">Yesterday at 4:15 PM</small>
                                    </td>
                                    <td class="border-0 py-2 text-subdued">Michael Chen</td>
                                    <td class="border-0 py-2 text-end fw-medium">$199.50</td>
                                    <td class="border-0 py-2 text-end">
                                        <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Pending</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Performing Items -->
        <div class="col-md-5">
            <div class="card border-0 shadow-sm" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Top Performing Items</h6>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fas fa-gem" style="color: #008060; font-size: 12px;"></i>
                                <small class="fw-medium">Bridal Necklace Set</small>
                            </div>
                            <small class="text-subdued">45 rentals</small>
                        </div>
                        <div class="progress" style="height: 4px; background: #f1f2f3;">
                            <div class="progress-bar" style="width: 90%; background: #008060;"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fas fa-gem" style="color: #008060; font-size: 12px;"></i>
                                <small class="fw-medium">Diamond Bangles</small>
                            </div>
                            <small class="text-subdued">38 rentals</small>
                        </div>
                        <div class="progress" style="height: 4px; background: #f1f2f3;">
                            <div class="progress-bar" style="width: 75%; background: #008060;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fas fa-gem" style="color: #008060; font-size: 12px;"></i>
                                <small class="fw-medium">Antique Maang Tikka</small>
                            </div>
                            <small class="text-subdued">29 rentals</small>
                        </div>
                        <div class="progress" style="height: 4px; background: #f1f2f3;">
                            <div class="progress-bar" style="width: 60%; background: #008060;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alerts & Notifications -->
    <div class="row g-3">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm" style="border-radius: 8px; border-left: 4px solid #008060;">
                <div class="card-body p-3">
                    <div class="d-flex align-items-start gap-3">
                        <i class="fas fa-exclamation-circle" style="color: #008060; font-size: 20px;"></i>
                        <div class="flex-grow-1">
                            <h6 class="fw-bold mb-1" style="font-size: 14px;">5 items due for return today</h6>
                            <p class="text-subdued mb-2" style="font-size: 13px;">Check fulfillment status and send reminders to customers</p>
                            <a href="{{ route('shop.orders') }}" class="text-decoration-none" style="color: var(--p-primary); font-size: 13px; font-weight: 600;">View pending returns →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm" style="border-radius: 8px; border-left: 4px solid #f59e0b;">
                <div class="card-body p-3">
                    <div class="d-flex align-items-start gap-3">
                        <i class="fas fa-bell" style="color: #f59e0b; font-size: 20px;"></i>
                        <div class="flex-grow-1">
                            <h6 class="fw-bold mb-1" style="font-size: 14px;">Low stock alert</h6>
                            <p class="text-subdued mb-2" style="font-size: 13px;">Temple Jhumka Earrings are out of stock. Consider restocking soon.</p>
                            <a href="{{ route('shop.products') }}" class="text-decoration-none" style="color: var(--p-primary); font-size: 13px; font-weight: 600;">Manage inventory →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
