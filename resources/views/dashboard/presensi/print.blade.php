<!-- resources/views/presensi/print.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Print Presensi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 20px auto;
            max-width: 800px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        @media print {
            .no-print {
                display: none;
            }
            table {
                page-break-inside: auto;
            }
            tr {
                page-break-inside: avoid;
                page-break-after: auto;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Print Presensi</h1>
    <p>Bulan: {{ $bulan }} - Tahun: {{ $tahun }}</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($presensis as $presensi)
                <tr>
                    <td>{{ optional($presensi->anggota)->nama }}</td>
                    <td>{{ $presensi->tanggal }}</td>
                    <td>{{ $presensi->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button onclick="window.print()" class="btn btn-primary no-print">Print</button>
</div>
</body>
</html>
