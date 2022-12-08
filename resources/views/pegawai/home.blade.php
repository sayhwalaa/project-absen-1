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
            <h1 class="h3 mb-3 text-gray-800">Data Pegawai</h1>
            <a class="btn btn-primary mb-3" href="{{route('pegawai.tambahPegawai')}}">Tambah Data</a>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pegawai Sabang Digital Indonesia</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Cabang</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                            ?>
                            <tbody>
                                @foreach($pegawai as $index => $p) 
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$p->nip}}</td>
                                    <td>{{$p->nama}}</td>
                                    <td>{{$p->jabatan}}</td>
                                    <td>{{$p->cabang}}</td>
                                    <td>
                                        <a href="{{ url('pegawai/ubah') }}/{{ $p->id }}">
                                            <button class="btn btn-warning btn-circle"><i class="fa fa-edit"></i></button>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#deleteModal-{{ $p->id }}">
                                            <button class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @foreach($pegawai as $peg)
                        <!-- Delete Modal-->
                            <div class="modal fade" id="deleteModal-{{ $peg->id }}" aria-labelledby="exampleModalLabel{{ $peg->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel{{ $peg->id }}">Hapus Data Pegawai</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
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
                    <a class="btn btn-primary" href="/login">Logout</a>
                </div>
            </div>
        </div>
    </div>

    @include ('Template.script')
</body>

</html>
