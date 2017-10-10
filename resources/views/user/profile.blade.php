@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-info">
                <div class="panel-body text-center">
                    <center><img src="http://www.lovemarks.com/wp-content/uploads/profile-avatars/default-avatar-ginger-guy.png" class="img-circle img-responsive " style="max-width: 150px;"></center>

                    <h1> {{ $user->name }}</h1>
                    <h5> {{ $user->email }}</h5>
                    <h5> {{ $user->created_at->format('l j F Y')}} ({{ Carbon\Carbon::createFromFormat('Y-m-d',$user->dob)->age }} Years old)</h5>
                    <button class="btn btn-success">Follow</button>
                </div>

            </div>
        </div>
    </div>
@endsection