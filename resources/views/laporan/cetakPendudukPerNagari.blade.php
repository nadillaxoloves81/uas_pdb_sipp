<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Penduduk Tiap Nagari</title>
</head>
<body>
    <h2 align="center">Daftar Penduduk di Nagari {{ $namaNagari->nama }}</h2>
    <table class="table" width="100%"  border="1px" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach($results as $result)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $result->nama }}</td>
                <td>{{ $result->nik }}</td>
                <td>{{ $result->jenis_kelamin }}</td>
        @endforeach
            </tr>
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>