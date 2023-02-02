<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
     <title>Free WiFi - Hotspot</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
	body{padding-top:20px;padding-bottom:20px}@media (min-width:768px){.container{max-width:730px}}.container-narrow>hr{margin:30px 0}.jumbotron{text-align:center}.jumbotron .btn{padding:14px 24px;font-size:21px}.jumbotron{border-bottom:0}.voucher{height:45px;font-size:25px}.jumbotron{padding:1px}
    </style>
    <script>
    function lc() {
    var lc_voucher = document.getElementById("voucher").value.toLowerCase();
    document.getElementById("voucher").value=lc_voucher
    }
    </script>
  </head>
  <body>
    <div class="container">
      <div class="header">
       <img src="logo.png">
      </div>
      	<div class="jumbotron">
		<img src="wifi.png">        
		<div class="row">
		<div class="center-block" style="width:200px;font-size=15px">.
		<p class="error">$error_msg</p>
		<form method="get" action="$authaction">
		<input name="tok" value="$tok" type="hidden" />
		<input name="redir" value="$redir" type="hidden" />
		<p>
                <input type="text" class="form-control voucher" name="voucher" id="voucher" maxlength="8" placeholder="Voucher Code"></p>
		<button type="submit" onclick="javascript:lc()" class="btn btn-default">Login</button>    
		</form>
 		</div>
		</div>
		<p class="lead">
		 <h3><b><u>Get a voucher</u></b></h3>
        <p>Make a purchase at <BUSINESS> to
        <br>receive a complimentary WiFi voucher vaild for 1 hour</p>
		<b><BUSINESS><b> - <a href="https://www.google.com/maps/"><BUSINESS ADDRESS><br>
		<img width="70%" src="map.png">
		</a>
		</p>
      	</div>
         <div class="footer">
        <p>&copy; <BUSINESS></p>
      </div>
    </div>
  </body>
</html>