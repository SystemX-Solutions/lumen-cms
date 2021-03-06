@extends('layout.default')

@section('content')

    <h1>Fields</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Type</th>
                <th>Group</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fields as $field)
                <tr>
                    <td><a href="{{ route('settings-field-detail', ['id' => $field->id]) }}">{{ $field->title }}</a></td>
                    <td>{{ $field->type->title }}</td>
                    <td>{{ $field->group->title }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-primary" href="{{ route('settings-field-add') }}"><i class="fa fa-plus"></i> Add a Field</a>

@stop