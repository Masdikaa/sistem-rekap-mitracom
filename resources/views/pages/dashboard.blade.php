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
        <div class="col-md-9 mb-3 me-2">
            <div class="card">
                <div class="card-header">
                    <h1 class="h5 fw-bold mb-2">
                        Grafik data customer
                    </h1>
                </div>
                <div class="card-body">
                    {!! $totalCustomers->container() !!}
                </div>
            </div>
        </div>

        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h1>Masdika</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
