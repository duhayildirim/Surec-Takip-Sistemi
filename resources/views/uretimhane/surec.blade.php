@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Süreç</span>
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
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="hpanel responsive-mg-b-30">
            <div class="panel-body">
                <div class="stats-title pull-left">
                    <h4>Surec Adi</h4>
                </div>
                <div class="stats-icon pull-right">
                    <i class="fa fa-street-view" aria-hidden="true"></i>
                </div>
                <div class="m-t-xl">
                    <h1 class="text-info">akış adi</h1>
                    <small>
                        Oluşturulma Tarihi:<strong>14/14/1204</strong>
                    </small>
                    <small>
                        Son Teslim Tarihi:<strong>14/14/2204</strong>
                    </small>


                    <a href="{{route('surec_detay')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Detaylar/Düzenle</a>
                </div>
            </div>
        </div>
    </div>
@endsection
