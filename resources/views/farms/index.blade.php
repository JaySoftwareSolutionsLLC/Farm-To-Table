@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="<?php echo asset('css/general/all-options.css')?>" type="text/css">
@endsection

@section('main')
<ul class="main-content">
    @foreach($farms as $farm)
        <a href="{{ route('farms.show', $farm) }}">
            <li class="farm">
                <h3>{{ $farm->name }}</h3>
                <img src="images/graphic-farm.png">
                <h4>{{ $farm->city }}</h4>
                <h4>{{ $farm->website }}</h4>
            </li>
        </a>
    @endforeach
</ul>
    <a href="{{ route('farms.create') }}"><button>+</button></a>
{{ $farms->links() }}
@endsection
