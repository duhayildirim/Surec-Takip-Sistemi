@extends('layouts.master')
@section('icerik')
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcome-heading">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Arama Yap" class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <ul class="breadcome-menu">
                                    <li>28/03/2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="section-admin container-fluid res-mg-t-15">
        <div class="row admin text-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn">
                            <h4 class="text-left text-uppercase"><b>TEZGAHLAR</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-green">8 ADET <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">5'i Çalışır Halde  </h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 60%;" class="progress-bar bg-green"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>SİPARİŞLER</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-red">65 ADET <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">64 Adeti Onaylandı</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 95%;" class="progress-bar progress-bar-danger bg-red"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>ÜRETİMDEKİLER</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-blue">64 ADET <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin"> 1 tane daha üretilmeli</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 95%;" class="progress-bar bg-blue"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>BİTENLER</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-purple">35 ADET <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">29 tane daha bitmeli</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 60%;" class="progress-bar bg-purple"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-sales-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="caption pro-sl-hd">
                                        <span class="caption-subject text-uppercase"><b>ANALİZ</b></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="actions graph-rp">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-grey active">
                                                <input type="radio" name="options" class="toggle" id="option1" checked="">Bugün</label>
                                            <label class="btn btn-grey">
                                                <input type="radio" name="options" class="toggle" id="option2">Hafta</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline cus-product-sl-rp">
                            <li>
                                <h5><i class="fa fa-circle" style="color: #24caa1;"></i>satış</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle" style="color: #00b5c2;"></i>kar</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle" style="color: #ff7f5a;"></i>üretim</h5>
                            </li>
                        </ul>
                        <div id="morris-area-chart" style="height: 356px;"></div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <div class="sparkline9-list shadow-reset responsive-mg-b-30">
                        <div class="sparkline9-hd">
                            <div class="main-sparkline9-hd">
                                <h1>Süreç Takip Yardım Kılavuzu</h1>
                            </div>
                        </div>
                        <div class="sparkline9-graph">
                            <div class="adminpro-content res-tree-ov">
                                <div id="jstree1">
                                    <ul>
                                        <li class="jstree-open">Çalışanlar
                                            <ul>
                                                <li>Ekip Listesi</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="jstree-open">Toplantılar
                                            <ul>
                                                <li>Toplantı Oluştur</li>
                                                <li>Geçmiş Toplantılar</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="jstree-open">Mesajlar
                                            <ul>
                                                <li>Gelen Kutusu</li>
                                                <li>Mesaj Oluştur</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="jstree-open">ÜRETİMHANE
                                            <ul>
                                                <li>İş Emri Ver</li>
                                                <li>İş Tanımı</li>
                                                <li>Akışlar</li>
                                                <li>Tezgahlar</li>
                                                <li>Tezgahına Git</li>
                                                <li>Süreç</li>
                                                <li>Bitmiş Ürünler</li>
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


@endsection
