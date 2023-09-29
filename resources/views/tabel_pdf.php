<!DOCTYPE html>
<html>

<head>
    <title>Data Pendaftaran</title>
    <style>
        /* Tambahkan gaya CSS untuk mencetak PDF sesuai kebutuhan Anda */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Data Pendaftaran</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Pelayanan</th>
                <th>Spesialis</th>
                <th>Jenis Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $val)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $val->nama_pasien }}</td>
                <td>{{ $val->jenis_kelamin }}</td>
                <td>{{ $val->tanggal_lahir }}</td>
                <td>{{ $val->jenis_pelayanan }}</td>
                <td>{{ $val->spesialis }}</td>
                <td>{{ $val->jenis_pembayaran }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>