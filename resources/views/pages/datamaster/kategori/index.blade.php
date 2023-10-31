@extends('layouts.mitra-main')

@section('title', 'Master Kategori')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-2">
                        MANAGE KATEGORI
                    </h1>
                    <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">
                                <a class="link-fx" href="javascript:void(0)">Data Master</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Kategori
                            </li>
                        </ol>
                    </nav>
                </div>
                <a href="{{ route('datamaster-kategori.create') }}" class="btn btn-bg btn-success">
                    <i class="fa fa-plus"></i> Add Kategori
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
                    Table Kategori
                </h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full fs-sm">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">No</th>
                            <th class="text-center">Nama Kategori</th>
                            <th class="text-center" style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="fw-semibold text-center">{{ $data->kategori }}</td>
                                <td class="text-center">

                                    {{-- Button edit and delete --}}
                                    <form action="{{ route('datamaster-kategori.destroy', $data->idKategori) }}" method="POST">
                                        @csrf
                                        @method('delete')

                                        <a href="{{ route('datamaster-kategori.edit', $data->idKategori) }}" class="btn btn-sm btn-primary">
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
