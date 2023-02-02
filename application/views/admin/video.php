<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pengaturan video</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/adminlte/dist/css/adminlte.min.css">
  <style>
    .brandimage{
      margin-bottom: 10px;
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
        <a href="/" class="nav-link">Pengaturan</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">video</a>
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
    <!-- video Logo -->
    <a href="#" class="brand-link">
      <img src="/assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">video</span>
    </a>

    <!-- Sidebar -->
    <?php $this->load->view('admin/sidebar');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>video <?php echo $video_id;?></h1>
            <h5 style="color: red">Maksimal 5MB (.mp4)</h5>
          </div>
          <div class="col-sm-6">
            <div class="float-sm-right">
              <b><a href="#" id="btnchangepassword"><?php echo $_SESSION['email'];?></a></b>
              &nbsp;
              <a href="/otentikasi/logout">Logout</a>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Gambar</a></li>
                  <li class="nav-item"><a class="nav-link" href="#upload" data-toggle="tab">Upload</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!--start gambar puji-->
                    <?php foreach($map as $img){?>
                    <?php $im = explode(".",$img);?>
                    <div class="brandimage">
                        <video width=500 height=500 controls >
                            <source src="/uploads/videos/<?php echo $img;?>" type="video/mp4">
                        </video>
                    <button class="btn btn-warning btnsetimage" id="<?php echo $img;?>" >Gunakan</button>
                    </div>
                    <?php }?>

                    <!--end gambar puji-->
                    <!-- Post -->
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="upload">
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
                  <!--</form>-->
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="#">PadiApp</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php $this->load->view('admin/changepassword');?>
<!-- jQuery -->
<script src="/assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/adminlte/dist/js/demo.js"></script>
<script>
  $('#btn_upload').click(function(){
    var fd = new FormData();
				var files = $('#fileToUpload')[0].files[0];
                console.log('File To Upload',files);
				fd.append('file', files);
               // fd.append('fileToUpload',files)
				$.ajax({
					url: '/upload/uploadvideo',
					type: 'post',
					data: fd,
					contentType: false,
					processData: false,
					success: function(response){
						if(response != 0){
                        console.log('Response',response)
                location.reload();
						}
						else{
                console.log(response)
							alert('file not uploaded');
						}
					},
				});
  })
  $('.btnsetimage').click(function(){
    $.ajax({
      url:'/main/setvideo',
      type:'post',
      dataType:'json',
      data:{
        video_id:1,
        image:$(this).prop('id'),
        name:$(this).prop('id'),
        role:'video'+'<?php echo $video_id;?>'
      }
    })
    .done(res=>{
      console.log('setimage res',res);
    })
    .fail(err=>{
      console.log('setimage err',err)
    });
  })
</script>
<script src="/assets/padilibs/auth.js"></script>
</body>
</html>
