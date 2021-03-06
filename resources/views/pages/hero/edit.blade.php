@extends('layouts/back')

@section('content')
    @if ($errors->any())
        <div class='alert alert-danger'>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('hero.update', $hero->id) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Profile Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name"
                value="{{ $header->name }}">
        </div>
        <div class="mb-3">
            <label for="job_titles" class="form-label">Desired Job Positions:</label>
            <input type="text" class="form-control" id="job_titles" aria-describedby="job_titles" name="job_titles"
                value="{{ $hero->job_titles }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
