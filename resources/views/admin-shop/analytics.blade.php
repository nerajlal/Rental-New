@extends('admin-shop.layout')

@section('title', 'Analytics')

@section('content')
<div class="container-fluid p-0">
    <h1 class="h4 fw-bold mb-4 text-dark">Analytics</h1>

    <!-- Key Metrics -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Total Rentals</small>
                <h3 class="fw-bold mb-1 mt-2">127</h3>
                <small class="text-success"><i class="fas fa-arrow-up"></i> 12% from last month</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Revenue</small>
                <h3 class="fw-bold mb-1 mt-2">$15,840</h3>
                <small class="text-success"><i class="fas fa-arrow-up"></i> 8% from last month</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Avg Rental Value</small>
                <h3 class="fw-bold mb-1 mt-2">$124.72</h3>
                <small class="text-subdued"><i class="fas fa-minus"></i> No change</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3" style="border-radius: 8px;">
                <small class="text-subdued text-uppercase fw-bold" style="font-size: 11px;">Return Rate</small>
                <h3 class="fw-bold mb-1 mt-2">98.5%</h3>
                <small class="text-success"><i class="fas fa-arrow-up"></i> 2% from last month</small>
            </div>
        </div>
    </div>

    <!-- Revenue Chart -->
    <div class="card border-0 shadow-sm mb-4" style="border-radius: 8px;">
        <div class="card-body p-4">
            <h6 class="fw-bold mb-4">Rental Revenue (Last 7 days)</h6>
            <div style="height: 250px; background: linear-gradient(180deg, rgba(0, 128, 96, 0.05) 0%, transparent 100%); border-radius: 6px; position: relative; display: flex; align-items: flex-end; padding: 20px; gap: 8px;">
                <div style="flex: 1; background: #008060; height: 45%; border-radius: 4px 4px 0 0; position: relative;">
                    <small style="position: absolute; top: -20px; left: 50%; transform: translateX(-50%); font-size: 11px; font-weight: 600;">$1.8k</small>
                </div>
                <div style="flex: 1; background: #008060; height: 60%; border-radius: 4px 4px 0 0; position: relative;">
                    <small style="position: absolute; top: -20px; left: 50%; transform: translateX(-50%); font-size: 11px; font-weight: 600;">$2.1k</small>
                </div>
                <div style="flex: 1; background: #008060; height: 75%; border-radius: 4px 4px 0 0; position: relative;">
                    <small style="position: absolute; top: -20px; left: 50%; transform: translateX(-50%); font-size: 11px; font-weight: 600;">$2.5k</small>
                </div>
                <div style="flex: 1; background: #008060; height: 55%; border-radius: 4px 4px 0 0; position: relative;">
                    <small style="position: absolute; top: -20px; left: 50%; transform: translateX(-50%); font-size: 11px; font-weight: 600;">$1.9k</small>
                </div>
                <div style="flex: 1; background: #008060; height: 82%; border-radius: 4px 4px 0 0; position: relative;">
                    <small style="position: absolute; top: -20px; left: 50%; transform: translateX(-50%); font-size: 11px; font-weight: 600;">$2.8k</small>
                </div>
                <div style="flex: 1; background: #008060; height: 90%; border-radius: 4px 4px 0 0; position: relative;">
                    <small style="position: absolute; top: -20px; left: 50%; transform: translateX(-50%); font-size: 11px; font-weight: 600;">$3.1k</small>
                </div>
                <div style="flex: 1; background: #00a876; height: 100%; border-radius: 4px 4px 0 0; position: relative;">
                    <small style="position: absolute; top: -20px; left: 50%; transform: translateX(-50%); font-size: 11px; font-weight: 600; color: #008060;">$3.5k</small>
                </div>
            </div>
            <div class="d-flex justify-content-around mt-3 text-subdued" style="font-size: 12px;">
                <span>Mon</span>
                <span>Tue</span>
                <span>Wed</span>
                <span>Thu</span>
                <span>Fri</span>
                <span>Sat</span>
                <span>Sun</span>
            </div>
        </div>
    </div>

    <!-- Top Rented Items -->
    <div class="card border-0 shadow-sm" style="border-radius: 8px;">
        <div class="card-body p-4">
            <h6 class="fw-bold mb-3">Top Rented Jewelry Items</h6>
            <div class="table-responsive">
                <table class="table mb-0" style="font-size: 14px;">
                    <thead>
                        <tr>
                            <th class="border-0 text-subdued fw-semibold pb-3">Product</th>
                            <th class="border-0 text-subdued fw-semibold pb-3">Rentals</th>
                            <th class="border-0 text-subdued fw-semibold pb-3">Revenue</th>
                            <th class="border-0 text-subdued fw-semibold pb-3">Utilization</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-0 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Gold Plated Bridal Necklace Set</span>
                                </div>
                            </td>
                            <td class="border-0 py-3">45 rentals</td>
                            <td class="border-0 py-3 fw-medium">$6,750</td>
                            <td class="border-0 py-3">
                                <div class="progress" style="height: 6px; background: #f1f2f3;">
                                    <div class="progress-bar" style="width: 85%; background: #008060;"></div>
                                </div>
                                <small class="text-subdued">85%</small>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-0 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Diamond Studded Bangles</span>
                                </div>
                            </td>
                            <td class="border-0 py-3">38 rentals</td>
                            <td class="border-0 py-3 fw-medium">$3,610</td>
                            <td class="border-0 py-3">
                                <div class="progress" style="height: 6px; background: #f1f2f3;">
                                    <div class="progress-bar" style="width: 72%; background: #008060;"></div>
                                </div>
                                <small class="text-subdued">72%</small>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-0 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem" style="color: #008060;"></i>
                                    <span class="fw-medium">Antique Maang Tikka</span>
                                </div>
                            </td>
                            <td class="border-0 py-3">29 rentals</td>
                            <td class="border-0 py-3 fw-medium">$2,175</td>
                            <td class="border-0 py-3">
                                <div class="progress" style="height: 6px; background: #f1f2f3;">
                                    <div class="progress-bar" style="width: 58%; background: #008060;"></div>
                                </div>
                                <small class="text-subdued">58%</small>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
