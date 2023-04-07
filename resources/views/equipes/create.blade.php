@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Equipe</h1>
        <form action="{{ route('equipe.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">nom</label>
                <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" required>
                @error('nom')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="stock">score</label>
                <input type="number" name="score" id="score" class="form-control @error('score') is-invalid @enderror" value="{{ old('score') }}" required>
                @error('score')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create Equipe</button>
        </form>
    </div>
@endsection
