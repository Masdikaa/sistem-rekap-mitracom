@extends('layouts.mitra-main')

@section('title', 'Input Service')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-2">INPUT SERVICE</h1>
                    <nav class="flex-shrink-0 ms-sm-0" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">
                                <a class="link-fx" href="/dashboard">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Input Service
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Input data service
                </h3>
            </div>
            <div class="block-content block-content-full">
                {{-- Form input data --}}
                <form action="{{ route('input-service.store') }}" method="POST" id="insertCustomer">
                    @csrf
                    <div>
                        <label class="form-label" for="nama">Nama</label><small class="text-danger"> *</small>
                        <input type="text" class="form-control" id="nama-customer" name="nama-customer" placeholder="Nama Customer">
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="nohp">No HP</label><small class="text-danger"> *</small>
                        <input type="text" class="form-control" id="hp-customer" name="hp-customer" placeholder="081234567891">
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="alamat">Alamat</label><small class="text-danger"> *</small>
                        <textarea class="form-control" id="alamat-customer" name="alamat-customer" placeholder="Masukan alamat customer"></textarea>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-primary">
                            <span class="me-2">Next</span>
                            <i class="nav-main-link-icon bi bi-arrow-right"></i>
                        </button>
                    </div>

                </form>
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>
    <!-- END Page Content -->
@endsection
