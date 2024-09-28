@extends('front.layouts.app')

@section('main')
<div class="container">
    <h1>View Personal Information</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Full Name:</strong> {{ $personalInfo->full_name }}</p>
            <p><strong>Mobile:</strong> {{ $personalInfo->mobile }}</p> 
        </div>
    </div>
    <a href="{{ route('personal-info.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection