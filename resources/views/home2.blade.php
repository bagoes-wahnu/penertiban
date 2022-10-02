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
  <link rel="stylesheet" href="{{asset("dist/css/adminlte.min.css")}}">

  <!-- leaflet css  -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin="" />

  <style>
    /* ukuran peta */
    #mapid {
        height: 100%;
    }
    .jumbotron{
        height: 100%;
        border-radius: 0;
    }
    body{
        background-color: #ebe7e1;
    }
</style>
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
              <li class="breadcrumb-item active">Tambah Data Penertiban</li> --}}
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-6 mt-2">
                      <h3 class="card-title">Tambah Data Penertiban</h3>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body" id="create">
                  
              </div>
              <!-- /.card-body -->
              <div class="card-footer" id="footer-create">
                
              </div>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-6">
            <div id="mapid"></div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

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
<!-- AdminLTE App -->
<script src="{{asset("dist/js/adminlte.min.js")}}"></script>
<!-- leaflet js  -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>
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
	let baseUrl = "{{asset('/')}}";
	console.log(baseUrl);
  // $('.toastrDefaultSuccess').click(function() {
  //   toastr.success('Data Di Perbarui.')
  // });

	$(document).ready(function () {
    create_json()
		table()
    //Date picker
    $('#tgl_sk_peringatan1_create').datetimepicker({
        format: 'L'
    });
    $('#tgl_sk_peringatan2_create').datetimepicker({
        format: 'L'
    });
    $('#tgl_sk_peringatan3_create').datetimepicker({
        format: 'L'
    });
    $('#tgl_sk_penyegelan_create').datetimepicker({
        format: 'L'
    });
    $('#tgl_sk_bantib_penyegelan_create').datetimepicker({
        format: 'L'
    });
    $('#tgl_sk_pembongkaran_create').datetimepicker({
        format: 'L'
    });
    $('#tgl_sk_bantib_pembongkaran_create').datetimepicker({
        format: 'L'
    });
	});
  function table() {
    $('#example2').DataTable({
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
			"columns": [
			// {data: 'DT_RowIndex', name: 'id'},
			{data: 'id', name: 'id'},
			{data: 'alamat'},
			{data: 'kelurahan'},
			{data: 'kecamatan'},
			{data: 'action', orderable: false, searcable: false}
			],
		});
  }
  function create_json(){
    console.log($('#id_create').val());
    $('#create').html(
      `
      <form action="`+baseUrl+`"api/penertiban/store_json/" id="input-penertiban" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="inputDescription">No UPT IMB</label>
          <input name="no_upt_imb" id="no_upt_imb_create" class="form-control">
        </div>
        <div class="form-group">
          <label for="inputDescription">No SK Peringatan 1</label>
          <input name="sk_peringatan1" id="sk_peringatan1_create" class="form-control">
        </div>
        <div class="form-group">
          <label>Tanggal SK Peringatan 1</label>
            <div class="input-group date" id="tgl_sk_peringatan1_create" data-target-input="nearest">
                <input type="text" name="tgl_sk_peringatan1" class="form-control datetimepicker-input" data-target="#tgl_sk_peringatan1_create"/>
                <div class="input-group-append" data-target="#tgl_sk_peringatan1_create" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <div class="form-group">
          <label for="inputDescription">No SK Peringatan 2</label>
          <input name="sk_peringatan2" id="sk_peringatan2_create" class="form-control">
        </div>
        <div class="form-group">
          <label>Tanggal SK Peringatan 2</label>
            <div class="input-group date" id="tgl_sk_peringatan2_create" data-target-input="nearest">
                <input type="text" name="tgl_sk_peringatan2" class="form-control datetimepicker-input" data-target="#tgl_sk_peringatan2_create"/>
                <div class="input-group-append" data-target="#tgl_sk_peringatan2_create" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <div class="form-group">
          <label for="inputDescription">No SK Peringatan 3</label>
          <input name="sk_peringatan3" id="sk_peringatan3_create" class="form-control">
        </div>
        <div class="form-group">
          <label>Tanggal SK Peringatan 3</label>
            <div class="input-group date" id="tgl_sk_peringatan3_create" data-target-input="nearest">
                <input type="text" name="tgl_sk_peringatan3" class="form-control datetimepicker-input" data-target="#tgl_sk_peringatan3_create"/>
                <div class="input-group-append" data-target="#tgl_sk_peringatan3_create" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <div class="form-group">
          <label for="inputDescription">No SK Penyegelan</label>
          <input name="sk_penyegelan" id="sk_penyegelan_create" class="form-control">
        </div>
        <div class="form-group">
          <label>Tanggal SK Penyegelan</label>
            <div class="input-group date" id="tgl_sk_penyegelan_create" data-target-input="nearest">
                <input type="text" name="tgl_sk_penyegelan" class="form-control datetimepicker-input" data-target="#tgl_sk_penyegelan_create"/>
                <div class="input-group-append" data-target="#tgl_sk_penyegelan_create" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <div class="form-group">
          <label for="inputDescription">No SK Bantib Penyegelan</label>
          <input name="sk_bantib_penyegelan" id="sk_bantib_penyegelan_create" class="form-control">
        </div>
        <div class="form-group">
          <label>Tanggal SK Bantib Penyegelan</label>
            <div class="input-group date" id="tgl_sk_bantib_penyegelan_create" data-target-input="nearest">
                <input type="text" name="tgl_sk_bantib_penyegelan" class="form-control datetimepicker-input" data-target="#tgl_sk_bantib_penyegelan_create"/>
                <div class="input-group-append" data-target="#tgl_sk_bantib_penyegelan_create" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <div class="form-group">
          <label for="inputDescription">No SK Pembongkaran</label>
          <input name="sk_pembongkaran" id="sk_pembongkaran_create" class="form-control">
        </div>
        <div class="form-group">
          <label>Tanggal SK Pembongkaran</label>
            <div class="input-group date" id="tgl_sk_pembongkaran_create" data-target-input="nearest">
                <input type="text" name="tgl_sk_pembongkaran" class="form-control datetimepicker-input" data-target="#tgl_sk_pembongkaran_create"/>
                <div class="input-group-append" data-target="#tgl_sk_pembongkaran_create" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <div class="form-group">
          <label for="inputDescription">No SK Bantib Pembongkaran</label>
          <input name="sk_bantib_pembongkaran" id="sk_bantib_pembongkaran_create" class="form-control">
        </div>
        <div class="form-group">
          <label>Tanggal SK Pembongkaran</label>
            <div class="input-group date" id="tgl_sk_bantib_pembongkaran_create" data-target-input="nearest">
                <input type="text" name="tgl_sk_bantib_pembongkaran" class="form-control datetimepicker-input" data-target="#tgl_sk_bantib_pembongkaran_create"/>
                <div class="input-group-append" data-target="#tgl_sk_bantib_pembongkaran_create" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <div class="form-group">
          <label for="inputDescription">Alamat</label>
          <textarea name="alamat" id="alamat_create" class="form-control" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="inputClientCompany">Kelurahan</label>
            <input type="text" name="kelurahan" id="kelurahan_create" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputProjectLeader">Kecamatan</label>
            <input type="text" name="kecamatan" id="kecamatan_create" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputProjectLeader">File Dokumen</label>
            <input type="file" name="file_dokumen" id="file_dokumen_create" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputProjectLeader">File Lapangan</label>
            <input type="file" name="file_lapangan" id="file_lapangan_create" class="form-control">
        </div>
        <div class="form-group">
          <label for="inputDescription">Keterangan</label>
          <textarea name="keterangan" id="keterangan_create" class="form-control" rows="4"></textarea>
        </div>
        <div class="form-group">
          <label for="inputStatus">Jenis</label>
          <select class="js-select2 form-control" id="jenis_create" name="jenis" data-placeholder="Pilih Jenis">
            <option></option>
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
          <select class="js-select2 form-control" id="tahapan1_create" name="tahapan" data-placeholder="Pilih Tahapan">
            <option></option>
            <option value="Pemberitahuan">Pemberitahuan</option>
            <option value="Panggilan">Panggilan</option>
            <option value="Peringatan 1">Peringatan 1</option>
            <option value="Peringatan 2">Peringatan 2</option>
            <option value="Peringatan 3">Peringatan 3</option>
            <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
            <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
          </select>
        </div>
        <div class="form-group" id="tahapan2">
          <label for="inputStatus">Tahapan</label>
          <select class="js-select2 form-control" id="tahapan2_create" name="tahapan" data-placeholder="Pilih Tahapan">
            <option></option>
            <option value="Pemberitahuan">Pemberitahuan</option>
            <option value="Panggilan">Panggilan</option>
            <option value="Peringatan">Peringatan</option>
            <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
            <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
          </select>
        </div>
        <div class="form-group" id="tahapan3">
          <label for="inputStatus">Tahapan</label>
          <select class="js-select2 form-control" id="tahapan3_create" name="tahapan" data-placeholder="Pilih Tahapan">
            <option></option>
            <option value="Pemberitahuan">Pemberitahuan</option>
            <option value="Panggilan">Panggilan</option>
            <option value="Peringatan">Peringatan</option>
            <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
            <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
          </select>
        </div>
        <div class="form-group" id="tahapan4">
          <label for="inputStatus">Tahapan</label>
          <select class="js-select2 form-control" id="tahapan4_create" name="tahapan" data-placeholder="Pilih Tahapan">
            <option></option>
            <option value="Pemberitahuan">Pemberitahuan</option>
            <option value="Panggilan">Panggilan</option>
            <option value="Peringatan">Peringatan</option>
            <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
            <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
          </select>
        </div>
        <div class="form-group" id="tahapan5">
          <label for="inputStatus">Tahapan</label>
          <select class="js-select2 form-control" id="tahapan5_create" name="tahapan" data-placeholder="Pilih Tahapan">
            <option></option>
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
          <select class="js-select2 form-control" id="tahapan6_create" name="tahapan" data-placeholder="Pilih Tahapan">
            <option></option>
            <option value="Pemberitahuan">Pemberitahuan</option>
            <option value="Panggilan">Panggilan</option>
            <option value="Peringatan">Peringatan</option>
            <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
          </select>
        </div>
        <div class="form-group" id="tahapan7">
          <label for="inputStatus">Tahapan</label>
          <select class="js-select2 form-control" id="tahapan7_create" name="tahapan" data-placeholder="Pilih Tahapan">
            <option></option>
            <option value="Pemberitahuan">Pemberitahuan</option>
            <option value="Panggilan">Panggilan</option>
            <option value="Peringatan">Peringatan</option>
            <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
            <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
          </select>
        </div>
        <div class="form-group" id="tahapan8">
          <label for="inputStatus">Tahapan</label>
          <select class="js-select2 form-control" id="tahapan8_create" name="tahapan" data-placeholder="Pilih Tahapan">
            <option></option>
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
          <select class="js-select2 form-control" id="tahapan9_create" name="tahapan" data-placeholder="Pilih Tahapan">
            <option></option>
            <option value="Pemberitahuan">Pemberitahuan</option>
            <option value="Panggilan">Panggilan</option>
            <option value="Pencabutan IMB">Pencabutan IMB</option>
            <option value="Peringatan">Peringatan</option>
            <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
          </select>
        </div>
        <div class="form-group">
          <label for="inputProjectLeader">Latitude</label>
          <input type="text" name="latitude" id="latitude_create" class="form-control">
        </div>
        <div class="form-group">
          <label for="inputProjectLeader">Longitude</label>
          <input type="text" name="longitude" id="longitude_create" class="form-control">
        </div>
      `
    )
    var $tahapan1 = $('#tahapan1').hide();var $tahapan2 = $('#tahapan2').hide();var $tahapan2 = $('#tahapan3').hide();var $tahapan2 = $('#tahapan4').hide();var $tahapan2 = $('#tahapan5').hide();var $tahapan2 = $('#tahapan6').hide();var $tahapan2 = $('#tahapan7').hide();var $tahapan2 = $('#tahapan8').hide();var $tahapan2 = $('#tahapan9').hide();
    // var $groundSprayTr = $('#id_B').closest('tr').hide();
    $('#jenis_create').change(function() {
        var selectedValue = $(this).val();
        if(selectedValue  === 'SKRD Tidak Sesuai IMB') {
          $tahapan1.show();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
          $('#tahapan1_create').prop('selectedIndex', 0);
          $('#tahapan2_create').prop('selectedIndex', 0);
          $('#tahapan3_create').prop('selectedIndex', 0);
          $('#tahapan4_create').prop('selectedIndex', 0);
          $('#tahapan5_create').prop('selectedIndex', 0);
          $('#tahapan6_create').prop('selectedIndex', 0);
          $('#tahapan7_create').prop('selectedIndex', 0);
          $('#tahapan8_create').prop('selectedIndex', 0);
          $('#tahapan9_create').prop('selectedIndex', 0);
        } else if (selectedValue === 'SKRD Tidak memiliki IMB') {
          $tahapan1.hide();$tahapan2.show();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
          $('#tahapan1_create').prop('selectedIndex', 0);
          $('#tahapan2_create').prop('selectedIndex', 0);
          $('#tahapan3_create').prop('selectedIndex', 0);
          $('#tahapan4_create').prop('selectedIndex', 0);
          $('#tahapan5_create').prop('selectedIndex', 0);
          $('#tahapan6_create').prop('selectedIndex', 0);
          $('#tahapan7_create').prop('selectedIndex', 0);
          $('#tahapan8_create').prop('selectedIndex', 0);
          $('#tahapan9_create').prop('selectedIndex', 0);
        }else if (selectedValue === 'IMB - Berkas Dikembalikan') {
          $tahapan1.hide();$tahapan2.hide();$tahapan3.show();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
          $('#tahapan1_create').prop('selectedIndex', 0);
          $('#tahapan2_create').prop('selectedIndex', 0);
          $('#tahapan3_create').prop('selectedIndex', 0);
          $('#tahapan4_create').prop('selectedIndex', 0);
          $('#tahapan5_create').prop('selectedIndex', 0);
          $('#tahapan6_create').prop('selectedIndex', 0);
          $('#tahapan7_create').prop('selectedIndex', 0);
          $('#tahapan8_create').prop('selectedIndex', 0);
          $('#tahapan9_create').prop('selectedIndex', 0);
        }else if (selectedValue === 'SKRK Belum ber IMB') {
          $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.show();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
          $('#tahapan1_create').prop('selectedIndex', 0);
          $('#tahapan2_create').prop('selectedIndex', 0);
          $('#tahapan3_create').prop('selectedIndex', 0);
          $('#tahapan4_create').prop('selectedIndex', 0);
          $('#tahapan5_create').prop('selectedIndex', 0);
          $('#tahapan6_create').prop('selectedIndex', 0);
          $('#tahapan7_create').prop('selectedIndex', 0);
          $('#tahapan8_create').prop('selectedIndex', 0);
          $('#tahapan9_create').prop('selectedIndex', 0);
        }else if (selectedValue === 'SLF') {
          $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.show();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
          $('#tahapan1_create').prop('selectedIndex', 0);
          $('#tahapan2_create').prop('selectedIndex', 0);
          $('#tahapan3_create').prop('selectedIndex', 0);
          $('#tahapan4_create').prop('selectedIndex', 0);
          $('#tahapan5_create').prop('selectedIndex', 0);
          $('#tahapan6_create').prop('selectedIndex', 0);
          $('#tahapan7_create').prop('selectedIndex', 0);
          $('#tahapan8_create').prop('selectedIndex', 0);
          $('#tahapan9_create').prop('selectedIndex', 0);
        }else if (selectedValue === 'Bangunan Tidak ber IMB (Tanah Aset)') {
          $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.show();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
          $('#tahapan1_create').prop('selectedIndex', 0);
          $('#tahapan2_create').prop('selectedIndex', 0);
          $('#tahapan3_create').prop('selectedIndex', 0);
          $('#tahapan4_create').prop('selectedIndex', 0);
          $('#tahapan5_create').prop('selectedIndex', 0);
          $('#tahapan6_create').prop('selectedIndex', 0);
          $('#tahapan7_create').prop('selectedIndex', 0);
          $('#tahapan8_create').prop('selectedIndex', 0);
          $('#tahapan9_create').prop('selectedIndex', 0);
        }else if (selectedValue === 'Bangunan Tidak ber IMB (Persil)') {
          $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.show();$tahapan8.hide();$tahapan9.hide();
          $('#tahapan1_create').prop('selectedIndex', 0);
          $('#tahapan2_create').prop('selectedIndex', 0);
          $('#tahapan3_create').prop('selectedIndex', 0);
          $('#tahapan4_create').prop('selectedIndex', 0);
          $('#tahapan5_create').prop('selectedIndex', 0);
          $('#tahapan6_create').prop('selectedIndex', 0);
          $('#tahapan7_create').prop('selectedIndex', 0);
          $('#tahapan8_create').prop('selectedIndex', 0);
          $('#tahapan9_create').prop('selectedIndex', 0);
        }else if (selectedValue === 'Bangunan Tidak Sesuai dengan IMB (Persil)') {
          $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.show();$tahapan9.hide();
          $('#tahapan1_create').prop('selectedIndex', 0);
          $('#tahapan2_create').prop('selectedIndex', 0);
          $('#tahapan3_create').prop('selectedIndex', 0);
          $('#tahapan4_create').prop('selectedIndex', 0);
          $('#tahapan5_create').prop('selectedIndex', 0);
          $('#tahapan6_create').prop('selectedIndex', 0);
          $('#tahapan7_create').prop('selectedIndex', 0);
          $('#tahapan8_create').prop('selectedIndex', 0);
          $('#tahapan9_create').prop('selectedIndex', 0);
        }else if (selectedValue === 'Bangunan ber IMB (Sewa Tanah Habis Masa Berlaku)') {
          $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.show();
          $('#tahapan1_create').prop('selectedIndex', 0);
          $('#tahapan2_create').prop('selectedIndex', 0);
          $('#tahapan3_create').prop('selectedIndex', 0);
          $('#tahapan4_create').prop('selectedIndex', 0);
          $('#tahapan5_create').prop('selectedIndex', 0);
          $('#tahapan6_create').prop('selectedIndex', 0);
          $('#tahapan7_create').prop('selectedIndex', 0);
          $('#tahapan8_create').prop('selectedIndex', 0);
          $('#tahapan9_create').prop('selectedIndex', 0);
        } else {
          $tahapan1.hide();$tahapan2.hide();$tahapan3.hide();$tahapan4.hide();$tahapan5.hide();$tahapan6.hide();$tahapan7.hide();$tahapan8.hide();$tahapan9.hide();
          $('#tahapan1_create').prop('selectedIndex', 0);
          $('#tahapan2_create').prop('selectedIndex', 0);
          $('#tahapan3_create').prop('selectedIndex', 0);
          $('#tahapan4_create').prop('selectedIndex', 0);
          $('#tahapan5_create').prop('selectedIndex', 0);
          $('#tahapan6_create').prop('selectedIndex', 0);
          $('#tahapan7_create').prop('selectedIndex', 0);
          $('#tahapan8_create').prop('selectedIndex', 0);
          $('#tahapan9_create').prop('selectedIndex', 0);
        }
    });
    $('#footer-create').html(
        `<a type="button" href="{{asset("/")}}" class="btn btn-default ml-3">Back</a>
        <button type="button" onclick="store_json('create')" class="btn btn-success float-right mb-3 mr-3 toastrDefaultSuccess">Save changes</button>
        </form>`
    )
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
            latitude: $("#latitude_create").val(),
            longitude: $("#longitude_create").val(),
        }
    } else {
        var data = {
            id: $("#id").val(),
            nama: $("#nama").val(),
            alamat: $("#alamat").val(),
            kelurahan: $("#kelurahan").val(),
            kecamatan: $("#kecamatan").val(),
            keterangan: $("#keterangan").val(),
        }
    }
    console.log(data)
    const fd = new FormData(document.getElementById('input-penertiban'));
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
          window.location.href = baseUrl;
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
</script>
<script>
  // set lokasi latitude dan longitude, lokasinya kota palembang 
  var mymap = L.map('mapid').setView([-7.288828, 112.761848], 14);
  //setting maps menggunakan api mapbox bukan google maps, daftar dan dapatkan token      
  L.tileLayer(
      'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibmFiaWxjaGVuIiwiYSI6ImNrOWZzeXh5bzA1eTQzZGxpZTQ0cjIxZ2UifQ.1YMI-9pZhxALpQ_7x2MxHw', {
          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
          maxZoom: 20,
          id: 'mapbox/streets-v11', //menggunakan peta model streets-v11 kalian bisa melihat jenis-jenis peta lainnnya di web resmi mapbox
          tileSize: 512,
          zoomOffset: -1,
          accessToken: 'your.mapbox.access.token'
      }).addTo(mymap);


  // buat variabel berisi fugnsi L.popup 
  var popup = L.popup();

  // buat fungsi popup saat map diklik
  function onMapClick(e) {
      // popup
      //     .setLatLng(e.latlng)
      //     .setContent("koordinatnya adalah " + e.latlng
      //         .toString()
      //         ) //set isi konten yang ingin ditampilkan, kali ini kita akan menampilkan latitude dan longitude
      //     .openOn(mymap);

      document.getElementById('latitude_create').value = e.latlng.lat //value pada form latitde, longitude akan berganti secara otomatis
      document.getElementById('longitude_create').value = e.latlng.lng //value pada form latitde, longitude akan berganti secara otomatis
  }
  mymap.on('click', onMapClick); //jalankan fungsi

</script>
</body>
</html>
