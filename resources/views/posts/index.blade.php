@extends('layouts.master')
@section('page-heading', 'List Posts')

@section('content')
    @foreach($posts as $post)
        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="{{ action('PostsController@show', $post->id) }}">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->content }}</p>
                <p>Posted On: {{ $post->created_at->diffForHumans() }}</p>
                <a class="btn btn-primary" href="{{ action('PostsController@show', $post->id) }}">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        <!-- /Project One -->
    @endforeach

    <div class="row text-center">
        {!! $posts->render() !!}
    </div>
@stop