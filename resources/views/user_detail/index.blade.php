@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Work Summary</h2>
    <hr>

    <div class="card card-body my-2">
        <h3>Name: {{ $userDetail->fullname }}</h3>
        <h3>Email: {{ $userDetail->email }}</h3>
        <h3>Phone: {{ $userDetail->phone }}</h3>
        <h3>Address: {{ $userDetail->address }}</h3>

        <hr>

        <div>
            <a id="edit" class="btn btn-sm btn-primary mr-2" href="{{ route('user-detail.edit', $userDetail->id) }}"
                role="button">Edit</a>

            <form action="{{ route('user-detail.destroy', $userDetail->id) }}" method="post">
                @csrf
                @method('delete')
                <button id="delete" type="submit" name="delete" class="btn btn-sm btn-danger d-inline"
                    onclick="return confirm('are you want to delete');">Delete</button>
            </form>
        </div>
    </div>
    <a name="" id="" class="btn btn-sm btn-info my-2" href="{{ route('experience.index') }}"
        role="button">Experience history</a>
</div>
@endsection
