@extends('layouts.admin')

@section('title', 'Tenants')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Tenants (Users)</h1>
        <button class="p-btn">Export CSV</button>
    </div>

    <!-- Tenants Table -->
    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="card-header bg-white border-bottom border-light py-3">
             <ul class="nav nav-tabs card-header-tabs section-tabs">
                <li class="nav-item"><a class="nav-link active fw-semibold text-dark border-bottom border-2 border-primary" href="#">All</a></li>
                <li class="nav-item"><a class="nav-link text-subdued" href="#">Active</a></li>
                <li class="nav-item"><a class="nav-link text-subdued" href="#">Suspended</a></li>
            </ul>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" style="font-size: 14px;">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-4 py-3 border-bottom-0 fw-semibold text-subdued">User</th>
                        <th class="border-bottom-0 fw-semibold text-subdued">Role</th>
                        <th class="border-bottom-0 fw-semibold text-subdued">Assigned Site</th>
                        <th class="border-bottom-0 fw-semibold text-subdued">Joined</th>
                        <th class="border-bottom-0 fw-semibold text-subdued text-end pe-4">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="ps-4 py-3">
                            <div class="d-flex align-items-center">
                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width:36px; height:36px; color:#5c5f62;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <div class="fw-bold text-dark">Sarah Jenkins</div>
                                    <div class="small text-subdued">sarah@joara.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-light text-dark border">Owner</span></td>
                        <td>Joara Jewels</td>
                        <td class="text-subdued">Oct 24, 2025</td>
                        <td class="text-end pe-4"><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Active</span></td>
                    </tr>
                    <tr>
                        <td class="ps-4 py-3">
                            <div class="d-flex align-items-center">
                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width:36px; height:36px; color:#5c5f62;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <div class="fw-bold text-dark">John Doe</div>
                                    <div class="small text-subdued">john@joara.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-light text-dark border">Manager</span></td>
                        <td>Joara Jewels</td>
                        <td class="text-subdued">Nov 01, 2025</td>
                        <td class="text-end pe-4"><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Active</span></td>
                    </tr>
                     <tr>
                        <td class="ps-4 py-3">
                            <div class="d-flex align-items-center">
                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width:36px; height:36px; color:#5c5f62;">
                                    <i class="fas fa-user-slash"></i>
                                </div>
                                <div>
                                    <div class="fw-bold text-dark">Mike Ross</div>
                                    <div class="small text-subdued">mike@goldenera.co</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-light text-dark border">Owner</span></td>
                        <td>Golden Era</td>
                        <td class="text-subdued">Dec 12, 2025</td>
                        <td class="text-end pe-4"><span class="badge bg-danger bg-opacity-10 text-danger rounded-pill">Suspended</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
