@extends('template.master')
@section('title', 'Task')
@section('content')

{{-- Form add task --}}
@include('pages.index.add')

{{-- Show list task --}}
@include('pages.index.current_task')

@endsection