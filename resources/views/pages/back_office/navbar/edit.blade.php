@extends('layouts/back')

@section('content')
    <form action="{{ route("navbar.update", $navbar->id) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nav_name" class="form-label">Page/Section Name</label>
            <input type="text" class="form-control" id="nav_name" aria-describedby="nav_name" name="nav_name" value="{{ $navbar ->nav_name}}">
        </div>
        <div class="mb-3">
            <label for="nav_to" class="form-label">Email address</label>
            <input type="text" class="form-control" id="nav_to" aria-describedby="nav_to" name="nav_to" value="{{ $navbar->nav_to }}">
        </div>
        <div class="mb-3">
            <label for="nav_icon" class="form-label">Email address</label>
            <input type="text" class="form-control" id="nav_icon" aria-describedby="nav_icon" name="nav_icon" value="{{ $navbar->nav_icon }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
