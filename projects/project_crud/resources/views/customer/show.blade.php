@extends('layout/app');

@section('content')
    <div class="row py-5 px-4">
        <div class="col-md-5 mx-auto"> <!-- Profile widget -->
            <a href="{{ route('customer.index') }}" class="btn mb-3" style="background-color: #4643d3; color: white;"><i
                    class="fas fa-chevron-left"></i> Back</a>
            <div class="bg-white shadow rounded overflow-hidden">
                <div class="px-4 pt-0 pb-4 cover">
                    <div class="media align-items-end profile-head d-flex">
                        <div class="profile mr-3">
                            <img src="{{ asset($customerdata->image) }}"
                                alt="..." width="130" class="rounded mb-2 img-thumbnail">
                        </div>
                        <div class="media-body mb-5 text-white">
                            <h4 class="mt-0 mb-0">{{$customerdata->first_name}} {{$customerdata->last_name}}</h4>
                            <p class="small mb-4">{{$customerdata->email}}</p>
                        </div>
                    </div>
                </div>

                <div class="px-4 py-3">
                    <div class="p-4 rounded shadow-sm bg-light">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td style="width: 250px;">First Name</td>
                                    <td>{{$customerdata->first_name}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 250px;">Last Name</td>
                                    <td>{{$customerdata->last_name}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 250px;">Email</td>
                                    <td>{{$customerdata->email}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 250px;">Phone</td>
                                    <td>{{$customerdata->phone_number}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 250px;">Account Number</td>
                                    <td>{{$customerdata->account_number}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@show

@push('custom-css')
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush
