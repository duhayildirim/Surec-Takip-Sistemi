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
                    <form class="form-horizontal form-label-left" action="#" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <h3>Toplantının Konusu</h3>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="price" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <h3>Toplantının Açıklaması</h3>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <h3>Toplantıya Kimler Katılacak?</h3>
                            <div class="col-sm-12">
                                <select name="gender" class="form-control form-control-lg">
                                    <option value="" disabled selected hidden>Çalışanları Seçin</option>
                                    <option value="Kadin">Müdür</option>
                                    <option value="Erkek">İşçi</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h3>Toplantı Tarihi</h3>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="price" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <h3>Toplantı Saati</h3>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="price" required>
                            </div>
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
