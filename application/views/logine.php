<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}
.countdown{
  font-size:36;
}
.gbratas{
  width: 40%;
  margin:auto;
  display:block;
}
#videlement{
  display:block;
  margin-left: auto;
  margin-right: auto;
  width:100%;
}
.row::after {
  content: "";
  clear: both;
  display: block;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  /*background-color: #33b5e5;*/
  /*color: #ffffff;*/
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

/* puji start*/
/* puji end*/
@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
  .gbratas{
    width:25%;
  }
}
</style>
<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="/assets/bootstrap-3.4.1/bootstrap.css" />-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
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
<div class="header">
</div>
<div class="row">
  <div class="col-3">
  <img src="/images/logo-padinet.jpeg" alt="Logo PadiNET" srcset="" id="logopadinet" class="gbratas">
  </div>
  <div class="col-6">TITLE</div>
  <div class="col-3 right">
  <img src="/images/mbloc.JPG" alt="Logo PadiNET" srcset="" id="logopadinet" class="gbratas">
  </div>
</div>
<div class="row">
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
<div class="row">
  <div class="col-3 menu">
    <ul>
    <li><img class="brand" src="<?php echo $imageserver;?>main/brand/1" alt="" srcset=""></li>
    <li><img class="brand" src="<?php echo $imageserver;?>main/brand/2" alt="" srcset=""></li>
    <li><img class="brand" src="<?php echo $imageserver;?>main/brand/3" alt="" srcset=""></li>
    <li><img class="brand" src="<?php echo $imageserver;?>main/brand/4" alt="" srcset=""></li>
    </ul>
  </div>

  <div class="col-6">
    <h1></h1>
    <p></p>
  </div>

  <div class="col-3 right">
    <div class="aside">

<!--start puji form-->
  <div class="d-flexx justify-content-betweenx align-items-centerx">
    
    <h3 class="card-title pricing-card-title">Regular User:</h3>
    <p>
      <!--<button class="btn btn-default" id="showVid">Click Here</button>-->
    <a href="#" class="btn btn-primary" data-target="#myModal" data-toggle="modal" id="showVid">Click Here</a>
        <!--<a href="<?php echo $linkorig;?>&amp;username=T-<?php echo $macesc;?>">Click Here</a>z-->
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

<!--end puji form-->
    </div>
  </div>
</div>

<div class="footer">
  <p>BRAND SPONSOR</p>
</div>
<!--modal start-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Regular User</h4>
        </div>
        <div class="modal-body">
          
          <video width=500 height=500 controls autoplay="autoplay" loop="true" muted id="videlement">
            <!--<source src="./images/butik_fashion_360p.mp4" type="video/mp4">-->
            <source src="http://padiweb.padinet.com/main/video/1" type="video/mp4">
          </video>
          <div>Dapat dilanjutkan setelah <span class="countdown">5</span> detik</div>
        </div>
        <div class="modal-footer">
          <button class="btn btn primary" disabled="disabled" id="btnContinue">Lanjutkan</button>
        </div>
      </div>
      
    </div>
  </div>

<!--modal end -->
</body>
<script>
  console.log('This script invoked')


  pret = _ => {
    let bil = 5000;
    setInterval(() => {
      if(((bil % 1000) === 0)&&(bil>1)){
      bil=bil-1000;
      console.log('Bil',bil)
      $('.countdown').html(bil/1000)    }
      else{
        $('#btnContinue').prop("disabled",false)
      }
    }, 1000*2);

  }
  $('#myModal').on('show.bs.modal',function(){
    pret()
  })

  $('#showVid').click(function(){
    $('#myModal').modal();

  });
  
  $('#btnContinue').click(function(){
    window.location.href = '<?php echo $linkloginonly;?>?dst=<?php echo $linkorigesc;?>&username=T-<?php echo $macesc;?>'
  })
</script>
</html>


