@extends('layouts.app')

@push('head')
    <!-- Mapbox GL JS -->
    <script src="{{ asset('js/map.js') }}" defer></script>

    <style type="text/css">
        #map {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
        }
        #modal {
            z-index: 1;
            position: relative;
            margin: auto;
        }
        #modalbtn {
            z-index: 1;
            position: relative;
            left: 1.5em;
            top: 1.5em;
            background: gray;
            color: white;
            border: none;
            height: 5em;
            width: 8em;
            border-radius: .2em;
        }
    </style>
@endpush

@section('content')
    <div id='map'></div>
@endsection