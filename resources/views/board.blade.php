@extends('adminlte::page')

@section('title', 'Board')

@section('content_header')
    <h1>Board</h1>
@stop

@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Backlog</h5>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">To Do</h5>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">In Progress</h5>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Done</h5>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
