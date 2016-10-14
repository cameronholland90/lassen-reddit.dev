@extends('layouts.master')
@section('page-heading', 'Show Post')

@section('content')
	<h1>{{ $post->title }}</h1>
	<p>{{ $post->content }}</p>
	<a href="{{ $post->url }}">Go to this thing</a>
@stop