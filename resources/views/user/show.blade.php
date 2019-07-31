@extends('user.layout')

@section('content')
    <div class="row bg-info m-0">
        <div class="col-lg-12 mt-2   mt-3 ">
            <div class="pull-left">
                <h2 class="mr-2 "> Show Information User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary pull-right" href="{{ route('user.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row mt-3  d-flex justify-content-center">
        <div class="card mr-2 ">
            <div class="card-header">Info User</div>
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light text-info">
                    <div class="form-group">
                        <h1>Name:{{$user->name}}</h1>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Number Phone:</strong>
                        {{ $user->phone }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $user->email }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Birth Day:</strong>
                        {{ $user->dob }}
                    </div>
                </div>
            </div>
        </div>
        <div class="   user-avatar">
            <img src="{{$url_avatar}}" alt="img avatar">
        </div>
    </div>
@endsection