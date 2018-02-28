@extends('layout.layout')
@section('content')
    <div class="col-lg-8">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User ID</th>
                <th scope="col">Name</th>
                <th scope="col">Completed</th>
            </tr>
            </thead>
            <tbody>

            @foreach($tasks as $task)
                <tr>
                    <th scope="row">{{$task->id}}</th>
                    <td>{{$task->user_id}}</td>
                    <td>{{$task->name}}</td>
                    <td>{{$task->completed}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection