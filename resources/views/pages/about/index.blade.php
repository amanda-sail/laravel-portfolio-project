@extends('layouts/back')

@section('content')
    <table class="table table-striped table-hover caption-top">
        <caption>About Section Intro</caption>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <thead>
            <tr>
                <th>ID</th>
                <th scope="col">Section Header:</th>
                <th scope="col">Section Description:</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($section as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->section_header }}</td>
                    <td>{{ $item->section_desc }}</td>
                    <td>
                        <a class="btn btn-dark" href="/backoffice/section/edit/{{ $item->id }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table class="table table-striped table-hover caption-top">
        <caption>About Section</caption>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
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
            @foreach ($about as $key => $item)
                <tr class="align-middle">
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $header[$key]->profile_pic }}</td>
                    <td>{{ $item->job_title }}</td>
                    <td>{{ $item->job_intro }}</td>
                    <td>{{ $item->job_desc }}</td>
                    <td>
                        <a type="button" class="btn btn-dark" href="/backoffice/about/edit/{{ $about->id }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
