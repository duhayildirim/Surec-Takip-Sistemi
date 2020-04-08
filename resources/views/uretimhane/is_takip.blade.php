@extends('layouts.master')
@section('icerik')
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcome-heading">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Sürecinizin adını yazın" class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <ul class="breadcome-menu">
                                    <li>Üretim Aşamalarınız Hakkında Bilgi Alın</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="data-table-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th style="width: 30%">İşin Adı
                                </th>

                                <th style="width: 20%">Kaçıncı Ürün Üretiliyor?
                                </th>
                                <th style="width: 25%">Tamamlanma Zamanı
                                </th>
                                <th style="width: 25%">Şu An Hangi Tezgahta?
                                </th>


                            </tr>
                            </thead>
                            @foreach($surecler_urunler as $surec_urun)
                            <tbody>
                            <tr>
                                <td>{{$surec_urun -> surec -> ad}}</td>
                                <td>{{$surec_urun -> urun -> urun_no}}</td>
                                <td>{{$surec_urun -> urun -> olusturulma_tarihi}}</td>
                                <td>{{$surec_urun -> urun -> tezgah-> ad}}</td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
@endsection
