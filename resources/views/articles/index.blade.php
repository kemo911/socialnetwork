@extends('layouts.app')

@section('content')
    <div class="row">
        @forelse($articles as $article)
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <span>Karim</span>
                        <span class="pull-right">{{ $article->created_at->diffForHumans() }} </span>
                    </div>

                    <div class="panel-body">
                        <p>{{substr($article->content,0,random_int(70,130)) }}....</p>
                        <a href="/articles/{{$article->id}}">Read More</a>
                    </div>

                    <div class="panel-footer clearfix" style="background-color: white;">
                        <i class="fa fa-heart pull-right">

                        </i>
                    </div>
                </div>
            </div>
        @empty
            No Articles
        @endforelse
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{ $articles->links() }}
        </div>
    </div>
    @endsection