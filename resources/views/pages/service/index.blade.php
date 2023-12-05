@extends('layouts.mitra-main')

@section('title', 'Data Service')
@section('content')
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
        <div class="flex-grow-1">
          <h1 class="h3 fw-bold mb-2">
           DATA SERVICE
          </h1>
          <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-alt">
              <li class="breadcrumb-item">
                <a class="link-fx" href="javascript:void(0)">Data Service</a>
              </li>
              <li class="breadcrumb-item" aria-current="page">
                Barang
              </li>
            </ol>
          </nav>
        </div>
        <a href="{{ route('input-service.create') }}" class="btn btn-bg btn-success">
            <i class="bi bi-folder-plus"></i> Input Barang
        </a>

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
          Table Barang
        </h3>

        <div class="col col-md-3">
          <select class="form-select form-select-sm" name="tanggalMasuk" id="filterByMonth">
              <option selected disabled>Filter Bulan</option>
              <option value="">Semua Bulan</option>
              @for ($i = 1; $i <= 12; $i++)
                  @php
                      $month = str_pad($i, 2, '0', STR_PAD_LEFT); // Zero-padding for single-digit months
                      $monthName = date('F', mktime(0, 0, 0, $i, 1));
                  @endphp
                  <option value="{{ $month }}" @if(request('tanggalMasuk') == $month) selected @endif>{{ $monthName }}</option>
              @endfor
          </select>
      </div>
      
      </div>
      <div class="block-content block-content-full">
        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full fs-sm">
          <thead>
            <tr>
              <th class="text-center" style="width: 50px;">#</th>
              <th class="text-center" >Barang</th>
              <th class="text-center" style="width: 15%;">Kategori</th>
              <th class="text-center" style="width: 15%;">Customer</th>
              <th class="text-center" style="width: 15%;">Tanggal Masuk</th>
              <th class="text-center" style="width: 15%;">Status</th>
              <th class="text-center" style="width: 20%;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $data)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="fw-semibold text-center">{{ $data->namaBarang }}</td>
                <td class="fw-semibold text-center">{{ $data->kategori->kategori }}</td>
                <td class="fw-semibold text-center">{{ $data->customer->namaCustomer }}</td>
                <td class="fw-semibold text-center">{{ $data->tanggalMasuk }}</td>
                <td class="fw-semibold text-center">
                  @if ($data->status == 'pengecekan')
                    <span style="width: 150px;" class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Dalam Pengecekan</span>
                  @elseif ($data->status == 'perbaikan')
                    <span style="width: 150px;" class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Dalam Perbaikan</span>
                  @elseif ($data->status == 'selesaicek')
                    <span style="width: 150px;" class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Selesai dicek</span>
                  @elseif ($data->status == 'selesai')
                    <span style="width: 150px;" class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">SERVICE SELESAI</span>
                  @elseif ($data->status == 'batal')
                    <span style="width: 150px;" class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">DIBATALKAN</span>
                  @endif
                </td>

                <td class="text-center">
                  @if ($data->status == 'pengecekan')
                    <button type="button" style="width: 180px;" class="btn btn-sm btn-primary" id="fixButton" data-toggle="modal" data-target="#fixModal" data-id="{{ $data->idBarang }}">
                      <i class="nav-main-link-icon bi bi-check-circle"></i> Selesai Cek 
                    </button>
                  @elseif($data->status == 'selesaicek')
                    <button type="button" style="width: 90px;" class="btn btn-sm btn-primary" id="prosesButton" data-toggle="modal" data-target="#prosesModal" data-id="{{ $data->idBarang }}">
                      <i class="nav-main-link-icon bi bi-tools"></i> Proses
                    </button>
                    <button type="button" style="width: 90px;" class="btn btn-sm btn-danger" id="batalButton" data-toggle="modal" data-target="#batalModal" data-id="{{ $data->idBarang }}">
                      <i class="nav-main-link-icon bi bi-x-circle"></i> Batal
                    </button>
                  @elseif($data->status == 'batal')
                    {{-- <button type="button" style="width: 180px;" class="btn btn-sm btn-secondary" id="detailbatalButton" data-toggle="modal" data-target="#detailbatalModal" data-id="{{ $data->idBarang }}">
                      <i class="nav-main-link-icon bi bi-info-circle"></i> Detail
                    </button> --}}
                    @elseif($data->status == 'selesai')
                    <button type="button" style="width: 180px;" class="btn btn-sm btn-light" id="detailButton" data-toggle="modal" data-target="#detailModal" data-id="{{ $data->idBarang }}">
                      <i class="nav-main-link-icon bi bi-clipboard-data"></i> Detail Service
                    </button>
                  @elseif($data->status == 'perbaikan')
                    <button type="button" style="width: 180px;" class="btn btn-sm btn-success" id="selesaiButton" data-toggle="modal" data-target="#selesaiModal" data-id="{{ $data->idBarang }}">
                      <i class="nav-main-link-icon bi bi-check-circle"></i> Selesai
                    </button>
                    {{-- <button type="button" style="width: 90px;" class="btn btn-sm btn-secondary" id="detailButton" data-toggle="modal" data-target="#detailModal" data-id="{{ $data->idBarang }}">
                      <i class="nav-main-link-icon bi bi-info-circle"></i> Info
                    </button> --}}
                  @endif
                </td>
            </tr>
        @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!-- END Dynamic Table Full -->
  </div>
  <!-- END Page Content -->

 @include('pages.service.modals.fix')
 @include('pages.service.modals.batal')
 @include('pages.service.modals.proses')
 @include('pages.service.modals.selesai')
 @include('pages.service.modals.detail')

   

@endsection

<script>
  document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('filterByMonth').addEventListener('change', function() {
          var selectedMonth = this.value;
          var currentUrl = window.location.href.split('?')[0]; // Get the current URL
          var newUrl = currentUrl + '?tanggalMasuk=' + selectedMonth; // Append the selected month as query parameter
          window.location.href = newUrl; // Redirect to the new URL with the selected month filter
      });
  });
</script>