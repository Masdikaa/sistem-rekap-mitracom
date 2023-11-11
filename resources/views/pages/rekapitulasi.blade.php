@extends('layouts.mitra-main')

@section('title', 'Rekapitulasi')

@section('content')
<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
      <div class="flex-grow-1">
        <h1 class="h3 fw-bold mb-2">
          REKAPITULASI
        </h1>
        <h2 class="fs-base lh-base fw-medium text-muted mb-0">
          ini page rekapitulasi
        </h2>
      </div>
      <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Home</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">
           Rekapitulasi
          </li>
        </ol>
      </nav>
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
              Data Rekap
          </h3>

      </div>
      <div class="block-content block-content-full">
          <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
          <table class="table table-bordered table-striped table-vcenter js-dataTable-full fs-sm">
              <thead>
                  <tr>
                      <th class="text-center" style="width: 80px;">No</th>
                      <th class="text-center">Nama Barang</th>
                      <th class="text-center">Nama Customer</th>
                      
                  </tr>
              </thead>
              <tbody>
                  @foreach ($data as $data)
                      <tr>
                          <td class="text-center">{{ $loop->iteration }}</td>
                          <td class="fw-semibold text-center">{{ $data->namaBarang }}</td>
                          <td class="fw-semibold text-center">{{ $data->customer->namaCustomer }}</td>
                          
                      </tr>
                  @endforeach

              </tbody>
          </table>
      </div>
  </div>
  <!-- END Dynamic Table Full -->

</div>
<!-- END Page Content -->
@endsection