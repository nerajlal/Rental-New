@extends('admin-shop.layout')

@section('title', 'Products')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Products</h1>
        <button class="p-btn-primary">Add product</button>
    </div>

    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="card-body text-center py-5">
            <i class="fas fa-box fa-3x mb-3 text-subdued opacity-50"></i>
            <h5 class="fw-bold mb-2">Add your products</h5>
            <p class="text-subdued small mb-3">Start by stocking your store with products your customers will love.</p>
            <button class="p-btn-primary">Add product</button>
        </div>
    </div>
</div>
@endsection
