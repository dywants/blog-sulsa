<?php


use Illuminate\Support\Facades\Route;

if (!function_exists('currentRoute')) {
    function currentRoute($route)
    {
        return Route::currentRouteNamed($route) ? 'bg-primary-600 text-dark-100' : '';
    }
}
