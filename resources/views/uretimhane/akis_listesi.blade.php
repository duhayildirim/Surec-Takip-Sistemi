@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Akış Listesi</span>
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
                                <th style="width: 15%">Akışın Adı
                                </th>
                                <th style="width: 85%">Akışın Rotası
                                </th>
                                <th class="th-sm">Sil
                                </th>

                            </tr>
                            </thead>
                            @foreach($akislar as $akis)
                            <tbody>
                            <tr>
                                <td>{{$akis -> ad}}</td>
                                <td>
                                     @foreach($akis -> tezgahlar as $girdi => $akis_tezgah)
                                         {{$akis_tezgah -> tezgah -> ad . ($akis_tezgah -> tezgah -> ad !== end($akis_tezgah -> tezgah) ? '->' : '' )}}
                                     @endforeach
                                </td>
                                <form action="{{route('akis_sil' , $akis -> id)}}" method="post">
                                    {{csrf_field()}}
                                <td><button type="submit" class="btn btn-primary btn-sm">Akışı Sil</button></td>
                                </form>
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
