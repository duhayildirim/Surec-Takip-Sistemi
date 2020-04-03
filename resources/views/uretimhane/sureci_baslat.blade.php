@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Süreci Başlat</span>
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
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="tinymce-single responsive-mg-b-30">
            <div class="alert-title">
                <h2>İster:</h2>
                <p>{{$ister -> emir}} </p>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Yukarıdaki isterlere göre iş tanımı oluşturunuz</span>
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
    <div class="product-cart-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-cart-inner">
                        <div id="example-basic">
                            <h3>İşi Tanımla</h3>
                            <section>
                                <h3 class="product-cart-dn"></h3>
                                <div class="product-delivary">
                                    <div class="form-group">
                                        <label for="card-number" class="form-label"><h4>İşin Adını Oluştur</h4></label>
                                        <input id="name-2" name="name" type="text" class="form-control">
                                        <p> &nbsp</p>
                                        <p> &nbsp</p>
                                        <p> &nbsp</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="card-number" class="form-label"><h4>Üründen Kaç Adet Olması Gerektiğini Gir </h4></label>
                                        <input id="phone-2" name="phone" type="number" class="form-control phone">
                                        <p> &nbsp</p>
                                        <p> &nbsp</p>
                                        <p> &nbsp</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="form-label"><h4>Son Teslim Edilmesi Gereken Tarihi Gir </h4></label>
                                        <div class="input-mark-inner mg-b-22">
                                            <input type="text" class="form-control" data-mask="99/99/9999" placeholder="">
                                            <span class="help-block">gün/ay/yıl</span>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h3>İşin Özellikleri</h3>
                            <section>
                                <h3 class="product-cart-dn"></h3>
                                <div class="product-delivary">
                                    <div class="form-group">
                                        <label for="card-number" class="form-label"><h4>En</h4>/<small>zorunlu değil</small></label>
                                        <input type="text" class="form-control" data-mask="99" placeholder="cm olarak giriniz...">
                                        <p> &nbsp</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="card-number" class="form-label"><h4>Boy</h4>/<small>zorunlu değil</small></label>
                                        <input type="text" class="form-control" data-mask="999" placeholder="cm olarak giriniz...">
                                        <p> &nbsp</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="card-number" class="form-label"><h4>Yükseklik</h4>/<small>zorunlu değil</small></label>
                                        <input type="text" class="form-control" data-mask="99" placeholder="cm olarak giriniz...">

                                    </div>
                                    <div class="sparkline10-graph">
                                        <div class="input-knob-dial-wrap">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="chosen-select-single">
                                                        <label for="card-number" class="form-label"><h4> Üründe Kullanılacak Renkleri Belirt </h4></label>
                                                        <select data-placeholder="Renk veya Renkleri seçin" class="chosen-select" multiple="" tabindex="-1">
                                                            <option value="United States">Beyaz</option>
                                                            <option value="United States">Sarı</option>
                                                            <option value="United States">Siyah</option>
                                                            <option value="United States">Bordo</option>
                                                            <option value="United States">Mor</option>
                                                            <option value="United States">Yeşil</option>
                                                            <option value="United States">Mavi</option>
                                                            <option value="United States">Ahşap</option>
                                                            <option value="United States">Kahverengi</option>
                                                            <option value="United States">Lila</option>
                                                            <option value="United States">Pembe</option>
                                                            <option value="United States">Kırmızı</option>
                                                            <option value="United States">Askeri</option>
                                                            <option value="United States">Turkuaz</option>
                                                            <option value="United States">Yavru Ağzı</option>
                                                            <option value="United States">Bej</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p> &nbsp</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="form-label"><h4>Detay</h4></label>
                                        <input id="address" name="address" placeholder="Yapım aşamasında dikkat edilmesini istisnai durumlar varsa burada belirtiniz..." type="text" class="form-control">
                                    </div>
                                </div>
                            </section>
                            <h3>Akış Seç</h3>
                            <section>

                                <h1> Bu İş Hangi Akış Planını İzleyecek? </h1>
                                <div class="sparkline10-graph">
                                    <div class="input-knob-dial-wrap">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="chosen-select-single">
                                                    <label for="card-number" class="form-label"></label>
                                                    <select data-placeholder="Akış Seç" class="chosen-select" tabindex="-1">
                                                        <option selected disabled>Akış seç</option>
                                                        <option value="United States">Masa</option>
                                                        <option value="United States">Tabure</option>
                                                        <option value="United States">Koltuk</option>
                                                        <option value="United States">Dolap</option>
                                                        <option value="United States">Sandalye</option>
                                                        <option value="United States">Vestiyer</option>
                                                        <option value="United States">Kitaplık</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p> &nbsp</p>
                                </div>
                            </section>
                            <h3>Süreci Başlat</h3>
                            <section>
                                <h2> Son Olarak...</h2>
                                <h1> Çalışanlara kolaylık olsun diye örnek bir resim koyabilirsiniz</h1>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="dropzone-pro mg-tb-30">
                                        <div id="dropzone1">
                                            <form action="/upload" class="dropzone dropzone-custom needsclick" id="demo1-upload">
                                                <div class="dz-message needsclick download-custom">
                                                    <input type="hidden">
                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                    <h2>Yüklemek istediğiniz dosyayı buraya sürükleyin veya buraya tıklayın</h2>
                                                    <p><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                    </p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-confarmation">
                                    <button type="submit" class="btn btn-primary btn-block">İşi Başlat</button>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
