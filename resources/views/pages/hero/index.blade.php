@extends('layouts/back')

@section('content')
    <table class="table table-striped table-hover caption-top">
        <caption>Hero Section</caption>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
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
                    <a type="button" class="btn btn-dark" href="/backoffice/hero/edit/{{ $hero->id }}">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
