@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card card-body">
            <h2>experience Edit</h2>
            <hr>
            <form action="{{ route('user-detail.update', $userDetail->id) }}" class="row g-3" method="post">
                @csrf
                @method('put')
                <div class="col-md-6">
                    <label for="fullname" class="form-label"><strong>Skill fullname</strong></label>
                    <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" id="fullname" value="{{ $userDetail->fullname }}">
                    @error('fullname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label"><strong>Email</strong></label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $userDetail->email }}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label"><strong>phone</strong></label>
                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" value="{{ $userDetail->phone }}">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label"><strong>Address</strong></label>
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" value="{{ $userDetail->address }}">
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>




                <div class="col-12 mt-2 text-right">
                    <button type="submit" class="btn btn-primary">Update User Details</button>
                </div>
            </form>
        </div>
    </div>
@endsection
