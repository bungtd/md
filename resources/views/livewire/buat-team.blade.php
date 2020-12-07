<div>
<section class="contacts-wrap mt0 pt0 mb0 pb0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Daftarkan Tim Mu</h1>


                <div class="leave-comment-wrap pb0">
                    <div class="text-center mt30" style="margin-bottom: 150px;">
                        @if ($logo)
                        <div style="justify-content:center;padding-bottom:8px">
                            <img src="{{$logo->temporaryUrl()}}"  height="180px">
                        </div>
                        @endif
                        <form wire:submit.prevent="save">
                            <div class="form-group row">
                                <label for="nama_team" class="col-md-4 col-form-label text-md-right">{{ __('Nama Team') }}</label>

                                <div class="col-md-6">
                                    <input id="nama_team" placeholder="Nama Team Kamu" type="text" class="form-control @error('nama_team') is-invalid @enderror" name="nama_team" wire:model="nama_team">
                                    @error('nama_team')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role_team" class="col-md-4 col-form-label text-md-right">{{ __('Role Team') }}</label>

                                <div class="col-md-6">
                                    <select name="role_team" id="role_team" wire:model="role_team" class="form-control @error('role_team') is-invalid @enderror">
                                        <option value="">Pilih Role</option>
                                        <option value="Manager Team">Manager Team</option>
                                        <option value="Hanya membantu mendaftarkan">Hanya membantu mendaftarkan</option>
                                      </select>

                                    @error('role_team')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contact_team" class="col-md-4 col-form-label text-md-right">{{ __('Kontak Penanggungjawab') }}</label>

                                <div class="col-md-6">
                                    <input id="contact_team" placeholder="08**********" type="text" class="form-control @error('contact_team') is-invalid @enderror" name="contact_team" wire:model="contact_team">

                                    @error('contact_team')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Logo Team') }}</label>
                                <div class="col-md-6">
                                    <input type="file" wire:model="logo" class="form-control @error('contact_team') is-invalid @enderror">
                                    <div>
                                        @error('logo_team') <span class="text-sm italic text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-0 form-group row">
                                <div class="text-center">
                                    <button class="btn btn-primary">
                                        {{ __('Simpan') }}
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

