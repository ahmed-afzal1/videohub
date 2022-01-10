@extends('layouts.admin')



@section('content')

    <div class="row mb-3">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 bg-primary">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white mb-1">{{ __('Total Customer') }}</div>
                            <div class="h5 mb-0 font-weight-bold text-white">{{ App\Models\User::count() }}</div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 bg-success">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white mb-1">{{ __('Total Orders') }}</div>
                            <div class="h5 mb-0 font-weight-bold text-white">{{ App\Models\Order::count() }}</div>

                        </div>
                        <div class="col-auto">
                            <i class="fab fa-first-order fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 bg-danger ">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white mb-1">{{ __('Total Movies') }}</div>
                            <div class="h5 mb-0 font-weight-bold text-white">{{ App\Models\Movie::count() }}</div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-video fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 bg-secondary">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white mb-1">{{ __('Total Shows') }}</div>
                            <div class="h5 mb-0 font-weight-bold text-white">{{ App\Models\TvShow::count() }}</div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-film fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Monthly Recap Report</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle btn btn-primary btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Filter
                            {{-- <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> --}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item active" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Invoice Example -->
        <div class="col-xl-12 col-lg-12 mb-4">
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Invoice</h6>
                    <a class="m-0 float-right btn btn-danger btn-sm" href="#">View More
                         {{-- <i class="fas fa-chevron-right"></i> --}}
                        </a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Item</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">RA0449</a></td>
                                <td>Udin Wayang</td>
                                <td>Nasi Padang</td>
                                <td><span class="badge badge-success">Delivered</span></td>
                                <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">RA5324</a></td>
                                <td>Jaenab Bajigur</td>
                                <td>Gundam 90 Edition</td>
                                <td><span class="badge badge-warning">Shipping</span></td>
                                <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">RA8568</a></td>
                                <td>Rivat Mahesa</td>
                                <td>Oblong T-Shirt</td>
                                <td><span class="badge badge-danger">Pending</span></td>
                                <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">RA1453</a></td>
                                <td>Indri Junanda</td>
                                <td>Hat Rounded</td>
                                <td><span class="badge badge-info">Processing</span></td>
                                <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">RA1998</a></td>
                                <td>Udin Cilok</td>
                                <td>Baby Powder</td>
                                <td><span class="badge badge-success">Delivered</span></td>
                                <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
    <!--Row-->

@endsection

@section('script')
    <script src="{{ asset('assets/admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/demo/chart-area-demo.js') }}"></script>
@endsection
