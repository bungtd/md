@extends('layouts.app')
@section('content')


@if ($teams->count() < 1)
@livewire('buat-team')
@else
@livewire('team-event')
<br>
@livewire('buat-team')
@endif
@endsection
