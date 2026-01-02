@extends('admin-shop.layout')

@section('title', 'Online Store')

@section('content')
<div class="container-fluid p-0">
    <h1 class="h4 fw-bold mb-4 text-dark">Online Store</h1>

    <!-- Current Theme -->
    <div class="card border-0 shadow-sm mb-4" style="border-radius: 8px;">
        <div class="card-body p-4">
            <h6 class="fw-bold mb-3">Current Theme</h6>
            <div class="d-flex align-items-center gap-3 mb-3">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #008060 0%, #00a876 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-gem fa-2x" style="color: white;"></i>
                </div>
                <div>
                    <h6 class="fw-bold mb-1">Jewelry Luxe</h6>
                    <small class="text-subdued">Version 2.1 • Premium jewelry rental theme</small>
                </div>
                <a href="#" class="p-btn ms-auto">Customize</a>
            </div>
            <div class="row g-2">
                <div class="col-md-4">
                    <small class="text-subdued d-block">Status</small>
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill">Published</span>
                </div>
                <div class="col-md-4">
                    <small class="text-subdued d-block">Last Modified</small>
                    <small>3 days ago</small>
                </div>
                <div class="col-md-4">
                    <small class="text-subdued d-block">Collections</small>
                    <small>Bridal, Festive, Party Wear</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Pages & Content -->
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <i class="fas fa-blog mb-3" style="font-size: 24px; color: var(--p-primary);"></i>
                    <h6 class="fw-bold mb-2">Blog Posts</h6>
                    <p class="text-subdued small mb-3">3 published posts</p>
                    <div class="mb-2"><small class="text-subdued">• How to Choose Bridal Jewelry</small></div>
                    <div class="mb-2"><small class="text-subdued">• Caring for Rented Ornaments</small></div>
                    <div class="mb-3"><small class="text-subdued">• Traditional vs Modern Designs</small></div>
                    <a href="#" class="p-btn btn-sm">Manage blog</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <i class="fas fa-file mb-3" style="font-size: 24px; color: var(--p-primary);"></i>
                    <h6 class="fw-bold mb-2">Pages</h6>
                    <p class="text-subdued small mb-3">5 custom pages</p>
                    <div class="mb-2"><small class="text-subdued">• About Us</small></div>
                    <div class="mb-2"><small class="text-subdued">• Rental Policy</small></div>
                    <div class="mb-2"><small class="text-subdued">• Care Instructions</small></div>
                    <div class="mb-3"><small class="text-subdued">• Contact & Booking</small></div>
                    <a href="#" class="p-btn btn-sm">Manage pages</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <i class="fas fa-bars mb-3" style="font-size: 24px; color: var(--p-primary);"></i>
                    <h6 class="fw-bold mb-2">Navigation</h6>
                    <p class="text-subdued small mb-3">2 menus configured</p>
                    <div class="mb-2"><small class="text-subdued">• Main Menu (7 items)</small></div>
                    <div class="mb-3"><small class="text-subdued">• Footer (4 items)</small></div>
                    <a href="#" class="p-btn btn-sm">Edit menus</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Store Settings -->
    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="card-body p-4">
            <h6 class="fw-bold mb-4">Store Preferences</h6>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-medium small">Homepage title</label>
                    <input type="text" class="form-control" value="Premium Jewelry on Rent">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-medium small">Homepage meta description</label>
                    <input type="text" class="form-control" value="Rent exquisite jewelry for weddings, parties, and special occasions">
                </div>
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="passwordProtect">
                        <label class="form-check-label small" for="passwordProtect">
                            Enable password protection
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
