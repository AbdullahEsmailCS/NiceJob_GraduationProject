@extends('front.layouts.appbootstrap')

@section('main')

<div class="main-wrapper" style="margin-top: 100px">

    <div class="content container-fluid ">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Acount</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="teachers.html">Users</a>
                        </li>
                        <li class="breadcrumb-item active">Personal Information</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row m-5">
            <div class="col-sm-12">
                <div class="card ">
                    <div class="card-body">
                        <form class="" action=" {{ route('user-personal-information-update') }}" method="GET">
                            @csrf
                            <div class="row">

                                <div class="col-12">
                                    <h5 class="form-title"><span>Personal Information</span></h5>
                                </div>


                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Full Name <span class="login-danger">*</span></label>
                                        <input type="text" name="full_name" class="form-control"
                                            placeholder="Enter Full Name" value="{{ $personalInfo->full_name}}" />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Gender <span class="login-danger">*</span></label>
                                        <select name="gender" class="form-control select">
                                            <option value="">{{ $personalInfo->gender}}</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Date Of Birth
                                            <span class="login-danger">*</span></label>
                                        <input name="birth_date" class="form-control " type="date"
                                            value="{{ $personalInfo->birth_date}}" />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nationality: <span class="login-danger">*</span></label>
                                        <select name="nationality" id="country" class="form-control select" required>
                                            <option value="">Select Nationality</option>
                                            <option value="Yemeni" selected>{{ $personalInfo->nationality}}</option>
                                            @foreach($countries as $country)
                                            <option value="{{ $country->id }}"> {{ $country->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Country <span class="login-danger">*</span></label>
                                        <select name="residence_country" id="country" class="form-control select"
                                            required>
                                            <option value="">Select Country</option>
                                            <option value="Yemen" selected>{{ $personalInfo->residence_country}}
                                            </option>
                                            @foreach($countries as $country)
                                            <option value="{{ $country->name }}"> {{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>City <span class="login-danger">*</span></label>
                                        <select name="city" id="city" class="form-control select" required>
                                            <option value="">Select City</option>
                                            <option value="Aden" selected>{{ $personalInfo->city}}</option>
                                            @foreach($cities as $city)
                                            <option value="{{ $city->name }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group local-forms">
                                        <label>Address <span class="login-danger">*</span></label>
                                        <input type="text" name="address" class="form-control"
                                            placeholder="Enter address" value=" {{ $personalInfo->address}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h5 class="form-title"><span>Contact Information</span></h5>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Mobile <span class="login-danger">*</span></label>
                                        <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile"
                                            value="{{ $personalInfo->mobile}}" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Phone <span class="login-danger">*</span></label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone"
                                            value="{{ $personalInfo->phone}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group local-forms">
                                        <label>Website <span class="login-danger">*</span></label>
                                        <input type="text" name="website" class="form-control"
                                            placeholder="Enter address" value="{{ $personalInfo->website}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection