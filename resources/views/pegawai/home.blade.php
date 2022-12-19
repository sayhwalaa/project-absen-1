<!DOCTYPE html>
<html lang="en">
@include('Template.head')

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include('Template.sidebar')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('Template.navbar')
        <!-- End Navbar -->

        <div class="container-fluid py-4">
            <div class="col-6">
                <a class="btn bg-gradient-dark mb-4" href="#">Tambah Data</a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Data Pegawai</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                No</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NIP</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nama</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Jabatan</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Cabang</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                        @foreach($pegawai as $key => $p)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="px-2 mb-0 text-xs">{{$pegawai->firstItem()+$key}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$p->nip}}</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-xs font-weight-bold mb-0">{{$p->nama}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$p->jabatan}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$p->cabang}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#" data-bs-toggle="modal" data-bs-target=" #editModal-{{$p->id}}">
                                                    <button class="btn btn-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $p->id }}">
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                                {{-- modal edit data --}}
                                @foreach($pegawai as $p)
                                <div class="modal fade" id="editModal-{{$p->id}}" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Pegawai</h5>
                                                <button class="btn-close bg-primary" type="button" data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">    
                                                <form action="/pegawai/update/{{ $p->id }}" method="POST">
                                                    
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="nip" class="form-label">Nip
                                                        </label>
                                                        <input type="text" name="nip" id="nip"
                                                            value="{{ old('nip') ?? $p->nip }}"
                                                            class="form-control @error('nip') is-invalid @enderror">
                                                        @error('nip')
                                                        <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="nama" class="form-label">Nama</label>
                                                        <input type="nama" name="nama" id="nama"
                                                            value="{{ old('nama') ?? $p->nama }}"
                                                            class="form-control @error('nama') is-invalid @enderror">
                                                        @error('nama')
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

                                                    <div class="mb-3">
                                                        <label for="cabang" class="form-label">Cabang</label>
                                                        <select name="cabang" id="cabang" class="form-control"
                                                            value="{{ old('cabang') }}">
                                                            <option>{{ $p->cabang }}</option>
                                                            <option value="Pontianak"
                                                                {{ old('cabang')=='Pontianak' ? 'selected' : '' }}>
                                                                Pontianak
                                                            </option>
                                                            <option value="Jakarta"
                                                                {{ old('cabang')=='Jakarta' ? 'selected' : '' }}>
                                                                Jakarta</option>
                                                            <option value="Papua"
                                                                {{ old('cabang')=='Papua' ? 'selected' : '' }}>
                                                                Papua</option>
                                                            <option value="Jawa Barat"
                                                                {{ old('cabang')=='Jawa Barat' ? 'selected' : '' }}>
                                                                Jawa Barat
                                                            </option>
                                                        </select>
                                                        @error('cabang')
                                                        <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div>
                                                        <button type="submit" class="btn btn-primary mb-2">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {{-- end modal edit data --}}

                                <!-- Delete Modal-->
                                @foreach($pegawai as $p)
                                <div class="modal fade" id="deleteModal-{{ $p->id }}"
                                    aria-labelledby="exampleModalLabel{{ $p->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content" style="padding: 15px">
                                            <div class="modal-body">Hapus data {{$p->nama }} ?</div>
                                            <div style="margin-right: 10px;">
                                            <a class="btn btn-danger" href="/pegawai/delete/{{$p->id}}" style="float: right">Hapus</a>
                                            </div>
                                        </div>
                                        
                                            
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .page-item .page-link{
                    color: black;
                    border: 1px rgba(43, 41, 41, 0.5);
                }
            </style>
            <div class="page" style="margin-left:75%; color:white;">
                {{$pegawai->links()}}
            </div>
            {{-- footer --}}
            @include('Template.footer')
            {{-- end footer --}}
        </div>
    </main>
    {{-- setting --}}
    @include('Template.setting')
    {{-- end setting --}}
    <!--   Core JS Files   -->
    @include('Template.script')
</body>

</html>
