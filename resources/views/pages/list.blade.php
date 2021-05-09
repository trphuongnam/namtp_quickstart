@extends('template.master')
@section('content')
<table class="table table-striped">
    <tr>
        <th>All Task</th>
        <th>Date created</th>
        <th></th>
    </tr>

    @foreach ($task as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{date('d-m-Y', strtotime($item->created_at))}}</td>
        <td>
            <a href="del/{{$item->id}}" class="btn btn-outline-danger">Delete</a>
        </td>
    </tr>
    @endforeach
    
</table>
@endsection