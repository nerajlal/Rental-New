@extends('admin-shop.layout')

@section('title', 'Content')

@section('content')
<div class="container-fluid p-0">
    <h1 class="h4 fw-bold mb-4 text-dark">Content</h1>

    <div class="row g-3">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 8px;">
                <div class="card-body">
                    <h6 class="fw-bold mb-2">Metaobjects</h6>
                    <p class="text-subdued small mb-0">Create custom data structures for your store.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 8px;">
                <div class="card-body">
                    <h6 class="fw-bold mb-2">Files</h6>
                    <p class="text-subdued small mb-0">Manage images, videos, and documents.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
