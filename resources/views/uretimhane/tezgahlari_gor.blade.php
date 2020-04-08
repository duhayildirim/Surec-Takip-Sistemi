@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Tezgahlarınızı Kontrol Edin</span>
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
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Tezgahlar</h4>
                        <div class="add-product">
                            <a href="{{route('tezgah_yarat')}}">Tezgah Oluştur</a>
                        </div>
                        <table>
                            <tr>
                                <th>Tezgah Adı</th>
                                <th>Durumu</th>
                                <th>Tezgah Görevlileri</th>
                                <th>Tezgah Sil</th>
                            </tr>
                            @foreach($tezgahlar as $tezgah)
                            <tr>
                                <td>{{$tezgah -> ad}}</td>
                                <td>
                                    <button class="pd-setting">Active</button>
                                </td>
                                <td>
                                @foreach($tezgah -> kullanicilar as $girdi => $calisan)
                                {{$calisan -> kullanici -> ad}}<small>{{$calisan -> kullanici -> soyad}}</small>
                                @endforeach
                                </td>
                                <form action="{{route('tezgah_sil' , $tezgah -> id)}}" method="post">
                                    {{csrf_field()}}
                                <td><button type="submit" class="btn btn-primary btn-sm">SİL</button></td>
                                </form>
                            </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
