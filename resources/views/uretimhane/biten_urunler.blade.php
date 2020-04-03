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
                                <th style="width: 15%">Akışın Adı
                                </th>
                                <th style="width: 85%">Akışın Rotası
                                </th>
                                <th class="th-sm">Sil
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Zımparalama</td>
                                <td>Tezgah 1 -> Tezgah 2 -> Tezgah 3 -> Tezgah 4 -> Tezgah 5 -> Tezgah 6 -> Tezgah 7 </td>
                                <td><a href="#" class="btn btn-info btn-xs">Akışı Sil</a></td>
                            </tr>
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
    </script>
@endsection

