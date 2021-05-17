@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card card-body">
            <h2>experience Edit</h2>
            <hr>
            <form action="{{ route('experience.update', $experience->id) }}" class="row g-3" method="post">
                @csrf
                @method('put')
                <div class="col-md-6">
                    <label for="job_title" class="form-label"><strong>Job title</strong></label>
                    <input type="text" name="job_title" class="form-control @error('job_title') is-invalid @enderror" id="job_title" value="{{ $experience->job_title }}">
                    @error('job_title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="employer" class="form-label"><strong>Employer</strong></label>
                    <input type="text" name="employer" class="form-control @error('employer') is-invalid @enderror" id="employer" value="{{ $experience->employer }}">
                    @error('employer')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="city" class="form-label"><strong>City</strong></label>
                    <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" id="city" value="{{ $experience->city }}">
                    @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="state" class="form-label"><strong>State</strong></label>
                    <input type="text" name="state" class="form-control @error('state') is-invalid @enderror" id="state" value="{{ $experience->state }}">
                    @error('state')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="start_date" class="form-label"><strong>Start date</strong></label>
                    <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" value="{{ $experience->start_date }}">
                    @error('start_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="end_date" class="form-label"><strong>End date</strong></label>
                    <input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" value="{{ $experience->end_date }}">
                    @error('end_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>



                <div class="col-12 mt-2 text-right">
                    <button type="submit" class="btn btn-primary">Save Experience</button>
                </div>
            </form>
        </div>
    </div>
@endsection
