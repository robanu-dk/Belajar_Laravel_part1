@extends('layouts.main')

@section('container')
    <div class="container">
        <h1 style="padding-top: 100px">
            {{ $website_name }}
        </h1><br>
        <p style="word-wrap: break-word;">
            {{ $description_website }}
        </p>
    </div>
@endsection
