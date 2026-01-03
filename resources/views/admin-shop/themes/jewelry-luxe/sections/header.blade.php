@php
    $data = $data ?? [];
    $logoText = $data['logo_text'] ?? auth()->user()->name ?? 'Your Store';
    $showSearch = $data['show_search'] ?? true;
@endphp

<header class="theme-header" style="background: white; box-shadow: 0 2px 4px rgba(0,0,0,0.08); position: sticky; top: 0; z-index: 1000;">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <a class="navbar-brand fw-bold" href="{{ $homeUrl ?? '/' }}" style="color: var(--primary-color, #008060); font-size: 24px;">
                <i class="fas fa-gem me-2"></i><span data-setting-key="logo_text">{{ $logoText }}</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    @forelse($menuItems ?? [] as $item)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                        </li>
                    @empty
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/shop">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    @endforelse
                    @if($showSearch)
                        <li class="nav-item ms-3">
                            <button class="btn btn-sm" style="border: 1px solid #e1e3e5; border-radius: 6px;">
                                <i class="fas fa-search"></i>
                            </button>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>

<style>
.theme-header .nav-link {
    color: var(--text-color, #202223) !important;
    font-weight: 500;
    padding: 8px 16px !important;
    transition: color 0.2s;
}
.theme-header .nav-link:hover {
    color: var(--primary-color, #008060) !important;
}
</style>
