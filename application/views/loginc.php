<?php
$imageserver = "http://padiweb.padinet.com/";
if(1==2){
  $mac = $_POST['mac'];
  $ip = $_POST['ip'];
  $username = $_POST['username'];
  $linklogin = $_POST['link-login'];
  $linkorig = $_POST['link-orig'];//17:02
  $loginby = '';//$_POST['login-by'];//12:38
  $chapid = $_POST['chap-id'];
  $chapchallenge = $_POST['chap-challenge'];
  $linkloginonly = $_POST['link-login-only'];
  $linkorigesc = $_POST['link-orig-esc'];
  $macesc = $_POST['mac-esc'];
}else{
  $imageserver = "http://imageserver/";
  $mac = "";
  $ip = "";
  $username = "";
  $linklogin = "";
  $linkorig = "";
  $loginby = '';//$_POST['login-by'];//12:38
  $chapid = "";
  $chapchallenge = "";
  $linkloginonly = "";
  $linkorigesc = "";
  $macesc = "";
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>lOGIN HOTSPOT</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="/assets/bootstrap-3.4.1/bootstrap.css" />-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    

    <!-- Bootstrap core CSS -->
    <script src="/assets/adminlte/plugins/jquery/jquery.min.js"></script>
    <link href="/assets/bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .input-group-btn{
        width: 15%;
      }
      #logopadinet{
          width:350px;
      }
      ul.brand{
        list-style-type: none;
      }
      ul.brand li{
        padding: 5px;
      }
      @media (min-width: 768px) {
        #logopadinet{
          width:350px;
        }
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      @media (max-width:400px){
        #logopadinet{
          width:350px;
        }
      }
    </style>

    
  </head>
  <body>
    

<main>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <img src="/images/logo-padinet.jpeg" alt="Logo PadiNET" srcset="" id="logopadinet">
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                TITLE
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
              <img src="/images/mbloc.JPG" alt="Logo PadiNET" srcset="" id="logopadinet">
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          
        


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
                <img src="<?php echo $imageserver;?>main/carousel/1" alt="Carousel 1" style="width:100%;">
              </div>
        
              <div class="item">
                <img src="<?php echo $imageserver;?>main/carousel/2" alt="Carousel 2" style="width:100%;">
              </div>
            
              <div class="item">
                <img src="<?php echo $imageserver;?>main/carousel/3" alt="Carousel 3" style="width:100%;">
              </div>
            </div>            
          </div>




        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <ul class="brand">
                  <li>
                    <img class="brand" src="<?php echo $imageserver;?>main/brand/1" alt="" srcset="">
                  </li>
                  <li>
                    <img class="brand" src="<?php echo $imageserver;?>main/brand/2" alt="" srcset="">
                  </li>
                  <li>
                    <img class="brand" src="<?php echo $imageserver;?>main/brand/3" alt="" srcset="">
                  </li>
                  <li>
                    <img class="brand" src="<?php echo $imageserver;?>main/brand/4" alt="" srcset="">
                  </li>
                  <li>
                    <img class="brand" src="<?php echo $imageserver;?>main/brand/5" alt="" srcset="">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <p>center</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="d-flexx justify-content-betweenx align-items-centerx">
                <h3 class="card-title pricing-card-title">Regular User:</h3>
                <p>
                    <a href="<?php echo $linkorig;?>&amp;username=T-<?php echo $macesc;?>">Click Here</a>z
                </p>
                <h3 class="card-title pricing-card-title">PREMIUM:</h3>
                <form name="login" action="<?php echo $linkloginonly; ?>" method="post" onSubmit="return doLogin()" >
                <input type="hidden" name="dst" value="<?php echo $linkorig; ?>" />
                <input type="hidden" name="popup" value="true" />
                <div class="input-group authentication">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="username" type="text" class="form-control" name="username" placeholder="Username">
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                  <br>
                  <P>
                    <button type="submit" class="w-50 btn btn-lg btn-primary">Login</button>
                  </P>        
                  </div>
                </form>


              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <p>Brand Sponsor</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
  </div>
</footer>
    <script src="/assets/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            console.log('test')
            $('.carousel').carousel()
        })
    </script>
  </body>
</html>
