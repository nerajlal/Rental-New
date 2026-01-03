@extends('admin-shop.themes.jewelry-luxe.layout')

@section('content')
<div class="container py-5">
    <div class="row g-5">
        <div class="col-md-6">
            <div class="position-relative overflow-hidden rounded bg-light" style="min-height: 500px;">
                @if(isset($data['product']->images[0]))
                    <img src="{{ $data['product']->images[0] }}" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" alt="{{ $data['product']->name }}">
                @else
                    <div class="d-flex align-items-center justify-content-center h-100 text-muted">
                        <i class="fas fa-image fa-4x opacity-25"></i>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <h1 class="font-playfair display-5 mb-3">{{ $data['product']->name }}</h1>
            <div class="h3 text-primary mb-4">₹{{ number_format($data['product']->price) }}</div>
            
            <p class="lead text-subdued mb-5">{{ $data['product']->description }}</p>
            
            <div class="d-flex gap-3 mb-5">
                <button class="btn btn-dark btn-lg rounded-0 px-5 flex-grow-1">RENT NOW</button>
                <button class="btn btn-outline-dark btn-lg rounded-0 px-4"><i class="far fa-heart"></i></button>
            </div>
            
            <div class="border-top pt-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <i class="fas fa-truck text-muted"></i>
                    <span>Free shipping & pickup</span>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <i class="fas fa-undo text-muted"></i>
                    <span>Easy returns</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
