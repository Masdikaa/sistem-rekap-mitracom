@extends('layouts.mitra-main')

@section('title', 'Master User')
@section('content')

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-2">MANAGE USER</h1>
                    <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-2" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">
                                <a class="link-fx" href="#">Data Master</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                User
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
                    Table User
                </h3>
                <a href="{{ route('datamaster-user.create') }}" class="btn btn-bg btn-success my-2">
                    <i class="fa fa-plus me-1"></i>
                    <span class="block-title" style="font-size: 12px; line-height: 12px;">Add User</span>
                </a>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full fs-sm">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">No</th>
                            <th>Username</th>
                            <th class="d-none d-sm-table-cell" style="width: 25%;">Role</th>
                            <th class="d-none d-sm-table-cell" style="width: 25%;">Status</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="fw-semibold">{{ $data->username }}</td>
                                <td class="fw-semibold">{{ ucwords($data->role) }}</td>
                                <td class="fw-semibold">{{ ucwords($data->status) }}</td>
                                <td class="text-center">
                                    <form action="{{ route('datamaster-user.destroy', $data->idUser) }}" method="POST">
                                        @csrf
                                        @method('delete')

                                        <a href="{{ route('datamaster-user.edit', $data->idUser) }}" class="btn btn-sm btn-primary">
                                            <i class="nav-main-link-icon bi bi-pencil-square"></i>
                                        </a>

                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Apakah Anda yakin menghapus data ini?');">
                                            <i class="nav-main-link-icon bi bi-trash"></i>
                                        </button>

                                    </form>
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
@endsection
