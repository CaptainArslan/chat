<?php

use App\Events\TestEvent;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

Route::get('connection-event', function () {
    event(new TestEvent('Test connection event'));
    return 'Event has been sent!';
});
