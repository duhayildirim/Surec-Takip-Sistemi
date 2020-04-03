@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Mesajın İçeriği</span>
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
        <div class="hpanel email-compose mailbox-view mg-b-15">
            <div class="panel-heading hbuilt">

                <div class="p-xs h4">
                    <small class="pull-right">
                        ne zaman gönderildi
                    </small> gönderenin adı

                </div>
            </div>
            <div class="border-top border-left border-right bg-light">
                <div class="p-m custom-address-mailbox">

                    <div>
                        <span class="font-extra-bold">Konu: </span> Lorem Ipsum has been the industry's standard dummy text ever
                    </div>

                </div>
            </div>
            <div class="panel-body panel-csm">
                <div>
                    <h4>Hello Jonathan! </h4>

                    <p>Dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the dustrys</strong> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                        a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                        containing Lorem Ipsum passages, and more
                        <br/>
                        <br/>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                        a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. recently with.</p>

                    <p>Mark Smith
                    </p>
                </div>
            </div>



            <div class="panel-footer text-right">
                <div class="btn-group">
                    <button  class="btn btn-default"><i class="fa fa-arrow-right"></i> <a href="{{'mesaj_olustur'}}"> Cevapla </a> </button>
                    <button class="btn btn-default"><i class="fa fa-trash-o"></i> Sil</button>
                </div>
            </div>
        </div>
    </div>
@endsection
