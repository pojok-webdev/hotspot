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
                                    <img src="/images/logo-padinet.jpeg" alt="">
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
