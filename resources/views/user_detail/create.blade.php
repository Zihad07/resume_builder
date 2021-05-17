@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card card-body">
            <form action="{{ route('user-detail.store') }}" class="row g-3" method="post">
                @csrf
                <div class="col-md-4">
                    <label for="fullname" class="form-label"><strong>Fullname</strong></label>
                    <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" id="fullname">
                    @error('fullname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="email" class="form-label"><strong>Email</strong></label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="phone" class="form-label"><strong>Phone</strong></label>
                    <input type="text" name="phone" class="form-control @error('email') is-invalid @enderror" id="phone">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="address" class="form-label"><strong>Address</strong></label>
                    <input type="text" name="address" class="form-control" id="address">
                </div>


                <div class="col-12 mt-2 text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
