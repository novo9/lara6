@extends('layout.layout')
@section('content')
    <div class="col-lg-8">

        <form action="{{ route('matrix.register') }}" method="post">
            {{ csrf_field() }}

            <input type="text" name="username">
            <input type="password" name="password">

            <button type="submit">Register</button>
        </form>


            @include('partials.errors')






    </div>
    @endsection