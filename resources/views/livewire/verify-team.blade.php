
<div>
    <section class="contacts-wrap mt0 pt0 mb0 pb0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Silahkan Upload File Untuk Verifikasi</h1>
                    <div class="leave-comment-wrap pb0">
                        <div class="text-center mt30" style="margin-bottom: 150px;">
                            <form wire:submit.prevent="save">
                                <div class="form-group row">
                                    <label for="teamevent_id" class="col-md-4 col-form-label text-md-right">{{ __('Nama Team') }}</label>

                                    <div class="col-md-6">
                                        <select wire:model="teamID" class="form-control">
                                            @foreach ($teamevents as $team)
                                                <option>Pilih Team</option>
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
                                @if (!empty($teamID))
                                <div class="form-group row">
                                    <label for="player_id" class="col-md-4 col-form-label text-md-right">{{ __('Nama Player') }}</label>

                                    <div class="col-md-6">
                                        <select wire:model="player_id" name="player_id" class="form-control @error('teamID') is-invalid @enderror">
                                            <option>Pilih Player</option>
                                            @foreach ($players as $player)
                                                <option value="{{$player->id}}">{{$player->nama_lengkap}}</option>
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
                                    <label class="col-md-4 col-form-label text-md-right">{{ __('Foto KTP') }}</label>
                                    <div class="col-md-6">
                                        <input type="file" wire:model="foto_ktp" class="form-control @error('foto_ktp') is-invalid @enderror">
                                        <div>
                                            @error('foto_ktp') <span class="text-sm italic text-red-500">{{ $message }}</span>@enderror
                                        </div>
                                        @if ($foto_ktp)
                                        <div style="justify-content:center;padding-bottom:8px">
                                            <img src="{{$foto_ktp->temporaryUrl()}}"  height="180px">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">{{ __('Foto Selfie') }}</label>
                                    <div class="col-md-6">
                                        <input type="file" wire:model="foto_selfie" class="form-control @error('foto_selfie') is-invalid @enderror">
                                        <div>
                                            @error('foto_selfie') <span class="text-sm italic text-red-500">{{ $message }}</span>@enderror
                                        </div>
                                        @if ($foto_selfie)
                                        <div style="justify-content:center;padding-bottom:8px">
                                            <img src="{{$foto_selfie->temporaryUrl()}}"  height="180px">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">{{ __('SS Youtube') }}</label>
                                    <div class="col-md-6">
                                        <input type="file" wire:model="ss_youtube" class="form-control @error('ss_youtube') is-invalid @enderror">
                                        <div>
                                            @error('ss_youtube') <span class="text-sm italic text-red-500">{{ $message }}</span>@enderror
                                        </div>
                                        @if ($ss_youtube)
                                        <div style="justify-content:center;padding-bottom:8px">
                                            <img src="{{$ss_youtube->temporaryUrl()}}"  height="180px">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">{{ __('SS Instagram') }}</label>
                                    <div class="col-md-6">
                                        <input type="file" wire:model="ss_instagram" class="form-control @error('ss_instagram') is-invalid @enderror">
                                        <div>
                                            @error('ss_instagram') <span class="text-sm italic text-red-500">{{ $message }}</span>@enderror
                                        </div>
                                        @if ($ss_instagram)
                                        <div style="justify-content:center;padding-bottom:8px">
                                            <img src="{{$ss_instagram->temporaryUrl()}}"  height="180px">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                @endif

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
