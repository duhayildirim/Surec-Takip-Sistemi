@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Tamamlanmış Ürünler</span>
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
    <div class="data-table-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th style="width: 20%">İşin Adı
                                </th>

                                <th style="width: 22%">Biten Ürünlerin Numarası
                                </th>
                                <th style="width: 20%">Teslim Edilmesi Gereken Zaman
                                </th>
                                <th style="width: 20%">Tamamlanma Zamanı
                                </th>
                                <th style="width: 20%">Teslim Eden Tezgah
                                </th>


                            </tr>
                            </thead>
                            @foreach($biten_urunler as $biten_urun)
                                <tbody>
                                <tr>
                                    <td>{{$biten_urun -> surec -> ad}}</td>
                                    <td>{{$biten_urun -> urun_no}}</td>
                                    <td>{{$biten_urun -> surec -> olusturulma_tarihi}}</td>
                                    <td>{{$biten_urun -> olusturulma_tarihi}}</td>
                                    <td>{{$biten_urun -> tezgah -> ad}}</td>
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

