@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Завершенные уроки:</h1>
    <div class="admin__content">
        <a href="{{ route('admin.complitedTasks.create') }}" class="btn">Добавить</a>
        <h1>Добавленные уроки:</h1>
        <table>
            <thead>
                <td style="padding: 10px;">ID</td>
                <td>Name</td>
                <td>Test ID</td>
                <td>User ID</td>
                <td>Category</td>
                <td>Correct</td>
                <td>Points</td>
                <td>Time</td>
                <td>Action(CRUD)</td>
            </thead>
            <tbody>
                @foreach($complitedTasks as $lesson)
                    <tr>
                        <td>{{ $lesson->id }}</td>
                        <td>{{ $lesson->name }}</td>
                        <td>{{ $lesson->test_id }}</td>
                        <td>{{ $lesson->user_id }}</td>
                        <td>{{ $lesson->category }}</td>
                        <td>{{ $lesson->correct_count }}</td>
                        <td>{{ $lesson->points }}</td>
                        <td>{{ $lesson->time }}</td>
                        <td class="flex">
                            <a href="{{ route('admin.complitedTasks.show', $lesson->id) }}"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.complitedTasks.edit', $lesson->id) }}"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('admin.complitedTasks.delete', $lesson->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
