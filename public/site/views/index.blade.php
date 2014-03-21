@include('site::_partials/header')
<?php use \Michelf\Markdown; ?> 
<h2>{{ $entry->title }}</h2>
{{ Markdown::defaultTransform($entry->body) }}
 
@include('site::_partials/footer')