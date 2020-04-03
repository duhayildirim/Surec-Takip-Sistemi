@extends('layouts.master')
@section('icerik')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Çalışanın Rolünü Belirle</span>
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
        <form action="{{route('calisan_guncelle', $rol -> id)}}" method="post">
            {{csrf_field()}}
        <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="form-group">
                            <p>&nbsp;</p>

                            <h3>Rol Ver</h3>
                            <p>&nbsp;</p>

                            <div class="col-sm-12">
                                <select name="rol" class="form-control form-control-lg">
                                    <option value="{{$rol->rol}}"disabled selected hidden>Çalışana hangi yetki verilsin?</option>
                                    <option value="Patron">Patron</option>
                                    <option value="Müdür">Müdür</option>
                                    <option value="İşçi">İşçi</option>
                                </select>
                            </div>
                            <p>&nbsp;</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-success">Bu Kullanıcıya Yetki Ver</button>
                </div>
            </div>
        </div>
        </form>
        <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
            <div class="">
                <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                    <form action="{{route('calisan_sil' , $rol -> id)}}" method="post">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger">Bu Kullanıcıyı Sistemden Sil</button>
                    </form>
                </div>
                <p> &nbsp;</p>
            </div>
        </div>
    </div>
@endsection
