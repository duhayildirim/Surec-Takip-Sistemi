@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">İşçilerin İstatistiği</span>
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
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="sparkline11-list mt-b-30">
            <div class="sparkline11-hd">
                <div class="main-sparkline11-hd">
                    <h1>FABRİKA ELEMANLARI</h1>
                </div>
            </div>
            <div class="sparkline11-graph">
                <div class="static-table-list">
                    <table class="table sparkle-table">
                        <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Mesai</th>
                            <th>Ad</th>
                            <th>Value</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($isciler as $isci)
                        <tr>
                            <td>{{$isci -> id}}</td>
                            <td><span class="pie">{{$isci -> id}}/15</span>
                            </td>
                            <td>{{$isci -> ad}}</td>
                            <td><i class="fa fa-level-up"></i> 55%</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="sparkline13-list mg-b-15">
            <div class="sparkline13-hd">
                <div class="main-sparkline13-hd">
                    <h1>İŞÇİ PERFORMANS</h1>
                </div>
            </div>
            <div class="sparkline13-graph">
                <div class="static-table-list">
                    <table class="table sparkle-table">
                        <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Şov:)</th>
                            <th>Ad</th>
                            <th>Value</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($isciler as $isci)
                        <tr>
                            <td>1</td>
                            <td><span data-diameter="40" class="updating-chart">2,5,9,6,5,9,7,3,5,2,5,3,9,6,5,8,7,8,5,2</span>asdasd
                            </td>
                            <td>{{$isci -> ad }}</td>
                            <td><i class="fa fa-level-up"></i> 55%</td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
