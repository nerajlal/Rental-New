@extends('admin-shop.layout')

@section('title', 'Discounts')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Discounts</h1>
        <button class="p-btn-primary">Create discount</button>
    </div>

    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="card-body text-center py-5">
            <i class="fas fa-tags fa-3x mb-3 text-subdued opacity-50"></i>
            <h5 class="fw-bold mb-2">Manage discounts</h5>
            <p class="text-subdued small mb-3">Create discount codes and automatic discounts.</p>
            <button class="p-btn-primary">Create discount</button>
        </div>
    </div>
</div>
@endsection
