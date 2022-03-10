@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Nueva Actividad</h1>
            <form action="/activities" method="post">
                @csrf
                <div>
                    <label for="name">Actividad</label>
                    <input type="text" name="name" id="name">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="description">Descripción</label>
                    <input type="text" name="description" id="description">
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="duration">Duración</label>
                    <input type="number" name="duration" id="duration">
                    @error('duration')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="participants">Máximo de participantes</label>
                    <input type="number" name="participants" id="participants">
                    @error('participants')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <input type="submit" value="crear">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection