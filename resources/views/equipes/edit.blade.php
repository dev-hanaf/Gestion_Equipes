@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Equipe</h1>
        <form action="{{ route('equipe.update', $equipe) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">nom</label>
                <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom', $equipe->nom) }}" required>
                @error('nom')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="score">score</label>
                <input type="number" name="score" id="score" class="form-control @error('score') is-invalid @enderror" value="{{ old('score', $equipe->score) }}" required>
                @error('score')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">Update Equipe</button>
        </form>
    </div>
@endsection
