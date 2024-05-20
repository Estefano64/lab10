@extends('layout')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('notes.update', $note) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="course">Course</label>
            <input id="course" name="course" type="text" class="form-control" value="{{ $note->course }}" required>
        </div>
        <div class="form-group">
            <label for="note">Note</label>
            <textarea id="note" name="note" class="form-control" required>{{ $note->note }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Note</button>
    </form>
</div>
@endsection