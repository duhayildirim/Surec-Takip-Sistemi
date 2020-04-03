@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">İsterleri İncele</span>
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

        <div class="clearfix"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content">
                        <!-- start project list -->
                        <table >
                            <tbody>
                            <tr>
                                <td style="width: 3%"><h2>İsterler: </h2></td>
                                <td style="width: 100%">
                                    <a></a>
                                </td>

                                <td style="width: 5%">
                                    <a> <h3> </h3> </a>
                                </td>
                            </tr>
                                @foreach($isterler as $ister)
                                <tr>

                                    <td style="width: 100%">
                                        <h5>{{$ister -> emir}} <hr> </h5>

                                    </td>

                                    <td style="width: 5%">
                                        <a href="{{route('sureci_baslat' , $ister -> id)}}" class="btn btn-info btn-xs">İŞİ BAŞLAT</a>
                                    </td>

                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                        <!-- end project list -->
                    </div>
                </div>
            </div>

@endsection
