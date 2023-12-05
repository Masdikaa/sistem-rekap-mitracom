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
        <div class="row">

            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Selesai</div>
                        <div class="fs-2 fw-normal text-dark">{{ $barangSelesai }}</div>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Pengecekan</div>
                        <div class="fs-2 fw-normal text-dark">{{ $barangPengecekan }}</div>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Perbaikan</div>
                        <div class="fs-2 fw-normal text-dark">{{ $barangPerbaikan }}</div>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Batal</div>
                        <div class="fs-2 fw-normal text-dark">{{ $barangBatal }}</div>
                    </div>
                </a>
            </div>

        </div>
        <!-- Dashboard Charts -->
        <div class="row">
            <div class="col-lg-6">
                <div class="block block-rounded block-mode-loading-oneui">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Customer</h3>
                    </div>

                    <div class="block-content p-3 text-center">
                        {!! $totalCustomers->container() !!}
                        {{-- <div class="pt-3" style="height: 360px;"><canvas id="js-chartjs-dashboard-earnings"></canvas></div> --}}
                    </div>


                </div>
            </div>

            <div class="col-lg-6">
                <div class="block block-rounded block-mode-loading-oneui">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Tipe</h3>
                    </div>

                    <div class="block-content p-3 text-center">
                        {!! $jenisBarang->container() !!}
                        {{-- <div class="pt-3" style="height: 360px;"><canvas id="js-chartjs-dashboard-earnings"></canvas></div> --}}
                    </div>


                </div>
            </div>

        </div>
        <!-- END Dashboard Charts -->

    </div>
    <!-- END Page Content -->

    <!-- Chart Dashboard Script -->
    <script src="{{ $totalCustomers->cdn() }}"></script>
    {{ $totalCustomers->script() }}
    <script src="{{ $jenisBarang->cdn() }}"></script>
    {{ $jenisBarang->script() }}

@endsection
