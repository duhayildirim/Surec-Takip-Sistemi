@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Mesaj Oluştur</span>
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
    <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
        <div class="hpanel email-compose mg-b-15">
            <div class="panel-heading hbuilt">
                <div class="p-xs h4">
                    Yeni Mesaj
                </div>
            </div>
            <div class="panel-heading hbuilt">
                <div class="p-xs">
                    <form method="get" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-1 control-label text-left">Kime</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control input-sm" placeholder="Çalışan seç">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label text-left">Konu:</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label text-left">Mesaj:</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control input-sm" placeholder=>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="panel-footer">

                <button class="btn btn-primary ft-compse">Mesajı Gönder</button>

            </div>
        </div>
    </div>
@endsection
