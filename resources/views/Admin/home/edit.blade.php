@extends('layouts.admin')

@section('content')
    <h1>Edit Home Page Content</h1>

    <form action="{{ route('homes.update', $home->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Title:</label>
        <input type="text" name="title" value="{{ $home->title }}">
        
        <label>Content:</label>
        <textarea name="content">{{ $home->content }}</textarea>

        <button type="submit">Update</button>
    </form>
@endsection