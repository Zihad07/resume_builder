@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Welcome to cv Builder</h2>
        <a href="{{ route('user-detail.create') }}" class="btn btn-primary">Build your resume now</a>
    </div>
@endsection
