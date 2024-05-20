@extends('layout')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('notes.store') }}">
            @csrf
            <div class="form-group">
                <label for="course">Course</label>
                <input id="course" name="course" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <textarea id="note" name="note" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Note</button>
        </form>
    </div>
@endsection