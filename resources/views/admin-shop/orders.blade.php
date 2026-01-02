@extends('admin-shop.layout')

@section('title', 'Orders')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Orders</h1>
        <button class="p-btn-primary">Create order</button>
    </div>

    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="card-body text-center py-5">
            <i class="fas fa-shopping-bag fa-3x mb-3 text-subdued opacity-50"></i>
            <h5 class="fw-bold mb-2">No orders yet</h5>
            <p class="text-subdued small">Orders will appear here once customers start making purchases.</p>
        </div>
    </div>
</div>
@endsection
