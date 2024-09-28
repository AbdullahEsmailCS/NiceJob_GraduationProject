@extends('front.layouts.appbootstrap')

@section('main')

<div class="mt-5">
    <div class="container" style=" margin-top: 120px ;font-size: 11px;">
        <div class="row">
            <div class="col-lg-8">
                <div class="card shadow rounded p-md-6 px-3 py-4 mb-4">
                    <div class="row">
                        <div class="col-lg-9 order-12 order-lg-1">
                            <div class="text-center mt-3 mt-lg-0 text-lg-left">
                                <h3 class="fs-28 mb-1">{{ $user->name }}</h3>
                                <span class="text-secondary font-weight-semibold fs-16 mb-5 d-block">{{
                                    $user->designation }}</span>
                                <div class="d-flex flex-column flex-lg-row">
                                    <span class="text-dark font-weight-semibold fs-14 d-block"><i
                                            class="fas fa-map-marker-alt mr-1"></i>{{ $personalInfo->residence_country
                                        }}, {{ $personalInfo->city}}</span>
                                    <div> <span class="text-secondary font-weight-semibold fs-13 d-block ml-3"><i
                                                class="fas fa-circle mr-1 text-danger"></i>Not looking for a job</span>
                                        <span class="text-secondary font-weight-semibold fs-13 d-block ml-3"><i
                                                class="fas fa-circle mr-1 text-success"></i>Last Active: Sunday</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-3 d-flex justify-content-center justify-content-lg-end align-items-center order-1 order-lg-12">
                            <div class="border border-info position-relative">
                                <img src="{{ asset('uploads/images/profile_pic/'.Auth::user()->image) }}"
                                    class="img-cover w-100px h-100px" width="100" height="100" alt="{{ $user->name }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-list rounded shadow my-4">
                    <div class="card-header d-flex align-items-center justify-content-between pt-5">
                        <div>
                            <h3> <i class="fas fa-user-circle"></i> Personal Information</h3>
                        </div>
                        <div class="lh-1">
                            <a href="{{ route('user-personal-information-update') }}"
                                class="btn btn-link text-main p-0 font-weight-semibold">
                                <i class="far fa-edit"></i>
                                <span>Edit</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-list-item pt-3">
                            <div class="form-row row">
                                <div class="col-sm-12">
                                    <table class="table table-text mb-0 lh-1">
                                        <tbody>
                                            <tr>
                                                <td width="100"><span class="text-secondary">Full Name:</span></td>
                                                <td>
                                                    <span class="text-dark font-weight-semibold">{{
                                                        $personalInfo->full_name }}</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-8">
                                    <table class="table table-text mb-0 lh-1">
                                        <tbody>
                                            <tr>
                                                <td width="100"><span class="text-secondary">Gender:</span></td>
                                                <td>
                                                    <span class="text-dark font-weight-semibold">{{
                                                        $personalInfo->gender}}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="100"><span class="text-secondary">Birth Date:</span></td>
                                                <td>
                                                    <span class="text-dark font-weight-semibold">{{
                                                        $personalInfo->birth_date}} </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="100"><span class="text-secondary">Address:</span></td>
                                                <td><span class="text-dark font-weight-semibold">{{
                                                        $personalInfo->address}} </span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class=" col-sm-4">
                                    <table class="table table-text mb-0 lh-1">
                                        <tbody>
                                            <tr>
                                                <td width="100"><span class="text-secondary">Nationality:</span>
                                                </td>
                                                <td><span class="text-dark font-weight-semibold">{{
                                                        $personalInfo->nationality}}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="100"><span class="text-secondary">Residence Country:</span>
                                                </td>
                                                <td><span class="text-dark font-weight-semibold">{{
                                                        $personalInfo->residence_country}}</span></td>

                                            </tr>
                                            <tr>
                                                <td width="100"><span class="text-secondary">City:</span>
                                                </td>
                                                <td><span class="text-dark font-weight-semibold">{{
                                                        $personalInfo->city}}</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-list rounded shadow my-4">
                    <div class="card-header d-flex align-items-center justify-content-between pt-5">
                        <div>

                            <h3><i class="fas fa-envelope"></i> Contact Information</h3>
                        </div>
                        <div class="lh-1">
                            <a href="{{ route('user-personal-information-update') }}"
                                class="btn btn-link text-main p-0 font-weight-semibold">
                                <i class="far fa-edit"></i>
                                <span>Edit</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body overflow-auto">
                        <div class="card-list-item pt-3">
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <table class="table table-text mb-0 lh-1">
                                        <tbody>
                                            <tr>
                                                <td width="100"><span class="text-secondary">Mobile:</span>
                                                </td>
                                                <td><span class="text-dark font-weight-semibold">{{
                                                        $personalInfo->mobile}}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="100"><span class="text-secondary">Phone:</span>
                                                </td>
                                                <td><span class="text-dark font-weight-semibold">{{
                                                        $personalInfo->phone}}</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-text mb-0 lh-1">
                                        <tbody>
                                            <tr>
                                                <td width="100"><span class="text-secondary">Website:</span>
                                                </td>
                                                <td><span class="text-dark font-weight-semibold">{{
                                                        $personalInfo->website}}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="100"><span class="text-secondary text-nowrap">Email:</span>
                                                </td>
                                                <td><span class="text-dark font-weight-semibold">{{
                                                        $user->email}}</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if ($user->role == 'applicant')
            <div class="col-lg-4">
                <div class="card shadow rounded mb-4 unlock-card">
                    <div class="px-6 pt-6 pb-5">
                        <div class="position-relative">
                            <a href="/users/download_cv/1710946"
                                class="mb-3 btn btn btn-primary btn-block btn-lg fs-20 py-3 px-2"><i
                                    class="fas fa-download mr-2 fs-16"></i>Download
                                CV</a>
                        </div>

                        <a href="mailto:{{ $user->email}}"
                            class="py-1 align-items-center btn btn-block btn-outline-primary btn-sm d-flex font-weight-extrabold fs-16 justify-content-between mb-1">
                            <i class="far fa-envelope fs-14 mr-2"></i>
                            <span class="flex-grow-1 ltr text-center max-w-90">{{ $user->email}}</span>
                        </a>

                        <a href="tel:{{ $personalInfo->mobile}}"
                            class="py-1 align-items-center btn btn-block btn-outline-primary btn-sm d-flex font-weight-extrabold fs-16 justify-content-between mb-1">
                            <i class="far fa-mobile-alt fs-14 mr-2"></i>
                            <span class="flex-grow-1 ltr text-center">{{ $personalInfo->mobile}}</span>
                        </a>

                        <a href="tel:{{ $personalInfo->phone}}"
                            class="py-1 align-items-center btn btn-block btn-outline-primary btn-sm d-flex font-weight-extrabold fs-16 justify-content-between mb-1">
                            <i class="far fa-mobile-alt fs-14 mr-2"></i>
                            <span class="flex-grow-1 ltr text-center">{{ $personalInfo->phone}}</span>
                        </a>
                    </div>
                </div>

                <div class="card shadow rounded mb-4 border border-white shadow-lg-hover border-hover-primary">
                    <a href="{{ route('user-personal-information-update')}}"
                        class="p-6 fs-16 d-flex align-items-center justify-content-between font-weight-bold text-dark">
                        <div>
                            <i class="fas fs-14 fa-file-user mr-2"></i>
                            <span>My Job Applications</span>
                        </div>
                        <div>
                            <i class="fas fa-arrow-right fs-12 text-primary"></i>
                        </div>
                    </a>
                </div>

                <div class="card shadow rounded mb-4 border border-white shadow-lg-hover mb-3 mb-lg-0">
                    <div class="card-header">
                        <i class="fas fa-file-user"></i>
                        <h3>Uploaded CV Files</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-list-item mb-4 delete-me">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-file-user mr-2 text-secondary"></i>
                                        <p class="font-weight-semibold mb-0 text-dark">Atef
                                            Mohmmed - full
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-file-user mr-2 invisible"></i>
                                        <span class="fs-12 text-secondary">English</span>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="/users/download_cv/1710946" target="_blank"
                                        class="pr-1 pl-1 btn btn-link text-secondary tip" title="Download"><i
                                            class="far fa-arrow-to-bottom"></i></a>
                                    <button type="button" class="pr-1 pl-1 btn btn-link text-secondary tip remove-cv"
                                        title="Remove" data-id data-delete-url="/users/remove_cv/1710946"><i
                                            class="far fa-times"></i></button>
                                    <button type="button" class="pr-0 pl-1 btn btn-link text-secondary tip" title="Edit"
                                        data-edit-url="/users/edit_cv/1710946"><i class="far fa-edit"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card-list-item mt-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-file-user mr-2 text-white invisible"></i>
                                <button type="button" data-toggle="modal" data-target="#formModalCV"
                                    class="btn btn-md py-1 px-2 btn-block btn-outline-dark d-flex align-items-center justify-content-between">
                                    <span>Add New</span>
                                    <i class="fas fa-arrow-to-top"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif


        </div>

    </div>
</div>

@endsection