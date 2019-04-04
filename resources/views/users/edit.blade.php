@extends('app')
@section('content')
    @include('parts.success')
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PATCH')
        @include('parts.errors')

        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control @if($errors->has('name')) is-invalid @endif"
                   id="name" aria-describedby="User name"
                   placeholder="Enter name" value="{{ old('name', $user->name) }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="text" class="form-control @if($errors->has('email')) is-invalid @endif"
                   id="email" placeholder="Email" value="{{ old('email', $user->email) }}">
        </div>

        <div class="form-group">
            <label for="country_id">Country</label>
            <select name="country_id"
                    class="form-control @if($errors->has('country_id')) text-danger @endif"
                    id="country_id">
                <option value="">Select country</option>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}"
                            @if($country->id == old('country_id', $user->country->id)) selected @endif>
                        {{ $country->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection