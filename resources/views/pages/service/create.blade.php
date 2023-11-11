@extends('layouts.mitra-main')

@section('title', 'Input Service')

@section('content')

    <!-- Page Content -->
    <div class="content">
        {{-- Input Data Customer --}}
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">INPUT BARANG</h3>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3 ml-auto" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="{{ route('input-service.index') }}">Data Service</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Input Barang
                        </li>
                    </ol>
                </nav>
                
            </div>
            <div class="block-content block-content-full">
                {{-- Form input data --}}
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-10 col-md-8">
                <form action="{{ route('input-service.store') }}" method="POST" id="insertCustomer">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label class="form-label" for="namaCustomer">Nama</label><small class="text-danger"> *</small>
                            <input type="text" class="form-control" id="namaCustomer" name="namaCustomer" placeholder="Nama Customer">
                        </div>
                        <div class="col">
                            <label class="form-label" for="noHp">No HP</label><small class="text-danger"> *</small>
                            <input type="text" class="form-control" id="noHP" name="noHP" placeholder="081234567891">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="form-label" for="alamat">Alamat</label><small class="text-danger"> *</small>
                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat customer"></textarea>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <label class="form-label" for="namaBarang">Nama Barang</label><small class="text-danger"> *</small>
                            <input type="text" class="form-control" id="namaBarang" name="namaBarang" placeholder="Nama Customer">
                        </div>
                        <div class="col">
                            <label class="form-label" for="kategoriBarang">Kategori Barang</label><small class="text-danger"> *</small>
                            <select class="form-select" name="kategori" id="kategori">
                                <option>Pilih Kategori</option>
                                @foreach ($kategori as $kategori)
                                    <option value="{{ $kategori->idKategori }}">{{ $kategori->kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="form-label" for="kelengkapan">Kelengkapan Barang</label><small class="text-danger"> *</small>
                        <textarea class="form-control" id="kelengkapan" name="kelengkapan" placeholder="Masukan kelengkapan barang"></textarea>
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

                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-primary">
                            <span class="me-1">Simpan</span>
                            <i class="nav-main-link-icon bi bi-sd-card"></i>
                        </button>
                    </div>

                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Input Data Customer --}}

    </div>
    <!-- END Page Content -->










@endsection
