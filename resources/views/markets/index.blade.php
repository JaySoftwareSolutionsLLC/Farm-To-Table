@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="<?php echo asset('css/general/all-options.css')?>" type="text/css">
@endsection

@section('main')
<ul class="main-content">
    @foreach($markets as $market)
        <a href="{{ route('markets.show', $market) }}">
            <li class="market">
                <h3>{{ $market->name }}</h3>
                <img src="images/graphic-shop.png">
                <h4>{{ $market->city }}</h4>
                <h4>{{ $market->website }}</h4>
            </li>
        </a>
    @endforeach
</ul>
    <a href="{{ route('markets.create') }}"><button>+</button></a>
{{ $markets->links() }}
@endsection
