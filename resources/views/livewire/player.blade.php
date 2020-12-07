<div>
    <section class="contacts-wrap mt0 pt0 mb0 pb0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Tambah Player</h1>
                    <div class="leave-comment-wrap pb0">
                        <div class="text-center mt30" style="margin-bottom: 150px;">
                            <form wire:submit.prevent="save">
                                <div class="form-group row">
                                    <label for="nama_lengkap" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                                    <div class="col-md-6">
                                        <input id="nama_lengkap" placeholder="Nama Lengkap Player" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" wire:model="nama_lengkap">
                                        @error('nama_lengkap')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="teamevent_id" class="col-md-4 col-form-label text-md-right">{{ __('Nama Team') }}</label>

                                    <div class="col-md-6">
                                        <select name="teamevent_id" id="teamevent_id" wire:model="teamevent_id" class="form-control @error('teamevent_id') is-invalid @enderror">
                                            <option>Pilih Team</option>
                                            @foreach ($teamevents as $team)
                                                <option value="{{$team->id}}">{{$team->nama_team}}</option>
                                            @endforeach
                                          </select>

                                        @error('teamevent_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                                    <div class="col-md-6">
                                        <select name="status" id="status" wire:model="status" class="form-control @error('status') is-invalid @enderror">
                                            <option>Pilih Status Player</option>
                                            <option value="Player 1">Captain</option>
                                            <option value="Player 2">Player 2</option>
                                            <option value="Player 3">Player 3</option>
                                            <option value="Player 4">Player 4</option>
                                            <option value="Player 5">Player 5</option>
                                          </select>

                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nick_ingame" class="col-md-4 col-form-label text-md-right">{{ __('Nickname In Game') }}</label>

                                    <div class="col-md-6">
                                        <input id="nick_ingame" placeholder="nick_in_game" type="text" class="form-control @error('nick_ingame') is-invalid @enderror" name="nick_ingame" wire:model="nick_ingame">

                                        @error('nick_ingame')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="id_ingame" class="col-md-4 col-form-label text-md-right">{{ __('ID In Game') }}</label>

                                    <div class="col-md-6">
                                        <input id="id_ingame" placeholder="id_in_game" type="text" class="form-control @error('id_ingame') is-invalid @enderror" name="id_ingame" wire:model="id_ingame">

                                        @error('id_ingame')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="contact_player" class="col-md-4 col-form-label text-md-right">{{ __('Kontak Player') }}</label>

                                    <div class="col-md-6">
                                        <input id="contact_player" placeholder="08**********" type="text" class="form-control @error('contact_player') is-invalid @enderror" name="contact_player" wire:model="contact_player">

                                        @error('contact_player')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mb-0 form-group row">
                                    <div class="text-center">
                                        <button class="btn btn-primary">
                                            {{ __('Tambah') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
