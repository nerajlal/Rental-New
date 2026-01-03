@extends('admin-shop.layout')

@section('title', 'Customize Theme')

@section('content')
<style>
.customizer-layout {
    position: fixed;
    top: 60px;
    left: 280px;
    right: 0;
    bottom: 0;
    background: #f9fafb;
    display: flex;
}

.customizer-sidebar {
    width: 350px;
    background: white;
    border-right: 1px solid #e1e3e5;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
}

.customizer-preview {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.customizer-toolbar {
    background: #202223;
    color: white;
    padding: 12px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.customizer-iframe {
    flex: 1;
    background: white;
    border: none;
    width: 100%;
}

.section-item {
    padding: 16px;
    border-bottom: 1px solid #e1e3e5;
    cursor: pointer;
    transition: background 0.2s;
}

.section-item:hover {
    background: #f9fafb;
}

.section-item.active {
    background: #f1f2f3;
    border-left: 3px solid #008060;
}

.settings-panel {
    padding: 20px;
    display: none;
}

.settings-panel.active {
    display: block;
}
</style>

<div class="customizer-layout">
    <!-- Left Sidebar -->
    <div class="customizer-sidebar">
        <div class="p-4 border-bottom">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="fw-bold mb-0">Theme Sections</h6>
                <a href="{{ route('shop.online-store') }}" class="text-decoration-none small" style="color: var(--p-primary);">
                    <i class="fas fa-arrow-left me-1"></i> Back
                </a>
            </div>
            <small class="text-subdued">Click a section to customize</small>
        </div>

        <!-- Sections List -->
        <div id="sectionsList">
            @foreach($config['sections'] as $index => $section)
                <div class="section-item" onclick="showSettings('{{ $section['type'] }}')" id="section-{{ $section['type'] }}">
                    <div class="d-flex align-items-center gap-2">
                        <i class="fas {{ $section['icon'] }}" style="color: var(--p-primary); width: 20px;"></i>
                        <div class="flex-grow-1">
                            <div class="fw-medium">{{ $section['name'] }}</div>
                        </div>
                        <i class="fas fa-chevron-right text-subdued"></i>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Settings Panels -->
        <div id="settingsPanels" style="flex: 1; overflow-y: auto;">
            @foreach($config['sections'] as $section)
                <div class="settings-panel" id="settings-{{ $section['type'] }}">
                    <div class="d-flex align-items-center mb-3">
                        <button onclick="hideSettings()" class="btn btn-sm p-btn me-2">
                            <i class="fas fa-arrow-left"></i>
                        </button>
                        <h6 class="fw-bold mb-0">{{ $section['name'] }}</h6>
                    </div>

                    <form id="form-{{ $section['type'] }}">
                        @foreach($section['settings'] as $key => $setting)
                            <div class="mb-3">
                                <label class="form-label fw-medium small">{{ $setting['label'] }}</label>
                                
                                @if($setting['type'] == 'text')
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        name="{{ $key }}"
                                        value="{{ $customization->getSectionData($section['type'])[$key] ?? $setting['default'] }}"
                                        oninput="updatePreview('{{ $section['type'] }}', '{{ $key }}', this.value)"
                                    >
                                @elseif($setting['type'] == 'textarea')
                                    <textarea 
                                        class="form-control" 
                                        name="{{ $key }}"
                                        rows="3"
                                        oninput="updatePreview('{{ $section['type'] }}', '{{ $key }}', this.value)"
                                    >{{ $customization->getSectionData($section['type'])[$key] ?? $setting['default'] }}</textarea>
                                @elseif($setting['type'] == 'color')
                                    <input 
                                        type="color" 
                                        class="form-control form-control-color" 
                                        name="{{ $key }}"
                                        value="{{ $customization->getSectionData($section['type'])[$key] ?? $setting['default'] }}"
                                        oninput="updatePreview('{{ $section['type'] }}', '{{ $key }}', this.value)"
                                    >
                                @elseif($setting['type'] == 'checkbox')
                                    <div class="form-check">
                                        <input 
                                            type="checkbox" 
                                            class="form-check-input" 
                                            name="{{ $key }}"
                                            {{ ($customization->getSectionData($section['type'])[$key] ?? $setting['default']) ? 'checked' : '' }}
                                            onchange="updatePreview('{{ $section['type'] }}', '{{ $key }}', this.checked)"
                                        >
                                        <label class="form-check-label">Enable</label>
                                    </div>
                                @elseif($setting['type'] == 'number')
                                    <input 
                                        type="number" 
                                        class="form-control" 
                                        name="{{ $key }}"
                                        value="{{ $customization->getSectionData($section['type'])[$key] ?? $setting['default'] }}"
                                        min="{{ $setting['min'] ?? 1 }}"
                                        max="{{ $setting['max'] ?? 10 }}"
                                        oninput="updatePreview('{{ $section['type'] }}', '{{ $key }}', this.value)"
                                    >
                                @endif
                            </div>
                        @endforeach
                    </form>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Preview Area -->
    <div class="customizer-preview">
        <div class="customizer-toolbar">
            <div>
                <strong>{{ $config['name'] }}</strong>
                <span class="ms-2 text-muted small">| Live Preview</span>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-sm btn-light" onclick="saveCustomization()">
                    <i class="fas fa-save me-1"></i> Save
                </button>
                <button class="btn btn-sm btn-success" onclick="publishTheme()">
                    <i class="fas fa-check me-1"></i> Publish
                </button>
            </div>
        </div>
        <iframe id="previewFrame" class="customizer-iframe" src="{{ route('shop.preview-store', ['mode' => 'draft', 'theme' => $themeName ?? 'jewelry-luxe']) }}"></iframe>
    </div>
</div>

<script>
let customizationData = @json($customization->sections ?? []);
if (Array.isArray(customizationData) && customizationData.length === 0) {
    customizationData = {};
}

function showSettings(sectionType) {
    // Hide all panels
    document.querySelectorAll('.settings-panel').forEach(el => el.classList.remove('active'));
    document.querySelectorAll('.section-item').forEach(el => el.classList.remove('active'));
    
    // Show selected
    document.getElementById('settings-' + sectionType).classList.add('active');
    document.getElementById('section-' + sectionType).classList.add('active');
}

function hideSettings() {
    document.querySelectorAll('.settings-panel').forEach(el => el.classList.remove('active'));
    document.querySelectorAll('.section-item').forEach(el => el.classList.remove('active'));
}

function updatePreview(sectionType, key, value) {
    // Update local data
    if (!customizationData[sectionType]) {
        customizationData[sectionType] = {};
    }
    customizationData[sectionType][key] = value;
    
    // Send update to preview iframe via postMessage
    const iframe = document.getElementById('previewFrame');
    if (iframe && iframe.contentWindow) {
        iframe.contentWindow.postMessage({
            type: 'update-settings',
            section: sectionType,
            key: key,
            value: value
        }, '*');
    }
}

function saveCustomization() {
    const button = event.target;
    const originalText = button.innerHTML;
    button.disabled = true;
    button.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Saving...';
    
    fetch('{{ route("shop.themes.save") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            sections: JSON.stringify(customizationData)
        })
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
        alert('Error saving customization');
        button.disabled = false;
        button.innerHTML = originalText;
    });
}

function publishTheme() {
    if (!confirm('Publish your theme changes to make them live?')) {
        return;
    }
    
    const button = event.target;
    const originalText = button.innerHTML;
    button.disabled = true;
    button.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Publishing...';
    
    // Save first
    fetch('{{ route("shop.themes.save") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            sections: JSON.stringify(customizationData)
        })
    })
    .then(() => {
        // Then publish
        return fetch('{{ route("shop.themes.publish") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            button.innerHTML = '<i class="fas fa-check me-1"></i> Published!';
            alert('Theme published successfully!');
            setTimeout(() => {
                button.disabled = false;
                button.innerHTML = originalText;
            }, 2000);
        }
    })
    .catch(error => {
        alert('Error publishing theme');
        button.disabled = false;
        button.innerHTML = originalText;
    });
}
</script>
@endsection
