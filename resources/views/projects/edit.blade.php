@extends('layout')

@section('content')
    <h1 class="title">Edit Project</h1>

<form method="POST" action="/projects/{{ $project->id }}">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}

        <div class="field">
            <label for="title" class="label">Title</label>

            <div class="control">
            <input type="text" name="title" placeholder="title" value="{{ $project->title }}">
            </div>
        </div>

        <div class="field">
            <label for="title" class="label">Description</label>

            <div class="control">
            <textarea name="desc" class="textarea">{{ $project->desc }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>
    </form>
@endsection()