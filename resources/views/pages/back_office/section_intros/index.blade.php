@extends('layouts/back')

@section('content')
    <table class="table table-striped table-hover caption-top">
        <caption>Section Intros</caption>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <thead>
            <tr class="align-middle">
                <th>ID</th>
                <th scope="col">Section Header:</th>
                <th scope="col">Section Description:</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($section as $item)
                <tr class="align-middle">
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->header }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a type="button" class="btn btn-dark" href="/backoffice/header/edit/{{ $item->id }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
