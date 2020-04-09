<!doctype html>
<html class="no-js" lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Süreç Takip</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('surec_takip/img/logo/duha_logo.png')}}">
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
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/meanmenu.min.css')}}">
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
    <!-- summernote CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/summernote/summernote.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('surec_takip/css/calendar/fullcalendar.print.min.css')}}">
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/modals.css')}}">
    <!-- touchspin CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/touchspin/jquery.bootstrap-touchspin.min.css')}}">
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/datapicker/datepicker3.css')}}">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/form/themesaller-forms.css')}}">
    <!-- colorpicker CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/colorpicker/colorpicker.css')}}">
    <!-- select2 CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/select2/select2.min.css')}}">
    <!-- chosen CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/chosen/bootstrap-chosen.css')}}">
    <!-- ionRangeSlider CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/ionRangeSlider/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{asset('surec_takip/css/ionRangeSlider/ion.rangeSlider.skinFlat.css')}}">
    <!-- x-editor CSS
       ============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/editor/select2.css')}}">
    <link rel="stylesheet" href="{{asset('surec_takip/css/editor/datetimepicker.css')}}">
    <link rel="stylesheet" href="{{asset('surec_takip/css/editor/bootstrap-editable.css')}}">
    <link rel="stylesheet" href="{{asset('surec_takip/css/editor/x-editor-style.css')}}">
    <!-- tree viewer CSS
       ============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/tree-viewer/tree-viewer.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('surec_takip/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!-- dropzone CSS
      ============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/dropzone/dropzone.css')}}">
    <!-- Preloader CSS
       ============================================ -->
    <link rel="stylesheet" href="{{asset('surec_takip/css/preloader/preloader-style.css')}}">

</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="{{route('anasayfa')}}"><img class="main-logo" src="{{asset('surec_takip/img/logo/duha_logo.png')}}" alt="" /></a>
            <strong><img src="{{asset('surec_takip/img/logo/duha_logo.png')}}" alt="" /></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-male sub-icon-mg"></i> <span class="mini-click-non">&nbsp;&nbsp;Çalışanlar</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Product List" href="{{route('ekip_listesi')}}"><i class="fa fa-female sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ekip Listesi</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-desktop sub-icon-mg"></i> <span class="mini-click-non">Toplantılar</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Notifications" href="{{route('toplanti_olustur')}}"><i class="fa fa-external-link-square sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Toplantı Oluştur</span></a></li>
                            <li><a title="Alerts" href="{{route('gelecek_toplantilar')}}"><i class="fa fa-crop sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Gelecek Toplantılar</span></a></li>
                           </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-bar-chart-o icon-wrap"></i> <span class="mini-click-non">&nbsp;&nbsp;Performans</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Bar Charts" href="{{route('tezgahlar')}}"><i class="fa fa-line-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Tezgahlar</span></a></li>
                            <li><a title="Line Charts" href="{{route('isciler')}}"><i class="fa fa-area-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">İşçiler</span></a></li>
                            <li><a title="Area Charts" href="{{route('uretim')}}"><i class="fa fa-pie-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Üretim</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#">
                            <i class="fa big-icon fa-home icon-wrap"></i>
                            <span class="mini-click-non">&nbsp;&nbsp;&nbsp;ÜRETİMHANE</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Dashboard v.1" href="{{route('is_emri_ver')}}"><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">İş Emri Ver <sub>(patron)<sub></span></a></li>
                            <li><a title="Peity Charts" href="{{route('is_tanimi')}}"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">İş Tanımı<sub>(müdür)<sub></span></a></li>
                            <li><a title="C3 Charts" href="{{route('akis_olustur')}}"><i class="fa fa-barcode sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Akışlar <span class="mini-sub-pro"><sub>(müdür)<sub></span></a></li>
                            <li><a title="Product Edit" href="{{route('tezgahlari_gor')}}"><i class="fa fa-bolt sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Tezgahlar<sub>(patron,müdür)<sub></span></a></li>
                            <li><a title="Dashboard v.3" href="{{route('is_takip')}}"><i class="fa fa-cube sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro"> İş Takip <sub>(patron,müdür)<sub></span></a></li>
                            <li><a title="Product Cart" href="{{route('tezgahina_git')}}"><i class="fa fa-level-down sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Tezgahına Git <sub>(işçi)<sub></span></a></li>
                            <li><a title="View Mail" href="{{route('surec')}}"><i class="fa fa-television sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Süreç <sub>(patron,müdür,işçi)<sub></span></a></li>
                            <li><a title="Notifications" href="{{route('biten_urunler')}}"><i class="fa fa-external-link-square sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Bitmiş Ürünler <sub>(patron,müdür,işçi)<sub></span></a></li>

                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="{{asset('surec_takip/img/logo/logo.png')}}" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                        <ul class="nav navbar-nav mai-top-nav">
                                            <li class="nav-item"><a href="{{route('anasayfa')}}" class="nav-link">Anasayfa</a>
                                            </li>
                                            <li class="nav-item"><a href="{{route('yardim')}}" class="nav-link">Yardım</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                    <span class="admin-name">Hesap</span>
                                                    <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><span class="fa fa-lock author-log-ic"></span>Çıkış Yap</a>
                                                        <form id="logout-form" action="{{route('kullanici_cikis')}}" method="post" style="display : none">
                                                            {{csrf_field()}}
                                                        </form>


                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-male sub-icon-mg"></i> <span class="mini-click-non">&nbsp;&nbsp;Çalışanlar</span></a>
                                        <ul class="submenu-angle" aria-expanded="false">
                                            <li><a title="Product List" href="{{route('ekip_listesi')}}"><i class="fa fa-female sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ekip Listesi</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-desktop sub-icon-mg"></i> <span class="mini-click-non">Toplantılar</span></a>
                                        <ul class="submenu-angle" aria-expanded="false">
                                            <li><a title="Notifications" href="{{route('toplanti_olustur')}}"><i class="fa fa-external-link-square sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Toplantı Oluştur</span></a></li>
                                            <li><a title="Alerts" href="{{route('gelecek_toplantilar')}}"><i class="fa fa-crop sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Gelecek Toplantılar</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-bar-chart-o icon-wrap"></i> <span class="mini-click-non">&nbsp;&nbsp;Performans</span></a>
                                        <ul class="submenu-angle" aria-expanded="false">
                                            <li><a title="Bar Charts" href="{{route('tezgahlar')}}"><i class="fa fa-line-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Tezgahlar</span></a></li>
                                            <li><a title="Line Charts" href="{{route('isciler')}}"><i class="fa fa-area-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">İşçiler</span></a></li>
                                            <li><a title="Area Charts" href="{{route('uretim')}}"><i class="fa fa-pie-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Üretim</span></a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a class="has-arrow" href="#">
                                            <i class="fa big-icon fa-home icon-wrap"></i>
                                            <span class="mini-click-non">&nbsp;&nbsp;&nbsp;ÜRETİMHANE</span>
                                        </a>
                                        <ul class="submenu-angle" aria-expanded="true">
                                            <li><a title="Dashboard v.1" href="{{route('is_emri_ver')}}"><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">İş Emri Ver <sub>(patron)<sub></span></a></li>
                                            <li><a title="Peity Charts" href="{{route('is_tanimi')}}"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">İş Tanımı<sub>(müdür)<sub></span></a></li>
                                            <li><a title="C3 Charts" href="{{route('akis_olustur')}}"><i class="fa fa-barcode sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Akışlar <span class="mini-sub-pro"><sub>(müdür)<sub></span></a></li>
                                            <li><a title="Product Edit" href="{{route('tezgahlari_gor')}}"><i class="fa fa-bolt sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Tezgahlar<sub>(patron,müdür)<sub></span></a></li>
                                            <li><a title="Dashboard v.3" href="{{route('is_takip')}}"><i class="fa fa-cube sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro"> İş Takip <sub>(patron,müdür)<sub></span></a></li>
                                            <li><a title="Product Cart" href="{{route('tezgahina_git')}}"><i class="fa fa-level-down sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Tezgahına Git <sub>(işçi)<sub></span></a></li>
                                            <li><a title="Notifications" href="{{route('biten_urunler')}}"><i class="fa fa-level-down sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Tezgahına Git <sub>(patron,müdür,işçi)<sub></span></a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@yield('icerik')

    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Design and Coder by Duha</p>
                    </div>
                </div>
            </div>
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
<!-- morrisjs JS
    ============================================ -->
<script src="{{asset('surec_takip/js/morrisjs/raphael-min.js')}}"></script>
<script src="{{asset('surec_takip/js/morrisjs/morris.js')}}"></script>
<script src="{{asset('surec_takip/js/morrisjs/morris-active.js')}}"></script>
<!-- morrisjs JS
    ============================================ -->
<script src="{{asset('surec_takip/js/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('surec_takip/js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <!-- peity JS
		============================================ -->
    <script src="{{asset('surec_takip/js/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('surec_takip/js/peity/peity-active.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('surec_takip/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('surec_takip/js/sparkline/sparkline-active.js')}}"></script>
<!-- calendar JS
    ============================================ -->
<script src="{{asset('surec_takip/js/calendar/moment.min.js')}}"></script>
<script src="{{asset('surec_takip/js/calendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('surec_takip/js/calendar/fullcalendar-active.js')}}"></script>
    <!-- data table JS
		============================================ -->
    <script src="{{asset('surec_takip/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('surec_takip/js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('surec_takip/js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('surec_takip/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('surec_takip/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('surec_takip/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('surec_takip/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('surec_takip/js/data-table/bootstrap-table-export.js')}}"></script>
    <!--  editable JS
       ============================================ -->
    <script src="{{asset('surec_takip/js/editable/jquery.mockjax.js')}}"></script>
    <script src="{{asset('surec_takip/js/editable/mock-active.js')}}"></script>
    <script src="{{asset('surec_takip/js/editable/select2.js')}}"></script>
    <script src="{{asset('surec_takip/js/editable/moment.min.js')}}"></script>
    <script src="{{asset('surec_takip/js/editable/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{asset('surec_takip/js/editable/bootstrap-editable.js')}}"></script>
    <script src="{{asset('surec_takip/js/editable/xediable-active.js')}}"></script>
    <!-- Chart JS
		============================================ -->
    <script src="{{asset('surec_takip/js/chart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('surec_takip/js/peity/peity-active.js')}}"></script>
    <!-- c3 JS
            ============================================ -->
    <script src="{{asset('surec_takip/js/c3-charts/d3.min.js')}}"></script>
    <script src="{{asset('surec_takip/js/c3-charts/c3.min.js')}}"></script>
    <script src="{{asset('surec_takip/js/c3-charts/c3-active.js')}}"></script>

    <!-- summernote JS
       ============================================ -->
    <script src="{{asset('surec_takip/js/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('surec_takip/js/summernote/summernote-active.js')}}"></script>
    <!-- Tree Viewer JS
		============================================ -->
    <script src="{{asset('surec_takip/js/tree-line/jstree.min.js')}}"></script>
    <script src="{{asset('surec_takip/js/tree-line/jstree.active.js')}}"></script>
    <!-- wizard JS
		============================================ -->
    <script src="{{asset('surec_takip/js/wizard/jquery.steps.js')}}"></script>
    <script src="{{asset('surec_takip/js/wizard/steps-active.js')}}"></script>
    <!-- touchspin JS
		============================================ -->
    <script src="{{asset('surec_takip/js/touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('surec_takip/js/touchspin/touchspin-active.js')}}"></script>
    <!-- colorpicker JS
		============================================ -->
    <script src="{{asset('surec_takip/js/colorpicker/jquery.spectrum.min.js')}}"></script>
    <script src="{{asset('surec_takip/js/colorpicker/color-picker-active.js')}}"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="{{asset('surec_takip/js/datapicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('surec_takip/js/datapicker/datepicker-active.js')}}"></script>
    <!-- input-mask JS
		============================================ -->
    <script src="{{asset('surec_takip/js/input-mask/jasny-bootstrap.min.js')}}"></script>
    <!-- chosen JS
		============================================ -->
    <script src="{{asset('surec_takip/js/chosen/chosen.jquery.js')}}"></script>
    <script src="{{asset('surec_takip/js/chosen/chosen-active.js')}}"></script>
    <!-- select2 JS
		============================================ -->
    <script src="{{asset('surec_takip/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('surec_takip/js/select2/select2-active.js')}}"></script>
    <!-- ionRangeSlider JS
		============================================ -->
    <script src="{{asset('surec_takip/js/ionRangeSlider/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('surec_takip/js/ionRangeSlider/ion.rangeSlider.active.js')}}"></script>
    <!-- rangle-slider JS
		============================================ -->
    <script src="{{asset('surec_takip/js/rangle-slider/jquery-ui-1.10.4.custom.min.js')}}"></script>
    <script src="{{asset('surec_takip/js/rangle-slider/jquery-ui-touch-punch.min.js')}}"></script>
    <script src="{{asset('surec_takip/js/rangle-slider/rangle-active.js')}}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{asset('surec_takip/js/knob/jquery.knob.js')}}"></script>
    <script src="{{asset('surec_takip/js/knob/knob-active.js')}}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{asset('surec_takip/js/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('surec_takip/js/icheck/icheck-active.js')}}"></script>
    <!-- tab JS
           ============================================ -->
    <script src="{{asset('surec_takip/js/tab.js')}}"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{asset('surec_takip/js/plugins.js')}}"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('surec_takip/js/main.js')}}"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="{{asset('surec_takip/js/dropzone/dropzone.js')}}"></script>


</body>

</html>

