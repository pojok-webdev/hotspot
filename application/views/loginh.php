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

    <style>
        .boxed_wrapper {
            background: #fff none repeat scroll 0 0;
            position: relative;
            margin: 0 auto;
            width: 100%;
            min-width: 320px;
            min-height: 400px;
            overflow: hidden;
        }

        .float-right {
            float: right !important;
        }

        .float-left {
            float: left !important;
        }

        .header-area {
            margin-top: 20px;
        }

        .header-area .logo-left img,
        .header-area .logo-right img {
            max-height: 60px;
        }

        .header-area .title h3 {
            font-size: 30px;
        }

        .carousel .carousel-inner .carousel-item img {
            max-height: 150px;
        }

        .login-area {
            margin-top: 20px;
        }

        .login-area .biggest-ads {
            background-color: #ccc;
        }

        .login-area .biggest-ads img {
            width: 100%;
        }

        .login-area .login-box {
            margin-top: 10px;
        }

        .login-area .reguler-user .text-inline {
            float: left;
            font-size: 18px;
            font-weight: 500;
            margin-top: 4px;
            margin-right: 20px;
        }

        .login-area .reguler-user {
            margin-bottom: 10px;
            text-align: center;
            background-color: #ccc;
            padding: 20px 30px 20px 30px;
            margin-bottom: 10px;
        }

        .login-area .premium-user {
            background-color: #ccc;
            padding: 35px 30px 35px 30px;
        }

        .login-area .premium-user h3 {
            margin-bottom: 20px;
        }

        .login-area .premium-user .form-input {
            margin-bottom: 20px;
        }

        .small-ads {
            margin-top: 20px;
            margin-bottom: 50px;
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }

        .small-ads .title {
            font-size: 45px;
            font-weight: bolder;
        }

        .small-ads .ads img {
            width: 100%;
        }

        @media (max-width: 768px) {

            .login-area .reguler-user .text-inline {
                font-size: 12px;
                font-weight: 500;
                margin-right: 0px;
            }

            .login-area .reguler-user .btn {
                font-size: 8px;
            }

            .login-area .premium-user h3 {
                font-size: 14px;
                font-weight: 500;
                margin-right: 0px;
            }

            .login-area .premium-user label {
                font-size: 13px;
                font-weight: 400;
                margin-bottom: 0px;
            }

            .login-area .premium-user .form-control {
                font-size: 10px;
            }

            .login-area .premium-user .btn {
                font-size: 12px;
            }

            .small-ads .title {
                font-size: 30px;
            }
        }

        @media (max-width: 576px) {

            .header-area .logo-left img,
            .header-area .logo-right img {
                max-height: 40px;
            }

            .carousel .carousel-inner .carousel-item img {
                max-height: 50px;
            }

            .login-area .login-box {
                width: 90%;
                margin: auto;
                margin-top: 20px;
            }

            .small-ads .ads img {
                padding: 10px;
            }

            .small-ads .title {
                text-align: center;
                margin-top: 10px;
                margin-bottom: 20px;
            }
        }
    </style>

</head>

<body>
    <div class="boxed_wrapper">
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
                                <img src="/assets/mbloc/tech.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/mbloc/tech.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/mbloc/tech.jpg" class="d-block w-100" alt="...">
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
                            <img src="/assets/mbloc/tech.jpg" alt="biggest-ads">
                        </div>
                        <div class="col-md-4 login-box">
                            <div class="reguler-user">
                                <div class="text-inline">Reguler user</div>
                                <button class="btn btn-primary" type="button" id="button-addon1">START NOW</button>
                            </div>
                            <div class="premium-user">
                                <h3>Premium user</h3>
                                <form action="#">
                                    <div class="form-input">
                                        <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="Username">
                                    </div>
                                    <div class="form-input">
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
                        <div class="col-md-2 col-6 ads"><img src="/assets/mbloc/mbloc.webp" alt="mbloc" /></div>
                        <div class="col-md-2 col-6 ads"><img src="/assets/mbloc/mbloc.webp" alt="mbloc" /></div>
                        <div class="col-md-2 col-6 ads"><img src="/assets/mbloc/mbloc.webp" alt="mbloc" /></div>
                        <div class="col-md-2 col-6 ads"><img src="/assets/mbloc/mbloc.webp" alt="mbloc" /></div>
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


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>