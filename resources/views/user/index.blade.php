@extends('user.layout')


@section('content')
    <div class="row bg-info m-0">
        <div class="col-lg-12 mt-3">
            <div class="pull-left d-flex justify-content-center ">
                <h2 >Haposoft</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success create-new-user" href="{{ route('user.create') }}"> Create New User</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered p-0">
        <tr>
            <th class="bg-secondary">ID</th>
            <th  class="bg-secondary">Name</th>
            <th  class="bg-secondary">Number Phone</th>
            <th  class="bg-secondary">Email</th>
            <th  class="bg-secondary">Birth Day</th>
            <th  class="bg-secondary">Action</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td class="bg-light">{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td class="bg-light">{{ $user->phone }}</td>
                <td>{{ $user->email }}</td>
                <td class="bg-light">{{ $user->dob }}</td>
                <td>
                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('user.show',$user->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
{{ $users->links('pagination::bootstrap-4') }}


@endsection