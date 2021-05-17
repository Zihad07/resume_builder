@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Work Summary</h2>
    <hr>
    @foreach ($skills as $e)
    <div class="card card-body my-2">
        <h3>
            {{ $e->name }} ({{ $e->rating }})
        </h3>

        <hr>

        <div>
            <a id="edit" class="btn btn-sm btn-primary mr-2" href="{{ route('skill.edit', $e->id) }}"
                role="button">Edit</a>

            <form action="{{ route('skill.destroy', $e->id) }}" method="post">
                @csrf
                @method('delete')
                <button id="delete" type="submit" name="delete" class="btn btn-sm btn-danger d-inline"
                    onclick="return confirm('are you want to delete');">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
    <a name="" id="add_new_education" class="btn btn-sm btn-info my-2" href="{{ route('skill.create') }}"
        role="button">Add another skill</a>
</div>
@endsection
