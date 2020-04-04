@extends('layouts.master')
@section('icerik')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Toplantı Ayarla</span>
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
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h2></h2>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    @if($errors->any())
                        <div class="alert alert-error">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form-horizontal form-label-left" action="{{route('toplanti_kaydet')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <h3>Toplantının Konusu</h3>
                            <div class="col-sm-12">
                                <input name="konu" type="text" class="form-control" id="title"  required>
                            </div>
                            <p> &nbsp;</p>
                        </div>
                        <div class="form-group">
                            <h3>Toplantının Açıklaması</h3>
                            <div class="col-sm-12">
                                <input name="aciklama" type="text" class="form-control" id="title" required>
                            </div>
                            <p> &nbsp;</p>
                        </div>
                        <div class="form-group">
                            <h3>Toplantıya Kimler Katılacak?</h3>
                            <div class="col-sm-12">
                                <label for="card-number" class="form-label"></label>
                                <select name="calisan_id[]" data-placeholder="Çalışanları Seçin" class="chosen-select" multiple="" tabindex="-1" required>
                                    @foreach($calisanlar as $calisan)
                                    <option value="{{$calisan -> id}}">{{$calisan -> ad}} <small> {{$calisan -> soyad}}</small> ({{$calisan -> rol}})</option>
                                    @endforeach
                                </select>
                                <p> &nbsp;</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <h3>Toplantı Tarihi</h3>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="tarih" required>
                            </div>
                            <p> &nbsp;</p>
                        </div>
                        <div class="form-group">
                            <h3>Toplantı Saati</h3>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="saat" required>
                            </div>
                            <p> &nbsp;</p>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">Toplantı Oluştur</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
