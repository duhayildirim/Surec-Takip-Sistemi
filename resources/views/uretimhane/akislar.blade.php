@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Akışlar</span>
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
    <div class="product-cart-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                @if($errors->any())
                    <div class="alert alert-error">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="akis_kaydet" method="post">
                    {{csrf_field()}}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-cart-inner">
                        <div id="example-basic">
                            <h3>Akış Oluştur</h3>
                            <section>

                                <h1>Akışın Adını Oluştur</h1>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="product-cart-dn"></h3>
                                    <div class="payment-details">
                            <div class="form-group">
                                <label for="card-number" class="form-label"></label>
                                <input id="name-2" name="ad" type="text" class="form-control">
                            </div>
                                    </div>
                                </div>

                            <section>
                            <h3></h3>
                            <section>
                                <h1> Bu Akışta Çalışacak Tezgahları Seçin</h1>
                                <p> &nbsp</p>
                                @foreach($tezgahlar as $tezgah)
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                                    <h3 class="product-cart-dn"></h3>
                                    <div class="payment-details">
                                        <h4>{{$tezgah -> ad}}</h4>
                                        <div class="onoffswitch">

                                            <input type="checkbox"  name="collapsemenu" checked="" class="onoffswitch-checkbox" id="{{$tezgah -> ad}}">
                                                <label class="onoffswitch-label" for="{{$tezgah -> ad}}">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>

                                        </div>
                                    </div>
                                </div>
                                @endforeach



                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <p> &nbsp;</p>
                                <h1> Tezgahların Akış Rotasını Belirleyin </h1>
                                <div class="sparkline10-graph">
                                    <div class="input-knob-dial-wrap">
                                        <div class="row">

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="chosen-select-single">
                                                    <label for="card-number" class="form-label"></label>
                                                    <select name="tezgah_id[]" data-placeholder="Sırayla seçiniz..." class="chosen-select" multiple="" tabindex="-1">
                                                        @foreach($tezgahlar as $tezgah)
                                                        <option value="{{$tezgah -> id}}">{{$tezgah -> ad}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <p> &nbsp</p>
                                    <p> &nbsp</p>

                                </div>
                            </section>
                                <div class="product-confarmation">
                                    <button type="submit" class="btn btn-primary btn-block">Akış Yarat</button>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="product-confarmation">
        <a href="{{route('akis_listesi')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Önceden Oluşturduğunuz Akışları Görmek İçin buraya Tıklayın</a>

    </div>
    <p> &nbsp;</p>
    <p> &nbsp;</p>
    <p> &nbsp;</p>
    <p> &nbsp;</p>
    <p> &nbsp;</p>
    <p> &nbsp;</p>
    <p> &nbsp;</p>
@endsection
