@extends('admin-shop.layout')

@section('title', 'Discounts')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Discounts</h1>
        <a href="#" class="p-btn-primary">Create discount</a>
    </div>

    <!-- Discounts Table -->
    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" style="font-size: 14px;">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-4 py-3 fw-semibold text-subdued border-0">Code</th>
                        <th class="fw-semibold text-subdued border-0">Type</th>
                        <th class="fw-semibold text-subdued border-0">Value</th>
                        <th class="fw-semibold text-subdued border-0">Used</th>
                        <th class="fw-semibold text-subdued border-0">Status</th>
                        <th class="fw-semibold text-subdued border-0">Valid Until</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="cursor: pointer;">
                        <td class="ps-4">
                            <div class="fw-medium text-dark">WEDDING20</div>
                            <small class="text-subdued">Wedding season special</small>
                        </td>
                        <td class="text-subdued">Percentage</td>
                        <td class="fw-medium">20% off</td>
                        <td class="text-subdued">23 / 100</td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Active</span></td>
                        <td class="text-subdued">Mar 31, 2026</td>
                    </tr>
                    <tr style="cursor: pointer;">
                        <td class="ps-4">
                            <div class="fw-medium text-dark">FIRSTRENT50</div>
                            <small class="text-subdued">First-time customer discount</small>
                        </td>
                        <td class="text-subdued">Fixed Amount</td>
                        <td class="fw-medium">$50 off</td>
                        <td class="text-subdued">12 / Unlimited</td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Active</span></td>
                        <td class="text-subdued">No expiry</td>
                    </tr>
                    <tr style="cursor: pointer;">
                        <td class="ps-4">
                            <div class="fw-medium text-dark">FESTIVE30</div>
                            <small class="text-subdued">Festival collection launch</small>
                        </td>
                        <td class="text-subdued">Percentage</td>
                        <td class="fw-medium">30% off</td>
                        <td class="text-subdued">45 / 50</td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Active</span></td>
                        <td class="text-subdued">Feb 15, 2026</td>
                    </tr>
                    <tr style="cursor: pointer;">
                        <td class="ps-4">
                            <div class="fw-medium text-dark">NEWYEAR25</div>
                            <small class="text-subdued">New year promotion</small>
                        </td>
                        <td class="text-subdued">Percentage</td>
                        <td class="fw-medium">25% off</td>
                        <td class="text-subdued">89 / 100</td>
                        <td><span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill">Expired</span></td>
                        <td class="text-subdued">Jan 15, 2026</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="p-3 border-top">
            <small class="text-subdued">Showing 4 discount codes</small>
        </div>
    </div>
</div>
@endsection
