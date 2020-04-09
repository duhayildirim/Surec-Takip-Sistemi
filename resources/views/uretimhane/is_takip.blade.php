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
{{--                                    <form role="search" class="">--}}
{{--                                        <input type="text" placeholder="Sürecinizin adını yazın" class="form-control">--}}
{{--                                        <a href=""><i class="fa fa-search"></i></a>--}}
{{--                                    </form>--}}
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
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Görmek İstediğiniz Süreci,Tezgahı veya Ürünü yazın" title="Type in a name">
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
                            <tbody>
                            @foreach($surecler_urunler as $surec_urun)
                                <tr>
                                <td>{{$surec_urun -> surec -> ad}}</td>
                                <td>{{$surec_urun -> urun -> urun_no}}</td>
                                <td>{{$surec_urun -> urun -> olusturulma_tarihi}}</td>
                                <td>{{$surec_urun -> urun -> tezgah-> ad}}</td>
                            </tr>
                            @endforeach
                            </tbody>

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
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("dtBasicExample");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

    <style>
        #myInput {
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

    </style>
@endsection
