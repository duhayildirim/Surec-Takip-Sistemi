@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Gelecek Toplantılar</span>
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
    @foreach($toplantilar as $toplanti)
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="hpanel hbggreen">
            <div class="panel-body">
                <div class="text-center content-bg-pro">
                    <h3>{{$toplanti -> konu}}</h3>

                    <p class="text-big font-light">
                        {{$toplanti -> saat}}
                    </p>
                    <small>
                        {{$toplanti -> aciklama}}
                    </small>
                </div>
            </div>
        </div>

        <div class="hpanel">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Tarihi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$toplanti -> tarih}}</td>
                        </tr>
                        </tbody>
                        <form action="{{route('toplanti_sil' , $toplanti -> id)}}" method="post">
                            {{csrf_field()}}
                        <button type="submit" class="btn btn-danger">İptal Et</button>
                        </form>
                        <form action="{{route('toplanti_sil' , $toplanti -> id)}}" method="post">
                            {{csrf_field()}}
                        <button type="submit" class="btn btn-warning">Bu Toplantı Yapıldı</button>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
