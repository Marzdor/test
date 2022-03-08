@extends('adminlte::page')

@section('title', 'Event Info')

@section('content_header')
    <h1>Event</h1>
@stop

@section('content')
    <h2>{{ $event->title }}</h2>
    <div>
        <p>{{ date($event->start_time) }}</p>
        <p>{{ date($event->end_time) }}</p>
    </div>
@stop
