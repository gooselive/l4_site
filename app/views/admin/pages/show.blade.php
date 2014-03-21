@extends('admin._layouts.default')
<?php use \Michelf\Markdown; ?>
@section('main')
	<h2>Display page</h2>

	<hr>

	<h3>{{ $page->title }}</h3>
	<h5>{{ $page->created_at }}</h5>
	{{ Markdown::defaultTransform($page->body) }}
@stop