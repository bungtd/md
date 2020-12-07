@extends('layouts.app')
@section('content')

<div class="main-slider-section">
    <div class="main-slider">
        <div id="main-slider" class="carousel slide banner-slider" data-ride="carousel" data-interval="4000">
            <div class="text-center carousel-inner" role="listbox">
                <div class="item active banner-img">
                    <img class="banner-img-normal"
                        src="{{asset('pubg/images/Banner4.jpg')}}" alt="" />
                    <img class="banner-img-wide"
                        src="{{asset('pubg/images/Banner4.jpg')}}" alt="" />
                </div>
                <!-- Controls -->
                <a class="nav-arrow left-arrow" href="#main-slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only"></span>
                </a>
                <a class="nav-arrow right-arrow" href="#main-slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<!--MAIN MACTH SHEDULE BEGIN-->
<section class="main-match-shedule pb0">
    <div class="container">
        <div class="row" style="position: relative;">
            <div class="col-md-7 col-lg-8">
                <!--ABOUT US BEGIN-->
                <h2>FUN MATCH #MASADEPAN</h2>
                <section class="trophey-room pt0 pb20">
                    <div class="row">
                        <div class="col-md-12 about-text">
                            <p>FUN MATCH #MASADEPAN merupakan kegiatan yang mendukung program peningkatan partisipasi
                                pemilih dalam pilkada serentak yang akan diselenggarakan tanggal 9 Desember 2020 mendatang.
                                Oleh karena itu salah satu syarat untuk mengikuti FUN MATCH #MASADEPAN adalah dengan melampirkan
                                bukti kalau calon peserta sudah menggunakan hak suaranya.</p>

                            <p>Bersama kita Memilih untuk #MASADEPAN.</p>
                        </div>
                    </div>
                </section>
                <!--ABOUT US-->
            </div>

            <img src="{{asset('pubg/images/char13-400.png')}}" alt="" class="hide-sm"
                style="position: absolute; right: 0; bottom: 0; max-width: 100%;" />
        </div>
        {{-- <div class="row mt20">
            <div class="col-md-12" style="text-align: right;">
                <!--ABOUT US BEGIN-->

                <section class="trophey-room pt0 pb20">
                    <div class="row">
                        <div class="col-md-12">
                            <video id="trailer-video" width="100%" height="100%" controls autoplay muted>
                                <source src="https://pubgmcommunity.id/" type="video/webm">
                                <source
                                    src="https://pubgmcommunity.id/uploads/videos/PCC TEASER rev 4 (prizepool).mp4"
                                    type="video/mp4">
                                <!--[if gt IE 6]>
                        <object width="640" height="375" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B"><!
                        [endif]-->
                                <!--[if !IE]><!-->
                                <!--[if gt IE 6]><!-->
                                </object>
                                <!--<![endif]-->
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </section>
                <!--ABOUT US-->


            </div>
        </div> --}}
    </div>
</section>
<!--MAIN MACTH SHEDULE END-->



<!--MAIN AWARD BOX BEGIN-->
<div class="content mt0 pt0">
    <div class="container" style="position: relative;">
        <div class="row row-offcanvas row-offcanvas-left" style="padding-left: 15px; padding-right: 15px;">
            <div class="col-sm-12">
                <div class="prizepool">
                    <div>
                        <h1><strong>Total hadiah senilai 5.000.000</strong></h1>
                    </div>
                    <p>
                        <img alt="" src="{{asset('pubg/images/Banner4-dash.jpg')}}" />
                    </p>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="prizepool">
                    <h1>INFORMASI FUN MATCH</h1>

                    <h3><strong>PENDAFTARAN GRATIS! 64 SLOT!</strong></h3>
                </div>
            </div>

            <div class="text-center col-sm-12 mb30">
                <div style="display: inline-block; vertical-align:top;">
                    <a href="{{route('register')}}" class="btn small mt20 ml20 mr20">Daftar
                        Sekarang</a>
                </div>
                <div style="display: inline-block; vertical-align:top;">
                    <a href="#" class="btn small btn-inverse mt20 ml20 mr20"
                        target="_blank">Official WhatsApp</a>

                    <div style="font-size: 12px;">
                        *Setiap pertanyaan bisa hubungi kami melalui WhatsApp
                    </div>
                </div>
            </div>
        </div>

        <img src="{{asset('pubg/images/char2-180.png')}}" alt="" class="hide-sm"
            style="position: absolute; right: 0; bottom: 0;" />
        <img src="{{asset('pubg/images/char5-325.png')}}" alt="" class="hide-sm"
            style="position: absolute; left: 0; bottom: 0;" />

    </div>
</div>
<!--MAIN AWARD BOX END-->

@endsection
