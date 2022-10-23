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
        <li class="nav-item"><a class="nav-link" href="{{ route('company.dashboard',$company->slug) }}"><i class="bx bx-user me-1"></i> معلومات الشركة</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ '../'.$company->slug.'/'.'opportunities' }}"><i class="bx bx-detail me-1"></i> الفرص التدريبية</a></li>
        <li class="nav-item"><a class="nav-link active" href="#"><i class="bx bx-lock-alt me-1"></i> واجهة برمجة التطبيقات (API) </a></li>

      </ul>
      <div class="card mb-4"  data-select2-id="8">
        <h5 class="card-header">ودك نرسل لك طلبات التقديم<br/> مباشرة على واجهة برمجة التطبيقات (API) الخاصة بك 😏</h5>
        <div class="row" data-select2-id="7">
          <div class="col-md-5 order-md-0 order-1" data-select2-id="6">
            <div class="card-body">
              <form id="formAccountSettingsApiKey" method="POST" action="{{ route('company.api.new') }}">
                @csrf
                <div class="row fv-plugins-icon-container">
                  <div class="mb-3 col-12" data-select2-id="5">
                    <label for="apiAccess" class="form-label">Choose the Api key type</label>
                    <div class="position-relative" data-select2-id="4">
                      <select id="apiAccess" class="select2 form-select select2-hidden-accessible" name="method">
                      <option value="Token" data-select2-id="2">Token</option>
                      <option value="Sigunature" data-select2-id="9">Sigunature</option>
                    </select><span class="select2 select2-container select2-container--default select2-container--below" dir="rtl" data-select2-id="1" style="width: 515.156px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-apiAccess-container"><span class="select2-selection__rendered" id="select2-apiAccess-container" role="textbox" aria-readonly="true" title="Read Only">Read Only</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                  </div>
                  <div class="mb-3 col-12">
                    <label for="apiKey" class="form-label">URI</label>
                    <input type="text" class="form-control" id="apiKey" name="apiUri" placeholder="Server URI">
                  <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="mb-3 col-12">
                  <label for="apiKey" class="form-label">Key</label>
                  <input type="text" class="form-control" id="apiKey" name="apiKey" placeholder="API Key">
                <div class="fv-plugins-message-container invalid-feedback"></div>
              </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary me-2 d-grid w-100">انشاء ربط</button>
                  </div>
                </div>
              <input type="hidden" name="company_id" value="{{ $company->id }}">
            </form>
            </div>
          </div>
          <div class="col-md-7 order-md-1 order-0">
            <div class="text-center mt-4 mx-3 mx-md-0">
              <img src="https://cdn-icons-png.flaticon.com/512/8099/8099422.png" class="img-fluid" alt="Api Key Image" width="150">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <style>
    .faq-header{background:url("../../assets/img/header.png");background-repeat:no-repeat;background-size:cover;min-height:300px !important;border-radius:.375rem}.faq-header .input-wrapper{position:relative;width:100%;max-width:55%}@media(max-width: 575.98px){.faq-header .input-wrapper{max-width:70%}}.faq-nav-icon{font-size:1.25rem}.light-style .bg-faq-section{background-color:rgba(67,89,113,.05)}.dark-style .bg-faq-section{background-color:rgba(255,255,255,.03)}

  </style>
@endsection
