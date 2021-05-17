@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Work Summary</h2>
    <hr>
    @foreach ($experiences as $e)
    <div class="card card-body my-2">
        <h3>
            {{ $e->job_title }} ({{ $e->start_date }} to {{ $e->end_date }})
        </h3>
        <ul>
            <li>{{ $e->employer }}</li>
            <li>{{ $e->city }}</li>
            <li>{{ $e->state }}</li>
        </ul>
        <hr>

        <div>
            <a id="edit" class="btn btn-sm btn-primary mr-2" href="{{ route('experience.edit', $e->id) }}"
                role="button">Edit</a>

            <form action="{{ route('experience.destroy', $e->id) }}" method="post">
                @csrf
                @method('delete')
                <button id="delete" type="submit" name="delete" class="btn btn-sm btn-danger d-inline"
                    onclick="return confirm('are you want to delete');">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
    <a name="" id="add_new_education" class="btn btn-sm btn-info my-2" href="{{ route('experience.create') }}"
        role="button">Add another experience</a>
    <a name="" id="" class="btn btn-sm btn-info my-2" href="{{ route('skill.index') }}"
        role="button">Skill history</a>
</div>
@endsection
