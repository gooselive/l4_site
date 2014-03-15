<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 4 Tutorial</title>
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('site/assets/css/main.css') }}">
</head>
<body>
<div id="layout">
    <header>
        <h1><a href="{{ URL::route('home') }}">Laravel 4 Tutorial</a></h1>

        @include('site::_partials.navigation')
    </header>
 
    <hr>