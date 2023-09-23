@extends('layouts.app')

<div>
    <a href="{{ route('todo.create') }}">Add a task</a>

</div>

<div class="table-responsive">
    <table class="table table-primary" border="1px solid black">
        <thead>
            <tr>
                <th scope="col">SN</th>
                <th scope="col">Task</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr class="">
                    <td scope="row">{{ $task->id }}</td>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->task }}</td>
                    <td>
                        <a href="{{ route('todo.edit', ['todo' => $task]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('todo.destroy', ['todo' => $task]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
