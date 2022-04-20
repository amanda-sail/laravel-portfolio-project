@extends('layouts/back')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <table class="table table-striped table-hover caption-top">
        <caption>Header and Description</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th scope="col">Section Header:</th>
                <th scope="col">Section Description:</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sectionIntro as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->section_header }}</td>
                    <td>{{ $item->section_desc }}</td>
                    <td>
                        <a class="btn btn-dark" href="{{ route('section.edit',$item->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table class="table table-striped table-hover caption-top">
        <caption>About Section</caption>
        <thead>
            <tr class="align-middle">
                <th>ID</th>
                <th scope="col">Job Title:</th>
                <th scope="col">Job Intro:</th>
                <th scope="col">Job Description:</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            
            <td>{{ $header[$key]->profile_pic }}</td>
            @foreach ($about as $key => $item)
                <tr class="align-middle">
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->job_title }}</td>
                    <td>{{ $item->job_intro }}</td>
                    <td>{{ $item->job_desc }}</td>
                    <td>
                        <a type="button" class="btn btn-dark" href="{{ route('about.edit', $about->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             p
    </table>
@endsection
