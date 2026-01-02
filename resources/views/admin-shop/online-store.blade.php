@extends('admin-shop.layout')

@section('title', 'Online Store')

@section('content')
<div class="container-fluid p-0">
    <h1 class="h4 fw-bold mb-4 text-dark">Online Store</h1>

    <div class="row g-3">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 8px;">
                <div class="card-body">
                    <i class="fas fa-paint-brush mb-3" style="font-size: 24px; color: var(--p-primary);"></i>
                    <h6 class="fw-bold mb-2">Themes</h6>
                    <p class="text-subdued small mb-0">Customize the look of your online store.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 8px;">
                <div class="card-body">
                    <i class="fas fa-blog mb-3" style="font-size: 24px; color: var(--p-primary);"></i>
                    <h6 class="fw-bold mb-2">Blog posts</h6>
                    <p class="text-subdued small mb-0">Write blog posts for your store.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 8px;">
                <div class="card-body">
                    <i class="fas fa-file mb-3" style="font-size: 24px; color: var(--p-primary);"></i>
                    <h6 class="fw-bold mb-2">Pages</h6>
                    <p class="text-subdued small mb-0">Create pages for your store.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
