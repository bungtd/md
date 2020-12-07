@extends('layouts.app')

@section('content')
    <div class="image-header-v2">
        <img src="{{asset('pubg/images/Banner4-dash.jpg')}}" alt="">
    </div>
    <style>
        .card {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 100%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .containers {
            padding: 4px 16px;
            margin-top: 16px;
            margin-bottom: 16px;
            width: 90%;
        }
        .pb8{
            padding-bottom:50px;
            padding-top:20px;
        }


    </style>
    <div style="padding-top:80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pb8">
                    <div class="card">
                        <img src="{{ asset('img/logoMD.png') }}" style="margin-top: -100px;width:150px;height:100%;float: right;">
                        <div class="containers">
                            <h4><b>Fun Match</b></h4>
                        <a href="{{route('daftar-event')}}">
                                <p class="text-right" style="text-decoration: underline"><span>Daftar Sekarang >></span></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb8">
                    <div class="card">
                        <img src="{{ asset('img/logoMD.png') }}" style="margin-top: -100px;width:150px;height:100%;float: right;">
                        <div class="containers">
                            <h4><b>Turnament</b></h4>
                            <p class="text-right">coming soon</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb8">
                    <div class="card">
                        <img src="{{ asset('img/logoMD.png') }}" style="margin-top: -100px;width:150px;height:100%;float: right;">
                        <div class="containers">
                            <h4><b>Member #MASADEPAN</b></h4>
                            <p class="text-right">coming soon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
