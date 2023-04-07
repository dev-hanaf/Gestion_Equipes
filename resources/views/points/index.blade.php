@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ url('/points/validate') }}">
        @csrf
        <label for="equipe_id">Equipe ID:</label>
        <select name="equipe_id" id="equipe_id" class="form-control">
            @foreach ($equipe as $e)
            <option value="{{$e->id}}" class="form-control">{{$e->id}}</option>
            @endforeach

        </select>

        <div class="mt-3">
            <label for="checkbox1">AV :</label>
            <input type="radio" id="checkbox1" name="checkbox" value="AV" class="form-check-input">
        </div>

        <div>
            <label for="checkbox2">AR :</label>
            <input type="radio" id="checkbox2" name="checkbox" value="AR" class="form-check-input">
        </div>

        <label for="number" class="mt-3">Number:</label>
        <input type="number" id="number" name="number" class="form-control mt-3">

        <button type="submit" class="btn btn-primary form-control mt-3">Validate</button>
    </form>
</div>
@endsection