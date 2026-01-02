@extends('admin-shop.layout')

@section('title', 'Orders')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Orders</h1>
        <button class="p-btn-primary">Create order</button>
    </div>

    <!-- Filters -->
    <div class="card border-0 shadow-sm mb-3" style="border-radius: 8px;">
        <div class="card-body p-3">
            <div class="row g-2">
                <div class="col-md-4">
                    <input type="search" class="form-control form-control-sm" placeholder="Search orders" style="border-radius: 6px;">
                </div>
                <div class="col-md-2">
                    <select class="form-select form-select-sm" style="border-radius: 6px;">
                        <option>All statuses</option>
                        <option>Unfulfilled</option>
                        <option>Fulfilled</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Orders Table -->
    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" style="font-size: 14px;">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-4 py-3 fw-semibold text-subdued border-0" style="width: 50px;">
                            <input type="checkbox" class="form-check-input">
                        </th>
                        <th class="fw-semibold text-subdued border-0">Order</th>
                        <th class="fw-semibold text-subdued border-0">Date</th>
                        <th class="fw-semibold text-subdued border-0">Customer</th>
                        <th class="fw-semibold text-subdued border-0">Total</th>
                        <th class="fw-semibold text-subdued border-0">Payment</th>
                        <th class="fw-semibold text-subdued border-0">Fulfillment</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="cursor: pointer;" onclick="window.location='{{ route('shop.orders.view', 1001) }}'">
                        <td class="ps-4"><input type="checkbox" class="form-check-input" onclick="event.stopPropagation()"></td>
                        <td class="fw-medium text-dark">#1001</td>
                        <td class="text-subdued">Today at 2:45 PM</td>
                        <td class="text-subdued">John Smith</td>
                        <td class="fw-medium">$245.00</td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Paid</span></td>
                        <td><span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Unfulfilled</span></td>
                    </tr>
                    <tr style="cursor: pointer;" onclick="window.location='{{ route('shop.orders.view', 1002) }}'">
                        <td class="ps-4"><input type="checkbox" class="form-check-input" onclick="event.stopPropagation()"></td>
                        <td class="fw-medium text-dark">#1002</td>
                        <td class="text-subdued">Today at 11:20 AM</td>
                        <td class="text-subdued">Sarah Johnson</td>
                        <td class="fw-medium">$89.99</td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Paid</span></td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Fulfilled</span></td>
                    </tr>
                    <tr style="cursor: pointer;" onclick="window.location='{{ route('shop.orders.view', 1003) }}'">
                        <td class="ps-4"><input type="checkbox" class="form-check-input" onclick="event.stopPropagation()"></td>
                        <td class="fw-medium text-dark">#1003</td>
                        <td class="text-subdued">Yesterday at 4:15 PM</td>
                        <td class="text-subdued">Michael Chen</td>
                        <td class="fw-medium">$199.50</td>
                        <td><span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Pending</span></td>
                        <td><span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Unfulfilled</span></td>
                    </tr>
                    <tr style="cursor: pointer;" onclick="window.location='{{ route('shop.orders.view', 1004) }}'">
                        <td class="ps-4"><input type="checkbox" class="form-check-input" onclick="event.stopPropagation()"></td>
                        <td class="fw-medium text-dark">#1004</td>
                        <td class="text-subdued">Jan 1 at 10:30 AM</td>
                        <td class="text-subdued">Emma Williams</td>
                        <td class="fw-medium">$320.00</td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Paid</span></td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Fulfilled</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="p-3 border-top">
            <small class="text-subdued">Showing 4 orders</small>
        </div>
    </div>
</div>
@endsection
