<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Penertiban</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("plugins/fontawesome-free/css/all.min.css")}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
  <link rel="stylesheet" href="{{asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
  <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}">
  <link rel="stylesheet" href="{{asset("plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css")}}">
  <link rel="stylesheet" href="{{asset("plugins/toastr/toastr.min.css")}}">
  <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset("dist/css/adminlte.min.css")}}">
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        {{-- <a href="{{asset("/")}}" class="nav-link">Home</a> --}}
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-circle"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider mt-2"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Profil
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
          <div class="dropdown-divider mb-2"></div>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset("/")}}" class="brand-link">
      <img src="{{asset("dist/img/DPRKPP-02.png")}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light text-primary">DPRKPP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{asset("/")}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Penertiban</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Penertiban</li> --}}
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-10 offset-md-1">
                    {{-- <form action="{{ route('pertelaan.search.json') }}" method="get"> --}}
                    <form action="{{url("/api/pertelaan/search_json")}}" id="input-search" method="get">
                    <div class="row">
                      <div class="col-3">
                        <div class="form-group">
                          <label>Pilih Kolom:</label>
                          <select class="select2" name="kolom" id="kolom" style="width: 100%;">
                              <option value="id">ID</option>
                              <option value="alamat">Alamat</option>
                              <option value="kelurahan">Kelurahan</option>
                              <option value="kecamatan">Kecamatan</option>
                              <option value="keterangan">Keterangan</option>
                              <option value="jenis">Jenis</option>
                              <option value="tahapan">Tahapan</option>
                              <option value="latitude">Latitude</option>
                              <option value="longitude">Longitude</option>
                              <option value="no_upt_imb">No UPT IMB</option>
                              <option value="sk_peringatan1">SK Peringatan 1</option>
                              <option value="tgl_sk_peringatan1">Tanggal SK Peringatan 1</option>
                              <option value="sk_peringatan2">SK Peringatan 2</option>
                              <option value="tgl_sk_peringatan2">Tanggal SK Peringatan 2</option>
                              <option value="sk_peringatan3">SK Peringatan 3</option>
                              <option value="tgl_sk_peringatan3">Tanggal SK Peringatan 3</option>
                              <option value="sk_penyegelan">SK Penyegelan</option>
                              <option value="tgl_sk_penyegelan">Tanggal SK Penyegelan</option>
                              <option value="sk_bantib_penyegelan">SK Bantib Penyegelan</option>
                              <option value="tgl_sk_bantib_pnyegelan">Tanggal SK Bantib Penyegelan</option>
                              <option value="sk_pembongkaran">SK Pembongkaran</option>
                              <option value="tgl_sk_pembongkaran">Tanggal SK Pembongkaran</option>
                              <option value="sk_bantib_pembongkaran">SK Bantib Pembongkaran</option>
                              <option value="tgl_sk_bantib_pembongkaran">Tanggal SK Bantib Pembongkaran</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="form-group">
                          <label>Masukkan Nilai:</label>
                          <input type="text" name="nilai" id="nilai" class="form-control"/>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="form-group">
                          <label>Cari Data:</label>
                          <div class="input-group-append">
                              <button type="submit" class="btn btn-default">
                                  <i class="fa fa-search"></i>
                              </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                    <a type="button" href="{{asset('/create')}}" class="btn btn-success">Tambah data</a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>No UPT IMB</th>
                    <th>Alamat</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
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
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Detail Data Penertiban</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="modal-body" class="modal-body">
        <div class="row">
          <div class="col-12">
            <div id="modal-table" class="table-responsive">
              
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-create">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Penertiban</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{-- <section class="content"> --}}
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-body" id="create-modal">

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        {{-- </section> --}}
      </div>
      <div class="modal-footer-create justify-content-between">
        
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data Penertiban</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{-- <section class="content"> --}}
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-body" id="edit-modal">
                  <form action="{{url("/api/penertiban/store_json")}}" id="input-penertiban" method="POST" enctype="multipart/form-data">
                    <div id="edit-modal1">
                      
                    </div>
                    <div class="form-group">
                      <label>Tanggal SK Peringatan 1</label>
                        <div class="input-group date" id="tgl_sk_peringatan1" data-target-input="nearest">
                            <input type="text" name="tgl_sk_peringatan1" id="input_tgl_sk_peringatan1" class="form-control datetimepicker-input" data-target="#tgl_sk_peringatan1"/>
                            <div class="input-group-append" data-target="#tgl_sk_peringatan1" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id="edit-modal2">
                      
                    </div>
                    <div class="form-group">
                      <label>Tanggal SK Peringatan 2</label>
                        <div class="input-group date" id="tgl_sk_peringatan2" data-target-input="nearest">
                            <input type="text" name="tgl_sk_peringatan2" id="input_tgl_sk_peringatan2" class="form-control datetimepicker-input" data-target="#tgl_sk_peringatan2"/>
                            <div class="input-group-append" data-target="#tgl_sk_peringatan2" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id="edit-modal3">
                      
                    </div>
                    <div class="form-group">
                      <label>Tanggal SK Peringatan 3</label>
                        <div class="input-group date" id="tgl_sk_peringatan3" data-target-input="nearest">
                            <input type="text" name="tgl_sk_peringatan3" id="input_tgl_sk_peringatan3" class="form-control datetimepicker-input" data-target="#tgl_sk_peringatan3"/>
                            <div class="input-group-append" data-target="#tgl_sk_peringatan3" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id="edit-modal4">
                      
                    </div>
                    <div class="form-group">
                      <label>Tanggal SK Penyegelan</label>
                        <div class="input-group date" id="tgl_sk_penyegelan" data-target-input="nearest">
                            <input type="text" name="tgl_sk_penyegelan" id="input_tgl_sk_penyegelan" class="form-control datetimepicker-input" data-target="#tgl_sk_penyegelan"/>
                            <div class="input-group-append" data-target="#tgl_sk_penyegelan" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id="edit-modal5">
                      
                    </div>
                    <div class="form-group">
                      <label>Tanggal SK Bantib Penyegelan</label>
                        <div class="input-group date" id="tgl_sk_bantib_penyegelan" data-target-input="nearest">
                            <input type="text" name="tgl_sk_bantib_penyegelan" id="input_tgl_sk_bantib_penyegelan" class="form-control datetimepicker-input" data-target="#tgl_sk_bantib_penyegelan"/>
                            <div class="input-group-append" data-target="#tgl_sk_bantib_penyegelan" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id="edit-modal6">
                      
                    </div>
                    <div class="form-group">
                      <label>Tanggal SK Pembongkaran</label>
                        <div class="input-group date" id="tgl_sk_pembongkaran" data-target-input="nearest">
                            <input type="text" name="tgl_sk_pembongkaran" id="input_tgl_sk_pembongkaran" class="form-control datetimepicker-input" data-target="#tgl_sk_pembongkaran"/>
                            <div class="input-group-append" data-target="#tgl_sk_pembongkaran" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id="edit-modal7">
                      
                    </div>
                    <div class="form-group">
                      <label>Tanggal SK Pembongkaran</label>
                        <div class="input-group date" id="tgl_sk_bantib_pembongkaran" data-target-input="nearest">
                            <input type="text" name="tgl_sk_bantib_pembongkaran" id="input_tgl_sk_bantib_pembongkaran" class="form-control datetimepicker-input" data-target="#tgl_sk_bantib_pembongkaran"/>
                            <div class="input-group-append" data-target="#tgl_sk_bantib_pembongkaran" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id="edit-modal8">
                      
                    </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        {{-- </section> --}}
      </div>
      <div class="modal-footer-edit justify-content-between">
        
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-sm">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Hapus Data Penertiban</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Yakin Menghapus Data ?</p>
      </div>
      <div class="modal-footer-alert justify-content-between">
        
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- jQuery -->
<script src="{{asset("plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset("plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
<script src="{{asset("plugins/datatables-buttons/js/dataTables.buttons.min.js")}}"></script>
<script src="{{asset("plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}"></script>
<script src="{{asset("plugins/jszip/jszip.min.js")}}"></script>
<script src="{{asset("plugins/pdfmake/pdfmake.min.js")}}"></script>
<script src="{{asset("plugins/pdfmake/vfs_fonts.js")}}"></script>
<script src="{{asset("plugins/datatables-buttons/js/buttons.html5.min.js")}}"></script>
<script src="{{asset("plugins/datatables-buttons/js/buttons.print.min.js")}}"></script>
<script src="{{asset("plugins/datatables-buttons/js/buttons.colVis.min.js")}}"></script>
<script src="{{asset("plugins/sweetalert2/sweetalert2.min.js")}}"></script>
<script src="{{asset("plugins/toastr/toastr.min.js")}}"></script>
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("dist/js/adminlte.min.js")}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{asset('plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $('.select2').select2()
  });
	let baseUrl = "{{asset('/')}}";
	console.log(baseUrl);
  // $('.toastrDefaultSuccess').click(function() {
  //   toastr.success('Data Di Update.')
  // });
	$(document).ready(function () {
		table()
    $('#tgl_sk_peringatan1').datetimepicker({
        format: 'L'
    });
    $('#tgl_sk_peringatan2').datetimepicker({
        format: 'L'
    });
    $('#tgl_sk_peringatan3').datetimepicker({
        format: 'L'
    });
    $('#tgl_sk_penyegelan').datetimepicker({
        format: 'L'
    });
    $('#tgl_sk_bantib_penyegelan').datetimepicker({
        format: 'L'
    });
    $('#tgl_sk_pembongkaran').datetimepicker({
        format: 'L'
    });
    $('#tgl_sk_bantib_pembongkaran').datetimepicker({
        format: 'L'
    });
	});
  function table() {
    $('#example2').DataTable({
    "dom": 'Bfrtip',
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
    "bDestroy": true,
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false,
		"responsive": true,
    "processing": true,
    "serverSide": false,
			"ajax": {
			"url": '{{ route('penertiban.json') }}',
			"dataType": "json",
			"type": "GET",
			"data":{ _token: "{{csrf_token()}}"}
			},
      "order":[0,'asc'],
			"columns": [
			// {data: 'DT_RowIndex', name: 'id'},
			{data: 'id', name: 'id'},
      {data: 'no_upt_imb'},
			{data: 'alamat'},
			{data: 'kelurahan'},
			{data: 'kecamatan'},
			{data: 'action', orderable: false, searcable: false}
			],
		}).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
  }
  function show_json(id){
    console.log(id)
    $.ajax({
        type: "GET",
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          "Authorization":"Bearer " + localStorage.getItem("token")
        },
        url: baseUrl+"api/penertiban/show_json/"+id,
        success: function (response) {
          res = response;
          if (res.nama == null) {res.nama = ""}
          if (res.alamat == null) {res.alamat = ""}
          if (res.kelurahan == null) {res.kelurahan = ""}
          if (res.kecamatan == null) {res.kecamatan = ""}
          if (res.keterangan == null) {res.keterangan = ""}
          if (res.latitude == null) {res.latitude = ""}
          if (res.longitude == null) {res.longitude = ""}
          if (res.jenis == null) {res.jenis = ""}
          if (res.tahapan == null) {res.tahapan = ""}
          if (res.foto == null) {res.foto = ""}
          console.log(res);
          $('#modal-table').html(
            `
            <table class="table">
              <tr>
                <th>Alamat</th>
                <td>`+res.alamat+`</td>
              </tr>
              <tr>
                <th>Kelurahan</th>
                <td>`+res.kelurahan+`</td>
              </tr>
              <tr>
                <th>Kecamatan</th>
                <td>`+res.kecamatan+`</td>
              </tr>
              <tr>
                <th>Keterangan</th>
                <td>`+res.keterangan+`</td>
              </tr>
              <tr>
                <th>Foto</th>
                <td><a href="{{asset("storage/foto/`+res.foto+`")}}" target="_blank">`+res.foto+`</a></td>
              </tr>
              <tr>
                <th>Jenis</th>
                <td>`+res.jenis+`</td>
              </tr>
              <tr>
                <th>Tahapan</th>
                <td>`+res.tahapan+`</td>
              </tr>
              <tr>
                <th>Latitude</th>
                <td>`+res.latitude+`</td>
              </tr>
              <tr>
                <th>Longitude</th>
                <td>`+res.longitude+`</td>
              </tr>
            </table>
            `
          )
          $('.modal-footer').html(
            `<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>`
          )
        }
    });
  }
  function edit_json(id){
    // console.log(id)
    // $('#id').val(id)
    // console.log($('#id').val())
    $.ajax({
      type: "GET",
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        "Authorization":"Bearer " + localStorage.getItem("token")
      },
      url: baseUrl+"api/penertiban/show_json/"+id,
      success: function (response) {
        res = response;
        if (res.no_upt_imb == null) {res.no_upt_imb = ""}
        if (res.sk_peringatan1 == null) {res.sk_peringatan1 = ""}
        if (res.sk_peringatan2 == null) {res.sk_peringatan2 = ""}
        if (res.sk_peringatan3 == null) {res.sk_peringatan3 = ""}
        if (res.sk_penyegelan == null) {res.sk_penyegelan = ""}
        if (res.tgl_sk_penyegelan == null) {res.tgl_sk_penyegelan = ""}
        if (res.sk_bantib_penyegelan == null) {res.sk_bantib_penyegelan = ""}
        if (res.tgl_sk_bantib_penyegelan == null) {res.tgl_sk_bantib_penyegelan = ""}
        if (res.sk_pembongkaran == null) {res.sk_pembongkaran = ""}
        if (res.tgl_sk_pembongkaran == null) {res.tgl_sk_pembongkaran = ""}
        if (res.sk_bantib_pembongkaran == null) {res.sk_bantib_pembongkaran = ""}
        if (res.tgl_sk_bantib_pembongkaran == null) {res.tgl_sk_bantib_pembongkaran = ""}
        if (res.alamat == null) {res.alamat = ""}
        if (res.kelurahan == null) {res.kelurahan = ""}
        if (res.kecamatan == null) {res.kecamatan = ""}
        if (res.latitude == null) {res.latitude = ""}
        if (res.longitude == null) {res.longitude = ""}
        if (res.keterangan == null) {res.keterangan = ""}
        if (res.jenis == null) {res.jenis = ""}
        if (res.tahapan == null) {res.tahapan = ""}
        console.log(res);
        $('#id').val(res.id)
        $('#no_upt_imb').val(res.no_upt_imb)
        $('#sk_peringatan1').val(res.sk_peringatan1)
        $('#input_tgl_sk_peringatan1').val(res.tgl_sk_peringatan1)
        // $('#input_tgl_sk_peringatan1').format("dddd, MMMM Do YYYY, h:mm:ss a")
        // $('#tgl_sk_peringatan1').val(res.tgl_sk_peringatan1)
        $('#sk_peringatan2').val(res.sk_peringatan2)
        $('#tgl_sk_peringatan2').val(res.tgl_sk_peringatan2)
        $('#input_tgl_sk_peringatan2').val(res.tgl_sk_peringatan2)
        $('#sk_peringatan3').val(res.sk_peringatan3)
        $('#tgl_sk_peringatan3').val(res.tgl_sk_peringatan3)
        $('#input_tgl_sk_peringatan3').val(res.tgl_sk_peringatan3)
        $('#sk_penyegelan').val(res.sk_penyegelan)
        $('#tgl_sk_penyegelan').val(res.tgl_sk_penyegelan)
        $('#input_tgl_sk_penyegelan').val(res.tgl_sk_penyegelan)
        $('#sk_bantib_penyegelan').val(res.sk_bantib_penyegelan)
        $('#tgl_sk_bantib_penyegelan').val(res.tgl_sk_bantib_penyegelan)
        $('#input_tgl_sk_bantib_penyegelan').val(res.tgl_sk_bantib_penyegelan)
        $('#sk_pembongkaran').val(res.sk_pembongkaran)
        $('#tgl_sk_pembongkaran').val(res.tgl_sk_pembongkaran)
        $('#input_tgl_sk_pembongkaran').val(res.tgl_sk_pembongkaran)
        $('#sk_bantib_pembongkaran').val(res.sk_bantib_pembongkaran)
        $('#tgl_sk_bantib_pembongkaran').val(res.tgl_sk_bantib_pembongkaran)
        $('#input_sk_bantib_pembongkaran').val(res.sk_bantib_pembongkaran)
        $('#alamat').val(res.alamat)
        $('#kelurahan').val(res.kelurahan)
        $('#kecamatan').val(res.kecamatan)
        $('#foto_dokumen').val(res.foto_dokumen)
        $('#foto_lapangan').val(res.foto_lapangan)
        $('#keterangan').val(res.keterangan)
        $('#latitude').val(res.latitude)
        $('#longitude').val(res.longitude)
        $('#jenis').val(res.jenis)
        $('#tahapan1').val(res.tahapan)
        $('#tahapan2').val(res.tahapan)
        $('#tahapan3').val(res.tahapan)
        $('#tahapan4').val(res.tahapan)
        $('#tahapan5').val(res.tahapan)
        $('#tahapan6').val(res.tahapan)
        $('#tahapan7').val(res.tahapan)
        $('#tahapan8').val(res.tahapan)
        $('#tahapan9').val(res.tahapan)
        $('#edit-modal1').html(
          `
            <input type="hidden" name="emp_foto_lapangan" id="emp_foto_lapangan">
            <input type="hidden" name="emp_foto_dokumen" id="emp_foto_dokumen">
            <input type="hidden" name="id" id="id" class="form-control" value="`+res.id+`">
            <div class="form-group">
              <label for="inputDescription">No UPT IMB</label>
              <input name="no_upt_imb" id="no_upt_imb" class="form-control" value="`+res.no_upt_imb+`">
            </div>
            <div class="form-group">
              <label for="inputDescription">No SK Peringatan 1</label>
              <input name="sk_peringatan1" id="sk_peringatan1" class="form-control" value="`+res.sk_peringatan1+`">
            </div>
          `
        )
        $('#edit-modal2').html(
          `
          <div class="form-group">
            <label for="inputDescription">No SK Peringatan 2</label>
            <input name="sk_peringatan2" id="sk_peringatan2" class="form-control" value="`+res.sk_peringatan2+`">
          </div>
          `
        )
        $('#edit-modal3').html(
          `
          <div class="form-group">
            <label for="inputDescription">No SK Peringatan 3</label>
            <input name="sk_peringatan3" id="sk_peringatan3" class="form-control" value="`+res.sk_peringatan3+`">
          </div>
          `
        )
        $('#edit-modal4').html(
          `
          <div class="form-group">
            <label for="inputDescription">No SK Penyegelan</label>
            <input name="sk_penyegelan" id="sk_penyegelan" class="form-control" value="`+res.sk_penyegelan+`">
          </div>
          `
        )
        $('#edit-modal5').html(
          `
          <div class="form-group">
            <label for="inputDescription">No SK Bantib Penyegelan</label>
            <input name="sk_bantib_penyegelan" id="sk_bantib_penyegelan" class="form-control" value="`+res.sk_bantib_penyegelan+`">
          </div>
          `
        )
        $('#edit-modal6').html(
          `
          <div class="form-group">
            <label for="inputDescription">No SK Pembongkaran</label>
            <input name="sk_pembongkaran" id="sk_pembongkaran" class="form-control" value="`+res.sk_pembongkaran+`">
          </div>
          `
        )
        $('#edit-modal7').html(
          `
          <div class="form-group">
            <label for="inputDescription">No SK Bantib Pembongkaran</label>
            <input name="sk_bantib_pembongkaran" id="sk_bantib_pembongkaran" class="form-control" value="`+res.sk_bantib_pembongkaran+`">
          </div>
          `
        )
        $('#edit-modal8').html(
          `
          <div class="form-group">
            <label for="inputDescription">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" rows="4">`+res.alamat+`</textarea>
          </div>
          <div class="form-group">
              <label for="inputClientCompany">Kelurahan</label>
              <input type="text" name="kelurahan" id="kelurahan" class="form-control" value="`+res.kelurahan+`">
          </div>
          <div class="form-group">
              <label for="inputProjectLeader">Kecamatan</label>
              <input type="text" name="kecamatan" id="kecamatan" class="form-control" value="`+res.kecamatan+`">
          </div>
          <div class="form-group">
              <label for="inputProjectLeader">File Dokumen</label>
              <input type="file" name="foto_dokumen" id="foto_dokumen" class="form-control" value="`+res.foto_dokumen+`">
          </div>
          <div class="form-group">
              <label for="inputProjectLeader">File Lapangan</label>
              <input type="file" name="foto_lapangan" id="foto_lapangan" class="form-control" value="`+res.foto_lapangan+`">
          </div>
          <div class="form-group">
            <label for="inputDescription">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control" rows="4">`+res.keterangan+`</textarea>
          </div>
          <div class="form-group">
            <label for="inputStatus">Jenis</label>
            <select class="js-select2 form-control" id="jenis" name="jenis" data-placeholder="Pilih Jenis">
              <option value="`+res.jenis+`" selected>`+res.jenis+`</option>
              <option value="SKRD Tidak Sesuai IMB">SKRD Tidak Sesuai IMB</option>
              <option value="SKRD Tidak memiliki IMB">SKRD Tidak memiliki IMB</option>
              <option value="IMB - Berkas Dikembalikan">IMB - Berkas Dikembalikan</option>
              <option value="SKRK Belum ber IMB">SKRK Belum ber IMB</option>
              <option value="SLF">SLF</option>
              <option value="Bangunan Tidak ber IMB (Tanah Aset)">Bangunan Tidak ber IMB (Tanah Aset)</option>
              <option value="Bangunan Tidak ber IMB (Persil)">Bangunan Tidak ber IMB (Persil)</option>
              <option value="Bangunan Tidak Sesuai dengan IMB (Persil)">Bangunan Tidak Sesuai dengan IMB (Persil)</option>
              <option value="Bangunan ber IMB (Sewa Tanah Habis Masa Berlaku)">Bangunan ber IMB (Sewa Tanah Habis Masa Berlaku)</option>
              <option value="Lainya"">Lainya</option>
            </select>
          </div>
          <div class="form-group" id="tahapan1">
            <label for="inputStatus">Tahapan</label>
            <select class="js-select2 form-control" id="tahapan1" name="tahapan" data-placeholder="Pilih Tahapan">
              <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
              <option value="Pemberitahuan">Pemberitahuan</option>
              <option value="Panggilan">Panggilan</option>
              <option value="Peringatan 1">Peringatan 1</option>
              <option value="Peringatan 2">Peringatan 2</option>
              <option value="Peringatan 3">Peringatan 3</option>
              <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
              <option value="Bantuan Penertiban (Pembokaran)">Bantuan Penertiban (Pembokaran)</option>
            </select>
          </div>
          <div class="form-group" id="tahapan2">
            <label for="inputStatus">Tahapan</label>
            <select class="js-select2 form-control" id="tahapan2" name="tahapan" data-placeholder="Pilih Tahapan">
              <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
              <option value="Pemberitahuan">Pemberitahuan</option>
              <option value="Panggilan">Panggilan</option>
              <option value="Peringatan">Peringatan</option>
              <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
              <option value="Bantuan Penertiban (Pembokaran)">Bantuan Penertiban (Pembokaran)</option>
            </select>
          </div>
          <div class="form-group" id="tahapan3">
            <label for="inputStatus">Tahapan</label>
            <select class="js-select2 form-control" id="tahapan3" name="tahapan" data-placeholder="Pilih Tahapan">
              <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
              <option value="Pemberitahuan">Pemberitahuan</option>
              <option value="Panggilan">Panggilan</option>
              <option value="Peringatan">Peringatan</option>
              <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
              <option value="Bantuan Penertiban (Pembokaran)">Bantuan Penertiban (Pembokaran)</option>
            </select>
          </div>
          <div class="form-group" id="tahapan4">
            <label for="inputStatus">Tahapan</label>
            <select class="js-select2 form-control" id="tahapan4" name="tahapan" data-placeholder="Pilih Tahapan">
              <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
              <option value="Pemberitahuan">Pemberitahuan</option>
              <option value="Panggilan">Panggilan</option>
              <option value="Peringatan">Peringatan</option>
              <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
              <option value="Bantuan Penertiban (Pembokaran)">Bantuan Penertiban (Pembokaran)</option>
            </select>
          </div>
          <div class="form-group" id="tahapan5">
            <label for="inputStatus">Tahapan</label>
            <select class="js-select2 form-control" id="tahapan5" name="tahapan" data-placeholder="Pilih Tahapan">
              <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
              <option value="Pemberitahuan">Pemberitahuan</option>
              <option value="Panggilan">Panggilan</option>
              <option value="Peringatan 1">Peringatan 1</option>
              <option value="Peringatan 2">Peringatan 2</option>
              <option value="Peringatan 3">Peringatan 3</option>
              <option value="Penghentian Sementara dan atau pembekuan SLF">Penghentian Sementara dan atau pembekuan SLF</option>
              <option value="Penghentian tetap dan atau pencabutan SLF">Penghentian tetap dan atau pencabutan SLF</option>
            </select>
          </div>
          <div class="form-group" id="tahapan6">
            <label for="inputStatus">Tahapan</label>
            <select class="js-select2 form-control" id="tahapan6" name="tahapan" data-placeholder="Pilih Tahapan">
              <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
              <option value="Pemberitahuan">Pemberitahuan</option>
              <option value="Panggilan">Panggilan</option>
              <option value="Peringatan">Peringatan</option>
              <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
            </select>
          </div>
          <div class="form-group" id="tahapan7">
            <label for="inputStatus">Tahapan</label>
            <select class="js-select2 form-control" id="tahapan7" name="tahapan" data-placeholder="Pilih Tahapan">
              <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
              <option value="Pemberitahuan">Pemberitahuan</option>
              <option value="Panggilan">Panggilan</option>
              <option value="Peringatan">Peringatan</option>
              <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
              <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
            </select>
          </div>
          <div class="form-group" id="tahapan8">
            <label for="inputStatus">Tahapan</label>
            <select class="js-select2 form-control" id="tahapan8" name="tahapan" data-placeholder="Pilih Tahapan">
              <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
              <option value="Pemberitahuan">Pemberitahuan</option>
              <option value="Panggilan">Panggilan</option>
              <option value="Peringatan 1">Peringatan 1</option>
              <option value="Peringatan 2">Peringatan 2</option>
              <option value="Peringatan 3">Peringatan 3</option>
              <option value="Pembekuan IMB">Pembekuan IMB</option>
              <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
            </select>
          </div>
          <div class="form-group" id="tahapan9">
            <label for="inputStatus">Tahapan</label>
            <select class="js-select2 form-control" id="tahapan9" name="tahapan" data-placeholder="Pilih Tahapan">
              <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
              <option value="Pemberitahuan">Pemberitahuan</option>
              <option value="Panggilan">Panggilan</option>
              <option value="Pencabutan IMB">Pencabutan IMB</option>
              <option value="Peringatan">Peringatan</option>
              <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
            </select>
          </div>
          <div class="form-group">
              <label for="inputProjectLeader">Latitude</label>
              <input type="text" name="latitude" id="latitude" class="form-control" value="`+res.latitude+`">
          </div>
          <div class="form-group">
              <label for="inputProjectLeader">Longitude</label>
              <input type="text" name="longitude" id="longitude" class="form-control" value="`+res.longitude+`">
          </div>
          `
        )
        
        // $('#edit-modal').html(
        //   `
        //   <form action="`+baseUrl+`"api/penertiban/store_json/"`+id+`" id="input-penertiban" method="POST" enctype="multipart/form-data">
        //   <input type="hidden" name="emp_file_lapangan" id="emp_file_lapangan">
        //   <input type="hidden" name="emp_file_dokumen" id="emp_file_dokumen">
        //   <input type="hidden" name="id" id="id" class="form-control" value="`+res.id+`">
        //   <div class="form-group">
        //     <label for="inputDescription">No UPT IMB</label>
        //     <input name="no_upt_imb" id="no_upt_imb" class="form-control" value="`+res.no_upt_imb+`">
        //   </div>
        //   <div class="form-group">
        //     <label for="inputDescription">No SK Peringatan 1</label>
        //     <input name="sk_peringatan1" id="sk_peringatan1" class="form-control" value="`+res.sk_peringatan1+`">
        //   </div>
        //   <div class="form-group">
        //     <label>Tanggal SK Peringatan 1</label>
        //       <div class="input-group date" id="tgl_sk_peringatan1" data-target-input="nearest">
        //           <input type="text" name="tgl_sk_peringatan1" value="`+res.tgl_sk_peringatan1+`" class="form-control datetimepicker-input" data-target="#tgl_sk_peringatan1"/>
        //           <div class="input-group-append" data-target="#tgl_sk_peringatan1" data-toggle="datetimepicker">
        //               <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        //           </div>
        //       </div>
        //   </div>
        //   <div class="form-group">
        //     <label for="inputDescription">No SK Peringatan 2</label>
        //     <input name="sk_peringatan2" id="sk_peringatan2" class="form-control" value="`+res.sk_peringatan2+`">
        //   </div>
        //   <div class="form-group">
        //     <label>Tanggal SK Peringatan 2</label>
        //       <div class="input-group date" id="tgl_sk_peringatan2" data-target-input="nearest">
        //           <input type="text" name="tgl_sk_peringatan2" value="`+res.tgl_sk_peringatan2+`" class="form-control datetimepicker-input" data-target="#tgl_sk_peringatan2"/>
        //           <div class="input-group-append" data-target="#tgl_sk_peringatan2" data-toggle="datetimepicker">
        //               <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        //           </div>
        //       </div>
        //   </div>
        //   <div class="form-group">
        //     <label for="inputDescription">No SK Peringatan 3</label>
        //     <input name="sk_peringatan3" id="sk_peringatan3" class="form-control" value="`+res.sk_peringatan3+`">
        //   </div>
        //   <div class="form-group">
        //     <label>Tanggal SK Peringatan 3</label>
        //       <div class="input-group date" id="tgl_sk_peringatan3" data-target-input="nearest">
        //           <input type="text" name="tgl_sk_peringatan3" value="`+res.tgl_sk_peringatan3+`" class="form-control datetimepicker-input" data-target="#tgl_sk_peringatan3"/>
        //           <div class="input-group-append" data-target="#tgl_sk_peringatan3" data-toggle="datetimepicker">
        //               <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        //           </div>
        //       </div>
        //   </div>
        //   <div class="form-group">
        //     <label for="inputDescription">No SK Penyegelan</label>
        //     <input name="sk_penyegelan" id="sk_penyegelan" class="form-control" value="`+res.sk_penyegelan+`">
        //   </div>
        //   <div class="form-group">
        //     <label>Tanggal SK Penyegelan</label>
        //       <div class="input-group date" id="tgl_sk_penyegelan" data-target-input="nearest">
        //           <input type="text" name="tgl_sk_penyegelan" value="`+res.tgl_sk_penyegelan+`" class="form-control datetimepicker-input" data-target="#tgl_sk_penyegelan"/>
        //           <div class="input-group-append" data-target="#tgl_sk_penyegelan" data-toggle="datetimepicker">
        //               <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        //           </div>
        //       </div>
        //   </div>
        //   <div class="form-group">
        //     <label for="inputDescription">No SK Bantib Penyegelan</label>
        //     <input name="sk_bantib_penyegelan" id="sk_bantib_penyegelan" class="form-control" value="`+res.sk_bantib_penyegelan+`">
        //   </div>
        //   <div class="form-group">
        //     <label>Tanggal SK Bantib Penyegelan</label>
        //       <div class="input-group date" id="tgl_sk_bantib_penyegelan" data-target-input="nearest">
        //           <input type="text" name="tgl_sk_bantib_penyegelan" value="`+res.tgl_sk_bantib_penyegelan+`" class="form-control datetimepicker-input" data-target="#tgl_sk_bantib_penyegelan"/>
        //           <div class="input-group-append" data-target="#tgl_sk_bantib_penyegelan" data-toggle="datetimepicker">
        //               <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        //           </div>
        //       </div>
        //   </div>
        //   <div class="form-group">
        //     <label for="inputDescription">No SK Pembongkaran</label>
        //     <input name="sk_pembongkaran" id="sk_pembongkaran" class="form-control" value="`+res.sk_pembongkaran+`">
        //   </div>
        //   <div class="form-group">
        //     <label>Tanggal SK Pembongkaran</label>
        //       <div class="input-group date" id="tgl_sk_pembongkaran" data-target-input="nearest">
        //           <input type="text" name="tgl_sk_pembongkaran" value="`+res.tgl_sk_pembongkaran+`" class="form-control datetimepicker-input" data-target="#tgl_sk_pembongkaran"/>
        //           <div class="input-group-append" data-target="#tgl_sk_pembongkaran" data-toggle="datetimepicker">
        //               <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        //           </div>
        //       </div>
        //   </div>
        //   <div class="form-group">
        //     <label for="inputDescription">No SK Bantib Pembongkaran</label>
        //     <input name="sk_bantib_pembongkaran" id="sk_bantib_pembongkaran" class="form-control" value="`+res.sk_bantib_pembongkaran+`">
        //   </div>
        //   <div class="form-group">
        //     <label>Tanggal SK Pembongkaran</label>
        //       <div class="input-group date" id="tgl_sk_bantib_pembongkaran" data-target-input="nearest">
        //           <input type="text" name="tgl_sk_bantib_pembongkaran" value="`+res.tgl_sk_bantib_pembongkaran+`" class="form-control datetimepicker-input" data-target="#tgl_sk_bantib_pembongkaran"/>
        //           <div class="input-group-append" data-target="#tgl_sk_bantib_pembongkaran" data-toggle="datetimepicker">
        //               <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        //           </div>
        //       </div>
        //   </div>
        //   <div class="form-group">
        //     <label for="inputDescription">Alamat</label>
        //     <textarea name="alamat" id="alamat" class="form-control" rows="4">`+res.alamat+`</textarea>
        //   </div>
        //   <div class="form-group">
        //       <label for="inputClientCompany">Kelurahan</label>
        //       <input type="text" name="kelurahan" id="kelurahan" class="form-control" value="`+res.kelurahan+`">
        //   </div>
        //   <div class="form-group">
        //       <label for="inputProjectLeader">Kecamatan</label>
        //       <input type="text" name="kecamatan" id="kecamatan" class="form-control" value="`+res.kecamatan+`">
        //   </div>
        //   <div class="form-group">
        //       <label for="inputProjectLeader">File Dokumen</label>
        //       <input type="file" name="file_dokumen" id="file_dokumen" class="form-control" value="`+res.file_dokumen+`">
        //   </div>
        //   <div class="form-group">
        //       <label for="inputProjectLeader">File Lapangan</label>
        //       <input type="file" name="file_lapangan" id="file_lapangan" class="form-control" value="`+res.file_lapangan+`">
        //   </div>
        //   <div class="form-group">
        //     <label for="inputDescription">Keterangan</label>
        //     <textarea name="keterangan" id="keterangan" class="form-control" rows="4">`+res.keterangan+`</textarea>
        //   </div>
        //   <div class="form-group">
        //     <label for="inputStatus">Jenis</label>
        //     <select class="js-select2 form-control" id="jenis" name="jenis" data-placeholder="Pilih Jenis">
        //       <option value="`+res.jenis+`" selected>`+res.jenis+`</option>
        //       <option value="SKRD Tidak Sesuai IMB">SKRD Tidak Sesuai IMB</option>
        //       <option value="SKRD Tidak memiliki IMB">SKRD Tidak memiliki IMB</option>
        //       <option value="IMB - Berkas Dikembalikan">IMB - Berkas Dikembalikan</option>
        //       <option value="SKRK Belum ber IMB">SKRK Belum ber IMB</option>
        //       <option value="SLF">SLF</option>
        //       <option value="Bangunan Tidak ber IMB (Tanah Aset)">Bangunan Tidak ber IMB (Tanah Aset)</option>
        //       <option value="Bangunan Tidak ber IMB (Persil)">Bangunan Tidak ber IMB (Persil)</option>
        //       <option value="Bangunan Tidak Sesuai dengan IMB (Persil)">Bangunan Tidak Sesuai dengan IMB (Persil)</option>
        //       <option value="Bangunan ber IMB (Sewa Tanah Habis Masa Berlaku)">Bangunan ber IMB (Sewa Tanah Habis Masa Berlaku)</option>
        //       <option value="Lainya"">Lainya</option>
        //     </select>
        //   </div>
        //   <div class="form-group" id="tahapan1">
        //     <label for="inputStatus">Tahapan</label>
        //     <select class="js-select2 form-control" id="tahapan1" name="tahapan" data-placeholder="Pilih Tahapan">
        //       <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
        //       <option value="Pemberitahuan">Pemberitahuan</option>
        //       <option value="Panggilan">Panggilan</option>
        //       <option value="Peringatan 1">Peringatan 1</option>
        //       <option value="Peringatan 2">Peringatan 2</option>
        //       <option value="Peringatan 3">Peringatan 3</option>
        //       <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
        //       <option value="Bantuan Penertiban (Pembokaran)">Bantuan Penertiban (Pembokaran)</option>
        //     </select>
        //   </div>
        //   <div class="form-group" id="tahapan2">
        //     <label for="inputStatus">Tahapan</label>
        //     <select class="js-select2 form-control" id="tahapan2" name="tahapan" data-placeholder="Pilih Tahapan">
        //       <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
        //       <option value="Pemberitahuan">Pemberitahuan</option>
        //       <option value="Panggilan">Panggilan</option>
        //       <option value="Peringatan">Peringatan</option>
        //       <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
        //       <option value="Bantuan Penertiban (Pembokaran)">Bantuan Penertiban (Pembokaran)</option>
        //     </select>
        //   </div>
        //   <div class="form-group" id="tahapan3">
        //     <label for="inputStatus">Tahapan</label>
        //     <select class="js-select2 form-control" id="tahapan3" name="tahapan" data-placeholder="Pilih Tahapan">
        //       <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
        //       <option value="Pemberitahuan">Pemberitahuan</option>
        //       <option value="Panggilan">Panggilan</option>
        //       <option value="Peringatan">Peringatan</option>
        //       <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
        //       <option value="Bantuan Penertiban (Pembokaran)">Bantuan Penertiban (Pembokaran)</option>
        //     </select>
        //   </div>
        //   <div class="form-group" id="tahapan4">
        //     <label for="inputStatus">Tahapan</label>
        //     <select class="js-select2 form-control" id="tahapan4" name="tahapan" data-placeholder="Pilih Tahapan">
        //       <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
        //       <option value="Pemberitahuan">Pemberitahuan</option>
        //       <option value="Panggilan">Panggilan</option>
        //       <option value="Peringatan">Peringatan</option>
        //       <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
        //       <option value="Bantuan Penertiban (Pembokaran)">Bantuan Penertiban (Pembokaran)</option>
        //     </select>
        //   </div>
        //   <div class="form-group" id="tahapan5">
        //     <label for="inputStatus">Tahapan</label>
        //     <select class="js-select2 form-control" id="tahapan5" name="tahapan" data-placeholder="Pilih Tahapan">
        //       <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
        //       <option value="Pemberitahuan">Pemberitahuan</option>
        //       <option value="Panggilan">Panggilan</option>
        //       <option value="Peringatan 1">Peringatan 1</option>
        //       <option value="Peringatan 2">Peringatan 2</option>
        //       <option value="Peringatan 3">Peringatan 3</option>
        //       <option value="Penghentian Sementara dan atau pembekuan SLF">Penghentian Sementara dan atau pembekuan SLF</option>
        //       <option value="Penghentian tetap dan atau pencabutan SLF">Penghentian tetap dan atau pencabutan SLF</option>
        //     </select>
        //   </div>
        //   <div class="form-group" id="tahapan6">
        //     <label for="inputStatus">Tahapan</label>
        //     <select class="js-select2 form-control" id="tahapan6" name="tahapan" data-placeholder="Pilih Tahapan">
        //       <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
        //       <option value="Pemberitahuan">Pemberitahuan</option>
        //       <option value="Panggilan">Panggilan</option>
        //       <option value="Peringatan">Peringatan</option>
        //       <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
        //     </select>
        //   </div>
        //   <div class="form-group" id="tahapan7">
        //     <label for="inputStatus">Tahapan</label>
        //     <select class="js-select2 form-control" id="tahapan7" name="tahapan" data-placeholder="Pilih Tahapan">
        //       <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
        //       <option value="Pemberitahuan">Pemberitahuan</option>
        //       <option value="Panggilan">Panggilan</option>
        //       <option value="Peringatan">Peringatan</option>
        //       <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
        //       <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
        //     </select>
        //   </div>
        //   <div class="form-group" id="tahapan8">
        //     <label for="inputStatus">Tahapan</label>
        //     <select class="js-select2 form-control" id="tahapan8" name="tahapan" data-placeholder="Pilih Tahapan">
        //       <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
        //       <option value="Pemberitahuan">Pemberitahuan</option>
        //       <option value="Panggilan">Panggilan</option>
        //       <option value="Peringatan 1">Peringatan 1</option>
        //       <option value="Peringatan 2">Peringatan 2</option>
        //       <option value="Peringatan 3">Peringatan 3</option>
        //       <option value="Pembekuan IMB">Pembekuan IMB</option>
        //       <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
        //     </select>
        //   </div>
        //   <div class="form-group" id="tahapan9">
        //     <label for="inputStatus">Tahapan</label>
        //     <select class="js-select2 form-control" id="tahapan9" name="tahapan" data-placeholder="Pilih Tahapan">
        //       <option value="`+res.tahapan+`" selected>`+res.tahapan+`</option>
        //       <option value="Pemberitahuan">Pemberitahuan</option>
        //       <option value="Panggilan">Panggilan</option>
        //       <option value="Pencabutan IMB">Pencabutan IMB</option>
        //       <option value="Peringatan">Peringatan</option>
        //       <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
        //     </select>
        //   </div>
        //   <div class="form-group">
        //       <label for="inputProjectLeader">Latitude</label>
        //       <input type="text" name="latitude" id="latitude" class="form-control" value="`+res.latitude+`">
        //   </div>
        //   <div class="form-group">
        //       <label for="inputProjectLeader">Longitude</label>
        //       <input type="text" name="longitude" id="longitude" class="form-control" value="`+res.longitude+`">
        //   </div>
        //   `
        // )
        $("#emp_foto_lapangan").val(res.foto_lapangan)
        $("#emp_foto_dokumen").val(res.foto_dokumen)
        var $tahapan1 = $('#tahapan1').hide();var $tahapan2 = $('#tahapan2').hide();var $tahapan3 = $('#tahapan3').hide();var $tahapan4 = $('#tahapan4').hide();var $tahapan5 = $('#tahapan5').hide();var $tahapan6 = $('#tahapan6').hide();var $tahapan7 = $('#tahapan7').hide();var $tahapan8 = $('#tahapan8').hide();var $tahapan9 = $('#tahapan9').hide();
        // if(res.jenis  === 'SKRD Tidak Sesuai IMB') {
        //   $tahapan1.show();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
        //   $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
        // } else if (res.jenis === 'SKRD Tidak memiliki IMB') {
        //   $tahapan1.hide();$tahapan2.show();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
        //   $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
        // }else if (res.jenis === 'IMB - Berkas Dikembalikan') {
        //   $tahapan1.hide();$tahapan2.hide();$tahapan3.show();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
        //   $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
        // }else if (res.jenis === 'SKRK Belum ber IMB') {
        //   $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.show();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
        //   $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
        // }else if (res.jenis === 'SLF') {
        //   $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.show();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
        //   $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
        // }else if (res.jenis === 'Bangunan Tidak ber IMB (Tanah Aset)') {
        //   $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.show();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
        //   $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
        // }else if (res.jenis === 'Bangunan Tidak ber IMB (Persil)') {
        //   $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.show();$tahapan8.hide();$tahapan9.hide();
        //   $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
        // }else if (res.jenis === 'Bangunan Tidak Sesuai dengan IMB (Persil)') {
        //   $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.show();$tahapan9.hide();
        //   $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
        // }else if (res.jenis === 'Bangunan ber IMB (Sewa Tanah Habis Masa Berlaku)') {
        //   $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.show();
        //   $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
        // } else {
        //   $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
        //   $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
        // }
        $('#jenis').change(function() {
            var selectedValue = $(this).val();
            if(selectedValue  === 'SKRD Tidak Sesuai IMB') {
              $tahapan1.show();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
              $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
            } else if (selectedValue === 'SKRD Tidak memiliki IMB') {
              $tahapan1.hide();$tahapan2.show();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
              $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
            }else if (selectedValue === 'IMB - Berkas Dikembalikan') {
              $tahapan1.hide();$tahapan2.hide();$tahapan3.show();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
              $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
            }else if (selectedValue === 'SKRK Belum ber IMB') {
              $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.show();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
              $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
            }else if (selectedValue === 'SLF') {
              $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.show();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
              $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
            }else if (selectedValue === 'Bangunan Tidak ber IMB (Tanah Aset)') {
              $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.show();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
              $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
            }else if (selectedValue === 'Bangunan Tidak ber IMB (Persil)') {
              $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.show();$tahapan8.hide();$tahapan9.hide();
              $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
            }else if (selectedValue === 'Bangunan Tidak Sesuai dengan IMB (Persil)') {
              $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.show();$tahapan9.hide();
              $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
            }else if (selectedValue === 'Bangunan ber IMB (Sewa Tanah Habis Masa Berlaku)') {
              $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.show();
              $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
            } else {
              $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
              $('#tahapan1').prop('selectedIndex', 0);$('#tahapan2').prop('selectedIndex', 0);$('#tahapan3').prop('selectedIndex', 0);$('#tahapan4').prop('selectedIndex', 0);$('#tahapan5').prop('selectedIndex', 0);$('#tahapan6').prop('selectedIndex', 0);$('#tahapan7').prop('selectedIndex', 0);$('#tahapan8').prop('selectedIndex', 0);$('#tahapan9').prop('selectedIndex', 0);
            }
        });
        $('.modal-footer-edit').html(
          `<button type="button" class="btn btn-default ml-3" data-dismiss="modal">Close</button>
          <button type="button" onclick="store_json(`+res.id+`)" class="btn btn-success float-right mb-3 mr-3 toastrDefaultSuccess">Save changes</button>
          </form>`
        )
      }
    });
  }
  function store_json(param){
    if (param == 'create') {
        var data = {
            id: $("#id_create").val(),
            nama: $("#nama_create").val(),
            alamat: $("#alamat_create").val(),
            kelurahan: $("#kelurahan_create").val(),
            kecamatan: $("#kecamatan_create").val(),
            keterangan: $("#keterangan_create").val(),
        }
    } else {
        var data = {
            id: $("#id").val(),
            nama: $("#nama").val(),
            alamat: $("#alamat").val(),
            kelurahan: $("#kelurahan").val(),
            kecamatan: $("#kecamatan").val(),
            keterangan: $("#keterangan").val(),
            latitude: $("#latitude").val(),
            longitude: $("#longitude").val(),
        }
    }
    const fd = new FormData(document.getElementById('input-penertiban'));
    console.log(data)
    $.ajax({
        type: "POST",
        processData: false, 
        contentType: false,
        dataType: "json",
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          "Authorization":"Bearer " + localStorage.getItem("token")
        },
        data: fd,
        url: baseUrl+"api/penertiban/store_json",
        success: function (response) {
          $('#modal-create').modal('hide')
          $('#modal-lg').modal('hide')
          table()
        }
    });
  }
  function alert(id) {
    $('.modal-footer-alert').html(
      `
        <button type="button" class="btn btn-default ml-3" data-dismiss="modal">Close</button>
        <button type="button" onclick="delete_json(`+id+`)" class="btn btn-danger float-right mb-3 mr-3">Hapus</button>
      `
    )
  }
  function delete_json(id){
    $('#modal-sm').modal('hide')
    console.log(id)
    alert('delete');
    $.ajax({
        type: "DELETE",
        dataType: "json",
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          "Authorization":"Bearer " + localStorage.getItem("token")
        },
        url: baseUrl+"api/penertiban/delete_json/"+id,
        success: function (response) {
          table()
        }
    });
  }
  $("#input-search").on("submit", function (e) {
    var dataString = $(this).serialize();
    console.log(dataString);
    $.ajax({
      type: "GET",
      url: baseUrl+"api/penertiban/search_json",
      data: dataString,
      success: function () {
        // Display message back to the user here
        // search()
        $('#example2').DataTable({
        "dom": 'Bfrtip',
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "bDestroy": true,
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "processing": true,
        "serverSide": false,
        "ajax": {
            "url": baseUrl+"api/penertiban/search_json?"+dataString,
            "dataType": "json",
            "type": "GET",
            "data":{ _token: "{{csrf_token()}}"}
        },
        "order":[0,'asc'],
        "columns": [
          {data: 'id', name: 'id'},
          {data: 'no_upt_imb'},
          {data: 'alamat'},
          {data: 'kelurahan'},
          {data: 'kecamatan'},
          {data: 'action', orderable: false, searcable: false}
        ],
        }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
        // res = response;
        // console.log(res);
      }
    });
 
    e.preventDefault();
  });
</script>
</body>
</html>
