@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Mesaine Başla</span>
            </li>
            <li><span class="bread-blod"></span>
            </li>
        </ul>
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash"></span>
            </li>
            <li><span class="bread-blod"></span>
            </li>
            <li><span class="bread-blod"></span>
            </li>
        </ul>
    </div>

    <div class="widget-program-box mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="hpanel responsive-mg-b-30">
                        <div class="panel-body">
                            <div class="font-bold text-warning">
                                <h2 class="m-b-xs">Tezgah 1</h2>
                                <p class="font-bold text-success">Kesim Tezgahı</p>
                                <div class="m icon-box">
                                    <i class="fa fa-recycle" aria-hidden="true"></i>
                                </div>
                                <p class="small mg-t-box">
                                    Hammaddeyi işler... Ölçülere göre hammaddeyi doğrar. Hammaddeyi kesip kabaca şekillenmesini sağlar. Ürünün parçaları bu tezgahta elde edilir.
                                </p>
                                <a class="btn btn-warning" href="{{route('tezgah_detay')}}" role="button">Tezgaha Giriş Yap</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
