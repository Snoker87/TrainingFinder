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
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />


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
<script src="{{asset('assets/vendor/libs/dropzone/dropzone.js')}}"></script>

@endsection

@section('page-script')
<script src="{{asset('assets/js/form-wizard-icons.js')}}"></script>
<script src="{{asset('assets/js/pages-auth.js')}}"></script>
<script src="{{asset('assets/js/forms-file-upload.js')}}"></script>

@endsection

@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@400;500&display=swap" rel="stylesheet">
<style>
  * {
    font-family: 'Noto Sans Arabic', sans-serif;

  }
  </style>
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

    <div class="col-md-10 col-lg-10 col-sm-12 mb-4">
     <div class="bs-stepper wizard-vertical vertical wizard-vertical-icons-example mt-2">
        <div class="bs-stepper-header">
          <div class="step" data-target="#account-details-vertical">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-circle">
                <i class="bx bx-detail"></i>
              </span>
              <span class="bs-stepper-label mt-1 pt-1">
                <span class="bs-stepper-title">نوع الحساب 😎</span>
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
                <span class="bs-stepper-title">معلومات الحساب ✍️</span>
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
                <span class="bs-stepper-title">معلومات اضافية 📚</span>
                <span class="bs-stepper-subtitle">معلومات قد نحتاجها</span>
              </span>
            </button>
          </div>
        </div>
        <div class="bs-stepper-content">
          <form id="formAuthentication" enctype="multipart/form-data" class="mb-3" action="{{ route('register') }}" method="POST">
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
                          <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png" class="w-px-40 mb-2" alt="paypal">
                          <span class="custom-option-title"> متدرب </span>
                        </span>
                        <input name="type" class="form-check-input" type="radio" onchange="myFunction(this)" value="student" id="customRadioSvg1">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-md-0 mb-2">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="customRadioSvg2">
                        <span class="custom-option-body">
                          <img src="https://cdn-icons-png.flaticon.com/512/2133/2133124.png" class="w-px-40 mb-2" alt="wallet">
                          <span class="custom-option-title"> مشرف </span>
                        </span>
                        <input name="type" class="form-check-input" type="radio" onchange="myFunction(this)" value="supervisor" id="customRadioSvg2">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="customRadioSvg3">
                        <span class="custom-option-body">
                          <img src="https://cdn-icons-png.flaticon.com/512/4300/4300059.png" class="w-px-40 mb-2" alt="wallet">
                          <span class="custom-option-title"> شركة/مؤسسة </span>
                        </span>
                        <input name="type" class="form-check-input" type="radio" onchange="myFunction(this)" value="company" id="customRadioSvg3">
                      </label>
                    </div>
                  </div>
                  
                  <script>
                    function myFunction(type) {
                      // alert(type.value);
                      if(type.value == "student"){
                        document.getElementById("base").style.display = "none";
                        document.getElementById("company").style.display = "none";
                        // document.getElementById("supervisor").style.display = "none";
                        document.getElementById("student").style.display = "";
                      }else if(type.value == "company"){
                        document.getElementById("base").style.display = "none";
                        document.getElementById("student").style.display = "none";
                        // document.getElementById("supervisor").style.display = "none";
                        document.getElementById("company").style.display = "";
                      }
                    }
          function myFunctixon() {
            if(document.getElementById("mySelect").value == "FollowersCondtion") {
              document.getElementById("demo").style.display = "block";
            }else{
              document.getElementById("demo").style.display = "none";
              document.getElementById("CondtionX").value = "";

            }
          }

                    </script>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev" disabled>
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">الســابق</span>
                  </button>
                  <a class="btn btn-primary btn-next text-white" id="element">
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
                <h6 class="mb-0">معلومات اضافية</h6>
                <small>لنساعدك على حصولك وادارة للتدريب</small>
              </div>
              <div class="row g-3" id="base">
                <div class="col-sm-12">
                  <label class="form-label" for="unv">نوع الحساب</label>
                  <input type="text" id="tyype" class="form-control" placeholder="base" disabled />
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="colleges1">التخصص</label>
                  <select class="select2" name="collesge" id="cosllege1">
                    <option label=" "></option>
                    <option value="FCIT">كلية الحاسب</option>
                    <option value="ENG">كلية الهندسة</option>
                    <option value="MNG">كلية الادارة</option>
                    <option value="MED">كلية الطب</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="last-name1">المعدل</label>
                  <input type="number" name="GPA" class="form-control" placeholder="3.6" />
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
              <div class="row g-3" id="student" style="display: none">
                <div class="col-sm-12">
                  <label class="form-label" for="unv">نوع الحساب</label>
                  <input type="text" id="tyype" class="form-control" placeholder="student" disabled />
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="college1">التخصص</label>
                  <select class="select2" name="college" id="college1">
                    <option label=" "></option>
                    <option value="FCIT">كلية الحاسب</option>
                    <option value="ENG">كلية الهندسة</option>
                    <option value="MNG">كلية الادارة</option>
                    <option value="MED">كلية الطب</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="last-name1">المعدل</label>
                  <input type="number" name="GPA" class="form-control" placeholder="3.6" />
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
              <!-- company -->
              <div class="row g-3" id="company" style="display: none">
                <div class="col-sm-12">
                  <label class="form-label" for="unv">نوع الحساب</label>
                  <input type="text" id="tyype" class="form-control" placeholder="شركة" disabled />
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="last-name1">اسم الشركة</label>
                  <input type="text" name="company_name" class="form-control" placeholder="STC" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="last-name1">رابط الموقع</label>
                  <input type="text" name="company_site" class="form-control" placeholder="https://www.stc.com" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="status">المقر الرئيسي للشركة</label>
                  <select class="select2" name="company_hq" id="statdus">
                    <option>الرياض</option>
                    <option>جدة</option>
                  </select>
                </div>
                <div class="col-sm-6">
                    <label class="form-label" for="basic-default-upload-file">شعار الشركة</label>
                    <input type="file" class="form-control" name="image" id="basic-default-upload-file">
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <a class="text-white btn btn-primary btn-prev">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">السابق</span>
                  </a>
                  <button type="sumbit" class="btn btn-success">تسجيل الحساب</button>
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
