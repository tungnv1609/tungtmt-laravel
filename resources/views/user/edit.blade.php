@extends('user.layout')

@section('content')
    <div class="row bg-info m-0">
        <div class="col-lg-12 mt-3">
            <div class="pull-left">
                <h2>Edit User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Number Phone:</strong>
                    <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Birth Day:</strong>
                    <input type="date" name="dob" value="{{ $user->dob }}" class="form-control" placeholder="Birth Day">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" name="password" value="{{ $user->password }}" class="form-control"
                           placeholder="Password">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Avatar:</strong><br>
{{--                    <form action="{{route('postFile')}}" method="post" enctype="multipart/form-data">--}}
                        <input type="file" name="avatar">
{{--                        <input type="submit" name="">--}}
{{--                    </form>--}}
                </div>
            </div>
            <div class="d-flex justify-content-center button-submit-edit">
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </div>


    </form>
@endsection