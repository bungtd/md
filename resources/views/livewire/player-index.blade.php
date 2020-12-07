<div>
    <div class="championship-wrap" style="margin-top: 45px;">

        <!--CHAMPIONSHIP PART WRAP BEGIN -->
        <div class="part-wrap">
            <div class="part-list">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center mb0">Player Kamu</h1>
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
                                                <th class="text-center">Player</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($players as $team)
                                        <tr>
                                            <td>{{$team->nama_lengkap}}</td>
                                            <td>{{$team->nick_ingame}}</td>
                                            <td>{{$team->id_ingame}}</td>
                                            <td>{{$team->teamevent->nama_team}}</td>
                                            <td><a class="btn" wire:click="delete" wire:loading.attr='disable' style="height: 5px;font-size:8px;padding-top:2px;">Hapus</a></td>
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

</div>
