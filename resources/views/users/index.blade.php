<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pendaftaran RS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <section class="container mt-5">
        @if(session('success'))
        <div class="alert alert-success">
            {{(session('success'))}}
        </div>
        @endif
        <a href="{{ route('user.pdf') }}" class="btn btn-primary">Unduh PDF</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Pelayanan</th>
                    <th scope="col">Spesialis</th>
                    <th scope="col">Jenis Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $key => $val)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $val->nama_pasien }}</td>
                    <td>{{ $val->jenis_kelamin }}</td>
                    <td>{{ $val->tanggal_lahir }}</td>
                    <td>{{ $val->jenis_pelayanan }}</td>
                    <td>{{ $val->spesialis }}</td>
                    <td>{{ $val->jenis_pembayaran }}</td>
                    <td>
                        <a href="{{ route('user.edit', $val->id) }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('user.destroy', $val->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>

</html>