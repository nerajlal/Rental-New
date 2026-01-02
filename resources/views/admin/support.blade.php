@extends('layouts.admin')

@section('title', 'Support Tickets')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Support Tickets</h1>
        <button class="p-btn-primary"><i class="fas fa-plus me-2"></i> Open Ticket</button>
    </div>

    <!-- Tickets Table -->
    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" style="font-size: 14px;">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-4 py-3 fw-semibold text-subdued border-0">Ticket ID</th>
                        <th class="fw-semibold text-subdued border-0">Subject</th>
                        <th class="fw-semibold text-subdued border-0">Requested By</th>
                        <th class="fw-semibold text-subdued border-0">Priority</th>
                        <th class="fw-semibold text-subdued border-0">Status</th>
                        <th class="fw-semibold text-subdued border-0 text-end pe-4">Updated</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="ps-4 py-3"><a href="#" class="fw-bold text-dark text-decoration-none">#1024</a></td>
                        <td>Domain verification failed</td>
                        <td>Joara Jewels (Sarah)</td>
                        <td><span class="badge bg-danger bg-opacity-10 text-danger border border-danger">High</span></td>
                        <td><span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Open</span></td>
                        <td class="text-end pe-4 text-subdued">2 hrs ago</td>
                    </tr>
                     <tr>
                        <td class="ps-4 py-3"><a href="#" class="fw-bold text-dark text-decoration-none">#1023</a></td>
                        <td>How to add new tenant?</td>
                        <td>Golden Era (Mike)</td>
                        <td><span class="badge bg-info bg-opacity-10 text-info border border-info">Low</span></td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Resolved</span></td>
                        <td class="text-end pe-4 text-subdued">1 day ago</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
