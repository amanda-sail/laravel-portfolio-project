@extends('layouts/back')

@section('content')
    <form action="{{ route("fact.update", $fact->id) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="fact_icon" class="form-label">Icon:</label>
            <input type="text" class="form-control" id="fact_icon" aria-describedby="fact_icon" name="fact_icon" value="{{ $fact->fact_icon }}">
        </div>
        <div class="mb-3">
            <label for="fact_number" class="form-label">Number:</label>
            <input type="text" class="form-control" id="fact_number" name="fact_number" value="{{ $fact->fact_number }}">
        </div>
        <div class="mb-3">
            <label for="fact_title" class="form-label"> Title:</label>
            <input type="text" class="form-control" id="fact_title" aria-describedby="fact_title" name="fact_title" value="{{ $fact->fact_title }}">
        </div>
        <div class="mb-3">
            <label for="fact_desc" class="form-label"> Description:</label>
            <input type="text" class="form-control" id="fact_desc" aria-describedby="fact_desc" name="fact_desc" value="{{ $fact->fact_desc }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
