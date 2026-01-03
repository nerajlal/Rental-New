@extends('admin-shop.layout')

@section('title', 'Navigation Editor')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h4 fw-bold mb-1 text-dark">Navigation Editor</h1>
            <p class="text-subdued small mb-0">Drag and drop to reorder menu items. Click to edit labels and URLs.</p>
        </div>
        <a href="{{ route('shop.online-store') }}" class="p-btn">
            <i class="fas fa-arrow-left me-1"></i> Back to Online Store
        </a>
    </div>

    <div class="row g-4">
        <!-- Main Menu Editor -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="fw-bold mb-0">Main Menu</h6>
                        <button class="p-btn-primary btn-sm" onclick="addMenuItem('main')">
                            <i class="fas fa-plus me-1"></i> Add Item
                        </button>
                    </div>
                    
                    <div id="mainMenuList" class="menu-sortable">
                        <!-- Menu items will be rendered here -->
                    </div>
                    
                    <button class="p-btn-primary w-100 mt-3" onclick="saveMenu('main')">
                        <i class="fas fa-save me-1"></i> Save Main Menu
                    </button>
                </div>
            </div>
        </div>

        <!-- Footer Menu Editor -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="fw-bold mb-0">Footer Menu</h6>
                        <button class="p-btn-primary btn-sm" onclick="addMenuItem('footer')">
                            <i class="fas fa-plus me-1"></i> Add Item
                        </button>
                    </div>
                    
                    <div id="footerMenuList" class="menu-sortable">
                        <!-- Menu items will be rendered here -->
                    </div>
                    
                    <button class="p-btn-primary w-100 mt-3" onclick="saveMenu('footer')">
                        <i class="fas fa-save me-1"></i> Save Footer Menu
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add/Edit Modal -->
<div class="modal fade" id="menuItemModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 8px;">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold">Menu Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label fw-medium small">Label</label>
                    <input type="text" class="form-control" id="itemLabel" placeholder="e.g., Home, Shop, About">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-medium small">URL</label>
                    <input type="text" class="form-control" id="itemUrl" placeholder="e.g., /shop, /about">
                    <small class="text-subdued">Enter relative URL or external link</small>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="p-btn" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="p-btn-primary" onclick="saveMenuItem()">Save Item</button>
            </div>
        </div>
    </div>
</div>

<style>
    .menu-sortable {
        min-height: 100px;
        border: 2px dashed #e1e3e5;
        border-radius: 6px;
        padding: 12px;
    }
    
    .menu-item {
        background: white;
        border: 1px solid #e1e3e5;
        border-radius: 6px;
        padding: 12px;
        margin-bottom: 8px;
        cursor: move;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    
    .menu-item:hover {
        background: #f9fafb;
        border-color: #008060;
    }
    
    .menu-item.sortable-ghost {
        opacity: 0.4;
        background: #f9fafb;
    }
    
    .menu-item.sortable-drag {
        opacity: 1;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    
    .drag-handle {
        cursor: grab;
        color: #9da3a9;
        font-size: 16px;
    }
    
    .drag-handle:active {
        cursor: grabbing;
    }
    
    .menu-item-content {
        flex-grow: 1;
    }
    
    .menu-item-label {
        font-weight: 500;
        color: #202223;
        font-size: 14px;
    }
    
    .menu-item-url {
        font-size: 12px;
        color: #6d7175;
    }
    
    .menu-item-actions {
        display: flex;
        gap: 8px;
    }
    
    .menu-item-actions button {
        padding: 4px 8px;
        font-size: 12px;
        border: none;
        background: transparent;
        color: #6d7175;
        cursor: pointer;
        border-radius: 4px;
        transition: all 0.2s;
    }
    
    .menu-item-actions button:hover {
        background: #f1f2f3;
        color: #202223;
    }
    
    .menu-item-actions .btn-delete:hover {
        background: #fef2f2;
        color: #dc2626;
    }
    
    .empty-state {
        text-align: center;
        padding: 40px 20px;
        color: #9da3a9;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script>
let mainMenuData = @json($mainMenu ?? []);
let footerMenuData = @json($footerMenu ?? []);
let currentMenuType = 'main';
let editingIndex = -1;

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    renderMenu('main', mainMenuData);
    renderMenu('footer', footerMenuData);
    initializeSortable('main');
    initializeSortable('footer');
});

function renderMenu(type, items) {
    const container = document.getElementById(type + 'MenuList');
    
    if (!items || items.length === 0) {
        container.innerHTML = '<div class="empty-state"><i class="fas fa-bars fa-2x mb-2"></i><p>No menu items yet. Click "Add Item" to get started.</p></div>';
        return;
    }
    
    container.innerHTML = items.map((item, index) => `
        <div class="menu-item" data-index="${index}">
            <i class="fas fa-grip-vertical drag-handle"></i>
            <div class="menu-item-content">
                <div class="menu-item-label">${escapeHtml(item.label)}</div>
                <div class="menu-item-url">${escapeHtml(item.url)}</div>
            </div>
            <div class="menu-item-actions">
                <button onclick="editMenuItem('${type}', ${index})" title="Edit">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="btn-delete" onclick="deleteMenuItem('${type}', ${index})" title="Delete">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
        </div>
    `).join('');
}

function initializeSortable(type) {
    const el = document.getElementById(type + 'MenuList');
    new Sortable(el, {
        animation: 150,
        handle: '.drag-handle',
        ghostClass: 'sortable-ghost',
        dragClass: 'sortable-drag',
        onEnd: function(evt) {
            const data = type === 'main' ? mainMenuData : footerMenuData;
            const movedItem = data.splice(evt.oldIndex, 1)[0];
            data.splice(evt.newIndex, 0, movedItem);
            
            if (type === 'main') {
                mainMenuData = data;
            } else {
                footerMenuData = data;
            }
        }
    });
}

function addMenuItem(type) {
    currentMenuType = type;
    editingIndex = -1;
    document.getElementById('itemLabel').value = '';
    document.getElementById('itemUrl').value = '';
    new bootstrap.Modal(document.getElementById('menuItemModal')).show();
}

function editMenuItem(type, index) {
    currentMenuType = type;
    editingIndex = index;
    const data = type === 'main' ? mainMenuData : footerMenuData;
    const item = data[index];
    
    document.getElementById('itemLabel').value = item.label;
    document.getElementById('itemUrl').value = item.url;
    new bootstrap.Modal(document.getElementById('menuItemModal')).show();
}

function saveMenuItem() {
    const label = document.getElementById('itemLabel').value.trim();
    const url = document.getElementById('itemUrl').value.trim();
    
    if (!label || !url) {
        alert('Please fill in both label and URL');
        return;
    }
    
    const item = { label, url };
    const data = currentMenuType === 'main' ? mainMenuData : footerMenuData;
    
    if (editingIndex >= 0) {
        data[editingIndex] = item;
    } else {
        data.push(item);
    }
    
    if (currentMenuType === 'main') {
        mainMenuData = data;
    } else {
        footerMenuData = data;
    }
    
    renderMenu(currentMenuType, data);
    bootstrap.Modal.getInstance(document.getElementById('menuItemModal')).hide();
}

function deleteMenuItem(type, index) {
    if (!confirm('Are you sure you want to delete this menu item?')) {
        return;
    }
    
    const data = type === 'main' ? mainMenuData : footerMenuData;
    data.splice(index, 1);
    
    if (type === 'main') {
        mainMenuData = data;
    } else {
        footerMenuData = data;
    }
    
    renderMenu(type, data);
}

function saveMenu(type) {
    const data = type === 'main' ? mainMenuData : footerMenuData;
    const button = event.target;
    const originalText = button.innerHTML;
    
    button.disabled = true;
    button.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Saving...';
    
    fetch('{{ route("shop.navigation.save") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            type: type,
            items: JSON.stringify(data)
        })
    })
    .then(response => response.json())
    .then(result => {
        button.innerHTML = '<i class="fas fa-check me-1"></i> Saved!';
        setTimeout(() => {
            button.disabled = false;
            button.innerHTML = originalText;
        }, 2000);
    })
    .catch(error => {
        alert('Error saving menu. Please try again.');
        button.disabled = false;
        button.innerHTML = originalText;
    });
}

function escapeHtml(text) {
    const map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
    };
    return text.replace(/[&<>"']/g, m => map[m]);
}
</script>
@endsection
