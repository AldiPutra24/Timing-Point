@extends('dashbroad.layout.main')

@section('container')
@php
    $id = '{{ auth()->user()->id }}';
@endphp

<h1> Setting </h1>
<P>PROFIL</P>
@if(auth()->check())
    <p>nama, {{ auth()->user()->name }}</p>
    <p>email, {{ auth()->user()->email }}</p>
    <p>tgl ulan tahun, {{ auth()->user()->birth_date }}</p>
@endif
    <a href="/dashboard/{{$id}}/edit">EDIT PORFIL</a>
@endsection
