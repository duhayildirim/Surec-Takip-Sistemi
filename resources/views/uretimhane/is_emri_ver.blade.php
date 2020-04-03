@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Üretilmesini İstediğiniz Şeyi Açıklayın</span>
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
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="tinymce-single responsive-mg-b-30">


            <div class="alert-title">
                <h2>İş Emri Ver</h2>
                <p>Siparişin : </p>
                    <p> # adını <br> # adetini  <br>  # genel özelliklerini<br> # örnek resmini<br> # nelere dikkat edilmesi gerektiğini<br> # gerekli uyarıları <br># ne kadar sürede tamamlanması gerektiğini...</p>
                 <p>   Bu ve bunun gibi tüm özellikleri yazınız </p>
            </div>
            <form action="{{route('is_emrini_kaydet')}}" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control" id="text" name="emir" placeholder="50 tane klasik tabure istiyorum. Ahşap renginde olsun. Örnek resmini mesaj olarak attım. 1 hafta içinde hazır olmalı" required>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Üretime Başla!</button>
            </form>
        </div>
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash"></span>
            </li>
            <li><span class="bread-blod"></span>
            </li>
            <li><span class="bread-blod"></span>
            </li>
        </ul>
    </div>

@endsection


