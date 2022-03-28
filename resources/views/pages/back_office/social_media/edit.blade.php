@extends('layouts/back')

@section('content')
    <form action="{{ route("social_media.update", $social_media) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="media_class" class="form-label">Page/Section Name</label>
            <input type="text" class="form-control" id="media_class" aria-describedby="media_class" name="media_class" value="{{ $social_media ->media_class}}">
        </div>
        <div class="mb-3">
            <label for="media_link" class="form-label">Email address</label>
            <input type="text" class="form-control" id="media_link" aria-describedby="media_link" name="media_link" value="{{ $social_media->media_link }}">
        </div>
        <div class="mb-3">
            <label for="media_icon" class="form-label">Email address</label>
            <input type="text" class="form-control" id="media_icon" aria-describedby="media_icon" name="media_icon" value="{{ $social_media->media_icon }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
