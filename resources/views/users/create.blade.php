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
        <div class="card">
            <div class="card-header">
                Pendaftaran Pasien
            </div>
            <div class="card-body">
                <form action="{{route('user.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Nama Pasien</label>
                        <input type="text" name="nama_pasien" class="form-control">
                        @error('nama_pasien')<p class="text text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin :</label>
                        <select id="gender" name="jenis_kelamin" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                        @error('jenis_kelamin')<p class="text text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                        @error('tanggal_lahir')<p class="text text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Pelayanan</label>
                        <select id="jenis_pelayanan" name="jenis_pelayanan" required>
                            <option value="">Pilih Jenis Pelayanan</option>
                            <option value="Rawat Jalan">Rawat Jalan</option>
                            <option value="Rawat inap">Rawat Inap</option>
                            <option value="UGD">UGD</option>
                        </select>
                        @error('jenis_pelayanan')<p class="text text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Spesialis</label>
                        <select id="spesialis" name="spesialis" required>
                            <option value="">Pilih Spesialis</option>
                            <option value="Poliklinik Umum">Poliklinik Umum</option>
                            <option value="Poliklinik Anak">Poliklinik Anak</option>
                            <option value="Poliklinik Gigi">Poliklinik Gigi</option>
                            <option value="UGD">UGD</option>
                        </select>
                        @error('spesialis')<p class="text text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Pembayaran</label>
                        <select id="jenis_pembayaran" name="jenis_pembayaran" required>
                            <option value="">Pilih Jenis Pembayaran</option>
                            <option value="Umum">Umum</option>
                            <option value="BPJS">BPJS</option>
                        </select>
                        @error('jenis_pembayaran')<p class="text text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </section>
</body>

</html>