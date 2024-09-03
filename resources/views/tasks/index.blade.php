@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tasks</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create Task</a>
    <ul>
        @foreach ($tasks as $task)
        <li>
            <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>
@endsection
