@extends('layouts/back')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
{{-- Hero --}}
    <table class="table table-striped table-hover caption-top">
        <caption>Hero Section</caption>
        <thead>
            <tr class="align-middle">
                <th>ID</th>
                <th scope="col">Profile Name:</th>
                <th scope="col">Desired Job Positions:</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr class="align-middle">
                <th scope="row">{{ $hero->id }}</th>
                <td>{{ $header->name }}</td>
                <td>{{ $hero->job_titles }}</td>
                <td>
                    <a type="button" class="btn btn-dark" href="{{ route('hero.edit', $hero->id) }}">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
{{-- Section Headers & Desc --}}
    <table class="table table-striped table-hover caption-top">
        <caption>Section Headers and Descriptions</caption>
        <thead>
            <tr class="align-middle">
                <th>ID</th>
                <th scope="col">Section Header:</th>
                <th scope="col">Section Description:</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sectionIntro as $item)
                <tr class="align-middle">
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->section_header }}</td>
                    <td>{{ $item->section_desc }}</td>
                    <td>
                        <a type="button" class="btn btn-dark" href="{{ route('section.edit', $item->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
