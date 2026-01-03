@extends('admin-shop.layout')

@section('title', 'Online Store')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Online Store</h1>
        <div class="d-flex gap-2">
            @if($settings->subdomain)
                <a href="{{ route('shop.preview-store') }}" target="_blank" class="p-btn">
                    <i class="fas fa-eye me-1"></i> View Store
                </a>
            @else
                <button class="p-btn" disabled title="Set subdomain first">
                    <i class="fas fa-eye me-1"></i> View Store
                </button>
            @endif
        </div>
    </div>

    <!-- Current Theme -->
    <div class="card border-0 shadow-sm mb-4" style="border-radius: 8px;">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="fw-bold mb-0">Current Theme</h6>
                <a href="#" class="text-decoration-none" style="color: var(--p-primary); font-size: 14px;">Change theme</a>
            </div>
            <div class="row g-3">
                <div class="col-md-8">
                    <div class="d-flex gap-3">
                        <div style="width: 120px; height: 120px; background: linear-gradient(135deg, {{ $settings->primary_color }} 0%, #00a876 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <i class="fas fa-gem fa-3x" style="color: white;"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fw-bold mb-2">{{ $settings->theme_name }}</h5>
                            <p class="text-subdued small mb-3">Version 2.1 • Premium jewelry rental theme optimized for conversions</p>
                            <div class="row g-2 mb-3">
                                <div class="col-auto">
                                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill">
                                        <i class="fas fa-check-circle me-1"></i> Published
                                    </span>
                                </div>
                                <div class="col-auto">
                                    <small class="text-subdued">Last modified: {{ $settings->updated_at->diffForHumans() }}</small>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="{{ route('shop.themes.customize', ['theme' => 'jewelry-luxe']) }}" class="p-btn-primary btn-sm">
                                    <i class="fas fa-paint-brush me-1"></i> Customize
                                </a>
                                <!-- <a href="#" class="p-btn btn-sm">
                                    <i class="fas fa-code me-1"></i> Edit code
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-light rounded" style="border: 1px solid #e1e3e5;">
                        <h6 class="fw-bold mb-3" style="font-size: 13px;">Theme Features</h6>
                        <div class="d-flex flex-column gap-2">
                            <small class="text-subdued"><i class="fas fa-check text-success me-2"></i> Responsive design</small>
                            <small class="text-subdued"><i class="fas fa-check text-success me-2"></i> SEO optimized</small>
                            <small class="text-subdued"><i class="fas fa-check text-success me-2"></i> Fast loading</small>
                            <small class="text-subdued"><i class="fas fa-check text-success me-2"></i> Mobile-first</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Domain & Settings -->
    <div class="card border-0 shadow-sm mb-4" style="border-radius: 8px;">
        <div class="card-body p-4">
            <h6 class="fw-bold mb-3">Domain & Settings</h6>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-medium small">Store Subdomain</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="subdomainInput" value="{{ $settings->subdomain ?? '' }}" placeholder="your-store">
                        <span class="input-group-text">.metora.in</span>
                        <button class="p-btn" onclick="saveSubdomain()">Save</button>
                    </div>
                    @if($settings->subdomain)
                        <small class="text-success"><i class="fas fa-check-circle me-1"></i> Your store: <strong>{{ $settings->full_subdomain }}</strong></small>
                    @else
                        <small class="text-subdued">Choose a unique subdomain for your store</small>
                    @endif
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-medium small">Custom Domain</label>
                    <div class="p-3 bg-light rounded" style="border: 1px solid #e1e3e5;">
                        <p class="mb-2 small"><i class="fas fa-info-circle me-1" style="color: var(--p-primary);"></i> For custom domain setup (e.g., <strong>yourdomain.com</strong>), please contact our support team.</p>
                        <a href="https://wa.me/918547470675?text=Hi,%20I%20need%20help%20with%20custom%20domain%20setup" target="_blank" class="p-btn btn-sm">
                            <i class="fas fa-headset me-1"></i> Contact Support
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded">
                        <div>
                            <div class="fw-medium mb-1" style="font-size: 14px;">SSL Certificate</div>
                            <small class="text-subdued">Secure connection enabled for *.metora.in</small>
                        </div>
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill">
                            <i class="fas fa-lock me-1"></i> Active
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Management -->
    <div class="row g-3 mb-4">
        <!-- Pages -->
        <div class="col-12">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fas fa-file-alt" style="font-size: 20px; color: var(--p-primary);"></i>
                            <h6 class="fw-bold mb-0">Pages</h6>
                        </div>
                    <!-- Link removed -->
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="card border-0 shadow-sm mb-4" style="border-radius: 8px;">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="fw-bold mb-0">Navigation</h6>
                <a href="{{ route('shop.navigation') }}" class="p-btn btn-sm">Manage menus</a>
            </div>
            
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="p-3 border rounded">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="fw-medium">Main Menu</div>
                            <a href="{{ route('shop.navigation') }}" class="text-decoration-none small">Edit</a>
                        </div>
                        @if(isset($mainMenu) && $mainMenu->items)
                            <div class="d-flex flex-wrap gap-2 mb-2">
                                @foreach(json_decode($mainMenu->items, true) as $item)
                                    <span class="badge bg-light text-dark border">{{ $item['label'] }}</span>
                                @endforeach
                            </div>
                        @else
                            <div class="text-subdued small mb-2">No menu items configured</div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 border rounded">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="fw-medium">Footer Menu</div>
                            <a href="{{ route('shop.navigation') }}" class="text-decoration-none small">Edit</a>
                        </div>
                        @if(isset($footerMenu) && $footerMenu->items)
                            <div class="d-flex flex-wrap gap-2 mb-2">
                                @foreach(json_decode($footerMenu->items, true) as $item)
                                    <span class="badge bg-light text-dark border">{{ $item['label'] }}</span>
                                @endforeach
                            </div>
                        @else
                            <div class="text-subdued small mb-2">No menu items configured</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SEO & Preferences -->
    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="card-body p-4">
            <h6 class="fw-bold mb-4">SEO & Preferences</h6>
            <form id="seoForm">
                @csrf
                <div class="row g-3">
                    <div class="col-md-12">
                        <label class="form-label fw-medium small">Homepage title</label>
                        <input type="text" class="form-control" name="homepage_title" value="{{ $settings->homepage_title }}" maxlength="255">
                        <small class="text-subdued">Appears in browser tabs and search results</small>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label fw-medium small">Homepage meta description</label>
                        <textarea class="form-control" name="homepage_description" rows="2" maxlength="500">{{ $settings->homepage_description }}</textarea>
                        <small class="text-subdued">140-160 characters recommended for SEO</small>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-medium small">Google Analytics ID</label>
                        <input type="text" class="form-control" name="google_analytics_id" value="{{ $settings->google_analytics_id }}" placeholder="G-XXXXXXXXXX">
                        <small class="text-subdued">Track your store's traffic</small>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-medium small">Facebook Pixel ID</label>
                        <input type="text" class="form-control" name="facebook_pixel_id" value="{{ $settings->facebook_pixel_id }}" placeholder="123456789012345">
                        <small class="text-subdued">Track conversions and ads</small>
                    </div>
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="password_protected" id="passwordProtect" {{ $settings->password_protected ? 'checked' : '' }}>
                            <label class="form-check-label" for="passwordProtect">
                                <span class="fw-medium">Enable password protection</span>
                                <small class="text-subdued d-block">Restrict access to your store with a password</small>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="allow_search_indexing" id="hideFromSearch" {{ $settings->allow_search_indexing ? 'checked' : '' }}>
                            <label class="form-check-label" for="hideFromSearch">
                                <span class="fw-medium">Allow search engines to index store</span>
                                <small class="text-subdued d-block">Let Google and other search engines find your store</small>
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex gap-2 mt-4 pt-3 border-top">
                    <button type="button" class="p-btn-primary" onclick="saveSettings()">Save changes</button>
                    <button type="button" class="p-btn">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function saveSubdomain() {
    const subdomain = document.getElementById('subdomainInput').value.trim();
    const button = event.target;
    const originalText = button.innerHTML;
    
    if (!subdomain) {
        alert('Please enter a subdomain');
        return;
    }
    
    button.disabled = true;
    button.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
    
    fetch('{{ route("shop.online-store.subdomain") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ subdomain })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Subdomain updated successfully! Your store is now at: ' + data.full_subdomain);
            location.reload();
        } else {
            alert(data.message || 'Error updating subdomain');
        }
    })
    .catch(error => {
        alert('Error: This subdomain may already be taken');
    })
    .finally(() => {
        button.disabled = false;
        button.innerHTML = originalText;
    });
}

function saveSettings() {
    const form = document.getElementById('seoForm');
    const formData = new FormData(form);
    const data = {};
    
    formData.forEach((value, key) => {
        if (key === 'password_protected' || key === 'allow_search_indexing') {
            data[key] = document.querySelector(`input[name="${key}"]`).checked ? 1 : 0;
        } else {
            data[key] = value;
        }
    });
    
    const button = event.target;
    const originalText = button.innerHTML;
    
    button.disabled = true;
    button.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Saving...';
    
    fetch('{{ route("shop.online-store.save") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            button.innerHTML = '<i class="fas fa-check me-1"></i> Saved!';
            setTimeout(() => {
                button.disabled = false;
                button.innerHTML = originalText;
            }, 2000);
        }
    })
    .catch(error => {
        alert('Error saving settings');
        button.disabled = false;
        button.innerHTML = originalText;
    });
}
</script>
@endsection
