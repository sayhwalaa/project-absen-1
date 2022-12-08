<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Pengguna</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>

<body>
    <div class="container pt-4 bg-white">
        <div class="d-flex justify-content-center">
            <div class="col-md-8 col-xl-6">
                <h1 class="text-center">Edit Data Pegawai</h1>
                <hr>
                @foreach($pegawai as $p)
                <form action="/pegawai/update/{{ $p->id }}" method="POST">
                    @csrf
                            <div class='mb-3'>
                                <label for="nip" class="form-label">NIP</label>
                                <input type="number" name="nip" id="nip" value="{{ $p->nip }}" class="form-control @error('nip') is-invalid @enderror">
                                @error('nip')
                                <div class='text-danger'>{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" id="nama" value="{{ $p->nama }}" class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tglLahir" id="tglLahir" value="{{ $p->tglLahir }}" class="form-control @error('tglLahir') is-invalid @enderror">
                                @error('tglLahir')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="mb-3">
                                <label for="noHp" class="form-label">Nomor Hp</label>
                                <input type="tel" name="noHp" id="noHp" value="{{ $p->noHp }}" class="form-control @error('noHp') is-invalid @enderror">
                                @error('noHp')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" name="jabatan" id="jabatan" value="{{ $p->jabatan }}" class="form-control @error('jabatan') is-invalid @enderror">
                                @error('jabatan')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class='mb-3'>
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" rows="3">{{ $p->alamat }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="cabang" class="form-label">Cabang</label>
                                <select name="cabang" id="cabang" class="form-select" value="{{ $p->cabang }}">
                                    <option value="Pontianak" {{ old('cabang')=='Pontianak' ? 'selected' : '' }}>Pontianak</option>
                                    <option value="Jakarta" {{ old('cabang')=='Jakarta' ? 'selected' : '' }}>Jakarta</option>
                                    <option value="Papua" {{ old('cabang')=='Papua' ? 'selected' : '' }}>Papua</option>
                                    <option value="Jawa Barat" {{ old('cabang')=='Jawa Barat' ? 'selected' : '' }}>Jawa Barat</option>
                                </select>
                                @error('cabang')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary mb-2">Edit</button>
                            <a href="{{ url()->previous() }}" class="btn btn-success">Kembali</a>
                        </form>
                </form>
                @endforeach
            </div>
        </div>
    </div>
    <script src='/assets/js/bootstrap.min.js'></script>
</body>

</html>