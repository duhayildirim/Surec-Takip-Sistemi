@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Gelen Kutusu</span>
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
    <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
        <div class="hpanel mg-b-15">
            <div class="panel-heading hbuilt mailbox-hd">
                <div class="text-center p-xs font-normal">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" placeholder="Mesajlarda ara..."> <span class="input-group-btn"> <button type="button" class="btn btn-sm btn-default">ARA
											</button> </span></div>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">

                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-mailbox">
                        <tbody>
                        <tr class="unread" >
                            <td class="">
                                <div class="checkbox checkbox-single checkbox-success">
                                    <input  type="checkbox" checked>
                                    <label></label>
                                </div>
                            </td>
                            <td><a href="{{route('mesaji_oku')}}">Jeremy Massey</a></td>
                            <td><a href="{{route('mesaji_oku')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            </td>
                            <td><i class="fa fa-paperclip"></i></td>
                            <td class="text-right mail-date">Tue, Nov 25</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel-footer">
                <i class="fa fa-eye"> </i> Gelen Mesaj Sayısı:
            </div>
        </div>
    </div>
@endsection
