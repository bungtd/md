@extends('layouts.app')
@section('content')
@if ($teams->count() > 0)
@livewire('verify-team')
@elseif($teams->count() < 1)
<div class="championship-wrap" style="margin-top: 45px;">

    <!--CHAMPIONSHIP PART WRAP BEGIN -->
    <div class="part-wrap">
        <div class="part-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center mb0">Oppsss.. Kamu belum Menandaftarkan Team Kamu</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CHAMPIONSHIP PART WRAP END -->

</div>
@endif

@endsection
