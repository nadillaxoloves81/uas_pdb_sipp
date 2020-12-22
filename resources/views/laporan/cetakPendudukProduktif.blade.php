<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Penduduk Produktif</title>
</head>
<body>
    <h1 align="center">Laporan Penduduk Produktif Rentang Usia 15 - 64 tahun</h1>
    <table class="table" width="100%" border="1px" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach($pendudukProduktifs as $pendudukProduktif)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pendudukProduktif->nama }}</td>
                <td>{{ $pendudukProduktif->nik }}</td>
                <td>{{ $pendudukProduktif->jenis_kelamin }}</td>
                <td>{{ $pendudukProduktif->tanggal_lahir }}</td>
        @endforeach
            </tr>
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>