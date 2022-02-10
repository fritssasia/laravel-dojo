@extends('layouts.main')


@section('main-content')

   <div class="web-content">
       <div class="container mt-5">
           <h1>Halo selamat datang {{ $username }}</h1>
           <h5>Ini hari ke {{ $day }} kamu login di web laravel-dojo</h5>
       </div>
   </div>

@endsection