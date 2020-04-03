<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register | jeweler - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('surec_takip/img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('surec_takip/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('surec_takip/css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/normalize.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/main.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('surec_takip/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('surec_takip/css/calendar/fullcalendar.print.min.css')}}">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/form/all-type-forms.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('surec_takip/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="color-line"></div>
<p> &nbsp</p>
<p> &nbsp</p>
<p> &nbsp</p>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
            <div class="text-center m-b-md custom-login">
                <h3>Süreç Takip Sistemine Hoşgeldiniz</h3>
                <p>Sisteme kayıtlı mail ve şifrenizi girerek programı kullanmaya başlayabilirsiniz</p>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('kullanici_giris')}}" method="post" id="loginForm">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label" for="username">Email</label>
                            <input  type="text" placeholder="ornek@gmail.com" title="Please enter you username" required value="" name="email" id="username" class="form-control" >
                            <span class="help-block small"></span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Şifre</label>
                            <input type="password" title="Please enter your password" placeholder="******" required value="" name="sifre" id="password" class="form-control">
                            <span class="help-block small"></span>
                        </div>
                        <div class="checkbox login-checkbox">

                        </div>
                        <button class="btn btn-success btn-block loginbtn">GİRİŞ</button>
                        <a class="btn btn-default btn-block" href="{{route('kayit_ol')}}">Kayıt Ol</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
    </div>
    <div class="row">
        <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <p>Süreç Takip &copy; 2020 Duha YILDIRIM</p>
        </div>
    </div>
</div>

<!-- jquery
    ============================================ -->
<script src="{{asset('surec_takip/js/vendor/jquery-1.11.3.min.js')}}"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{asset('surec_takip/js/bootstrap.min.js')}}"></script>
<!-- wow JS
    ============================================ -->
<script src="{{asset('surec_takip/js/wow.min.js')}}"></script>
<!-- price-slider JS
    ============================================ -->
<script src="{{asset('surec_takip/js/jquery-price-slider.js')}}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{asset('surec_takip/js/jquery.meanmenu.js')}}"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="{{asset('surec_takip/js/owl.carousel.min.js')}}"></script>
<!-- sticky JS
    ============================================ -->
<script src="{{asset('surec_takip/js/jquery.sticky.js')}}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{asset('surec_takip/js/jquery.scrollUp.min.js')}}"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{asset('surec_takip/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('surec_takip/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="{{asset('surec_takip/js/metisMenu/metisMenu.min.js')}}"></script>
<script src="{{asset('surec_takip/js/metisMenu/metisMenu-active.js')}}"></script>
<!-- tab JS
    ============================================ -->
<script src="{{asset('surec_takip/js/tab.js')}}"></script>
<!-- icheck JS
    ============================================ -->
<script src="{{asset('surec_takip/js/icheck/icheck.min.js')}}"></script>
<script src="{{asset('surec_takip/js/icheck/icheck-active.js')}}"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{asset('surec_takip/js/plugins.js')}}"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('surec_takip/js/main.js')}}"></script>
</body>

</html>
