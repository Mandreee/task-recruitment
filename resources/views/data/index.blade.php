@extends('layouts/master')

@section('Title', 'User List')
@section('ActHome', 'active')
@section('Breadcrumb', 'User List')

@push('extra-css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endpush

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @if (session('message'))
                    <div class="col-md-12 col-sm-6 col-12">
                        <div class="info-box bg-{{ session('alert') }}">
                            <span class="info-box-icon"><i class="{{ session('icon') }}"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text"><strong>Information!</strong> {{ session('message') }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                @endif
                <div class="card col-md-12">
                    <!-- /.card-header -->
                    <div class="card-body ">
                        <table id="example1"  class="table table-bordered table-striped ">
                            <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tempat & Tanggal Lahir</th>
                                <th>Posisi</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $datas)
                                <tr>
                                    <td>{{$datas->name}}</td>
                                    <td>{{$datas->pob}}, {{$datas->dob}}</td>
                                    <td>{{$datas->applied_position}} </td>
                                    <td>
                                        <a href="/detail/{{$datas->id}}" class="btn btn-block bg-gradient-primary">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Tempat & Tanggal Lahir</th>
                                <th>Posisi</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- Main content -->

@endsection

@push('extra-js')
    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>
    <!-- page script -->
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
