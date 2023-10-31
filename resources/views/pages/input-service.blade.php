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
                <form>

                    <div>
                        <label class="form-label" for="username">Nama</label><small class="text-danger"> *</small>
                        <input type="text" class="form-control" id="" name="" placeholder="Nama Customer">
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="username">Kategori Barang</label><small class="text-danger"> *</small>
                        <select class="form-select" name="" id="">
                            <option>Pilih Kategori</option>
                            <option value="Batal">Batal</option>
                            <option value="Berhasil">Berhasil</option>
                            <option value="Dalam Perbaikan">Dalam Perbaikan</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="username">Nama Barang</label><small class="text-danger"> *</small>
                        <input type="text" class="form-control" id="" name="" placeholder="Nama Customer">
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="username">Kerusakan Barang</label><small class="text-danger"> *</small>
                        <textarea class="form-control" id="" name="" placeholder=""></textarea>
                    </div>


                    <div class="mt-4">
                        <label class="form-label" for="username">Kelengkapan</label><small class="text-danger"> *</small>
                        <input type="text" class="form-control" id="" name="" placeholder="">
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="username">Estimasi Biaya</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input type="text" class="form-control" id="" name="" placeholder="150.000.000">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="username">Tanggal Masuk</label><small class="text-danger"> *</small>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Tanggal</span>
                            </div>
                            <input type="date" class="form-control" id="" name="" placeholder="DD-MM-YYYY" value="">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="username">Estimasi Selesai</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Tanggal</span>
                            </div>
                            <input type="date" class="form-control" id="" name="" placeholder="DD-MM-YYYY" value="">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="username">Tanggal Ambil</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Tanggal</span>
                            </div>
                            <input type="date" class="form-control" id="" name="" placeholder="DD-MM-YYYY" value="">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="username">Biaya Perbaikan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input type="text" class="form-control" id="" name="" placeholder="150.000.000">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="username">Status</label><small class="text-danger"> *</small>
                        <select class="form-select" name="">
                            <option>Pilih Status</option>
                            <option value="Batal">Batal</option>
                            <option value="Berhasil">Berhasil</option>
                            <option value="Dalam Perbaikan">Dalam Perbaikan</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="username">Alasan Pembatalan</label>
                        <textarea class="form-control" id="" name="" placeholder=""></textarea>
                    </div>


                </form>

            </div>
        </div>
        <!-- END Dynamic Table Full -->

    </div>
    <!-- END Page Content -->

@endsection
