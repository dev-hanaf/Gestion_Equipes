@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $equipe->nom }}</h1>
        <p>score: {{ $equipe->score }}</p>
        <a href="{{ route('equipe.edit', $equipe) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('equipe.destroy', $equipe) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this equipe?')">Delete</button>
        </form>
        <a href="{{ route('equipe.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
