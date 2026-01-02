@extends('admin-shop.layout')

@section('title', 'Maintenance & Cleaning')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Maintenance & Cleaning</h1>
        <a href="#" class="p-btn-primary">Schedule Maintenance</a>
    </div>

    <!-- Summary Cards -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Needs Cleaning</small>
                <h3 class="fw-bold mb-1 mt-2 text-warning">8</h3>
                <small class="text-subdued">After return</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">In Repair</small>
                <h3 class="fw-bold mb-1 mt-2 text-danger">3</h3>
                <small class="text-subdued">Unavailable for rent</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Ready to Rent</small>
                <h3 class="fw-bold mb-1 mt-2 text-success">42</h3>
                <small class="text-success">Available now</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Maintenance Cost</small>
                <h3 class="fw-bold mb-1 mt-2">$1,240</h3>
                <small class="text-subdued">This month</small>
            </div>
        </div>
    </div>

    <!-- Maintenance Queue -->
    <div class="card border-0 shadow-sm mb-4" style="border-radius: 8px;">
        <div class="card-body p-0">
            <div class="p-4 border-bottom">
                <h6 class="fw-bold mb-0">Maintenance Queue</h6>
            </div>
            <div class="table-responsive">
                <table class="table table-hover mb-0" style="font-size: 14px;">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4 py-3 fw-semibold text-subdued border-0">Item</th>
                            <th class="fw-semibold text-subdued border-0">Type</th>
                            <th class="fw-semibold text-subdued border-0">Status</th>
                            <th class="fw-semibold text-subdued border-0">Since</th>
                            <th class="fw-semibold text-subdued border-0">Notes</th>
                            <th class="fw-semibold text-subdued border-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="cursor: pointer;">
                            <td class="ps-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Bridal Necklace Set</span>
                                </div>
                            </td>
                            <td class="py-3">
                                <span class="badge bg-info bg-opacity-10 text-info rounded-pill">Cleaning</span>
                            </td>
                            <td class="py-3">
                                <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">In Progress</span>
                            </td>
                            <td class="py-3 text-subdued">2 hours ago</td>
                            <td class="py-3 text-subdued">Post-rental deep clean</td>
                            <td class="py-3">
                                <button class="p-btn btn-sm">Mark Complete</button>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="ps-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Diamond Bangles</span>
                                </div>
                            </td>
                            <td class="py-3">
                                <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill">Repair</span>
                            </td>
                            <td class="py-3">
                                <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill">Urgent</span>
                            </td>
                            <td class="py-3 text-subdued">1 day ago</td>
                            <td class="py-3 text-subdued">Clasp needs replacement</td>
                            <td class="py-3">
                                <button class="p-btn btn-sm">Update Status</button>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="ps-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Temple Earrings</span>
                                </div>
                            </td>
                            <td class="py-3">
                                <span class="badge bg-info bg-opacity-10 text-info rounded-pill">Cleaning</span>
                            </td>
                            <td class="py-3">
                                <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill">Pending</span>
                            </td>
                            <td class="py-3 text-subdued">Just now</td>
                            <td class="py-3 text-subdued">Routine cleaning</td>
                            <td class="py-3">
                                <button class="p-btn btn-sm">Start Cleaning</button>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="ps-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Antique Maang Tikka</span>
                                </div>
                            </td>
                            <td class="py-3">
                                <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Polishing</span>
                            </td>
                            <td class="py-3">
                                <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill">Scheduled</span>
                            </td>
                            <td class="py-3 text-subdued">Tomorrow</td>
                            <td class="py-3 text-subdued">Monthly maintenance</td>
                            <td class="py-3">
                                <button class="p-btn btn-sm">View Details</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="p-3 border-top">
                <small class="text-subdued">Showing 4 items in maintenance queue</small>
            </div>
        </div>
    </div>

    <!-- Maintenance History -->
    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="card-body p-4">
            <h6 class="fw-bold mb-3">Recent Maintenance Activity</h6>
            <div class="timeline">
                <div class="d-flex gap-3 mb-3 pb-3 border-bottom">
                    <div style="width: 8px; height: 8px; background: #10b981; border-radius: 50%; margin-top: 6px;"></div>
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-medium" style="font-size: 14px;">Gold Necklace - Cleaning Complete</span>
                            <small class="text-subdued">2 hours ago</small>
                        </div>
                        <small class="text-subdued">Completed by: Maintenance Team</small>
                    </div>
                </div>
                <div class="d-flex gap-3 mb-3 pb-3 border-bottom">
                    <div style="width: 8px; height: 8px; background: #10b981; border-radius: 50%; margin-top: 6px;"></div>
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-medium" style="font-size: 14px;">Pearl Necklace - Repair Complete</span>
                            <small class="text-subdued">Yesterday</small>
                        </div>
                        <small class="text-subdued">Cost: $85 | Thread replacement</small>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <div style="width: 8px; height: 8px; background: #10b981; border-radius: 50%; margin-top: 6px;"></div>
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-medium" style="font-size: 14px;">Silver Bangles - Polishing Complete</span>
                            <small class="text-subdued">2 days ago</small>
                        </div>
                        <small class="text-subdued">Scheduled maintenance</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
