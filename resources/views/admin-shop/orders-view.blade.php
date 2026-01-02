@extends('admin-shop.layout')

@section('title', 'Order #1001')

@section('content')
<div class="container-fluid p-0">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex align-items-center gap-3">
            <a href="{{ route('shop.orders') }}" class="text-dark"><i class="fas fa-arrow-left"></i></a>
            <div>
                <h1 class="h4 fw-bold mb-0 text-dark">#1001</h1>
                <small class="text-subdued">Today at 2:45 PM</small>
            </div>
        </div>
        <div class="d-flex gap-2">
            <button class="p-btn">Refund</button>
            <button class="p-btn-primary">Fulfill items</button>
        </div>
    </div>

    <div class="row">
        <!-- Main Column -->
        <div class="col-lg-8">
            <!-- Unfulfilled Card -->
            <div class="card border-0 shadow-sm mb-3" style="border-radius: 8px;">
                <div class="card-body p-0">
                    <div class="p-3 border-bottom d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fw-bold mb-1">Unfulfilled (2)</h6>
                            <small class="text-subdued">Shipping to 123 Main St, New York, NY 10001</small>
                        </div>
                        <button class="p-btn btn-sm">Fulfill items</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0" style="font-size: 14px;">
                            <tbody>
                                <tr>
                                    <td class="border-0 ps-3" style="width: 60px;">
                                        <div style="width: 50px; height: 50px; background: #f1f2f3; border-radius: 6px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-image text-subdued"></i>
                                        </div>
                                    </td>
                                    <td class="border-0">
                                        <div class="fw-medium">Classic Leather Jacket</div>
                                        <small class="text-subdued">SKU: CLJ-001</small>
                                    </td>
                                    <td class="border-0 text-end">
                                        $120.00 × 1
                                    </td>
                                    <td class="border-0 text-end pe-3">
                                        <strong>$120.00</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-0 ps-3">
                                        <div style="width: 50px; height: 50px; background: #f1f2f3; border-radius: 6px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-image text-subdued"></i>
                                        </div>
                                    </td>
                                    <td class="border-0">
                                        <div class="fw-medium">Wireless Bluetooth Headphones</div>
                                        <small class="text-subdued">SKU: WBH-002</small>
                                    </td>
                                    <td class="border-0 text-end">
                                        $89.99 × 1
                                    </td>
                                    <td class="border-0 text-end pe-3">
                                        <strong>$89.99</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Payment Status -->
            <div class="card border-0 shadow-sm mb-3" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h6 class="fw-bold mb-0">Payment</h6>
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill">Paid</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-subdued">Subtotal</span>
                        <span>$209.99</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-subdued">Shipping</span>
                        <span>$15.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-subdued">Tax</span>
                        <span>$20.01</span>
                    </div>
                    <div class="border-top pt-2 mt-2">
                        <div class="d-flex justify-content-between">
                            <strong>Total</strong>
                            <strong>$245.00</strong>
                        </div>
                    </div>
                    <div class="mt-3 pt-3 border-top">
                        <small class="text-subdued">Paid by customer via Credit Card</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Customer -->
            <div class="card border-0 shadow-sm mb-3" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Customer</h6>
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div style="width: 36px; height: 36px; background: var(--p-primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 14px;">
                            JS
                        </div>
                        <div>
                            <div class="fw-medium">John Smith</div>
                            <small class="text-subdued">2 orders</small>
                        </div>
                    </div>
                    <div class="mb-2">
                        <small class="text-subdued d-block">Contact information</small>
                        <small>john.smith@email.com</small>
                    </div>
                    <div>
                        <small class="text-subdued d-block">Shipping address</small>
                        <small>
                            123 Main St<br>
                            New York, NY 10001<br>
                            United States
                        </small>
                    </div>
                </div>
            </div>

            <!-- Notes -->
            <div class="card border-0 shadow-sm mb-3" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Notes</h6>
                    <textarea class="form-control" rows="3" placeholder="Add notes about this order"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
