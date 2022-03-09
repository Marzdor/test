@extends('adminlte::page')

@section('title', 'Event Info')

@section('content_header')
    <h1>Event</h1>
@stop

@section('content')
    <h2>{{ $event->title }}</h2>
    <div>
        <p>Start Time: {{ date('M jS, Y - g:ia e', $event->start_time) }}</p>
        <p>End Time: {{ date('M jS, Y - g:ia e', $event->end_time) }}</p>
    </div>
@stop
