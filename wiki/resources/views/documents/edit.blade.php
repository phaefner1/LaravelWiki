@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center text-light mb-4">Edit Document</h1>
    <form method="POST" action="/documents/{{ $document->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $document->name }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea id="content" name="content" class="form-control">{{ $document->content }}</textarea>
        </div>
        <div class="text-center">
            <input type="submit" value="Update Document" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection
