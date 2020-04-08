@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Tezgah Detay</span>
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
    <p> <h3> &nbsp; İşlerine kaldığın yerden devam et</h3> </p>
    @if($errors->any())
        <div class="alert alert-error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @foreach($surecler as $surec)
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sparkline11-list responsive-mg-b-30">
            <div class="sparkline11-hd">
                <div class="main-sparkline11-hd">
                    <h1><span class="basic-ds-n">{{$surec->ad}} </span>

                    </h1>
                </div>
                <small>Son Teslim Tarihi</small><strong> {{$surec -> teslim_tarihi}} </strong>

            </div>
            <p>{{$surec -> detay}} </p>
            <div class="sparkline11-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="modal-bootstrap modal-login-form">
                                <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown1">Başla</a>
                            </div>
                            <div id="zoomInDown1" class="modal modal-adminpro-general modal-zoomInDown fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <form action="{{route('ilk_urun_kaydet' , $surec -> id) }}" method="post">
                                            {{csrf_field()}}
                                        <div class="modal-body">
                                            <div class="modal-login-form-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="basic-login-inner modal-basic-inner">
                                                                <div class="form-group-inner">
                                                                    <div class="row">
{{--                                                                        <form id="depoya_kaydet">--}}
                                                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                                            <div class="form-group">
                                                                                <label for="card-number" class="form-label"><h4>Kaçıncı Ürün Üretiliyor? </h4></label>
                                                                                <input id="phone-2" name="urun_no" type="number" class="form-control phone urun_no" >
                                                                                <p> &nbsp</p>
                                                                                <p> &nbsp</p>
                                                                                <p> &nbsp</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                                            <label> <h4>Bu Ürün Hangi Tezgaha Gidecek? </h4>
                                                                                <select name="tezgah_id" class="form-control form-control-lg" id="tezgah_id">
                                                                                    <option  disabled selected hidden> Tezgah Seç</option>
                                                                                    @foreach($tezgahlar as $tezgah)
                                                                                    <option value="{{$tezgah -> id}}">{{$tezgah -> ad}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </label>
                                                                        </div>
{{--                                                                        </form>--}}
                                                                    </div>
                                                                </div>
                                                                <div class="login-btn-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                                            <p>Ürün Tamamlandı Mı?</p>
                                                                            <div class="login-horizental">
                                                                                <a onclick="depoya_kaydet({{$surec -> id}})" id="buton" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Depoya Gönder</a>
                                                                            </div>
                                                                            <p> &nbsp</p>
                                                                            <script>
                                                                                function depoya_kaydet(id)
                                                                                {
                                                                                    var urun_no =$("#phone-2").val();
                                                                                    var tezgah_id =$("#tezgah_id").val();

                                                                                    $.ajax({
                                                                                        type:"get",
                                                                                        url:"{{route('depoya_kaydet')}}",
                                                                                        data:{
                                                                                            _token: '{{csrf_token()}}' ,
                                                                                            surec_id : id,
                                                                                            urun_no : urun_no,
                                                                                            tezgah_id : tezgah_id
                                                                                        },
                                                                                        success:function (result) {
                                                                                            if(result['mesaj'] === 'tamam')
                                                                                            {
                                                                                                alert("Ürün Depoya Diğer Tamamlanmış Ürünlerin Arasına Eklendi");
                                                                                            }
                                                                                        }
                                                                                    })
                                                                                }
                                                                            </script>
                                                                        </div>
                                                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                                            <p>İş Tanımı Doğrultusunda Ürünü Hazırladım.</p>
                                                                            <p> <h4> Bir sonraki görev birimine ürünü teslim ediyorum. </h4> </p>
                                                                            <div class="login-horizental">
                                                                                <button class="" type="submit">İşi Tamamla</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <p> &nbsp; </p>
    <p> &nbsp; </p>
    <p> &nbsp; </p>
@endsection
