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
                <h1 class="text-center">Edit Data Pengguna</h1>
                <hr>
                @foreach($pengguna as $p)
                <form action="/pengguna/update/{{ $p->id }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama') ?? $p->nama }}"
                            class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') ?? $p->email }}"
                            class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" value="{{ old('jabatan') ?? $p->jabatan }}"
                            class="form-control @error('jabatan') is-invalid @enderror">
                        @error('jabatan')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Update</button>
                    <a href="{{ url()->previous() }}" class="btn btn-success">Kembali</a>
                </form>
                @endforeach
            </div>
        </div>
    </div>
    <script src='/assets/js/bootstrap.min.js'></script>
</body>

</html>
