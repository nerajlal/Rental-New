@extends('layouts.admin')

@section('title', 'Platform Reports')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Platform Report</h1>
        <div class="d-flex gap-2">
            <button class="p-btn">Last 30 Days</button>
            <button class="p-btn-primary">Export PDF</button>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm p-4 h-100" style="border-radius: 8px;">
                 <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="fw-bold mb-0">Revenue Growth</h6>
                </div>
                <!-- Mock Chart Area -->
                <div class="bg-light rounded d-flex align-items-center justify-content-center text-subdued" style="height: 300px;">
                    <i class="fas fa-chart-area fa-3x mb-2"></i>
                    <p>Chart Rendering Area</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm p-0 h-100" style="border-radius: 8px;">
                <div class="card-header bg-white border-bottom border-light py-3 fw-bold">
                    Top Performing Sites
                </div>
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                        <span>1. Joara Jewels</span>
                        <span class="fw-bold text-dark">$12,400</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                        <span>2. Luxe Rentals</span>
                        <span class="fw-bold text-dark">$9,230</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                        <span>3. Diamond Co</span>
                        <span class="fw-bold text-dark">$8,100</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                        <span>4. Ruby Rentals</span>
                        <span class="fw-bold text-dark">$5,600</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
