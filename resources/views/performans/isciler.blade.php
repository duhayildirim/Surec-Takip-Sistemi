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
                    <h1>Peity Table</h1>
                </div>
            </div>
            <div class="sparkline11-graph">
                <div class="static-table-list">
                    <table class="table sparkle-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Data</th>
                            <th>User</th>
                            <th>Value</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><span class="pie">1/6</span>
                            </td>
                            <td>Roshid</td>
                            <td><i class="fa fa-level-up"></i> 55%</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><span class="pie">230/360</span>
                            </td>
                            <td>Khan</td>
                            <td><i class="fa fa-level-down"></i> 75%</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><span class="pie">2,7</span>
                            </td>
                            <td>Shak</td>
                            <td><i class="fa fa-level-up"></i> 95%</td>
                        </tr>
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
                    <h1>Line Table</h1>
                </div>
            </div>
            <div class="sparkline13-graph">
                <div class="static-table-list">
                    <table class="table sparkle-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Data</th>
                            <th>User</th>
                            <th>Value</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><span data-diameter="40" class="updating-chart">2,5,9,6,5,9,7,3,5,2,5,3,9,6,5,8,7,8,5,2</span>
                            </td>
                            <td>Roshid</td>
                            <td><i class="fa fa-level-up"></i> 55%</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><span class="line">8,5,2,-1,-3,-2,8,3,5,3</span>
                            </td>
                            <td>Khan</td>
                            <td><i class="fa fa-level-down"></i> 75%</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                            </td>
                            <td>Shak</td>
                            <td><i class="fa fa-level-up"></i> 95%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
