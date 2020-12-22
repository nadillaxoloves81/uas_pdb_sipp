<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Pendidikan Penduduk</title>
</head>
<body>
    <h1 align="center">Laporan Penduduk dengan Level Pendidikan SMP/SLTP ke Bawah Per Nagari
</h1>

    <table class="table" width="100%" border="1px" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nagari</th>
                <th>Total Penduduk (Orang)</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach($jumlahPenduduks as $jumlahPenduduk)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $jumlahPenduduk->nama }}</td>
                <td align="center">{{ $jumlahPenduduk->total }}</td>
        @endforeach
            </tr>
        </tbody>

        <tfooter>
            <tr>
                <td colspan="2">Total Keseluruhan</td>
                <td align="center"><b>{{ $total }}</b></td>
            </tr>
        </tfooter>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>