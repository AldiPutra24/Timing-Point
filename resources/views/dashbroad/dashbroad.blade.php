@extends('dashbroad.layout.main')

@section('container')
<div class="content_dashbroad">
@if(auth()->check())
    <h1>Selamat datang, {{ auth()->user()->name }}</h1>
@endif
  <div class="datetime-1">
    <div class="date-1">
      <span id="dayname">day</span>,
      <span id="month">month</span>
      <span id="daynum">00</span>,
      <span id="year">year</span>
    </div>
    <div class="time-1">
      <span id="hour">00</span>: <span id="minutes">00</span>:
      <span id="seconds">00</span>
      <span id="period">AM</span>
    </div>
  </div>
</div>

@endsection
