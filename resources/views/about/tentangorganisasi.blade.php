@extends('layouts.main')

@section('container')
    <div class="container">
        <h1 style="padding-top: 100px">
            {{ $stakeholder_name }}
        </h1><br>
        <p>
            {{ $description_organisasi }} Salah satu media online tempat berjualannya adalah akun instagramnya yaitu <strong>{{ $instagram }}</strong>.
        </p>
    </div>

@endsection
