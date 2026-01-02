@extends('admin-shop.layout')

@section('title', 'Customers')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Customers</h1>
        <button class="p-btn-primary">Add customer</button>
    </div>

    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="card-body text-center py-5">
            <i class="fas fa-users fa-3x mb-3 text-subdued opacity-50"></i>
            <h5 class="fw-bold mb-2">No customers yet</h5>
            <p class="text-subdued small">Customers who make purchases will appear here.</p>
        </div>
    </div>
</div>
@endsection
