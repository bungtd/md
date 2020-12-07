@extends('layouts.app')
@section('content')
    <!--CHAMPIONSHIP PART WRAP BEGIN -->
    <div class="part-wrap">
        <div class="part-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="mb0">{{ $nama_team }}</h4>
                        <div class="">Terdaftar pada {{ date('d-m-Y', strtotime($tanggal_add)) }} pukul
                            {{ date('H:i', strtotime($tanggal_add)) }}</div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 mb20">
                        <img src="{{ Storage::url('logo/' . $logo_team) }}" style="max-width: 100%; height: auto;" alt="" />
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 mb20">
                        <div class="row mt20">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">

                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">

                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb10">
                                    <a href="{{route('players-event')}}" class="btn">Tambah Player</a>
                                </div>
                        </div>
                        <div class="row mt20">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                    <b>Captain</b>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                    {{$playerName1}} / {{$playerNick1}}
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb10">
                                    {{$playerGameID1}}
                                </div>
                                {{-- <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 mb10">
                                    <a href="#" class="btn" style="height: 20px;font-size:12px;padding-top:2px;">Verify</a>
                                </div> --}}
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                <b>Member #2</b>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                {{$playerName2}} / {{$playerNick2}}
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb10">
                                {{$playerGameID2}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                <b>Member #3</b>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                {{$playerName3}} / {{$playerNick3}}
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb10">
                                {{$playerGameID3}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                <b>Member #4</b>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                {{$playerName4}} / {{$playerNick4}}
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb10">
                                {{$playerGameID4}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                <b>Member #5</b>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                {{$playerName5}} / {{$playerNick5}}
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb10">
                                {{$playerGameID5}}
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 mb30">
                        <a href="{{route('daftar-event')}}">Back to All Teams</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CHAMPIONSHIP PART WRAP END -->

@endsection
