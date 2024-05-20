@extends('layout')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Listado de Notas</h1>
    <a href="{{ route('notes.create') }}" class="btn btn-primary mb-3" style="background-color: #007bff; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">Agregar Nota</a>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="border p-3"> 
        @foreach ($notes as $note)
            <div class="card mb-3" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s;">
                <div class="card-header bg-primary text-black" style="padding: 14px 20px; color: black; font-size: 22px; font-weight: bold;">
                    {{ $note->course }}
                </div>
                <div class="card-body" style="padding: 2%; border: 1px solid #ccc; border-radius: 5px;">
                    <p style="font-size: 18px; line-height: 1.6;">{{ $note->note }}</p>
                    <a href="{{ route('notes.edit', $note) }}" class="btn btn-success" style="background-color: #28a745; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">Editar</a>
                    <form method="POST" action="{{ route('notes.destroy', $note) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="background-color: #dc3545; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection


