@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="<?php echo asset('css/general/creation.css')?>" type="text/css">
@endsection
@section('main')
    <section class="content">
        <h1>New Farm</h1>
        <form action="{{ route('farms.store') }}" method="post">
            @csrf
            <!-- {{ csrf_field() }} -->
            <!-- <input type="hidden" name="_token" value="GlI9ThPtwYz0zLlWeankKpyaujLSBH+3KcHbbQbd6v0="> -->
            <label for="name">Farm Name</label>
            <input type="text" name="name">
            <label for="city">Farm City</label>
            <input type="text" name="city">
            <label for="website">Farm Website</label>
            <input type="text" name="website">
            <button type="submit">Create</button>
        </form>
    </section>
@endsection
