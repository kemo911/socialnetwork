@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Edit the Article
                </div>

                <div class="panel-body">
                    <form method="post" action="/articles/{{$article->id}}">
                        {{ method_field('PUT') }}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" placeholder="Enter your Article " class="form-control">{{ $article->content }}</textarea>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="live" {{$article->live == 1 ? 'checked' : '' }}> Live
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="post_on">Post On</label>
                            <input type="datetime-local" name="post_on" class="form-control" value="{{ $article->post_on->format('Y-m-d\TH:i:s') }}">
                        </div>
                        <input type="submit" class="btn btn-success pull-right" value="Submit">
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection