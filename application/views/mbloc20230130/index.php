<?php
// $mac = $_POST['mac'];
// $ip = $_POST['ip'];
// $username = $_POST['username'];
// $linklogin = $_POST['link-login'];
// $linkorig = $_POST['link-orig'];
// $error = $_POST['error'];
// $chapid = $_POST['chap-id'];
// $chapchallenge = $_POST['chap-challenge'];
// $linkloginonly = $_POST['link-login-only'];
// $linkorigesc = $_POST['link-orig-esc'];
// $macesc = $_POST['mac-esc'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <title>Mikrotik Hotspot | Login</title>
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="-1" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/mbloc/style.css">

</head>

<body>
    <div>
        <header class="header-area stricky">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-4 order-md-first">
                        <div class="logo-left float-left">
                            <img src="/assets/mbloc/tech.jpg" alt="paditechnology" />
                        </div>
                    </div>
                    <div class="col-md-4 order-md-second order-last">
                        <div class="title text-center">
                            <h3>Internet Access</h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 order-md-last">
                        <div class="logo-right float-right">
                            <img src="/assets/mbloc/mbloc.webp" alt="mbloc" />
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End header area-->

        <content class="content-area">
            <section class="carousel">
                <div class="container">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/assets/mbloc/img/slidebanner_mbloc.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/mbloc/img/slidebanner_mbloc.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/mbloc/img/slidebanner_mbloc.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </section>
            <section class="login-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 biggest-ads">
                            <img src="/assets/mbloc/img/bigads_mbloc.jpg" alt="biggest-ads">
                        </div>
                        <div class="col-md-4 login-box">
                            <div class="reguler-user">
                                <div class="text-inline">Reguler user</div>
                                <button class="btn btn-primary" type="button" id="button-reguler" data-bs-toggle="modal" data-bs-target="#videoModal">Click here</button>
                            </div>
                            <div class="premium-user">
                                <h3>Premium user</h3>
                                <form action="#">
                                    <div class="form-input input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-user"></i></span>
                                        <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="Username">
                                    </div>
                                    <div class="form-input input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-lock"></i></span>
                                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
                                    </div>
                                    <button class="btn btn-primary" type="submit" id="button-addon1">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section class="small-ads">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="title">Get Special Offers</div>
                        </div>
                        <div class="col-md-2 col-6 ads" id="banner1"><img src="/assets/mbloc/img/smallads_mbloc.jpg" alt="mbloc" /></div>
                        <div class="col-md-2 col-6 ads" id="banner2"><img src="/assets/mbloc/img/smallads_mbloc.jpg" alt="mbloc" /></div>
                        <div class="col-md-2 col-6 ads" id="banner3"><img src="/assets/mbloc/img/smallads_mbloc.jpg" alt="mbloc" /></div>
                        <div class="col-md-2 col-6 ads" id="banner4"><img src="/assets/mbloc/img/smallads_mbloc.jpg" alt="mbloc" /></div>
                    </div>
                </div>
            </section>
        </content>

        <!--Start footer area-->
        <footer class="footer-area">
            <div class="container">
                <div class="row">

                    <!-- About-US-->
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-text">

                    </div>

                </div>
            </div>
        </footer>
        <!--End footer area-->
    </div>
    <!-- Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Watch for free access</h5>
                </div>
                <div class="modal-body vid">
                <video width=450 height=450 controls autoplay="autoplay" loop="true" muted id="videlement">
                    <source src="http://padiweb.padinet.com/main/video/1" type="video/mp4">
                </video>


                </div>
                <div class="modal-footer">
                    <div id="timer-count">
                    </div>
                    <button type="button" class="btn btn-light" id="btn-access">Start</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        var count = 11;

        function countDown() {
            if (count > 0) {
                count--;
                var waktu = count;
                $('#timer-count').html('Time remaining ' + waktu + ' second');
                setTimeout("countDown()", 1000);
            }
        }
        $(document).ready(function() {
            $('#btn-access').prop('disabled', true);
            $("#button-reguler").click(function() {
                countDown();
                setTimeout(function() {

                    $('#btn-access').prop('disabled', false);
                    $('#btn-access').removeClass('btn btn-light').addClass('btn btn-primary');
                }, 10000);
            });
            $('.ads').on('click',function(){
                console.log('banner clicked',$(this).attr('id'))
                $.ajax({
                    url:'/login/bannerclick',
                    type:'post',
                    dataType:'json',
                    data:{
                        name:$(this).attr('id')
                    }
                })
                .done(res=>{
                    console.log('Sukses record banner click',res)
                })
                .fail(err=>{
                    console.log('Gagal record banner click',err)
                })
            })

        });
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>