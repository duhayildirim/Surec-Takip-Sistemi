@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Üretimin İstatistiği</span>
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
    <div class="pie-bar-line-area mg-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline11-list">
                        <div class="sparkline11-hd">
                            <div class="main-sparkline11-hd">
                                <h1>Sipariş <span class="c3-ds-n"> / Biten Ürün</span></h1>
                            </div>
                        </div>
                        <div class="sparkline11-graph">
                            <div id="gauge"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pie-bar-line-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline7-list responsive-mg-b-30">
                        <div class="sparkline7-hd">
                            <div class="main-spark7-hd">
                                <h1>Sipariş <span class="c3-ds-n"> / Biten Ürün</span></h1>
                            </div>
                        </div>
                        <div class="sparkline7-graph">
                            <div id="slineChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
