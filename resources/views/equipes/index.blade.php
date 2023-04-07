@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Equipes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>equipe</th>
                    <th>score</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipe as $equip)
                    <tr>
                        <td>{{ $equip->id }}</td>
                        <td>{{ $equip->nom }}</td>
                        <td>{{ $equip->score }}</td>
                        <td>
                            <a href="{{ route('equipe.show', $equip) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('equipe.edit', $equip) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('equipe.destroy', $equip) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this equipe?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('equipe.create') }}" class="btn btn-success">Create New Equipe</a>
    </div>
@endsection
