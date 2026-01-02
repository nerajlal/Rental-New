@extends('layouts.admin')

@section('title', 'All Sites')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">All Sites</h1>
        <button class="p-btn-primary rounded-2 border-0 px-3 py-2">
            <i class="fas fa-plus me-2"></i> Create New Site
        </button>
    </div>

    <!-- Filters -->
    <div class="card border-0 shadow-sm mb-4" style="border-radius: 8px;">
        <div class="card-body p-2 d-flex gap-2">
            <div class="search-wrapper flex-grow-1" style="max-width: 300px;">
                <i class="fas fa-search text-subdued"></i>
                <input type="text" class="search-input" placeholder="Search sites...">
            </div>
            <button class="p-btn"><i class="fas fa-filter text-subdued"></i> Status</button>
            <button class="p-btn"><i class="fas fa-sort text-subdued"></i> Sort</button>
        </div>
    </div>

    <!-- Sites Table -->
    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" style="font-size: 14px;">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-4 py-3 border-bottom-0 fw-semibold text-subdued">Site Name</th>
                        <th class="border-bottom-0 fw-semibold text-subdued">Owner</th>
                        <th class="border-bottom-0 fw-semibold text-subdued">Domain</th>
                        <th class="border-bottom-0 fw-semibold text-subdued">Plan</th>
                        <th class="border-bottom-0 fw-semibold text-subdued">Status</th>
                        <th class="border-bottom-0 fw-semibold text-subdued text-end pe-4">Revenue (YTD)</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td class="ps-4 py-3">
                            <a href="#" class="fw-bold text-decoration-none" style="color: #202223;">Joara Jewels</a>
                            <div class="small text-subdued">Created 2 days ago</div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center" style="width:24px; height:24px; font-size:10px;">SJ</div>
                                <span>Sarah Jenkins</span>
                            </div>
                        </td>
                        <td><a href="#" class="text-primary">joara.rentaljewel.com</a></td>
                        <td><span class="badge bg-secondary bg-opacity-10 text-dark border">Basic</span></td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Active</span></td>
                        <td class="text-end pe-4 fw-medium">$1,240.00</td>
                    </tr>
                    <!-- Row 2 -->
                    <tr>
                        <td class="ps-4 py-3">
                            <a href="#" class="fw-bold text-decoration-none" style="color: #202223;">Golden Era Rentals</a>
                            <div class="small text-subdued">Created 1 week ago</div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center" style="width:24px; height:24px; font-size:10px;">MR</div>
                                <span>Mike Ross</span>
                            </div>
                        </td>
                        <td><a href="#" class="text-primary">goldenera.co</a></td>
                        <td><span class="badge bg-warning bg-opacity-10 text-dark border border-warning">Pro</span></td>
                        <td><span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Pending</span></td>
                        <td class="text-end pe-4 fw-medium">$5,400.00</td>
                    </tr>
                    <!-- Row 3 -->
                    <tr>
                        <td class="ps-4 py-3">
                            <a href="#" class="fw-bold text-decoration-none" style="color: #202223;">Luxe Bridal</a>
                            <div class="small text-subdued">Created 1 month ago</div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center" style="width:24px; height:24px; font-size:10px;">JP</div>
                                <span>Jessica P.</span>
                            </div>
                        </td>
                        <td><a href="#" class="text-primary">luxebridal.com</a></td>
                        <td><span class="badge bg-info bg-opacity-10 text-dark border border-info">Enterprise</span></td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Active</span></td>
                        <td class="text-end pe-4 fw-medium">$12,850.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-white border-top border-light py-3 d-flex justify-content-between align-items-center">
            <span class="text-subdued small">Showing 3 of 124 sites</span>
            <div class="d-flex gap-2">
                <button class="p-btn disabled" disabled>Previous</button>
                <button class="p-btn">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection
