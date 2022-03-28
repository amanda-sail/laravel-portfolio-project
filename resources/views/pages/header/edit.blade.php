@extends('layouts.backoffice_layout')

@section('content')
    <form action="{{ route("header.update", $header->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Profile Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="{{ $header->name }}">
        </div>
        <div class="mb-3">
            <label for="profile_pic" class="form-label">Profile Picture</label>
            <input type="file" class="form-control" id="profile_pic" name="profile_pic" value="{{ $header->profile_pic }}">
        </div>
        <div class="mb-3">
            <label for="link_to" class="form-label">Profile Links To:</label>
            <input type="text" class="form-control" id="link_to" aria-describedby="link_to" name="link_to" value="{{ $header->link_to }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
