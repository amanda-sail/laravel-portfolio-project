@extends('layouts/back')

@section('content')
    <table class="table table-striped table-hover caption-top">
        <caption>Header Items</caption>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <thead>
            <tr class="align-middle">
                <th>ID</th>
                <th scope="col">Profile Name:</th>
                <th scope="col">Profile Picture:</th>
                <th scope="col">Profile Links To:</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($header as $item)
                <tr class="align-middle">
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td><img src="{{ asset($item->profile_pic) }}" alt=""></td>
                    <td>{{ $item->link_to }}</td>
                    <td>
                        <a type="button" class="btn btn-dark" href="/backoffice/header/edit/{{ $item->id }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table class="table table-striped table-hover caption-top">
        <caption>Navbar Items</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th scope="col">Page Name:</th>
                <th scope="col">Page Link:</th>
                <th scope="col">Page Icon:</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($navbar as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->nav_name }}</td>
                    <td>{{ $item->nav_to }}</td>
                    <td><img src="{{ asset($item->nav_icon) }}" alt=""></td>
                    <td>
                        <a class="btn btn-dark" href="/backoffice/navbar/edit/{{ $item->id }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table class="table table-striped table-hover caption-top">
        <caption>Social Media Items</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th scope="col">Social Media Name:</th>
                <th scope="col">Social Media Link:</th>
                <th scope="col">Social Media Icon:</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($social_media as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->media_class }}</td>
                    <td><img src="{{ asset($item->media_icon) }}" alt=""></td>
                    <td>{{ $item->media_link }}</td>
                    <td>
                        <a class="btn btn-dark" href="/backoffice/social_media/edit/{{ $item->id }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
