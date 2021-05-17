@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Education Summary</h2>
    <hr>
    @foreach ($education as $e)
    <div class="card card-body my-2">
        <h3>{{ $e->degree }}, {{ $e->school_name}} ({{ $e->graduation_start_date }} - {{ $e->graduation_end_date }})
        </h3>
        <hr>

        <div>
            <a id="edit" class="btn btn-sm btn-primary mr-2" href="{{ route('education.edit', $e->id) }}"
                role="button">Edit</a>

            <form action="{{ route('education.destroy', $e->id) }}" method="post">
                @csrf
                @method('delete')
                <button id="delete" type="submit" name="delete" class="btn btn-sm btn-danger d-inline"
                    onclick="return confirm('are you want to delete');">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
    <a name="" id="add_new_education" class="btn btn-sm btn-info my-2" href="{{ route('education.create') }}"
        role="button">Add another education</a>
    <a name="" id="add_new_education" class="btn btn-sm btn-info my-2" href="{{ route('experience.index') }}"
        role="button">Work history</a>
</div>
@endsection
