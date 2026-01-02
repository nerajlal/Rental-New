@extends('admin-shop.layout')

@section('title', 'Marketing')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Marketing</h1>
        <a href="#" class="p-btn-primary">Create campaign</a>
    </div>

    <!-- Active Campaigns -->
    <div class="card border-0 shadow-sm mb-4" style="border-radius: 8px;">
        <div class="card-body p-4">
            <h6 class="fw-bold mb-3">Active Campaigns</h6>
            
            <div class="border-bottom pb-3 mb-3">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <div>
                        <h6 class="fw-bold mb-1">Wedding Season Sale - 20% OFF</h6>
                        <small class="text-subdued">Email campaign • Sent to 1,247 customers</small>
                    </div>
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill">Active</span>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <small class="text-subdued d-block">Sent</small>
                        <strong>1,247</strong>
                    </div>
                    <div class="col-md-3">
                        <small class="text-subdued d-block">Opened</small>
                        <strong>412 (33%)</strong>
                    </div>
                    <div class="col-md-3">
                        <small class="text-subdued d-block">Clicked</small>
                        <strong>87 (7%)</strong>
                    </div>
                    <div class="col-md-3">
                        <small class="text-subdued d-block">Converted</small>
                        <strong>23 (2%)</strong>
                    </div>
                </div>
            </div>

            <div class="border-bottom pb-3 mb-3">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <div>
                        <h6 class="fw-bold mb-1">Festive Collection Launch</h6>
                        <small class="text-subdued">Social media • Running on Instagram & Facebook</small>
                    </div>
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill">Active</span>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <small class="text-subdued d-block">Impressions</small>
                        <strong>8,542</strong>
                    </div>
                    <div class="col-md-3">
                        <small class="text-subdued d-block">Engagement</small>
                        <strong>687 (8%)</strong>
                    </div>
                    <div class="col-md-3">
                        <small class="text-subdued d-block">Clicks</small>
                        <strong>142</strong>
                    </div>
                    <div class="col-md-3">
                        <small class="text-subdued d-block">Spend</small>
                        <strong>$245</strong>
                    </div>
                </div>
            </div>

            <div class="pb-3">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <div>
                        <h6 class="fw-bold mb-1">First Rental Discount</h6>
                        <small class="text-subdued">Automated • Triggers for new customers</small>
                    </div>
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill">Active</span>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <small class="text-subdued d-block">Triggered</small>
                        <strong>45 times</strong>
                    </div>
                    <div class="col-md-3">
                        <small class="text-subdued d-block">Used</small>
                        <strong>12 (27%)</strong>
                    </div>
                    <div class="col-md-3">
                        <small class="text-subdued d-block">Revenue</small>
                        <strong>$1,480</strong>
                    </div>
                    <div class="col-md-3">
                        <small class="text-subdued d-block">ROI</small>
                        <strong class="text-success">+340%</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Marketing Activities -->
    <div class="row g-3">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <i class="fas fa-envelope fa-2x mb-3" style="color: var(--p-primary);"></i>
                    <h6 class="fw-bold mb-2">Email Marketing</h6>
                    <p class="text-subdued small mb-3">Send targeted emails to your customer list</p>
                    <a href="#" class="p-btn btn-sm">Create email</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <i class="fas fa-mobile-alt fa-2x mb-3" style="color: var(--p-primary);"></i>
                    <h6 class="fw-bold mb-2">SMS Marketing</h6>
                    <p class="text-subdued small mb-3">Reach customers directly on their phones</p>
                    <a href="#" class="p-btn btn-sm">Create SMS</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <i class="fab fa-facebook fa-2x mb-3" style="color: var(--p-primary);"></i>
                    <h6 class="fw-bold mb-2">Social Ads</h6>
                    <p class="text-subdued small mb-3">Run ads on Facebook and Instagram</p>
                    <a href="#" class="p-btn btn-sm">Create ad</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
