@extends('layouts.mitra-main')
@section('title', 'Dasboard')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">

                {{-- Dashboard Header --}}
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-2">
                        Dashboard
                    </h1>
                    <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                        Selamat datang {{ Auth::user()->username }}
                    </h2>
                </div>

                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                </nav>
                {{-- End Dashboard Header --}}
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="container-char mx-3 my-3 row g-1">
        <!-- Dashboard Charts -->
        <div class="row">
            <div class="col-lg-6">
                <div class="block block-rounded block-mode-loading-oneui">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Earnings in $</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>

                    <div class="block-content p-0 text-center">
                        {!! $totalCustomers->container() !!}
                        {{-- <div class="pt-3" style="height: 360px;"><canvas id="js-chartjs-dashboard-earnings"></canvas></div> --}}
                    </div>

                    <div class="block-content">
                        <div class="row items-push text-center py-3">
                            <div class="col-6 col-xl-3">
                                <i class="fa fa-wallet fa-2x text-muted"></i>
                                Total Customer
                                <div class="text-muted mt-3">$148,000</div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <i class="fa fa-angle-double-up fa-2x text-muted"></i>
                                <div class="text-muted mt-3">+9% Earnings</div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <i class="fa fa-ticket-alt fa-2x text-muted"></i>
                                <div class="text-muted mt-3">+20% Tickets</div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <i class="fa fa-users fa-2x text-muted"></i>
                                <div class="text-muted mt-3">+46% Clients</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="block block-rounded block-mode-loading-oneui">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Earnings in $</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>

                    <div class="block-content p-0 text-center">
                        {!! $jenisBarang->container() !!}
                        {{-- <div class="pt-3" style="height: 360px;"><canvas id="js-chartjs-dashboard-earnings"></canvas></div> --}}
                    </div>


                </div>
            </div>

        </div>
        <!-- END Dashboard Charts -->

    </div>
    <!-- END Page Content -->

    <script src="{{ $totalCustomers->cdn() }}"></script>
    {{ $totalCustomers->script() }}
    <script src="{{ $jenisBarang->cdn() }}"></script>
    {{ $jenisBarang->script() }}

@endsection
