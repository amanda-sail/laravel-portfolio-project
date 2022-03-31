@extends('layouts/back')

@section('content')
    <table class="table table-striped table-hover caption-top">
        <caption>Section Introduction</caption>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <thead>
            <tr>
                <th>ID</th>
                <th scope="col">Header:</th>
                <th scope="col">Description:</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $fact->id }}</th>
                <td>{{ $fact->section_header }}</td>
                <td>{{ $fact->section_desc }}</td>
                <td>
                    <a class="btn btn-dark" href="/backoffice/fact/edit/{{ $fact->id }}">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="table table-striped table-hover caption-top">
        <caption>Fact Section</caption>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <thead>
            <tr class="align-middle">
                <th>ID</th>
                <th scope="col">Icon:</th>
                <th scope="col">Number:</th>
                <th scope="col">Title:</th>
                <th scope="col">Description:</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr class="align-middle">
                <th scope="row">{{ $fact->id }}</th>
                <td>{{ $fact->fact_icon }}</td>
                <td>{{ $fact->fact_number }}</td>
                <td>{{ $fact->fact_title }}</td>
                <td>{{ $fact->fact_desc }}</td>
                <td>
                    <a type="button" class="btn btn-dark" href="/backoffice/fact/edit/{{ $fact->id }}">Edit</a>
                </td>
                <td>
                    <a type="button" class="btn btn-danger" href="/backoffice/fact/delete/{{ $fact->id }}">Delete</a>
                </td>
                <td>
                    <a type="button" class="btn btn-success" href="/backoffice/fact/create">Create</a>
                </td>
                <td>
                    <a type="button" class="btn btn-primary" href="/backoffice/fact/show/{{ $fact->id }}">Show</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
