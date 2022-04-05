@extends('layouts/back')

@section('content')
    <form action="{{ route("section.update", $sectionIntro->id) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="section_header" class="form-label">Section Header:</label>
            <input type="text" class="form-control" id="section_header" aria-describedby="section_header" name="section_header" value="{{ $sectionIntro->section_header }}">
        </div>
        <div class="mb-3">
            <label for="section_desc" class="form-label">Section Description:</label>
            <input type="text" class="form-control" id="section_desc" aria-describedby="section_desc" name="section_desc" value="{{ $sectionIntro->section_desc }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
