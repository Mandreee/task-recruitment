
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pendaftaran</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-collapse layout-top-nav">
<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Form Pendaftaran <small></small></h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/registration/store" method="post" role="form">
                            @csrf
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input required type="text" name="name" class="form-control" placeholder="Masukkan Nama Lengkap">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Posisi Yang Dilamar</label>
                                                <input required type="text" name="applied_position" class="form-control" placeholder="Masukkan Posisi">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Nomor KTP</label>
                                                <input required type="number" name="no_ktp" class="form-control"  placeholder="Masukkan Nomor KTP">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select name="gender" class="form-control select2bs4" style="width: 100%;">
                                                    <option selected="" value="">Harap Pilih</option>
                                                    @foreach($gender as $item)
                                                        <option value="{{ $item }}">{{ $item }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Nomor Telepon</label>
                                                <input required type="number" name="contact" class="form-control" placeholder="Masukkan Nomor Telepon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input required type="email" name="email" class="form-control" placeholder="Masukkan Email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input required type="password" name="password" class="form-control" placeholder="Masukkan Password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.card -->

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input required type="text" name="pob" class="form-control" placeholder="Masukkan Tempat Lahir">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input required type="date" name="dob" class="form-control" placeholder="Masukkan Tanggal Lahir">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <input required type="text" name="religion" class="form-control" placeholder="Masukkan Agama Anda">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Golongan Darah</label>
                                                <input required type="text" name="blood_type" class="form-control" placeholder="Masukkan Golongan Darah">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Status Pernikahan</label>
                                                <select name="married_status" class="form-control select2bs4" style="width: 100%;">
                                                    <option selected="" value="">Harap Pilih</option>
                                                    @foreach($married_status as $item)
                                                        <option value="{{ $item }}">{{ $item }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Alamat KTP</label>
                                                <textarea class="form-control" rows="3" placeholder="Masukkan Alamat KTP" name="address_ktp"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Alamat Rumah</label>
                                                <textarea class="form-control" rows="3" placeholder="Masukkan Alamat Rumah" name="address_home"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Saudara Dekat</label>
                                                <input required type="text" name="relative_name" class="form-control" placeholder="Masukkan Nama Saudara Dekat">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Kontak Saudara Dekat</label>
                                                <input required type="text" name="relative_contact" class="form-control" placeholder="Masukkan Kontak Saudara Dekat">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Bersedia ditempatkan diseluruh Indonesia?</label>
                                                <select name="is_approved" class="form-control select2bs4" style="width: 100%;">
                                                    <option selected="" value="">Harap Pilih</option>
                                                    @foreach($approval as $item)
                                                        <option value="{{ $item }}">{{ $item }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Penghasilan yang diharapkan</label>
                                                <input required type="number" name="salary_expectation" class="form-control" placeholder="Masukkan penghasilan yang diharapkan">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Skill</label>
                                                <textarea class="form-control" rows="3" placeholder="Masukkan kemampuan yang anda miliki" name="skill"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <a href="/login" type="button" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.col-md-12 -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    })
</script>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
