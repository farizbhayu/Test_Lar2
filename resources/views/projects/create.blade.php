@extends('layout')

@section('content')
    <h1 class="title">Create a New Project</h1>
    
    <form method="POST" action="/projects">
         {{ csrf_field() }}

        <div class="field">
            <label for="title" class="label">Title</label>
        <input type="text" class="input {{ $errors->has('title') ? 'is-danger': '' }}" name="title" value="{{ old('title') }}" placeholder="Project Title" required>
        </div>

        <div class="field">
            <label for="title" class="label">Description</label>
            
            <div class="control">
                <textarea name="desc" placeholder="Project Description" class="textarea {{ $errors->has('title') ? 'is-danger': '' }}" required>{{ old('desc') }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
                <button type="reset" class="button is-danger">Cancel</button>
            </div>
        </div>


        @include('errors')
    </form>

@endsection()