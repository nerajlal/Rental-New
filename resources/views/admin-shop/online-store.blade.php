@extends('admin-shop.layout')

@section('title', 'Online Store')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Online Store</h1>
        <div class="d-flex gap-2">
            <a href="#" class="p-btn">
                <i class="fas fa-eye me-1"></i> View Store
            </a>
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
                        <div style="width: 120px; height: 120px; background: linear-gradient(135deg, #008060 0%, #00a876 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <i class="fas fa-gem fa-3x" style="color: white;"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fw-bold mb-2">Jewelry Luxe</h5>
                            <p class="text-subdued small mb-3">Version 2.1 • Premium jewelry rental theme optimized for conversions</p>
                            <div class="row g-2 mb-3">
                                <div class="col-auto">
                                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill">
                                        <i class="fas fa-check-circle me-1"></i> Published
                                    </span>
                                </div>
                                <div class="col-auto">
                                    <small class="text-subdued">Last modified: 3 days ago</small>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="#" class="p-btn-primary btn-sm">
                                    <i class="fas fa-paint-brush me-1"></i> Customize
                                </a>
                                <a href="#" class="p-btn btn-sm">
                                    <i class="fas fa-code me-1"></i> Edit code
                                </a>
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
                    <label class="form-label fw-medium small">Store URL</label>
                    <div class="input-group">
                        <input type="text" class="form-control" value="your-jewelry-shop" readonly>
                        <span class="input-group-text">.myshopify.com</span>
                    </div>
                    <small class="text-subdued">Your current store URL</small>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-medium small">Custom Domain</label>
                    <div class="d-flex align-items-center gap-2">
                        <input type="text" class="form-control" placeholder="example.com">
                        <a href="#" class="p-btn btn-sm">Add domain</a>
                    </div>
                    <small class="text-subdued">Connect your own domain</small>
                </div>
                <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded">
                        <div>
                            <div class="fw-medium mb-1" style="font-size: 14px;">SSL Certificate</div>
                            <small class="text-subdued">Secure connection enabled</small>
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
        <!-- Blog Posts -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fas fa-blog" style="font-size: 20px; color: var(--p-primary);"></i>
                            <h6 class="fw-bold mb-0">Blog Posts</h6>
                        </div>
                        <a href="#" class="p-btn-primary btn-sm">Create post</a>
                    </div>
                    <p class="text-subdued small mb-3">3 published posts</p>
                    
                    <div class="d-flex flex-column gap-2">
                        <div class="p-2 border rounded" style="cursor: pointer; transition: all 0.2s;" onmouseover="this.style.background='#f9fafb'" onmouseout="this.style.background='transparent'">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fw-medium mb-1" style="font-size: 14px;">How to Choose Bridal Jewelry</div>
                                    <small class="text-subdued">Published Dec 28, 2025 • 245 views</small>
                                </div>
                                <span class="badge bg-success bg-opacity-10 text-success rounded-pill">Live</span>
                            </div>
                        </div>
                        <div class="p-2 border rounded" style="cursor: pointer; transition: all 0.2s;" onmouseover="this.style.background='#f9fafb'" onmouseout="this.style.background='transparent'">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fw-medium mb-1" style="font-size: 14px;">Caring for Rented Ornaments</div>
                                    <small class="text-subdued">Published Dec 15, 2025 • 189 views</small>
                                </div>
                                <span class="badge bg-success bg-opacity-10 text-success rounded-pill">Live</span>
                            </div>
                        </div>
                        <div class="p-2 border rounded" style="cursor: pointer; transition: all 0.2s;" onmouseover="this.style.background='#f9fafb'" onmouseout="this.style.background='transparent'">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fw-medium mb-1" style="font-size: 14px;">Traditional vs Modern Designs</div>
                                    <small class="text-subdued">Published Dec 10, 2025 • 312 views</small>
                                </div>
                                <span class="badge bg-success bg-opacity-10 text-success rounded-pill">Live</span>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#" class="text-decoration-none mt-3 d-block" style="color: var(--p-primary); font-size: 14px;">
                        View all posts →
                    </a>
                </div>
            </div>
        </div>

        <!-- Pages -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fas fa-file-alt" style="font-size: 20px; color: var(--p-primary);"></i>
                            <h6 class="fw-bold mb-0">Pages</h6>
                        </div>
                        <a href="#" class="p-btn-primary btn-sm">Create page</a>
                    </div>
                    <p class="text-subdued small mb-3">5 published pages</p>
                    
                    <div class="d-flex flex-column gap-2">
                        <div class="p-2 border rounded" style="cursor: pointer; transition: all 0.2s;" onmouseover="this.style.background='#f9fafb'" onmouseout="this.style.background='transparent'">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-medium" style="font-size: 14px;">About Us</div>
                                <small class="text-subdued">Updated 5 days ago</small>
                            </div>
                        </div>
                        <div class="p-2 border rounded" style="cursor: pointer; transition: all 0.2s;" onmouseover="this.style.background='#f9fafb'" onmouseout="this.style.background='transparent'">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-medium" style="font-size: 14px;">Rental Policy</div>
                                <small class="text-subdued">Updated 2 weeks ago</small>
                            </div>
                        </div>
                        <div class="p-2 border rounded" style="cursor: pointer; transition: all 0.2s;" onmouseover="this.style.background='#f9fafb'" onmouseout="this.style.background='transparent'">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-medium" style="font-size: 14px;">Care Instructions</div>
                                <small class="text-subdued">Updated 3 weeks ago</small>
                            </div>
                        </div>
                        <div class="p-2 border rounded" style="cursor: pointer; transition: all 0.2s;" onmouseover="this.style.background='#f9fafb'" onmouseout="this.style.background='transparent'">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-medium" style="font-size: 14px;">Contact & Booking</div>
                                <small class="text-subdued">Updated 1 month ago</small>
                            </div>
                        </div>
                        <div class="p-2 border rounded" style="cursor: pointer; transition: all 0.2s;" onmouseover="this.style.background='#f9fafb'" onmouseout="this.style.background='transparent'">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-medium" style="font-size: 14px;">FAQs</div>
                                <small class="text-subdued">Updated 1 month ago</small>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#" class="text-decoration-none mt-3 d-block" style="color: var(--p-primary); font-size: 14px;">
                        View all pages →
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="card border-0 shadow-sm mb-4" style="border-radius: 8px;">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="fw-bold mb-0">Navigation</h6>
                <a href="#" class="p-btn btn-sm">Manage menus</a>
            </div>
            
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="p-3 border rounded">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="fw-medium">Main Menu</div>
                            <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill">7 items</span>
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <small class="text-subdued"><i class="fas fa-grip-vertical me-2" style="color: #c9cccf;"></i> Home</small>
                            <small class="text-subdued"><i class="fas fa-grip-vertical me-2" style="color: #c9cccf;"></i> Shop</small>
                            <small class="text-subdued"><i class="fas fa-grip-vertical me-2" style="color: #c9cccf;"></i> Collections</small>
                            <small class="text-subdued ps-4">└ Bridal</small>
                            <small class="text-subdued ps-4">└ Festive</small>
                            <small class="text-subdued ps-4">└ Party Wear</small>
                            <small class="text-subdued"><i class="fas fa-grip-vertical me-2" style="color: #c9cccf;"></i> About</small>
                            <small class="text-subdued"><i class="fas fa-grip-vertical me-2" style="color: #c9cccf;"></i> Policies</small>
                            <small class="text-subdued"><i class="fas fa-grip-vertical me-2" style="color: #c9cccf;"></i> Contact</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 border rounded">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="fw-medium">Footer Menu</div>
                            <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill">4 items</span>
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <small class="text-subdued"><i class="fas fa-grip-vertical me-2" style="color: #c9cccf;"></i> Privacy Policy</small>
                            <small class="text-subdued"><i class="fas fa-grip-vertical me-2" style="color: #c9cccf;"></i> Terms of Service</small>
                            <small class="text-subdued"><i class="fas fa-grip-vertical me-2" style="color: #c9cccf;"></i> Refund Policy</small>
                            <small class="text-subdued"><i class="fas fa-grip-vertical me-2" style="color: #c9cccf;"></i> Shipping Policy</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SEO & Preferences -->
    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="card-body p-4">
            <h6 class="fw-bold mb-4">SEO & Preferences</h6>
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label fw-medium small">Homepage title</label>
                    <input type="text" class="form-control" value="Premium Jewelry on Rent | Exquisite Bridal & Party Jewelry">
                    <small class="text-subdued">Appears in browser tabs and search results</small>
                </div>
                <div class="col-md-12">
                    <label class="form-label fw-medium small">Homepage meta description</label>
                    <textarea class="form-control" rows="2">Rent exquisite jewelry for weddings, parties, and special occasions. Premium bridal sets, diamond bangles, and traditional ornaments at affordable prices.</textarea>
                    <small class="text-subdued">140-160 characters recommended for SEO</small>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-medium small">Google Analytics ID</label>
                    <input type="text" class="form-control" placeholder="G-XXXXXXXXXX">
                    <small class="text-subdued">Track your store's traffic</small>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-medium small">Facebook Pixel ID</label>
                    <input type="text" class="form-control" placeholder="123456789012345">
                    <small class="text-subdued">Track conversions and ads</small>
                </div>
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="passwordProtect">
                        <label class="form-check-label" for="passwordProtect">
                            <span class="fw-medium">Enable password protection</span>
                            <small class="text-subdued d-block">Restrict access to your store with a password</small>
                        </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="hideFromSearch" checked>
                        <label class="form-check-label" for="hideFromSearch">
                            <span class="fw-medium">Allow search engines to index store</span>
                            <small class="text-subdued d-block">Let Google and other search engines find your store</small>
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="d-flex gap-2 mt-4 pt-3 border-top">
                <button class="p-btn-primary">Save changes</button>
                <button class="p-btn">Cancel</button>
            </div>
        </div>
    </div>
</div>
@endsection
