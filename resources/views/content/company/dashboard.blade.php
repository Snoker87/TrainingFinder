@extends('layouts/horizontalLayout')
@section('title', 'Home')
@section('content')
<div class="">
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">الشركة /</span> الاعدادات
  </h4>
  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> معلومات الشركة</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ '../'.$company->slug.'/'.'opportunities' }}"><i class="bx bx-detail me-1"></i> الفرص التدريبية</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ '../'.$company->slug.'/'.'api' }}"><i class="bx bx-lock-alt me-1"></i> واجهة برمجة التطبيقات (API) </a></li>
        <li class="nav-item"><a class="nav-link" href="{{ '../'.$company->slug.'/'.'api' }}"><i class="bx bx-archive me-1"></i>متابعة التقديمات</a></li>

      </ul>
      <div class="card mb-4">
        <h5 class="card-header">ملف الشركة</h5>
        <!-- Account -->
        <div class="card-body">
          <div class="d-flex align-items-start align-items-sm-center gap-4">
            <img src="{{ asset('images/'.$company->image) }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
            <div class="button-wrapper">
              <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                <span class="d-none d-sm-block">رفع صورة جديدة</span>
                <i class="bx bx-upload d-block d-sm-none"></i>
                <input type="file" id="upload" class="account-file-input" hidden="" accept="image/png, image/jpeg">
              </label>
              <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                <i class="bx bx-reset d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Reset</span>
              </button>
  
              <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
            </div>
          </div>
        </div>
        <hr class="my-0">
        
        <div class="card-body">
          <form id="formAccountSettings" method="POST" action="{{ route('company.update') }}" class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
            @csrf
            <div class="row">
              <input class="form-control" type="hidden" id="id" name="id" value="{{ $company->id }}" autofocus="">
              <div class="mb-3 col-md-6 fv-plugins-icon-container">
                <label for="firstName" class="form-label">اسم الشركة</label>
                <input class="form-control" type="text" id="company_name" name="name" value="{{ $company->name }}" autofocus="">
              <div class="fv-plugins-message-container invalid-feedback"></div></div>
              <div class="mb-3 col-md-6 fv-plugins-icon-container">
                <label for="company_site" class="form-label">رابط موقع الشركة</label>
                <input class="form-control" type="text" name="site" id="site" value="{{ $company->site }}">
              <div class="fv-plugins-message-container invalid-feedback"></div></div>
              <div class="mb-3 col-md-6">
                <label for="company_email" class="form-label">بريد الشركة الالكتروني</label>
                <input class="form-control" type="text" id="company_email" name="email" value="{{ $company->email }}" placeholder="exmaple@bussines.om">
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label" for="phoneNumber">Phone Number</label>
                <div class="input-group input-group-merge">
                  <span class="input-group-text">KSA (+966)</span>
                  <input type="text" id="phoneNumber" name="phone" class="form-control" placeholder="504837481" value="{{ $company->phone }}">
                </div>
              </div>
              <div class="mb-3 col-md-6">
                <label for="address" class="form-label">وصف الشركة</label>
                <textarea type="text" class="form-control" id="desc" name="desc">{{ $company->desc }}</textarea>
              </div>
              <div class="mb-3 col-md-6">
                <label for="state" class="form-label">مقر عمل الشركة</label>
                <input class="form-control" type="text" id="state" name="hq" value="{{ $company->hq }}">
              </div>

            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-primary me-2">حفظ البيانات</button>
            </div>
          <div></div><input type="hidden"></form>
        </div>
        <!-- /Account -->
      </div>
    </div>
  </div>
  </div>
  <style>
    .faq-header{background:url("../../assets/img/header.png");background-repeat:no-repeat;background-size:cover;min-height:300px !important;border-radius:.375rem}.faq-header .input-wrapper{position:relative;width:100%;max-width:55%}@media(max-width: 575.98px){.faq-header .input-wrapper{max-width:70%}}.faq-nav-icon{font-size:1.25rem}.light-style .bg-faq-section{background-color:rgba(67,89,113,.05)}.dark-style .bg-faq-section{background-color:rgba(255,255,255,.03)}

  </style>
@endsection
