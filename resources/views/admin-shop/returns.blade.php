@extends('admin-shop.layout')

@section('title', 'Returns Management')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Returns Management</h1>
        <div class="d-flex gap-2">
            <select class="form-select form-select-sm" style="width: auto; border-radius: 6px;">
                <option>All Returns</option>
                <option>Due Today</option>
                <option>Overdue</option>
                <option>Completed</option>
            </select>
        </div>
    </div>

    <!-- Summary Cards -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Due Today</small>
                <h3 class="fw-bold mb-1 mt-2 text-danger">5</h3>
                <small class="text-subdued">Send reminders</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Overdue</small>
                <h3 class="fw-bold mb-1 mt-2 text-warning">2</h3>
                <small class="text-subdued">Needs attention</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">This Week</small>
                <h3 class="fw-bold mb-1 mt-2">12</h3>
                <small class="text-subdued">Expected returns</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Return Rate</small>
                <h3 class="fw-bold mb-1 mt-2 text-success">98.5%</h3>
                <small class="text-success"><i class="fas fa-check-circle"></i> On time</small>
            </div>
        </div>
    </div>

    <!-- Pending Returns Table -->
    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="card-body p-0">
            <div class="p-4 border-bottom">
                <h6 class="fw-bold mb-0">Pending Returns</h6>
            </div>
            <div class="table-responsive">
                <table class="table table-hover mb-0" style="font-size: 14px;">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4 py-3 fw-semibold text-subdued border-0">Order</th>
                            <th class="fw-semibold text-subdued border-0">Item</th>
                            <th class="fw-semibold text-subdued border-0">Customer</th>
                            <th class="fw-semibold text-subdued border-0">Return Date</th>
                            <th class="fw-semibold text-subdued border-0">Deposit</th>
                            <th class="fw-semibold text-subdued border-0">Status</th>
                            <th class="fw-semibold text-subdued border-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="cursor: pointer;">
                            <td class="ps-4 py-3 fw-medium">#1001</td>
                            <td class="py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Bridal Necklace Set</span>
                                </div>
                            </td>
                            <td class="py-3 text-subdued">Sarah Johnson</td>
                            <td class="py-3">
                                <span class="text-danger fw-medium">Today</span>
                            </td>
                            <td class="py-3 fw-medium">$500</td>
                            <td class="py-3">
                                <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Pending</span>
                            </td>
                            <td class="py-3">
                                <button class="p-btn btn-sm">Process Return</button>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="ps-4 py-3 fw-medium">#1003</td>
                            <td class="py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Diamond Bangles</span>
                                </div>
                            </td>
                            <td class="py-3 text-subdued">Emma Williams</td>
                            <td class="py-3">
                                <span class="text-danger fw-medium">Today</span>
                            </td>
                            <td class="py-3 fw-medium">$300</td>
                            <td class="py-3">
                                <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Pending</span>
                            </td>
                            <td class="py-3">
                                <button class="p-btn btn-sm">Process Return</button>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="ps-4 py-3 fw-medium">#998</td>
                            <td class="py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Temple Jhumka Earrings</span>
                                </div>
                            </td>
                            <td class="py-3 text-subdued">Michael Chen</td>
                            <td class="py-3">
                                <span class="text-warning fw-medium">2 days overdue</span>
                            </td>
                            <td class="py-3 fw-medium">$150</td>
                            <td class="py-3">
                                <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill">Overdue</span>
                            </td>
                            <td class="py-3">
                                <button class="p-btn btn-sm">Send Reminder</button>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="ps-4 py-3 fw-medium">#1005</td>
                            <td class="py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Antique Maang Tikka</span>
                                </div>
                            </td>
                            <td class="py-3 text-subdued">Priya Sharma</td>
                            <td class="py-3">
                                <span class="text-subdued">Tomorrow</span>
                            </td>
                            <td class="py-3 fw-medium">$200</td>
                            <td class="py-3">
                                <span class="badge bg-info bg-opacity-10 text-info rounded-pill">Scheduled</span>
                            </td>
                            <td class="py-3">
                                <button class="p-btn btn-sm">View Details</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="p-3 border-top">
                <small class="text-subdued">Showing 4 pending returns</small>
            </div>
        </div>
    </div>
</div>
@endsection
