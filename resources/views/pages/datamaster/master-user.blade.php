@extends('layouts.mitra-main')ng

@section('title', 'Master User')
@section('content')
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
        <div class="flex-grow-1">
          <h1 class="h3 fw-bold mb-2">
           MANAGE USER
          </h1>
          <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-alt">
              <li class="breadcrumb-item">
                <a class="link-fx" href="javascript:void(0)">Data Master</a>
              </li>
              <li class="breadcrumb-item" aria-current="page">
                User
              </li>
            </ol>
          </nav>
        </div>
        <a href="" class="btn btn-bg btn-success">
            <i class="fa fa-plus"></i> Add User
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
          Table User
        </h3>
      </div>
      <div class="block-content block-content-full">
        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full fs-sm">
          <thead>
            <tr>
              <th class="text-center" style="width: 80px;">#</th>
              <th>Name</th>
              <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
              <th style="width: 15%;">Registered</th>
            </tr>
          </thead>
          <tbody>
            @for ($i = 1; $i < 21; $i++)
              <tr>
                <td class="text-center">{{ $i }}</td>
                <td class="fw-semibold">
                  <a href="javascript:void(0)">John Doe</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  client{{ $i }}<span class="text-muted">@example.com</span>
                </td>
                <td class="text-muted">
                  {{ rand(2, 10) }} days ago
                </td>
              </tr>
            @endfor
          </tbody>
        </table>
      </div>
    </div>
    <!-- END Dynamic Table Full -->

  </div>
  <!-- END Page Content -->
@endsection