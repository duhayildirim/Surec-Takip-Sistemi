@extends('layouts.master')
@section('icerik')
    <div class="blog-details-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-details-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="latest-blog-single blog-single-full-view">
                                    <div class="blog-image">
                                        <><img src="{{asset('surec_takip/img/blog-details/Picture1.png')}}" alt="" />
                                        </>
                                        <div class="blog-date">
                                            <p><span class="blog-day">20</span> Mayıs</p>
                                        </div>
                                    </div>
                                    <div class="blog-details blog-sig-details">
                                        <div class="details-blog-dt blog-sig-details-dt">
                                            <span><a><i class="fa fa-user"></i> 20/10/2015</a></span>

                                        </div>
                                        <h1><a class="blog-ht">Adres</a></h1>
                                        <p>Teknokent/Merkez/Elazığ</p>
                                        <h1><a class="blog-ht">İletişim</a></h1>
                                        <p>0(424)(242 23 23)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
