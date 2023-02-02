<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pengaturan Carousel</title>

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
        <a href="../../index3.html" class="nav-link">Pengaturan</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Carousel</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <?php $this->load->view('gallery/rightnavbar');?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Carousel</span>
    </a>

    <!-- Sidebar -->
    <?php $this->load->view('gallery/sidebar');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Carousel <?php echo $carousel_id;?></h1>
            <h5 style="color: red">Dimensi 200px X 40px (.jpg)</h5>
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


                    <!-- Post -->
                    <?php foreach($map as $img){?>
                  <?php $im = explode(".",$img);?>
                <div class="brandimage">
                  <img src="/uploads/carousels/<?php echo $img;?>" alt="<?php echo $img;?>">
                  <button class="btn btn-warning btnsetimage" id="<?php echo $img;?>" >Gunakan</button>
                  <button class="btn btn-danger btnremoveimage" id="<?php echo $img;?>" >Hapus</button>
                </div>
                <?php }?>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="upload">
                    <!-- Upload -->
                    <!--<form action="/main/uploadhandler" method="post" enctype="multipart/form-data">-->
                      <!--Select image to upload:
                      <input type="file" name="fileToUpload" id="fileToUpload">
                      <input type="submit" value="Upload Image" name="submit"> -->




                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fileToUpload" name="fileToUpload">
                        <label class="custom-file-label" for="fileToUpload">Pilih file</label>
                      </div>
                      <div class="input-group-append">
                        <input type="button" value="Upload" name="submit" id="btn_upload" class="input-group-text">
                          <!--<span class="input-group-text">Upload</span>-->
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
<?php $this->load->view('users/changepassword');?>
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
				fd.append('file', files);
               // fd.append('fileToUpload',files)
				$.ajax({
					url: '/upload/uploadcarousel',
					type: 'post',
					data: fd,
					contentType: false,
					processData: false,
					success: function(response){
						if(response != 0){
                console.log(response)
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
      url:'/main/setcarousel',
      type:'post',
      dataType:'json',
      data:{
        carousel_id:1,
        image:$(this).prop('id'),
        name:$(this).prev().prop('alt'),
        role:'carousel'+'<?php echo $carousel_id;?>'
      }
    })
    .done(res=>{
      console.log('setimage res',res);
    })
    .fail(err=>{
      console.log('setimage err',err)
    });
  })
  $('.btnremoveimage').click(function(){
    console.log('Nama yang dikirim',$(this).prev().prev().prop('alt'))
    $.ajax({
      url:'/main/removeimage',
      type:'post',
      dataType:'json',
      data:{
        name:$(this).prev().prev().prop('alt')
      }
    })
    .done(res=>{
      console.log('Upload Result',res);
    })
    .fail(err=>{
      console.log('Error Upload',err)
    })
  })
</script>
<script src="/assets/padilibs/auth.js"></script>
</body>
</html>
