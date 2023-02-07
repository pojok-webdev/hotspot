<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | brand</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/assets/adminlte/index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">brand</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

      <!-- Messages Dropdown Menu -->
      <?php if(1==2){?>
        <?php $this->load->view('admin/messages');?>
      <?php }?>
      <!-- Notifications Dropdown Menu -->
      <?php if(1==2){?>
        <?php $this->load->view('admin/notifikasi');?>
      <?php }?>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- Sidebar Menu -->
      <?php $this->load->view('admin/sidebar');?>
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
            <h1>brand</h1>
          </div>
          <div class="col-sm-6">
            <button class="btn btn-primary" id="btnUpload">Upload</button>
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">brand</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
            <?php $c = 1;?>
            <?php foreach($map as $img){?>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  brand <?php echo $c++;?> (<span class="brandsubject"><?php echo $img;?></span>)
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-12 text-center">
                      <img src="/uploads/brands/<?php echo $img;?>" />
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a class="btn btn-sm btn-danger btnRemoveBrand" id="<?php echo $img;?>">
                      <i class="fas fa-trash"></i>&nbsp; Hapus
                    </a>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      Action
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" style="background:red;">Set Tidak digunakan</a>
                      <div class="dropdown-divider"></div>
                        <a class="dropdown-item btnsetimage" role="banner1">Set sebagai Banner 1</a>
                        <a class="dropdown-item btnsetimage" role="banner2">Set sebagai Banner 2</a>
                        <a class="dropdown-item btnsetimage" role="banner3">Set sebagai Banner 3</a>
                        <a class="dropdown-item btnsetimage" role="banner4">Set sebagai Banner 4</a>
                      </div>

                  </div>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://database.padinet.com">Manajemen Hotspot</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/adminlte/dist/js/demo.js"></script>
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Unggah brand</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="exampleInputFile">File input</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="fileToUpload" name="fileToUpload">
            <label class="custom-file-label" for="fileToUpload">Pilih file</label>
          </div>
          <div class="input-group-append">
            <input type="button" value="Upload" name="submit" id="btn_upload" class="input-group-text">
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<script src="/assets/adminlte/padinets/commons.js"></script>
<script>
  resetBtnStyle = _ =>{
    $('.btnsetimage').each(function(){
      if(($(this)).hasClass('btn-primary')){

      }else{
        $(this).addClass('btn-primary')
      }
    })
  }
  $('#btnUpload').click(function(){
    console.log('upload button clicked')
    $('#modal-lg').modal()
  })
  $('#btn_upload').click(function(){
    var fd = new FormData();
				var files = $('#fileToUpload')[0].files[0];
                console.log('File To Upload',files);
				fd.append('file', files);
               // fd.append('fileToUpload',files)
				$.ajax({
					url: '/upload/uploadbrand',
					type: 'post',
					data: fd,
					contentType: false,
					processData: false,
					success: function(response){
						if(response != 0){
                        console.log('Response',response)
                //location.reload();
						}
						else{
                console.log(response)
							alert('file not uploaded');
						}
					},
				});
  })
  $('.btnsetimage').click(function(){
    that = $(this)
    console.log(that)
    $.ajax({
      url:'/main/setbanner',
      type:'post',
      dataType:'json',
      data:{
        name:that.stairUp({level:3}).find('.btnRemoveBrand').attr('id'),
        role:that.attr('role')
      }
    })
    .done(res=>{
      console.log('setimage res',res);
      $('.brandsubject').css('color','black')
      resetBtnStyle()
      that.stairUp({level:1}).find('.btnsetimage').removeClass('btn-primary')
    })
    .fail(err=>{
      console.log('setimage err',err)
    });
  })
  $('.btnRemoveBrand').click(function(){
    that = $(this)
    console.log("ID untuk dihapus",that.attr('id'))
    $.ajax({
      url:'/upload/remove/brands/'+that.attr('id')
    })
    .done(res=>{
      console.log('Sukses menghapus brand',res)
      that.stairUp({level:4}).remove()
    })
    .fail(err=>{
      console.log('Gagal menghapus brand',err)
    })
  })
</script>
</body>
</html>
