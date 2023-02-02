<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manajemen Hotspot | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <!--<link rel="stylesheet" href="/assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">-->
  <!-- JQVMap -->
  <!--<link rel="stylesheet" href="/assets/adminlte/plugins/jqvmap/jqvmap.min.css">-->
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/adminlte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <!--<link rel="stylesheet" href="/assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">-->
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/assets/adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <!--<link rel="stylesheet" href="/assets/adminlte/plugins/summernote/summernote-bs4.min.css">-->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Dashboard</a>
      </li>
    </ul>

    <!-- Right navbar links -->
<?php if(1==2){?>
      <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="/assets/adminlte/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="/assets/adminlte/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="/assets/adminlte/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
    <?php }?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard Hotspot</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <?php if(1==2){?>

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
      <?php }?>
      <!-- Sidebar Menu -->
      <?php $this->load->view('dashboard/menu');?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php if(1==2){
          $this->load->view('dashboard/info');
        }?>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-12 connectedSortable">
            <!-- solid sales graph -->
            <div class="card bg-gradient-infox">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Grafik Hit Per hari
                </h3>
              </div>
              <div class="card-body">
                <canvas class="chart" id="visitor-line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </section>

          <section class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Grafik Click Banner 1
                </h3>
              </div>
              <div class="card-body">
                <canvas class="chart" id="visitor-click-banner1" style="min-height:250px;max-height:250px;"></canvas>
              </div>
            </div>
          </section>
          <section class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Grafik Click Banner 2
                </h3>
              </div>
              <div class="card-body">
                <canvas class="chart" id="visitor-click-banner2" style="min-height:250px;max-height:250px;"></canvas>
              </div>
            </div>
          </section>
          <section class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Grafik Click Banner 3
                </h3>
              </div>
              <div class="card-body">
                <canvas class="chart" id="visitor-click-banner3" style="min-height:250px;max-height:250px;"></canvas>
              </div>
            </div>
          </section>
          <section class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Grafik Click Banner 4
                </h3>
              </div>
              <div class="card-body">
                <canvas class="chart" id="visitor-click-banner4" style="min-height:250px;max-height:250px;"></canvas>
              </div>
            </div>
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://database.padinet.com">Manajemen Hotspot</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
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
<!-- jQuery UI 1.11.4 -->
<script src="/assets/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/assets/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/assets/adminlte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<!--<script src="/assets/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/assets/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>-->
<!-- jQuery Knob Chart -->
<script src="/assets/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/assets/adminlte/plugins/moment/moment.min.js"></script>
<script src="/assets/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/assets/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/adminlte/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!--<script src="/assets/adminlte/dist/js/demo.js"></script>-->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="/assets/adminlte/dist/js/pages/dashboard.js"></script>-->
<script>
/*  $.ajax({
    url:'/dashboards/uniquevisitor/2023-01-27'
  })
  .done(res=>{
    console.log('Res of unique visitor',res)
    $('#uniquevisitors').html(res.res.cnt)
  })
  .fail(err=>{})*/
</script>
<script src="/assets/dashboard/dumpreal.js?v=1"></script>
<script src="/assets/dashboard/linecartrender.js?v=1"></script>
<script>
  doRenderChart = objs =>{
    getClickAreaData = objs => {
      return {
        labels : objs.labels.sort(),
        datasets: objs.visitors.map(obj=>{
            return {
                label:obj.toString(),
                backgroundColor:getcolor[objs.visitors.indexOf(obj)],
                fill:false,
                borderColor:getcolor[objs.visitors.indexOf(obj)],
                borderDash:[5,5],
                data:objs.labels.sort().map(dt=>{
                    valgot = (gotval({ds:objs.ds,ipaddress:obj,dt:dt}).length===0)?0:gotval({ds:objs.ds,ipaddress:obj,dt:dt})[0].cnt
                    return valgot
                })
            }
        })
      }
    }
  var clickareadata = getClickAreaData({
    ds:objs.ds,
    visitors:[... new Set(objs.ds.map(tg=>{return tg.ipaddress}))],
    labels:gotlabels(objs.ds)
  })
  var mycart = objs.grafic_component
  clickdata = $.extend(true,{},clickareadata)
    var clickCart = new Chart(mycart,{
      type:'line',data:clickdata
    })
  }
  $.ajax({
    url:'/dashboards/dataclickbannerharian',
    dataType:'json',
    data:{
      name:'banner1'
    },
    type:'post'
  })
  .done(res=>{
    doRenderChart({ds:res.res,grafic_component:$('#visitor-click-banner1').get(0).getContext('2d')})
  })
  .fail(err=>{
    console.log("Err retrieve click banner1",err)
  })
  $.ajax({
    url:'/dashboards/dataclickbannerharian',
    dataType:'json',
    data:{
      name:'banner2'
    },
    type:'post'
  })
  .done(res=>{
    doRenderChart({ds:res.res,grafic_component:$('#visitor-click-banner2').get(0).getContext('2d')})
  })
  .fail(err=>{
    console.log("Err retrieve click banner2",err)
  })
  $.ajax({
    url:'/dashboards/dataclickbannerharian',
    dataType:'json',
    data:{
      name:'banner3'
    },
    type:'post'
  })
  .done(res=>{
    doRenderChart({ds:res.res,grafic_component:$('#visitor-click-banner3').get(0).getContext('2d')})
  })
  .fail(err=>{
    console.log("Err retrieve click banner3",err)
  })
  $.ajax({
    url:'/dashboards/dataclickbannerharian',
    dataType:'json',
    data:{
      name:'banner4'
    },
    type:'post'
  })
  .done(res=>{
    doRenderChart({ds:res.res,grafic_component:$('#visitor-click-banner4').get(0).getContext('2d')})
  })
  .fail(err=>{
    console.log("Err retrieve click banner2",err)
  })
</script>
</body>
</html>
