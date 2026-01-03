@php
    $data = $data ?? [];
    $heading = $data['heading'] ?? 'Featured Collection';
    $subheading = $data['subheading'] ?? 'Discover our most popular jewelry pieces';
    $productsCount = $data['products_count'] ?? 4;
    
    // Sample jewelry products (will be replaced with real data later)
    $products = [
        ['name' => 'Bridal Necklace Set', 'description' => 'Exquisite gold-plated design', 'price' => '$450/week'],
        ['name' => 'Diamond Bangles', 'description' => 'Sparkling cubic zirconia', 'price' => '$300/week'],
        ['name' => 'Temple Jhumka', 'description' => 'Traditional design', 'price' => '$150/week'],
        ['name' => 'Maang Tikka', 'description' => 'Antique finish', 'price' => '$200/week'],
        ['name' => 'Pearl Necklace', 'description' => 'Elegant and timeless', 'price' => '$280/week'],
        ['name' => 'Kundan Earrings', 'description' => 'Traditional Kundan work', 'price' => '$180/week'],
    ];
    
    $displayProducts = array_slice($products, 0, $productsCount);
@endphp

<section class="featured-products-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-2" data-setting-key="heading">{{ $heading }}</h2>
            <p class="text-subdued" data-setting-key="subheading">{{ $subheading }}</p>
        </div>
        
        <div class="row g-4">
            @foreach($displayProducts as $product)
                <div class="col-md-{{ 12 / min($productsCount, 4) }}">
                    <div class="product-card" style="border: 1px solid #e1e3e5; border-radius: 8px; padding: 20px; text-align: center; transition: all 0.3s;">
                        <div class="product-image" style="background: linear-gradient(135deg, var(--primary-color, #008060) 0%, #00a876 100%); height: 200px; border-radius: 6px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                            <i class="fas fa-gem fa-4x" style="color: white;"></i>
                        </div>
                        <h5 class="fw-semibold mb-2">{{ $product['name'] }}</h5>
                        <p class="text-muted small mb-3">{{ $product['description'] }}</p>
                        <div class="price fw-bold" style="color: var(--primary-color, #008060); font-size: 20px;">
                            {{ $product['price'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
.product-card:hover {
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transform: translateY(-4px);
}
</style>
