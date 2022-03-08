<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', function () {
    return view('todos');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/board', function () {
    return view('board');
});

Route::get('/events-feed', function () {
    class Event
    {
        public $title;
        public $start;
        public $end;

        public function __construct($title, $start, $end)
        {
            $this->title = $title;
            $this->start = $start;
            $this->end = $end;
        }
    }

    $events = array(
        new Event(
            "CSE4500 Class",
            "2022-02-23T17:30:00",
            "2022-02-23T18:45:00"
        ),
        new Event(
            "CSE4500 Class",
            "2022-02-28T17:30:00",
            "2022-02-28T18:45:00",
        )
    );

    return $events;
});

Route::fallback(function () {
    return view('404');
});

Route::get('/db-test', function () {
    try {
        echo DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        echo 'None';
    }
});