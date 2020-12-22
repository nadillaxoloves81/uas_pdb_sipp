<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Penduduk di Semua Nagari</title>
</head>
<body>
    <h1 align="center">Daftar Penduduk di Semua Nagari</h1>
    <table class="table" width="100%" border="1px" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nagari</th>
                <th>Nama</th>
                <th>Nik</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach($results as $result)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $result->nagari }}</td>
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