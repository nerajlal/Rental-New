@extends('layouts.admin')

@section('title', 'Pending Approvals')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">New Shop Requests</h1>
        <span class="badge bg-warning text-dark">{{ $pendingUsers->count() }} Pending</span>
    </div>

    @if(session('success'))
    <div class="alert alert-success border-0 shadow-sm mb-4">
        <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
    </div>
    @endif

    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" style="font-size: 14px;">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-4 py-3 fw-semibold text-subdued border-0">Shop Name / Email</th>
                        <th class="fw-semibold text-subdued border-0">Registered Date</th>
                        <th class="fw-semibold text-subdued border-0">Status</th>
                        <th class="fw-semibold text-subdued border-0 text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pendingUsers as $user)
                    <tr>
                        <td class="ps-4 py-3">
                            <div class="d-flex align-items-center">
                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width:36px; height:36px; color:#5c5f62;">
                                    <i class="fas fa-store"></i>
                                </div>
                                <div>
                                    <div class="fw-bold text-dark">{{ $user->name }}</div>
                                    <div class="small text-subdued">{{ $user->email }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="text-subdued">{{ $user->created_at->format('M d, Y h:i A') }}</td>
                        <td><span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Pending</span></td>
                        <td class="text-end pe-4">
                            <div class="d-flex justify-content-end gap-2">
                                <form action="{{ route('admin.reject', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to reject this shop?');">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-danger border-0">Reject</button>
                                </form>
                                <form action="{{ route('admin.approve', $user->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="p-btn-primary py-1 px-3" style="font-size:12px;">Approve</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-5 text-subdued">
                            <i class="fas fa-check-circle fa-2x mb-3 text-success opacity-50"></i>
                            <p class="mb-0">No pending requests!</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
