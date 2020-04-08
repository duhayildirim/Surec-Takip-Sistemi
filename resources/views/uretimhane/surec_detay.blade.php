@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Süreç Detay</span>
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
    <div class="x-editable-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="x-editable-list">
                        <div class="alert-title">
                            <h2>{{$surec_detay -> ad}}</h2>

                        </div>
                        <table id="user" class="table table-bordered table-striped x-editor-custom">
                            <tbody>
                            <tr>
                                <td style="width=35%">Süreç Adı</td>
                                <td style="width=65%"><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">{{$surec_detay -> ad}}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Ürün Adeti</td>
                                <td>
                                    <a href="#" id="adet" data-type="text" data-pk="1" data-title="Enter username">{{$surec_detay -> adet}}</a>
                                </td>
                            </tr>

                            <tr>
                                <td>Teslim Tarihi</td>
                                <td>
                                    <a href="#" id="dob" data-type="combodate" data-value="{{$surec_detay -> teslim_tarihi}}" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>En</td>
                                <td>
                                    <a href="#" data-title="Setup event date and time"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Boy</td>
                                <td>
                                    <a href="#" data-title="Setup event date and time"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Yükseklik</td>
                                <td>
                                    <a href="#" data-title="Setup event date and time"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Detay</td>
                                <td>
                                    <a href="#" id="event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1" data-title="Setup event date and time">{{$surec_detay -> detay}}</a>
                                </td>
                            </tr>

                        </table>
                    </div>
                    <p> &nbsp;</p>
                    <a href="{{route('surec')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Geri Dön</a>
                    <form action="{{route('surec_sil' , $surec_detay -> id )}}" method="post">
                        {{csrf_field()}}
                    <button  class="btn btn-secondary btn-lg active" type="submit" aria-pressed="true">Süreci Sil</button>
                    </form>
                    <p> &nbsp;</p>
                </div>
            </div>
        </div>
    </div>
@endsection
