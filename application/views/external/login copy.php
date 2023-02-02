<?php
$mac = $_POST['mac'];
$ip = $_POST['ip'];
$username = $_POST['username'];
$linklogin = $_POST['link-login'];
$linkorig = $_POST['link-orig'];//17:02
$loginby = '';//$_POST['login-by'];//12:38
$chapid = $_POST['chap-id'];
$trial = $_POST['trial'];
$chapchallenge = $_POST['chap-challenge'];
$linkloginonly = $_POST['link-login-only'];
$linkorigesc = $_POST['link-orig-esc'];
$macesc = $_POST['mac-esc'];
$identity = $_POST['identity'];
$bytesinnice = $_POST['bytes-in-nice'];
$bytesoutnice = $_POST['bytes-out-nice'];
$sessiontimeleft = $_POST['session-time-left'];
$uptime = $_POST['uptime'];
$refreshtimeout = $_POST['refresh-timeout'];
$linkstatus = $_POST['link-status'];
?>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Hotspot PadiNET</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/pricing/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .brand{
        margin-bottom: 10px;
      }
    </style>
  </head>
    <body>
<!-- start of mytemplate -->
<main>
    <div class="row row-cols-1 row-cols-md-1 mb-1 text-center">
        <div class="col">
            <!--coba carousel disini-->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="./images/CAROUSEL1.jpg" alt="Banner 1" style="width:100%;">
                  </div>
            
                  <div class="item">
                    <img src="./images/CAROUSEL2.jpg" alt="Banner 2" style="width:100%;">
                  </div>
                
                  <div class="item">
                    <img src="./images/CAROUSEL3.jpg" alt="Banner 3" style="width:100%;">
                  </div>
                </div>
            
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        
            <!-- end of coba carousel disini-->
        </div>
    </div>
    <!-- start cols puji -->
    <div class="row">
        <div class="col-sm-2">
            <img class="brand" src="./images/BRAND_1.jpg" alt="" srcset="">
            <img class="brand" src="./images/BRAND_2.jpg" alt="" srcset="">
            <img class="brand" src="./images/BRAND_3.jpg" alt="" srcset="">
            <img class="brand" src="./images/BRAND_4.jpg" alt="" srcset="">
            <img class="brand" src="./images/BRAND_5.jpg" alt="" srcset="">
        </div>
        <div class="col-sm-8">.col-sm-4</div>
        <div class="col-sm-2">
            <h3 class="card-title pricing-card-title">Regular User:</h3>
            <p>
                <a href="#">Click Here</a>
            </p>
            <h3 class="card-title pricing-card-title">PREMIUM:</h3>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" type="text" class="form-control" name="email" placeholder="Username">
              </div>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <br>
              <P>
                <button type="button" class="w-50 btn btn-lg btn-primary">Login</button>
            </P>        
        </div>
      </div>
    <!-- end cols puji -->

    <h2 class="display-6 text-center mb-4">Brand Sponsor</h2>

  </main>

<!-- end of mytemplate -->
        <div id="wrap">
            <div class="navbar navbar-inverse navbar-static-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand"><?php echo $identity;?></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="http://padiweb.padinet.com/login">Login</a></li>
                            <li><a href="status">Status</a></li>
                            <li><a href="logout?erase-cookie=true">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="bottom-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 mylogo">
                            <a href="http://padiweb.padinet.com" ref="#"><img src="http://padiweb.padinet.com/main/brand/1" alt="" srcset=""></a>
                        </div>
                        <div class="col-xs-10 textlogo">
                            <h1>PadiHotspot</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <?php if(isset($error)):?>
                            <div class="alert alert-danger"><?php echo $error;?></div>
                            <?php endif;?>
                        <div class="alert alert-info">SIlakan Login untuk menggunakan layanan Hotspot</div>
                        <?php if($trial=='yes'):?>
                        <div class="alert alert-info">
                            Free trial available <a href="<?php echo $linkloginonly;?>?dst=<?php echo $linkorigesc;?>&amp;username=T-<?php echo $macesc;?>">klik di sini</a>
                        </div>
                        <?php endif;?>
                    </div>
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form action="<?php echo $linkloginonly;?>" method="post" class="form-horizontal" role="form" id="loginForm">
                                    <input type="hidden" name="dst" value="<?php echo $linkorig;?>">
                                    <input type="hidden" name="popup" value="true">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="card hovercard">
                                <div class="cardheader"></div>
                                <div class="avatar">
                                    <img src="/img/brand/1" alt="">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        <a href="#">Hotspot PadiNET</a>
                                    </div>
                                    <div class="desc">Website Hotspot Internet</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="container">
                <p class="text-muted">Didukung oleh PadiNET</p>
            </div>
        </div>
        <script src="/assets/adminlte/plugins/jquery/jquery.min.js"></script>
        <script src="/assets/adminlte/plugins/bootstrap/js/bootstrap.min.js"></script>
        <?php if($chapid) : ?>
            <script src="/assets/mikrotik/js/md5.js"></script>
            <script>
                function doLogin(){
                    <?php if(strlen($chapid)<1) echo "return true;\n"?>
                    document.sendin.username.value = document.login.username.value;
                    document.sendin.password.value = hexMD5('<?php echo $chapid;?>'+document.login.password.value+'<?php echo $chapchallenge;?>');
                    document.sendin.submit();
                    return false;
                }
            </script>
        <?php endif; ?>
        <script>
            document.login.username.focus()
        </script>
        <script>
            $(document).ready(function(){
                console.log('test')
                $('.carousel').carousel()
            })
        </script>
    </body>
</html>