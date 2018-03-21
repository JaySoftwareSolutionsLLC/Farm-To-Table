@extends('layouts.app')
@section('main')
<section>
    <h2>{{ $farm->name }}</h2>

    <ul>
        <li>Location City: {{ $farm->city }}</li>
        <li>Website: {{ $farm->website }}</li>
    </ul>
</section>
@endsection
