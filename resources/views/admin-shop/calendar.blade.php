@extends('admin-shop.layout')

@section('title', 'Rental Calendar')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold mb-0 text-dark">Rental Calendar</h1>
        <div class="d-flex gap-2">
            <select class="form-select form-select-sm" style="width: auto; border-radius: 6px;">
                <option>This Month</option>
                <option>Next Month</option>
            </select>
        </div>
    </div>

    <!-- Calendar View -->
    <div class="card border-0 shadow-sm mb-4" style="border-radius: 8px;">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h6 class="fw-bold mb-0">January 2026</h6>
                <div class="d-flex gap-2">
                    <button class="p-btn btn-sm"><i class="fas fa-chevron-left"></i></button>
                    <button class="p-btn btn-sm">Today</button>
                    <button class="p-btn btn-sm"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>

            <!-- Calendar Grid -->
            <div class="table-responsive">
                <table class="table mb-0" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th class="text-center border-0 text-subdued fw-semibold py-2">Mon</th>
                            <th class="text-center border-0 text-subdued fw-semibold py-2">Tue</th>
                            <th class="text-center border-0 text-subdued fw-semibold py-2">Wed</th>
                            <th class="text-center border-0 text-subdued fw-semibold py-2">Thu</th>
                            <th class="text-center border-0 text-subdued fw-semibold py-2">Fri</th>
                            <th class="text-center border-0 text-subdued fw-semibold py-2">Sat</th>
                            <th class="text-center border-0 text-subdued fw-semibold py-2">Sun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2 border text-center" style="height: 100px; vertical-align: top; background: #f9fafb;">
                                <div class="fw-medium mb-1">30</div>
                            </td>
                            <td class="p-2 border text-center" style="height: 100px; vertical-align: top; background: #f9fafb;">
                                <div class="fw-medium mb-1">31</div>
                            </td>
                            <td class="p-2 border text-center" style="height: 100px; vertical-align: top;">
                                <div class="fw-medium mb-1">1</div>
                                <div class="badge bg-success bg-opacity-10 text-success rounded-pill mb-1" style="font-size: 10px;">3 rentals</div>
                            </td>
                            <td class="p-2 border text-center" style="height: 100px; vertical-align: top; background: #fffbeb; border-left: 3px solid #f59e0b;">
                                <div class="fw-medium mb-1">2</div>
                                <div class="badge bg-warning bg-opacity-10 text-warning rounded-pill mb-1" style="font-size: 10px;">5 returns</div>
                            </td>
                            <td class="p-2 border text-center" style="height: 100px; vertical-align: top;">
                                <div class="fw-medium mb-1">3</div>
                                <div class="badge bg-success bg-opacity-10 text-success rounded-pill mb-1" style="font-size: 10px;">2 rentals</div>
                            </td>
                            <td class="p-2 border text-center" style="height: 100px; vertical-align: top;">
                                <div class="fw-medium mb-1">4</div>
                            </td>
                            <td class="p-2 border text-center" style="height: 100px; vertical-align: top;">
                                <div class="fw-medium mb-1">5</div>
                                <div class="badge bg-success bg-opacity-10 text-success rounded-pill mb-1" style="font-size: 10px;">1 rental</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 border text-center" style="height: 100px; vertical-align: top;">
                                <div class="fw-medium mb-1">6</div>
                                <div class="badge bg-success bg-opacity-10 text-success rounded-pill mb-1" style="font-size: 10px;">4 rentals</div>
                            </td>
                            <td class="p-2 border text-center" style="height: 100px; vertical-align: top;">
                                <div class="fw-medium mb-1">7</div>
                            </td>
                            <td class="p-2 border text-center" style="height: 100px; vertical-align: top;">
                                <div class="fw-medium mb-1">8</div>
                                <div class="badge bg-warning bg-opacity-10 text-warning rounded-pill mb-1" style="font-size: 10px;">2 returns</div>
                            </td>
                            <td class="p-2 border text-center" style="height: 100px; vertical-align: top;">
                                <div class="fw-medium mb-1">9</div>
                            </td>
                            <td class="p-2 border text-center" style="height: 100px; vertical-align: top;">
                                <div class="fw-medium mb-1">10</div>
                                <div class="badge bg-success bg-opacity-10 text-success rounded-pill mb-1" style="font-size: 10px;">3 rentals</div>
                            </td>
                            <td class="p-2 border text-center" style="height: 100px; vertical-align: top;">
                                <div class="fw-medium mb-1">11</div>
                            </td>
                            <td class="p-2 border text-center" style="height: 100px; vertical-align: top;">
                                <div class="fw-medium mb-1">12</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Legend -->
            <div class="d-flex gap-3 mt-3">
                <div class="d-flex align-items-center gap-2">
                    <div style="width: 12px; height: 12px; background: #d1fae5; border-radius: 2px;"></div>
                    <small class="text-subdued">New Rentals</small>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div style="width: 12px; height: 12px; background: #fef3c7; border-radius: 2px;"></div>
                    <small class="text-subdued">Returns Due</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Today's Schedule -->
    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="card-body p-4">
            <h6 class="fw-bold mb-3">Today's Schedule (Jan 2)</h6>
            <div class="table-responsive">
                <table class="table mb-0" style="font-size: 14px;">
                    <thead class="bg-light">
                        <tr>
                            <th class="border-0 fw-semibold text-subdued py-3">Item</th>
                            <th class="border-0 fw-semibold text-subdued py-3">Customer</th>
                            <th class="border-0 fw-semibold text-subdued py-3">Action</th>
                            <th class="border-0 fw-semibold text-subdued py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-0 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Bridal Necklace Set</span>
                                </div>
                            </td>
                            <td class="border-0 py-3 text-subdued">Sarah Johnson</td>
                            <td class="border-0 py-3"><span class="badge bg-danger bg-opacity-10 text-danger rounded-pill">Return Due</span></td>
                            <td class="border-0 py-3"><span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Pending</span></td>
                        </tr>
                        <tr>
                            <td class="border-0 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Diamond Bangles</span>
                                </div>
                            </td>
                            <td class="border-0 py-3 text-subdued">Emma Williams</td>
                            <td class="border-0 py-3"><span class="badge bg-danger bg-opacity-10 text-danger rounded-pill">Return Due</span></td>
                            <td class="border-0 py-3"><span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Pending</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
