
<body>
    <h1>
        Edit List
    </h1>
    @if($errors->any())
        <ul>
            @foreach ($errors->all as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

    @endif
    <form action="{{route('todo.update', ['todo'=>$todo])}}" method="post">
        @csrf
        @method('put')


        <label for="name">Task</label>
        <input type="text" name="name" value="{{$todo->name}}">


        <label for="desc">Description</label>
        <input type="text" name="task"  value="{{$todo->task}}">

        <input type="submit" value="Update">

    </form>

</body>
@extends('layouts.app')
