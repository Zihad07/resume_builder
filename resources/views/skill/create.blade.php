@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card card-body">
            <h2>Skill Details</h2>
            <hr>
            <form action="{{ route('skill.store') }}" class="row g-3" method="post">
                @csrf
                <div class="col-md-6">
                    <label for="name" class="form-label"><strong>Skill Name</strong></label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="rating" class="form-label"><strong>Rating</strong></label>
                    <input type="text" name="rating" class="form-control @error('rating') is-invalid @enderror" id="rating">
                    @error('rating')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>





                <div class="col-12 mt-2 text-right">
                    <button type="submit" class="btn btn-primary">Save Skill</button>
                </div>
            </form>
        </div>
    </div>
@endsection
