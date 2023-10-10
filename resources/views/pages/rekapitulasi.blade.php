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
@endsection