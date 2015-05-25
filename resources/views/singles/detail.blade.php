<?php
$this->PlainText = $app->make('\App\CMS\FieldTypes\PlainText');
$this->Dropdown = $app->make('\App\CMS\FieldTypes\Dropdown');
?>

@extends('layout.default')

@section('content')

    <h1>{{ empty($single->id) ? 'Add' : 'Edit' }} Single</h1>
    <form id="EntryForm" method="post">
        {!! $this->PlainText->render('title', ['maxlength' => 255, 'value' => $single->title]) !!}
        {!! $this->PlainText->render('handle', ['maxlength' => 255, 'value' => $single->handle]) !!}
        {!! $this->Dropdown->render('template_id', ['id' => 'EntryType', 'options' => $templates->lists('title', 'id'), 'value' => $single->template_id]) !!}
        <h2>Settings</h2>
        <div class="well">
            <div id="EntrySettings" data-type="templates" data-settings="{{ $entrySettings }}"></div>
        </div>
        <button class="btn btn-danger">Save</button>
    </form>

@stop