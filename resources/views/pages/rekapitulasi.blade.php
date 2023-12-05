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
          Print lembar rekapitulasi dengan sekali klik
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

<div class="year-month-filter">
  <!-- rekapitulasi.blade.php -->
@for ($year = date('Y'); $year >= date('Y') - 4; $year--)
<div class="year-section" style="margin-bottom: 20px;">
    <h5>{{ $year }}</h5>
    <div class="month-buttons" style="display: flex; gap: 10px; margin-top: 10px;">
        @for ($month = 1; $month <= 12; $month++)
            @php
                $month = str_pad($month, 2, '0', STR_PAD_LEFT);
                $monthName = date('F', mktime(0, 0, 0, $month, 1));
            @endphp
           <a href="#" onclick="printPage('{{ route('rekapitulasi.print', ['year' => $year, 'month' => $month]) }}')" class="btn btn-outline-secondary" style="margin-bottom: 10px;">{{ $monthName }}</a>

        @endfor
    </div>
</div>
@endfor

</div>






  <!-- END Dynamic Table Full -->

</div>
<!-- END Page Content -->
@endsection

<script>
  function printPage(url) {
      // Open a new window with the provided URL
      const newWindow = window.open(url, '_blank');

      // Once the window loads, trigger the print dialog
      newWindow.onload = () => {
          newWindow.print();
      };
  }
</script>