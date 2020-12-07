<div class="championship-wrap" style="margin-top: 45px;">

    <!--CHAMPIONSHIP PART WRAP BEGIN -->
    <div class="part-wrap">
        <div class="part-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center mb0">Team Kamu</h1>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">

                    </div>

                    <div class="col-md-12">
                        <div id="tag_container" style="justify-content:center">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">
                                <table class="table no-hover">
                                    <thead class="hide-sm">
                                        <tr>
                                            <th class="text-center">Team</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($teamevents as $team)
                                    <tr>
                                        <td>
                                            <div>
                                            <a href="{{url('team-terdaftar/'.$team->id)}}"
                                                    class="item pt10 pl20 pr0 pb0 mb0" style="text-align: left;">
                                                    <span class="text-center logo"
                                                        style="width: 60px; height: 60px; display: inline-block; background-color: transparent;">
                                                        <img src="{{ Storage::url('logo/'.$team->logo_team) }}"
                                                            style="max-height: 48px; max-width: 100%; width: auto;"
                                                            alt="">
                                                    </span>
                                                    <span class="name pl20"
                                                        style="display: inline-block; margin-right:20px; background-color: transparent;">{{$team->nama_team}}</span>
                                                    <span class="name pl90"
                                                        style="display: inline-block; background-color: transparent;">{{$team->players->count()}} Players</span>

                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach



                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 ml20 mb30">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CHAMPIONSHIP PART WRAP END -->

</div>
