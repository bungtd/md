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
                                <div class="col-md-12">
                                    <table class="table no-hover">
                                        <thead class="hide-sm">
                                            <tr>
                                                <th class="text-center">Nama Team</th>
                                                <th class="text-center">Contact team</th>
                                                <th class="text-center">Nama Lengkap Player</th>
                                                <th class="text-center">SS Youtube</th>
                                                <th class="text-center">SS Instagram</th>
                                                <th class="text-center">Foto KTP</th>
                                                <th class="text-center">Foto Selfie</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($verifyTeam as $team)
                                                <tr>

                                                    <td>{{ $team->player->teamevent->nama_team }}</td>
                                                    <td>{{ $team->player->teamevent->contact_team }}</td>
                                                    <td>{{ $team->player->nama_lengkap }}</td>
                                                    <td><img src="{{ Storage::url('verify/'.$team->ss_youtube) }}" style="height: 50px;" alt="" /></td>
                                                    <td><img src="{{ Storage::url('verify/'.$team->ss_instagram) }}" style="height: 50px;" alt="" /></td>
                                                    <td><img src="{{ Storage::url('verify/'.$team->foto_ktp) }}" style="height: 50px;" alt="" /></td>
                                                    <td><img src="{{ Storage::url('verify/'.$team->foto_selfie) }}" style="height: 50px;" alt="" /></td>
                                                    {{-- <td>{{ $team->teamevent->nama_team }}</td> --}}
                                                    {{-- <td><a class="btn" wire:click="delete" wire:loading.attr='disable'
                                                            style="height: 5px;font-size:8px;padding-top:2px;">Hapus</a>
                                                    </td> --}}
                                                </tr>
                                            @endforeach



                                        </tbody>
                                    </table>
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
