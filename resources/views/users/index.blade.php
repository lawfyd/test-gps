@extends('app')

@section('content')
    @include('parts.success')
    <div class="container">
        <a class="btn btn-primary" href="{{ route('users.create') }}">Add user</a>
        <a class="btn btn-primary" href="{{ route('countries.create') }}">Add country</a>
    </div>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Country name</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->country->name }}</td>
                <td><a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a></td>
                <td>
                    <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection