@extends('layouts/master')

@section('Title', 'User List')
@section('ActHome', 'active')
@section('Breadcrumb', 'User List')

@push('extra-css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endpush

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    @if ($errors->any())
                        <div class="col-md-12 col-sm-6 col-12">
                            <div class="info-box bg-danger">
                                <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text"><strong>Whoops!</strong> There were some problems with your input!</span>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    @endif
                <!-- general form elements -->
            @foreach ($data as $detail)
                <form  role="form">
                    @csrf
                    <div class="card card-primary">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="name" class="form-control" value="{{ $detail->name }}" placeholder="Masukkan Nama Lengkap">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Posisi Yang Dilamar</label>
                                        <input type="text" name="applied_position" class="form-control" value="{{ $detail->applied_position }}" placeholder="Masukkan Posisi">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nomor KTP</label>
                                        <input type="number" name="no_ktp" class="form-control" value="{{ $detail->no_ktp }}" placeholder="Masukkan Nomor KTP">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="gender" class="form-control select2bs4" style="width: 100%;">
                                            <option selected="" value="{{$detail->gender}}">{{$detail->gender}}</option>
                                            @foreach($gender as $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ $detail->email }}" placeholder="Masukkan Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input type="number" name="contact" class="form-control" value="{{ $detail->contact }}" placeholder="Masukkan Nomor Telepon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="pob" class="form-control" value="{{ $detail->pob }}" placeholder="Masukkan Nama Lengkap">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="dob" class="form-control" value="{{$detail->dob }}" placeholder="Masukkan Tanggal Lahir">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <input type="text" name="pob" class="form-control" value="{{ $detail->pob }}" placeholder="Masukkan Nama Lengkap">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Golongan Darah</label>
                                        <input type="date" name="dob" class="form-control" value="{{$detail->dob }}" placeholder="Masukkan Tanggal Lahir">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Status Pernikahan</label>
                                        <select name="married_status" class="form-control select2bs4" style="width: 100%;">
                                            <option selected="" value="{{$detail->married_status}}">{{$detail->married_status}}</option>
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
                                        <textarea class="form-control" rows="3" placeholder="Masukkan Alamat KTP">{{$detail->address_ktp}}</textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Alamat Rumah</label>
                                        <textarea class="form-control" rows="3" placeholder="Masukkan Alamat Rumah">{{$detail->address_home}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Saudara Dekat</label>
                                        <input type="text" name="relative_name" class="form-control" value="{{ $detail->relative_name }}" placeholder="Masukkan Nama Saudara Dekat">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Kontak Saudara Dekat</label>
                                        <input type="text" name="relative_contact" class="form-control" value="{{ $detail->relative_contact }}" placeholder="Masukkan Kontak Saudara Dekat">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Bersedia ditempatkan diseluruh Indonesia?</label>
                                        <select name="is_approved" class="form-control select2bs4" style="width: 100%;">
                                            <option selected="" value="{{$detail->is_approved}}">{{$detail->is_approved}}</option>
                                            @foreach($approval as $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Penghasilan yang diharapkan</label>
                                        <input type="number" name="salary_expectation" class="form-control" value="{{ $detail->salary_expectation }}" placeholder="Masukkan Kontak Saudara Dekat">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Skill</label>
                                        <textarea class="form-control" rows="3" placeholder="Masukkan Alamat KTP">{{$detail->skill}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card col-md-12">
                        <!-- /.card-header -->
                        <div class="card-body ">
                            <table id="example1"  class="table table-bordered table-striped ">
                                <thead>
                                <tr>
                                    <th>Jenjang</th>
                                    <th>Nama Institusi</th>
                                    <th>Jurusan</th>
                                    <th>Tahun Lulus</th>
                                    <th>Nilai</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($detail->educations as $educations)
                                    <tr>
                                        <td>{{$educations->stage}}</td>
                                        <td>{{$educations->name}}</td>
                                        <td>{{$educations->major}}</td>
                                        <td>{{$educations->graduation_year}}</td>
                                        <td>{{$educations->score}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Jenjang</th>
                                    <th>Nama Institusi</th>
                                    <th>Jurusan</th>
                                    <th>Tahun Lulus</th>
                                    <th>Nilai</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card col-md-12">
                        <!-- /.card-header -->
                        <div class="card-body ">
                            <table id="example1"  class="table table-bordered table-striped ">
                                <thead>
                                <tr>
                                    <th>Nama Perusahaan</th>
                                    <th>Gaji Terakhir</th>
                                    <th>Posisi</th>
                                    <th>Tahun</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($detail->job_experiences as $job_experiences)
                                    <tr>
                                        <td>{{$job_experiences->company_name}}</td>
                                        <td>{{$job_experiences->last_salary}}</td>
                                        <td>{{$job_experiences->position}}</td>
                                        <td>{{$job_experiences->year}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Nama Perusahaan</th>
                                    <th>Gaji Terakhir</th>
                                    <th>Posisi</th>
                                    <th>Tahun</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card col-md-12">
                        <!-- /.card-header -->
                        <div class="card-body ">
                            <table id="example1"  class="table table-bordered table-striped ">
                                <thead>
                                <tr>
                                    <th>Nama Pelatihan</th>
                                    <th>Sertifikasi</th>
                                    <th>Tahun</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($detail->trainings as $trainings)
                                    <tr>
                                        <td>{{$trainings->name}}</td>
                                        <td>{{$trainings->certification}}</td>
                                        <td>{{$trainings->year}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Nama Pelatihan</th>
                                    <th>Sertifikasi</th>
                                    <th>Tahun</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </form>
            @endforeach
                    <!-- /.card -->

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->

@endsection

@push('extra-js')
    <!-- DataTables -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
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
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
