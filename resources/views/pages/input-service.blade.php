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
        {{-- Input Data Customer --}}
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
                            <span class="me-1">Simpan</span>
                            <i class="nav-main-link-icon bi bi-sd-card"></i>
                        </button>
                    </div>

                </form>
            </div>
        </div>
        {{-- End Input Data Customer --}}

        <!-- Input Data Barang -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Input data service
                </h3>
            </div>
            <div class="block-content block-content-full">
                {{-- Form input data --}}
                <form action="{{ route('store-barang') }}" method="POST" id="insertBarang">
                    @csrf
                    <div>
                        <label class="form-label" for="kategoriBarang">Kategori Barang</label><small class="text-danger"> *</small>
                        <select class="form-select" name="kategori" id="kategori">
                            <option>Pilih Kategori</option>
                            @foreach ($kategori as $kategori)
                                <option value="{{ $kategori }}">{{ $kategori }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="namaBarang">Nama Barang</label><small class="text-danger"> *</small>
                        <input type="text" class="form-control" id="namaBarang" name="namaBarang" placeholder="Nama Customer">
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="kerusakan">Kerusakan Barang</label><small class="text-danger"> *</small>
                        <textarea class="form-control" id="kerusakan" name="kerusakan" placeholder=""></textarea>
                    </div>


                    <div class="mt-4">
                        <label class="form-label" for="kelengkapan">Kelengkapan</label><small class="text-danger"> *</small>
                        <input type="text" class="form-control" id="kelengkapan" name="kelengkapan" placeholder="">
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="estimasiBiaya">Estimasi Biaya</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input type="text" class="form-control" id="estimasiBiaya" name="estimasiBiaya" placeholder="150.000.000">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="tanggalMasuk">Tanggal Masuk</label><small class="text-danger"> *</small>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tanggal</span>
                            </div>
                            <input type="date" class="form-control" id="tanggalMasuk" name="tanggalMasuk" placeholder="DD-MM-YYYY">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="tanggalEstimasi">Estimasi Selesai</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tanggal</span>
                            </div>
                            <input type="date" class="form-control" id="tanggalEstimasi" name="tanggalEstimasi" placeholder="DD-MM-YYYY">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="tanggalAmbil">Tanggal Ambil</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tanggal</span>
                            </div>
                            <input type="date" class="form-control" id="tanggalAmbil" name="tanggalAmbil" placeholder="DD-MM-YYYY"
                                value="">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="biayaPerbaikan">Biaya Perbaikan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input type="text" class="form-control" id="biayaPerbaikan" name="biayaPerbaikan" placeholder="150.000.000">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="status">Status</label><small class="text-danger"> *</small>
                        <select class="form-select" name="status" id="status">
                            <option>Pilih Status</option>
                            <option value="pengecekan">Pengecekan</option>
                            <option value="perbaikan">Perbaikan</option>
                            <option value="berhasil">Berhasil</option>
                            <option value="batal">Batal</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="alasanBatal">Alasan Pembatalan</label>
                        <textarea class="form-control" id="alasanBatal" name="alasanBatal"></textarea>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-primary">
                            <span class="me-1">Simpan</span>
                            <i class="nav-main-link-icon bi bi-sd-card"></i>
                        </button>
                    </div>

                </form>
            </div>
        </div>
        <!-- End Input Data Barang -->
    </div>
    <!-- END Page Content -->
@endsection
