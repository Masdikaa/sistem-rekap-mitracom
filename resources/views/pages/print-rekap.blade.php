<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Data</title>
    <style>
        /* Define A4 size */
        @page {
            size: A4;
            margin: 0;
        }
        /* Set content to be printed */
        body {
            margin: 20px;
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .first-row {
            width: 100%;
        }
        .first-row td {
            grid-column: 1 / span 6;
        }
    </style>
</head>
<body>
    @if ($data->isEmpty())
        <p>No data available for this month.</p>
    @else
        <!-- Display the fetched data for printing -->
        <table>
            <tbody>
                <!-- Title row with one large cell spanning 6 columns -->
                <tr class="first-row">
                    <td colspan="6"><center><b>Rekapitulasi Service Mitracom Bulan {{ $bulan }} Tahun {{ $tahun }}</b></center></td>
                </tr>
                <!-- Header row with 6 columns -->
                <tr>
                    <th style="text-align: center;">Tanggal Masuk</th>
                    <th style="text-align: center;">Nama Barang</th>
                    <th style="text-align: center;">Kerusakan</th>
                    <th style="text-align: center;">Tanggal Ambil</th>
                    <th style="text-align: center;">Pemilik</th>
                    <th style="text-align: center;">Biaya (Rp.)</th>
                </tr>
                <!-- Loop through data -->
                @foreach ($data as $index => $barang)
                    <!-- Rest of the rows with 6 columns each -->
                    <tr>
                        <td style="text-align: right;">{{ date('d-m-Y', strtotime($barang->tanggalMasuk)) }}</td>
                        <td>{{ $barang->namaBarang }}</td>
                        <td>{{ $barang->kerusakan }}</td>
                        <td style="text-align: right;">{{ date('d-m-Y', strtotime($barang->tanggalAmbil)) }}</td>
                        <td>{{ $barang->customer->namaCustomer }}</td>
                        <td style="text-align: right;">{{ number_format($barang->biayaPerbaikan, 0, ',', '.') }}</td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
