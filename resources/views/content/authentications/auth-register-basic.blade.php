@php
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Register Basic - Pages')

@section('vendor-style')
<!-- Vendor -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />

@endsection

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/form-wizard-icons.js')}}"></script>
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
    <div class="row justify-content-center">

      <!-- Register Card -->
    <!-- Vertical Icons Wizard -->
    <style>
      .authentication-inne {
        max-width: 1000px !important;
      }
      </style>

    <div class="col-md-8 col-lg-8 col-sm-12 mb-4">
      <div class="bs-stepper wizard-vertical vertical wizard-vertical-icons-example mt-2">
        <div class="bs-stepper-header">
          <div class="step" data-target="#account-details-vertical">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-circle">
                <i class="bx bx-detail"></i>
              </span>
              <span class="bs-stepper-label mt-1">
                <span class="bs-stepper-title">نوع الحساب</span>
                <span class="bs-stepper-subtitle">طالب,شركة,مشرف</span>
              </span>
            </button>
          </div>
          <div class="line"></div>
          <div class="step" data-target="#personal-info-vertical">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-circle">
                <i class="bx bx-user"></i>
              </span>
              <span class="bs-stepper-label mt-1">
                <span class="bs-stepper-title">معلومات الحساب</span>
                <span class="bs-stepper-subtitle">الاسم ,البريد الالكتروني</span>
              </span>
            </button>
          </div>
          <div class="line"></div>
          <div class="step" data-target="#social-links-vertical">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-circle">
                <i class="bx bxl-instagram"></i>
              </span>
              <span class="bs-stepper-label mt-1">
                <span class="bs-stepper-title">معلومات اضافية</span>
                <span class="bs-stepper-subtitle">معلومات قد نحتاجها</span>
              </span>
            </button>
          </div>
        </div>
        <div class="bs-stepper-content">
          <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
            @csrf
            <!-- Account Details -->
            <div id="account-details-vertical" class="content">
              <div class="content-header mb-3">
                <h6 class="mb-0">نوع الحساب</h6>
                <small>الرجاء اختيار نوع الحساب الذي تود فتحه</small>
              </div>
              <div class="row g-4">
                  <div class="col-md-12 mb-md-0 mb-2">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="customRadioSvg1">
                        <span class="custom-option-body">
                          <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/unicons/paypal.png" class="w-px-40 mb-2" alt="paypal">
                          <span class="custom-option-title"> متدرب </span>
                        </span>
                        <input name="type" class="form-check-input" type="radio" value="student" id="customRadioSvg1" checked="">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-md-0 mb-2">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="customRadioSvg2">
                        <span class="custom-option-body">
                          <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/unicons/wallet.png" class="w-px-40 mb-2" alt="wallet">
                          <span class="custom-option-title"> مشرف/كلية </span>
                        </span>
                        <input name="type" class="form-check-input" type="radio" value="supervisor" id="customRadioSvg2">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="customRadioSvg3">
                        <span class="custom-option-body">
                          <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/unicons/cc-success.png" class="w-px-40 mb-2" alt="cc-success">
                          <span class="custom-option-title"> شركة/مؤسسة </span>
                        </span>
                        <input name="type" class="form-check-input" type="radio" value="company" id="customRadioSvg3">
                      </label>
                    </div>
                  </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev" disabled>
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">الســابق</span>
                  </button>
                  <a class="btn btn-primary btn-next text-white">
                    <span class="align-middle d-sm-inline-block d-none me-sm-1">التالي</span>
                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- Personal Info -->
            <div id="personal-info-vertical" class="content">
              <div class="content-header mb-3">
                <h6 class="mb-0">المعلومات الشخصية</h6>
                <small>الرجاء اضافة المعلومات الشخصية بدقة</small>
              </div>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label"  for="first-name1">الاسم الاول</label>
                  <input type="text" id="first-name1" name="first_name" class="form-control" placeholder="خالد" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="last-name1">الاسم الاخير</label>
                  <input type="text" id="last-name1" name="last_name" class="form-control" placeholder="يوسف" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="last-name1">البريد الالكتروني</label>
                  <input type="email" id="last-name1" name="email" class="form-control" placeholder="exmaple@gmail.com" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="last-name1">كلمة المرور</label>
                  <input type="password" id="password" name="password" class="form-control" placeholder="************" />
                </div>
                {{-- <div class="col-sm-6">
                  <label class="form-label" for="language1">كلمة المرور</label>
                  <select class="selectpicker w-auto" id="language1" data-style="btn-default" data-icon-base="bx" data-tick-icon="bx-check text-white" multiple>
                    <option>English</option>
                    <option>French</option>
                    <option>Spanish</option>
                  </select>
                </div> --}}
                <div class="col-12 d-flex justify-content-between">
                  <a class="text-white btn btn-primary btn-prev">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">السابق</span>
                  </a>

                  <a class="btn btn-primary btn-next text-white">
                    <span class="align-middle d-sm-inline-block d-none me-sm-1">التالي</span>
                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- Social Links -->
            <div id="social-links-vertical" class="content">
              <div class="content-header mb-3">
                <h6 class="mb-0">معلومات داراسية</h6>
                <small>لنساعدك على حصولك وادارة للتدريب</small>
              </div>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label" for="country1">جامعة</label>
                  <select class="select2" id="country1">
                    <option label=" "></option>
                    <option>جامعة الملك عبدالعزيز</option>
                    <option>جامعة الملك سعود</option>
                    <option>جامعة الاميرة نورة</option>
                    <option>جامعة جدة</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="college1">التخصص</label>
                  <select class="select2" id="college1">
                    <option label=" "></option>
                    <option>كلية الحاسب</option>
                    <option>كلية الهندسة</option>
                    <option>كلية الادارة</option>
                    <option>كلية الطب</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="last-name1">المعدل</label>
                  <input type="number" id="password" name="GPA" class="form-control" placeholder="3.6" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="status">الحالة</label>
                  <select class="select2" id="status">
                    <option>طالب</option>
                    <option>خريج</option>
                  </select>
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <a class="text-white btn btn-primary btn-prev">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </a>
                  <button type="sumbit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /Vertical Icons Wizard -->

      </div>
      <!-- Register Card -->
    </div>
  </div>
</div>
@endsection
