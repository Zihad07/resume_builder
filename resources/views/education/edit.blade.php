@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card card-body">
            <h2>Education Edit</h2>
            <hr>
            <form action="{{ route('education.update', $education->id) }}" class="row g-3" method="post">
                @csrf
                @method('put')
                <div class="col-md-6">
                    <label for="school_name" class="form-label"><strong>School name</strong></label>
                    <input type="text" name="school_name" class="form-control @error('school_name') is-invalid @enderror" id="school_name" value="{{ $education->school_name }}">
                    @error('school_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="school_location" class="form-label"><strong>School location</strong></label>
                    <input type="text" name="school_location" class="form-control @error('school_location') is-invalid @enderror" id="school_location" value="{{ $education->school_location }}">
                    @error('school_location')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="degree" class="form-label"><strong>Degree</strong></label>
                    <input type="text" name="degree" class="form-control @error('degree') is-invalid @enderror" id="degree" value="{{ $education->degree }}">
                    @error('degree')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="field_of_study" class="form-label"><strong>Field of study</strong></label>
                    <input type="text" name="field_of_study" class="form-control @error('field_of_study') is-invalid @enderror" id="field_of_study" value="{{ $education->field_of_study }}">
                    @error('field_of_study')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="graduation_start_date" class="form-label"><strong>Graduation start date</strong></label>
                    <input type="date" name="graduation_start_date" class="form-control @error('graduation_start_date') is-invalid @enderror" id="graduation_start_date" value="{{ $education->graduation_start_date }}">
                    @error('graduation_start_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="graduation_end_date" class="form-label"><strong>Graduation end date</strong></label>
                    <input type="date" name="graduation_end_date" class="form-control @error('graduation_end_date') is-invalid @enderror" id="graduation_end_date" value="{{ $education->graduation_end_date }}">
                    @error('graduation_end_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>



                <div class="col-12 mt-2 text-right">
                    <button type="submit" class="btn btn-primary">Save Eductaion</button>
                </div>
            </form>
        </div>
    </div>
@endsection
