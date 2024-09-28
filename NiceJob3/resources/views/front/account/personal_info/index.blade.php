@extends('front.layouts.app')

@section('main')
<div class="container">
    <h1>User Personal Information</h1>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="card">
        <div class="card-header">
            <h2>{{ $userPersonalInformation->full_name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Birth Date:</strong> {{ $userPersonalInformation->birth_date }}</p>
            <p><strong>Gender:</strong> {{ $userPersonalInformation->gender }}</p>
            <p><strong>Nationality:</strong> {{ $userPersonalInformation->nationality }}</p>
            <p><strong>Residence Country:</strong> {{ $userPersonalInformation->residence_country }}</p>
            <p><strong>City:</strong> {{ $userPersonalInformation->city }}</p>
            <p><strong>Mobile:</strong> {{ $userPersonalInformation->mobile }}</p>
            <p><strong>Phone:</strong> {{ $userPersonalInformation->phone }}</p>
            <p><strong>Address:</strong> {{ $userPersonalInformation->address }}</p>
            <p><strong>Website:</strong> <a href="{{ $userPersonalInformation->website }}" target="_blank">{{
                    $userPersonalInformation->website }}</a></p>
            <a href="{{ route('user-personal-information.edit', $userPersonalInformation) }}"
                class="btn btn-primary">Edit</a>
        </div>
    </div>
</div>
@endsection
@endsection