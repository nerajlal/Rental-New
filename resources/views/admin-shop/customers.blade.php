@extends('admin-shop.layout')

@section('title', 'Customers')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Customers</h1>
        <a href="#" class="p-btn-primary">Add customer</a>
    </div>

    <!-- Filters -->
    <div class="card border-0 shadow-sm mb-3" style="border-radius: 8px;">
        <div class="card-body p-3">
            <input type="search" class="form-control form-control-sm" placeholder="Search customers" style="border-radius: 6px; max-width: 400px;">
        </div>
    </div>

    <!-- Customers Table -->
    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" style="font-size: 14px;">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-4 py-3 fw-semibold text-subdued border-0">Customer</th>
                        <th class="fw-semibold text-subdued border-0">Email</th>
                        <th class="fw-semibold text-subdued border-0">Orders</th>
                        <th class="fw-semibold text-subdued border-0">Amount spent</th>
                        <th class="fw-semibold text-subdued border-0">Location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="cursor: pointer;">
                        <td class="ps-4">
                            <div class="d-flex align-items-center gap-2">
                                <div style="width: 32px; height: 32px; background: #008060; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 12px;">
                                    JS
                                </div>
                                <span class="fw-medium text-dark">John Smith</span>
                            </div>
                        </td>
                        <td class="text-subdued">john.smith@email.com</td>
                        <td class="text-subdued">5 orders</td>
                        <td class="fw-medium">$1,245.00</td>
                        <td class="text-subdued">New York, US</td>
                    </tr>
                    <tr style="cursor: pointer;">
                        <td class="ps-4">
                            <div class="d-flex align-items-center gap-2">
                                <div style="width: 32px; height: 32px; background: #7c3aed; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 12px;">
                                    SJ
                                </div>
                                <span class="fw-medium text-dark">Sarah Johnson</span>
                            </div>
                        </td>
                        <td class="text-subdued">sarah.j@email.com</td>
                        <td class="text-subdued">3 orders</td>
                        <td class="fw-medium">$678.50</td>
                        <td class="text-subdued">Los Angeles, US</td>
                    </tr>
                    <tr style="cursor: pointer;">
                        <td class="ps-4">
                            <div class="d-flex align-items-center gap-2">
                                <div style="width: 32px; height: 32px; background: #ea580c; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 12px;">
                                    MC
                                </div>
                                <span class="fw-medium text-dark">Michael Chen</span>
                            </div>
                        </td>
                        <td class="text-subdued">m.chen@email.com</td>
                        <td class="text-subdued">2 orders</td>
                        <td class="fw-medium">$389.99</td>
                        <td class="text-subdued">San Francisco, US</td>
                    </tr>
                    <tr style="cursor: pointer;">
                        <td class="ps-4">
                            <div class="d-flex align-items-center gap-2">
                                <div style="width: 32px; height: 32px; background: #0891b2; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 12px;">
                                    EW
                                </div>
                                <span class="fw-medium text-dark">Emma Williams</span>
                            </div>
                        </td>
                        <td class="text-subdued">emma.w@email.com</td>
                        <td class="text-subdued">7 orders</td>
                        <td class="fw-medium">$2,150.00</td>
                        <td class="text-subdued">Chicago, US</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="p-3 border-top">
            <small class="text-subdued">Showing 4 customers</small>
        </div>
    </div>
</div>
@endsection
