@extends('admin-shop.layout')

@section('title', 'Security Deposits')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Security Deposits</h1>
        <div class="d-flex gap-2">
            <select class="form-select form-select-sm" style="width: auto; border-radius: 6px;">
                <option>All Deposits</option>
                <option>Pending Refund</option>
                <option>Refunded</option>
                <option>Forfeited</option>
            </select>
        </div>
    </div>

    <!-- Summary Cards -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Total Held</small>
                <h3 class="fw-bold mb-1 mt-2">$8,450</h3>
                <small class="text-subdued">Active deposits</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Pending Refund</small>
                <h3 class="fw-bold mb-1 mt-2 text-warning">$2,100</h3>
                <small class="text-subdued">7 customers</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Refunded (MTD)</small>
                <h3 class="fw-bold mb-1 mt-2 text-success">$6,300</h3>
                <small class="text-success">23 refunds</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Forfeited (MTD)</small>
                <h3 class="fw-bold mb-1 mt-2 text-danger">$350</h3>
                <small class="text-subdued">2 claims</small>
            </div>
        </div>
    </div>

    <!-- Deposits Table -->
    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="card-body p-0">
            <div class="p-4 border-bottom">
                <h6 class="fw-bold mb-0">Deposit Management</h6>
            </div>
            <div class="table-responsive">
                <table class="table table-hover mb-0" style="font-size: 14px;">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4 py-3 fw-semibold text-subdued border-0">Order</th>
                            <th class="fw-semibold text-subdued border-0">Customer</th>
                            <th class="fw-semibold text-subdued border-0">Item</th>
                            <th class="fw-semibold text-subdued border-0">Deposit Amount</th>
                            <th class="fw-semibold text-subdued border-0">Status</th>
                            <th class="fw-semibold text-subdued border-0">Return Date</th>
                            <th class="fw-semibold text-subdued border-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="cursor: pointer;">
                            <td class="ps-4 py-3 fw-medium">#1001</td>
                            <td class="py-3 text-subdued">Sarah Johnson</td>
                            <td class="py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Bridal Necklace Set</span>
                                </div>
                            </td>
                            <td class="py-3 fw-medium">$500.00</td>
                            <td class="py-3">
                                <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Pending Refund</span>
                            </td>
                            <td class="py-3 text-subdued">Today</td>
                            <td class="py-3">
                                <button class="p-btn-primary btn-sm">Process Refund</button>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="ps-4 py-3 fw-medium">#1003</td>
                            <td class="py-3 text-subdued">Emma Williams</td>
                            <td class="py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Diamond Bangles</span>
                                </div>
                            </td>
                            <td class="py-3 fw-medium">$300.00</td>
                            <td class="py-3">
                                <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Pending Refund</span>
                            </td>
                            <td class="py-3 text-subdued">Today</td>
                            <td class="py-3">
                                <button class="p-btn-primary btn-sm">Process Refund</button>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="ps-4 py-3 fw-medium">#998</td>
                            <td class="py-3 text-subdued">Michael Chen</td>
                            <td class="py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Temple Earrings</span>
                                </div>
                            </td>
                            <td class="py-3 fw-medium">$150.00</td>
                            <td class="py-3">
                                <span class="badge bg-success bg-opacity-10 text-success rounded-pill">Active</span>
                            </td>
                            <td class="py-3 text-subdued">Jan 10</td>
                            <td class="py-3">
                                <button class="p-btn btn-sm">View Details</button>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="ps-4 py-3 fw-medium">#995</td>
                            <td class="py-3 text-subdued">Raj Patel</td>
                            <td class="py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Gold Necklace</span>
                                </div>
                            </td>
                            <td class="py-3 fw-medium">$200.00</td>
                            <td class="py-3">
                                <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill">Partial Forfeit</span>
                            </td>
                            <td class="py-3 text-subdued">Dec 30 (returned)</td>
                            <td class="py-3">
                                <button class="p-btn btn-sm">View Claim</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="p-3 border-top">
                <small class="text-subdued">Showing 4 recent deposits</small>
            </div>
        </div>
    </div>
</div>
@endsection
