<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sabang Digital Indonesia</title>
    @include('Template.head')
</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('Template.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('Template.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-3 text-gray-800">Data Pengguna</h1>
                    <a href="#" data-toggle="modal" data-target="#tambahModal">
                        <button class="btn btn-primary mb-3">Tambah Data</button>
                    </a>

                    {{-- modal tambah data --}}
                    <div class="modal fade" id="tambahModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Pengguna</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('pengguna.simpanPengguna'); }}" method="POST">
                                        @csrf
                                        <div class='mb-3'>
                                            <label for="nip" class="form-label">NIP</label>
                                            <input type="number" name="nip" id="nip" value="{{ old("nip") }}"
                                                class="form-control @error('nip') is-invalid @enderror">
                                            @error('nip')
                                            <div class='text-danger'>{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                                                class="form-control @error('nama') is-invalid @enderror">
                                            @error('nama')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                                class="form-control @error('email') is-invalid @enderror">
                                            @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" name="tglLahir" id="tglLahir"
                                                value="{{ old('tglLahir') }}"
                                                class="form-control @error('tglLahir') is-invalid @enderror">
                                            @error('tglLahir')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="noHp" class="form-label">Nomor Hp</label>
                                            <input type="tel" name="noHp" id="noHp" value="{{ old('noHp') }}"
                                                class="form-control @error('noHp') is-invalid @enderror">
                                            @error('noHp')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="jabatan" class="form-label">Jabatan</label>
                                            <input type="text" name="jabatan" id="jabatan" value="{{ old('jabatan') }}"
                                                class="form-control @error('jabatan') is-invalid @enderror">
                                            @error('jabatan')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class='mb-3'>
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea class="form-control" name="alamat" id="alamat"
                                                rows="3">{{ old('alamat') }}</textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="cabang" class="form-label">Cabang</label>
                                            <select name="cabang" id="cabang" class="form-control"
                                                value="{{ old('cabang') }}">
                                                <option>-- Pilih Cabang --</option>
                                                <option value="Pontianak"
                                                    {{ old('cabang')=='Pontianak' ? 'selected' : '' }}>Pontianak
                                                </option>
                                                <option value="Jakarta"
                                                    {{ old('cabang')=='Jakarta' ? 'selected' : '' }}>Jakarta</option>
                                                <option value="Papua" {{ old('cabang')=='Papua' ? 'selected' : '' }}>
                                                    Papua</option>
                                                <option value="Jawa Barat"
                                                    {{ old('cabang')=='Jawa Barat' ? 'selected' : '' }}>Jawa Barat
                                                </option>
                                            </select>
                                            @error('cabang')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-primary mb-2">Daftar</button>
                                            <a class="btn btn-success mb-2" href="{{ url()->previous() }}">Kembali</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end modal tambah data --}}
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pengguna Sabang Digital Indonesia</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                        @foreach($pengguna as $index => $p)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$p->nama}}</td>
                                            <td>{{$p->email}}</td>
                                            <td>{{$p->jabatan}}</td>
                                            <td>
                                                <a href="#" data-toggle="modal" class="btn btn-warning btn-circle"
                                                    data-target="#editModal-{{$p->id}}">
                                                    <button class="btn btn-warning btn-circle">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#deleteModal-{{ $p->id }}">
                                                    <button class="btn btn-danger btn-circle"><i
                                                            class="fa fa-trash"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach

                                        {{-- modal edit data --}}
                                        @foreach($pengguna as $p)
                                        <div class="modal fade" id="editModal-{{$p->id}}"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Pegawai</h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/pengguna/update/{{ $p->id }}" method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="nama" class="form-label">Nama
                                                                    Lengkap</label>
                                                                <input type="text" name="nama" id="nama"
                                                                    value="{{ old('nama') ?? $p->nama }}"
                                                                    class="form-control @error('nama') is-invalid @enderror">
                                                                @error('nama')
                                                                <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>

<<<<<<< HEAD
                                {{-- modal edit data --}}
                               @foreach($pengguna as $p)
                                <div class="modal fade" id="editModal-{{$p->id}}" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Pegawai</h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
=======
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">Email</label>
                                                                <input type="email" name="email" id="email"
                                                                    value="{{ old('email') ?? $p->email }}"
                                                                    class="form-control @error('email') is-invalid @enderror">
                                                                @error('email')
                                                                <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="jabatan" class="form-label">Jabatan</label>
                                                                <input type="text" name="jabatan" id="jabatan"
                                                                    value="{{ old('jabatan') ?? $p->jabatan }}"
                                                                    class="form-control @error('jabatan') is-invalid @enderror">
                                                                @error('jabatan')
                                                                <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div>
                                                                <button type="submit"
                                                                    class="btn btn-primary mb-2">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
>>>>>>> e7040688bac799efa4b833a6571441a80f50f234
                                        </div>
                                        @endforeach
                                        {{-- end modal edit data --}}
                                    </tbody>
                                </table>
                                @foreach($pengguna as $peg)
                                <!-- Delete Modal-->
                                <div class="modal fade" id="deleteModal-{{ $peg->id }}"
                                    aria-labelledby="exampleModalLabel{{ $peg->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel{{ $peg->id }}">Konfirmasi
                                                    hapus</h5>
                                                <button class="close" type="button" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <tr>
                                                    <td>Yakin Menghapus</td>
                                                    <td>{{ $peg->nama }}?</td>
                                                </tr>
                                                <br>
                                                <tr>

                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-danger" href="/pegawai/delete/{{$peg->id}}">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            @include ('Template.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/">Logout</a>
                </div>
            </div>
        </div>
    </div>

    @include ('Template.script')
</body>

</html>
