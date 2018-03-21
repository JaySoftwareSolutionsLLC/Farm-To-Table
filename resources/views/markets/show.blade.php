@extends('layouts.app')
@section('main')
<section>
    <h2>{{ $market->name }}</h2>

    <ul>
        <li>Location City: {{ $market->city }}</li>
        <li>Website: {{ $market->website }}</li>
    </ul>
</section>
@endsection
