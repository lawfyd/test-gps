@extends('app')
@section('content')
    <form method="POST" action="{{ route('countries.store') }}">
        @csrf
        @include('parts.errors')
        <div class="form-group">
            <label for="name">Country</label>
            <input name="name" type="text" class="form-control @if($errors->has('name')) is-invalid @endif"
                   id="name" aria-describedby="User name"
                   placeholder="Enter country" value={{ old('name') }}>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection