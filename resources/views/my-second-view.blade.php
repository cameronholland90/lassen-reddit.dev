@extends('layouts.master')

@section('top-script')
	<title>My First View</title>
@stop

@section('content')
	<h1>My First View with Laravel</h1>
	<a href="/sayhello/<?= $my_name; ?>">Say Hello</a>
	<a href="/sayhello/<?= $your_name; ?>">Say Hello</a>
@stop