@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Tezgah Yarat</span>
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
    @if($errors->any())
        <div class="alert alert-error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('tezgah_kaydet')}}" method="post">
        {{csrf_field()}}
        <h3 class="product-cart-dn"></h3>
        <div class="product-delivary">
            <div class="form-group">
                <label for="card-number" class="form-label"><h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tezgahın Adı</h4></label>
                <input id="name-2" name="ad" type="text" class="form-control">
                <p> &nbsp</p>
                <p> &nbsp</p>

            </div>
            <div class="form-group">
                <label for="card-number" class="form-label"><h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tezgahın Açıklaması</h4></label>
                <input id="name-2" name="aciklama" type="text" class="form-control">
                <p> &nbsp</p>
                <p> &nbsp</p>

            </div>
            <div class="form-group">

                <div class="input-mark-inner mg-b-22">
                    <label for="card-number" class="form-label"><h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bu Tezgahta Çalışacaklar</h4></label>
                    <select name="calisan_id[]" data-placeholder="İşçiyi veya işçileri seçin" class="chosen-select" multiple="" tabindex="-1">
                        @foreach($isciler as $isci)
                        <option value="{{$isci -> id}}">{{$isci -> ad}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    <p> &nbsp</p>
    <button type="submit" style="text-align: center" class="btn btn-outline-warning">Tezgah Yarat</button>
    </form>


    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
    <p> &nbsp</p>
@endsection
