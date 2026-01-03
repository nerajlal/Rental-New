@php
    $productCount = $data['products_count'] ?? 4;
    // Mock products since Product model doesn't exist yet
    $products = [
        (object)['id' => 1, 'name' => 'Rose Gold Bracelet', 'price' => 1200, 'images' => ['/images/product-1.jpg']],
        (object)['id' => 2, 'name' => 'Sapphire Ring', 'price' => 2500, 'images' => ['/images/product-2.jpg']],
        (object)['id' => 3, 'name' => 'Emerald Necklace', 'price' => 3800, 'images' => ['/images/product-3.jpg']],
        (object)['id' => 4, 'name' => 'Diamond Studs', 'price' => 1500, 'images' => ['/images/product-4.jpg']],
        (object)['id' => 5, 'name' => 'Ruby Pendant', 'price' => 2100, 'images' => ['/images/product-5.jpg']],
    ];
    $products = array_slice($products, 0, $productCount);
@endphp

<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="font-playfair display-5 mb-2" data-setting-key="heading">{{ $data['heading'] ?? 'Featured Collection' }}</h2>
            <div style="width: 60px; height: 3px; background-color: var(--p-primary); margin: 0 auto;"></div>
        </div>

        <div class="row g-4">
            @foreach($products as $product)
                <div class="col-6 col-md-3">
                    <div class="card h-100 border-0 bg-transparent product-card">
                        <div class="position-relative overflow-hidden mb-3" style="border-radius: 4px;">
                            <a href="{{ route('shop.site.product.view', $product->id) }}">
                                <img src="{{ $product->images[0] ?? '/images/placeholder-jewelry.jpg' }}" 
                                     class="card-img-top w-100" 
                                     alt="{{ $product->name }}"
                                     style="aspect-ratio: 1; object-fit: cover;">
                            </a>
                            <div class="product-overlay position-absolute bottom-0 start-0 w-100 p-2 d-flex justify-content-center gap-2" 
                                 style="transform: translateY(100%); transition: transform 0.3s ease;">
                                <button class="btn btn-light btn-sm rounded-circle shadow-sm"><i class="fas fa-shopping-bag"></i></button>
                                <button class="btn btn-light btn-sm rounded-circle shadow-sm"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3 class="h6 mb-1 fw-bold">
                                <a href="{{ route('shop.site.product.view', $product->id) }}" class="text-decoration-none text-dark">{{ $product->name }}</a>
                            </h3>
                            <div class="text-muted small mb-2">From ₹{{ number_format($product->price ?? 1000) }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <a href="/shop" class="btn btn-outline-dark px-5 py-2 rounded-0 border-2 fw-bold">SHOP COLLECTION</a>
        </div>
    </div>
</section>

<style>
.product-card:hover .product-overlay {
    transform: translateY(-10px);
}
</style>
