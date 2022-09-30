@php
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Register Basic - Pages')

@section('vendor-style')
<!-- Vendor -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-auth.js')}}"></script>
@endsection

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    {{-- <div class="col-xl-6 mb-4">
      <div class="card">
        <h5 class="card-header">Custom Option Radios With SVG Icons</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-md mb-md-0 mb-2">
              <div class="form-check custom-option custom-option-icon checked">
                <label class="form-check-label custom-option-content" for="customRadioSvg1">
                  <span class="custom-option-body">
                    <img src="../../assets/img/icons/unicons/paypal.png" class="w-px-40 mb-2" alt="paypal">
                    <span class="custom-option-title"> Design </span>
                    <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
                  </span>
                  <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg1" checked="">
                </label>
              </div>
            </div>
            <div class="col-md mb-md-0 mb-2">
              <div class="form-check custom-option custom-option-icon">
                <label class="form-check-label custom-option-content" for="customRadioSvg2">
                  <span class="custom-option-body">
                    <img src="../../assets/img/icons/unicons/wallet.png" class="w-px-40 mb-2" alt="wallet">
                    <span class="custom-option-title"> Development </span>
                    <small> Cake sugar plum fruitcake I love sweet roll jelly-o. </small>
                  </span>
                  <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="student">
                </label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-check custom-option custom-option-icon">
                <label class="form-check-label custom-option-content" for="customRadioSvg3">
                  <span class="custom-option-body">
                    <img src="../../assets/img/icons/unicons/cc-success.png" class="w-px-40 mb-2" alt="cc-success">
                    <span class="custom-option-title"> Native App </span>
                    <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
                  </span>
                  <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="company">
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      if(document.getElementById('company').checked) {
        console.log("Hello world!");
      }else if(document.getElementById('student').checked) {
        console.log("Hello world!");
      }
</script> --}}
    <div class="authentication-inner">

      <!-- Register Card -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{url('/')}}" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'#696cff'])</span>
              <span class="app-brand-text demo text-body fw-bolder">{{config('variables.templateName')}}</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Adventure stadrts here 🚀</h4>
          <p class="mb-4">Make your app management easy and fun!</p>

          <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
            @csrf
              <div class="mb-3">
              <label for="username" class="form-label">Full name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" name="name" placeholder="johndoe" autofocus value="{{ old('name') }}" />
              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Registration type</label>
              <select class="form-select" id="exampleFormControlSelect1" name="type" aria-label="Default select example">
                <option selected="">Choose Registration type</option>
                <option value="Student">Student</option>
                <option value="Supervisor">Supervisor</option>
                <option value="Company">Company</option>
              </select>
              </div>
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password">Password</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password-confirm">Confirm Password</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer">
                  <i class="bx bx-hide"></i>
                </span>
              </div>
            </div>
            
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                <label class="form-check-label" for="terms-conditions">
                  I agree to
                  <a href="javascript:void(0);">privacy policy & terms</a>
                </label>
              </div>
            </div>
            <button class="btn btn-primary d-grid w-100">
              Sign up
            </button>
          </form>

          <p class="text-center">
            <span>Already have an account?</span>
            <a href="{{url('auth/login-basic')}}">
              <span>Sign in instead</span>
            </a>
          </p>
          </div>
        </div>
      </div>
      <!-- Register Card -->
    </div>
  </div>
</div>
@endsection
