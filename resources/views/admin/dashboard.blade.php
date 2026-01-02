@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<style>
    /* Dashboard Specific Styles */
    .p-card {
        background: white;
        border-radius: 8px;
        box-shadow: var(--p-shadow-card);
        margin-bottom: 20px;
        border: 1px solid #e1e3e5;
    }
    .p-card-header {
        padding: 16px;
        border-bottom: 1px solid #e1e3e5;
        font-weight: 600;
        font-size: 14px;
        color: #202223;
    }
    
    .status-dot { height: 10px; width: 10px; border-radius: 50%; display: inline-block; margin-right: 6px; }
    .status-active { background-color: #008060; } /* Shopify Green */
    .status-expired { background-color: #d82c0d; } /* Shopify Red */
    .status-warning { background-color: #ffb800; } /* Warning */
</style>

<div class="mb-4">
    <h1 class="fw-bold" style="font-size: 20px; color: #202223;">Platform Overview</h1>
</div>

<div class="row g-4">
    <!-- Main Column (Left) -->
    <div class="col-12 col-lg-8">
        
        <!-- Action Required -->
        <div class="p-card">
             <div class="d-flex justify-content-between align-items-center p-3 cursor-pointer" style="background: #fff8f8; border-bottom: 1px solid #e1e3e5; border-radius: 8px 8px 0 0;">
                <span class="fw-semibold small text-dark"><i class="fas fa-exclamation-circle text-danger me-2"></i>Action Needed</span>
             </div>
             <div class="p-3">
                 <div class="d-flex gap-3 align-items-start">
                     <div>
                         <h4 class="fw-semibold text-dark mb-1" style="font-size: 14px;">3 Sites Near Expiry</h4>
                         <p class="text-subdued small mb-2">These rental sites have subscriptions expiring within 7 days. Send reminders?</p>
                         <a href="#" class="p-btn text-decoration-none">View expired sites</a>
                     </div>
                 </div>
             </div>
        </div>

        <!-- Recent Site Registrations -->
        <div class="p-card p-0 overflow-hidden">
            <div class="p-3 border-bottom d-flex justify-content-between align-items-center">
                 <h2 class="fw-bold text-dark mb-0" style="font-size: 14px;">Recent Sites</h2>
                 <a href="#" class="small text-decoration-none" style="color: #008060; font-weight: 500;">View all sites</a>
            </div>
            <div class="table-responsive">
                <table class="table mb-0" style="font-size: 13px;">
                    <thead style="background: #f1f2f3; border-bottom: 1px solid #e1e3e5;">
                        <tr>
                            <th class="px-3 py-2 fw-semibold text-subdued border-0">Site Name</th>
                            <th class="px-3 py-2 fw-semibold text-subdued border-0">Owner</th>
                            <th class="px-3 py-2 fw-semibold text-subdued border-0">Plan</th>
                            <th class="px-3 py-2 fw-semibold text-subdued border-0">Registered</th>
                            <th class="px-3 py-2 fw-semibold text-subdued border-0">Payment</th>
                            <th class="px-3 py-2 fw-semibold text-subdued border-0 text-end">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td class="px-3 py-3 fw-bold text-dark">
                                <a href="#" class="text-decoration-none text-dark">Luxe Rentals</a>
                                <div class="small text-subdued" style="font-size: 11px;">luxerentals.rentaljewel.com</div>
                            </td>
                            <td class="px-3 py-3 text-dark">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center text-dark" style="width: 24px; height: 24px; font-size: 10px;">SJ</div>
                                    Sarah J.
                                </div>
                            </td>
                            <td class="px-3 py-3 text-dark"><span class="badge bg-purple bg-opacity-10 text-purple border border-purple border-opacity-10 rounded-pill fw-normal px-2 text-dark">Pro Plan</span></td>
                            <td class="px-3 py-3 text-subdued">Today</td>
                            <td class="px-3 py-3"><span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 rounded-pill fw-normal px-2">Paid</span></td>
                            <td class="px-3 py-3 text-end"><span class="status-dot status-active"></span>Active</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-3 fw-bold text-dark">
                                <a href="#" class="text-decoration-none text-dark">Urban Stays</a>
                                <div class="small text-subdued" style="font-size: 11px;">urbanstays.rentaljewel.com</div>
                            </td>
                            <td class="px-3 py-3 text-dark">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center text-dark" style="width: 24px; height: 24px; font-size: 10px;">MR</div>
                                    Mike Ross
                                </div>
                            </td>
                            <td class="px-3 py-3 text-dark"><span class="badge bg-light text-dark border rounded-pill fw-normal px-2">Free Trial</span></td>
                            <td class="px-3 py-3 text-subdued">Yesterday</td>
                            <td class="px-3 py-3"><span class="badge bg-warning bg-opacity-10 text-warning-emphasis border border-warning border-opacity-25 rounded-pill fw-normal px-2">Due</span></td>
                            <td class="px-3 py-3 text-end"><span class="status-dot status-active"></span>Active</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-3 fw-bold text-dark">
                                <a href="#" class="text-decoration-none text-dark">Cozy Cabins</a>
                                <div class="small text-subdued" style="font-size: 11px;">cozycabins.rentaljewel.com</div>
                            </td>
                            <td class="px-3 py-3 text-dark">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center text-dark" style="width: 24px; height: 24px; font-size: 10px;">EW</div>
                                    Emma W.
                                </div>
                            </td>
                            <td class="px-3 py-3 text-dark"><span class="badge bg-purple bg-opacity-10 text-purple border border-purple border-opacity-10 rounded-pill fw-normal px-2 text-dark">Enterprise</span></td>
                            <td class="px-3 py-3 text-subdued">Dec 28</td>
                            <td class="px-3 py-3"><span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 rounded-pill fw-normal px-2">Overdue</span></td>
                            <td class="px-3 py-3 text-end"><span class="status-dot status-warning"></span>Expiring</td>
                        </tr>
                    </tbody>
                </table>
            </div>
             <div class="p-3 bg-light border-top d-flex justify-content-center">
                 <a href="#" class="small text-decoration-none text-subdued">Show all 142 sites</a>
             </div>
        </div>

    </div>

    <!-- Sidebar Column (Right) - Insights -->
    <div class="col-12 col-lg-4">
        
        <!-- Platform Health -->
        <div class="p-card">
            <div class="p-3 border-bottom d-flex justify-content-between align-items-center">
                <span class="fw-bold" style="font-size: 13px;">Platform Health</span>
                <span class="text-subdued small cursor-pointer">View report</span>
            </div>
            
            <div class="p-3 border-bottom">
                <div class="d-flex align-items-center gap-2 mb-1">
                    <span class="text-subdued small fw-medium text-uppercase" style="font-size: 11px; letter-spacing: 0.5px;">TOTAL ACTIVE SITES</span>
                </div>
                <h3 class="fw-bold fs-4 mb-0">142</h3>
                <span class="text-subdued small"><span class="text-success"><i class="fas fa-arrow-up"></i> 12</span> new this month</span>
            </div>
            
            <div class="p-3 border-bottom">
                 <div class="d-flex align-items-center gap-2 mb-1">
                    <span class="text-subdued small fw-medium text-uppercase" style="font-size: 11px; letter-spacing: 0.5px;">REVENUE (MRR)</span>
                </div>
                <h3 class="fw-bold fs-4 mb-0">₹452,300</h3>
                 <span class="small text-subdued"><span class="text-success"><i class="fas fa-arrow-up"></i> 8%</span> vs last month</span>
            </div>

             <div class="p-3">
                 <div class="d-flex align-items-center gap-2 mb-1">
                    <span class="text-subdued small fw-medium text-uppercase" style="font-size: 11px; letter-spacing: 0.5px;">PENDING PAYMENTS</span>
                </div>
                <h3 class="fw-bold fs-4 mb-0 text-warning-emphasis">₹12,500</h3>
                <span class="small text-subdued">5 invoices overdue</span>
             </div>
        </div>

        <!-- Expiring Soon Widget -->
        <div class="p-card mt-3">
             <div class="p-3 border-bottom">
                 <h2 class="fw-bold text-dark mb-1" style="font-size: 14px;">Expiring Soon</h2>
                 <p class="text-subdued small mb-0">Sites expiring in next 7 days</p>
             </div>
             <div class="p-0">
                 <ul class="list-group list-group-flush">
                     <li class="list-group-item px-3 py-3 border-bottom-0 border-light d-flex justify-content-between align-items-center">
                         <div>
                             <div class="fw-semibold small text-dark">Cozy Cabins</div>
                             <div class="text-danger small" style="font-size: 11px;">Expires in 2 days</div>
                         </div>
                         <button class="btn btn-sm btn-light border p-1 px-2 text-subdued" style="font-size: 11px;">Notify</button>
                     </li>
                     <li class="list-group-item px-3 py-3 border-bottom-0 border-light d-flex justify-content-between align-items-center">
                         <div>
                             <div class="fw-semibold small text-dark">Beach House VR</div>
                             <div class="text-warning small" style="font-size: 11px;">Expires in 5 days</div>
                         </div>
                         <button class="btn btn-sm btn-light border p-1 px-2 text-subdued" style="font-size: 11px;">Notify</button>
                     </li>
                 </ul>
                 <div class="p-3 border-top">
                    <a href="#" class="p-btn w-100 justify-content-center">View all expiring</a>
                 </div>
             </div>
        </div>

    </div>
</div>
@endsection
