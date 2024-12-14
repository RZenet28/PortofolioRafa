@extends('layouts.admin')

@section('content')
    <h1>Create Home Page Content</h1>

    <form action="{{ route('homes.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title">
        
        <label>Content:</label>
        <textarea name="content"></textarea>

        <button type="submit">Create</button>
    </form>
@endsection