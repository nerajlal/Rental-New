@extends('layouts.admin')

@section('title', 'Billing & Plans')

@section('content')
<div class="container-fluid p-0">
    <div class="mb-4">
        <h1 class="h4 fw-bold mb-1 text-dark">Billing & Plans</h1>
        <p class="text-subdued small">Manage subscription plans and view platform revenue.</p>
    </div>

    <!-- Plan Stats -->
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-3 h-100" style="border-radius:8px;">
                <h6 class="text-subdued text-uppercase fw-bold small">Basic Plan ($29/mo)</h6>
                <div class="d-flex justify-content-between align-items-end mt-2">
                    <h2 class="fw-bold mb-0 text-dark">85</h2>
                    <span class="text-success small"><i class="fas fa-arrow-up"></i> 5 new</span>
                </div>
                <div class="progress mt-3" style="height: 4px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
             <div class="card border-0 shadow-sm p-3 h-100" style="border-radius:8px;">
                <h6 class="text-subdued text-uppercase fw-bold small">Pro Plan ($79/mo)</h6>
                <div class="d-flex justify-content-between align-items-end mt-2">
                    <h2 class="fw-bold mb-0 text-dark">32</h2>
                    <span class="text-success small"><i class="fas fa-arrow-up"></i> 2 new</span>
                </div>
                 <div class="progress mt-3" style="height: 4px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
             <div class="card border-0 shadow-sm p-3 h-100" style="border-radius:8px;">
                <h6 class="text-subdued text-uppercase fw-bold small">Enterprise</h6>
                <div class="d-flex justify-content-between align-items-end mt-2">
                    <h2 class="fw-bold mb-0 text-dark">7</h2>
                    <span class="text-subdued small">Stable</span>
                </div>
                 <div class="progress mt-3" style="height: 4px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 10%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Invoices -->
    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="card-header bg-white border-bottom border-light py-3 d-flex justify-content-between align-items-center">
            <h6 class="mb-0 fw-bold">Recent Invoices</h6>
            <button class="p-btn text-subdued"><i class="fas fa-download me-1"></i> Download All</button>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" style="font-size: 14px;">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-4 py-3 fw-semibold text-subdued border-0">Invoice ID</th>
                        <th class="fw-semibold text-subdued border-0">Site</th>
                        <th class="fw-semibold text-subdued border-0">Date</th>
                        <th class="fw-semibold text-subdued border-0">Amount</th>
                        <th class="fw-semibold text-subdued border-0 text-end pe-4">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="ps-4 py-3 fw-medium">INV-2024-001</td>
                        <td>Joara Jewels</td>
                        <td class="text-subdued">Jan 02, 2026</td>
                        <td class="fw-bold">$29.00</td>
                        <td class="text-end pe-4"><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Paid</span></td>
                    </tr>
                    <tr>
                        <td class="ps-4 py-3 fw-medium">INV-2024-002</td>
                        <td>Luxe Rentals</td>
                        <td class="text-subdued">Jan 01, 2026</td>
                        <td class="fw-bold">$299.00</td>
                        <td class="text-end pe-4"><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Paid</span></td>
                    </tr>
                    <tr>
                        <td class="ps-4 py-3 fw-medium">INV-2024-003</td>
                        <td>Golden Era</td>
                        <td class="text-subdued">Dec 28, 2025</td>
                        <td class="fw-bold">$79.00</td>
                        <td class="text-end pe-4"><span class="badge bg-danger bg-opacity-10 text-danger rounded-pill">Overdue</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
