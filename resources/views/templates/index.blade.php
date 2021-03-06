@extends('layout.default')

@section('content')
    <h1>Templates</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($templates as $template)
                <tr>
                    <td><a href="{{ route('settings-template-detail', ['id' => $template->id]) }}">{{ $template->title }}</a></td>
                    <td>{{ $template->handle }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop