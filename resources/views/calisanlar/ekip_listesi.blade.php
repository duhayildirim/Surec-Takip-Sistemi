@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Çalışan Kadrosu</span>
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
    <div class="blog-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                @foreach($calisanlar ?? '' as $calisan)
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="hpanel blog-box mg-t-30">
                        <div class="panel-heading custom-blog-hd">
                            <div class="media clearfix">
                                <a class="pull-left">
                                    <img class="img-circle" src="{{asset('surec_takip/img/contact/1.jpg')}}" alt="profile-picture">
                                </a>
                                <div class="media-body blog-std">
                                    <p> {{$calisan -> ad}} <span class="font-bold"></span> </p>
                                    <p>  <span class="font-bold">{{$calisan -> soyad}}</span> </p>
                                    <p class="text-muted"></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body blog-pra">
                            <div class="blog-img">
                                <a href="">
                                    <h4>{{$calisan -> rol}}</h4>
                                </a>
                            </div>
                            <p>
                                {{$calisan -> email}}
                            </p>
                        </div>
                        <div class="panel-footer">
                            <a href="{{route('duzenle' , $calisan -> id)}}" class="btn btn-primary">Düzenle</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
