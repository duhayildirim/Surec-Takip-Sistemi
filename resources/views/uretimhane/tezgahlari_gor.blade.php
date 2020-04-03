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
                                <th>Aktif</th>
                                <th>Mesai Başlangıcı</th>
                                <th>Çalışma Süresi</th>
                                <th>İş Tanımı</th>
                                <th>Price</th>
                                <th>İstatistik</th>
                            </tr>
                            <tr>
                                <td>Jewelery Title 1</td>
                                <td>
                                    <button class="pd-setting">Active</button>
                                </td>
                                <td>50</td>
                                <td>$750</td>
                                <td>Out Of Stock</td>
                                <td>$15</td>
                                <td>
                                    <button data-toggle="tooltip" title="Tezgahın Performansını Gör" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                                </td>
                            </tr>
                            <tr>

                                <td>Jewelery Title 2</td>
                                <td>
                                    <button class="ps-setting">Paused</button>
                                </td>
                                <td>60</td>
                                <td>$1020</td>
                                <td>In Stock</td>
                                <td>$17</td>
                                <td>
                                    <button data-toggle="tooltip" title="Tezgahın Performansını Gör" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                                </td>
                            </tr>
                            <tr>

                                <td>Jewelery Title 3</td>
                                <td>
                                    <button class="ds-setting">Disabled</button>
                                </td>
                                <td>70</td>
                                <td>$1050</td>
                                <td>Low Stock</td>
                                <td>$15</td>
                                <td>
                                    <button data-toggle="tooltip" title="Tezgahın Performansını Gör" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
