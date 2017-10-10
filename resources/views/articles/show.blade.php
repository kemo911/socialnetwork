@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    Kemo
                    <span><a href="/articles/{{ $article->id }}/edit">Edit</a></span>
                </div>

                <div class="panel-body">
                    <p> {{ $article->content }}</p>
                    <span class="pull-right">{{ $article->created_at->diffForHumans() }}</span>
                </div>

                <div class="panel-footer">
                    <p> {{ $article->post_on }}</p>
                </div>

            </div>
        </div>

    </div>


@endsection