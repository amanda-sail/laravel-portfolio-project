@extends('layouts/back')

@section('content')
    <form action="{{ route("about.update", $about->id) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="job_title" class="form-label">Job Title:</label>
            <input type="text" class="form-control" id="job_title" aria-describedby="job_title" name="job_title" value="{{ $about->job_title }}">
        </div>
        <div class="mb-3">
            <label for="job_intro" class="form-label">Job Intro:</label>
            <input type="text" class="form-control" id="job_intro" name="job_intro" value="{{ $about->job_intro }}">
        </div>
        <div class="mb-3">
            <label for="job_desc" class="form-label">Job Description:</label>
            <input type="text" class="form-control" id="job_desc" aria-describedby="job_desc" name="job_desc" value="{{ $about->job_desc }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
