@extends('layouts/horizontalLayout')
@section('title', 'Home')
@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/pickr/pickr-themes.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/pickr/pickr.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/forms-pickers.js')}}"></script>
@endsection
@section('content')

<div class="">

  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">الشركة /</span> الفرص التدريبية
  </h4>
  <div class="row">
    <div class="col-md-12">
        
      <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item"><a class="nav-link" href="{{ route('company.dashboard',$company->slug) }}"><i class="bx bx-user me-1"></i> معلومات الشركة</a></li>
        <li class="nav-item"><a class="nav-link active" href="#"><i class="bx bx-detail me-1"></i> الفرص التدريبية</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ '../'.$company->slug.'/'.'api' }}"><i class="bx bx-lock-alt me-1"></i> واجهة برمجة التطبيقات (API) </a></li>
      </ul>
        <hr class="my-0">
        <div class="row g-4 pt-2">
            <div class="col-xl-4">
                <div class="card">
                    
                    <div class="card-header d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="avatar me-3">
                              <img src="https://cdn-icons-png.flaticon.com/512/1090/1090923.png" alt="Avatar" class="rounded-circle">
                            </div>
                            <div class="me-2">
                              <h5 class="mb-1">اضافة تدريب جديد</h5>
                            </div>
                          </div>
                        </div>
                      </div>                 
                 <div class="rounded p-3">
                    <p class="fw-semibold">اضافة فرص تدريبية </p>
                    <p>يمكنك الاختيار نوع التدريب الذي تقدمه</p>
                    <a href="javascript:void(0)" class="fw-semibold">التواصل مع الدعم التقني</a>
                  </div>
                <div class="d-grid">
                  <button class="btn btn-primary btn-next" data-bs-toggle="modal" data-bs-target="#addOpp">اضافة تدريب جديد</button>
                </div>
                </div>
              </div>
              @foreach ($opportunities as $opportunity)
            <div class="col-xl-4 col-lg-6 col-md-6">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-start">
                    <div class="d-flex align-items-start">
                      <div class="avatar me-3">
                        <img src="{{ asset('images/'.$company->image) }}" alt="Avatar" class="rounded-circle">
                      </div>
                      <div class="me-2">
                        <h5 class="mb-1">{{ $opportunity->title }}</h5>
                        <div class="client-info d-flex align-items-center">
                          <h6 class="mb-0 me-1"> </h6><span>{{ $company->name }}</span>
                        </div>
                      </div>
                    </div>
                    <div class="ms-auto">
                      <div class="dropdown zindex-2">
                        <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="javascript:void(0);">تعديل الفرصة</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item text-danger" href="javascript:void(0);">حذف التدريب</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center flex-wrap">
                    <div class="bg-lighter p-2 rounded me-auto mb-3">
                        <span>التدريب</span>
                      <h6 class="mb-1">مستمر الى الان</h6>
                    </div>
                    <div class="text-end mb-3">
                      <h6 class="mb-1">Start Date: <span class="text-body fw-normal">{{ $opportunity->start }}</span></h6>
                      <h6 class="mb-1">Deadline: <span class="text-body fw-normal">{{ $opportunity->end }}</span></h6>
                    </div>
                  </div>
                  
                  <p class="mb-0" style="white-space: pre-line">{{ Str::limit($opportunity->desc,150) }}</p>
                </div>
                <div class="card-body border-top">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-calculator"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">المعدل</h6>
                              <small class="text-muted">الشرط المطلوب</small>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">{{ $opportunity->gpa_limit }}</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-success"><i class="fa-solid fa-passport"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">الجنسية</h6>
                              <small class="text-muted">شرط جنسية المتقدم</small>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">سعوديين فقط</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"><i class="fa-solid fa-school"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">نوع التدريب</h6>
                              <small class="text-muted">مدمج,حضوري,عن بعد</small>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">{{ $opportunity->type }}</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"><i class="fa-solid fa-list"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">التخصص</h6>
                              <small class="text-muted">عام او غيره</small>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">{{ $opportunity->specialization }}</small>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <hr class="m-2">

                </div>
              </div>
            </div>
            @endforeach
          </div>
        <!-- /Account -->
    </div>
  </div>
  </div>
  <!-- Adding opp modal -->
  <div class="modal fade" id="addOpp" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user" data-select2-id="80">
      <div class="modal-content p-3 p-md-5" data-select2-id="79">
        <div class="modal-body" data-select2-id="78">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="text-center mb-4">
            <h3>اضافة تدريب جديد</h3>
          </div>
          <form id="editUserForm" class="row g-3" action="{{ route('company.opportunities.new') }}" method="POST">
            @csrf
            <input type="hidden" id="company_id" name="company_id" class="form-control " value="{{ $company->id }}">
            <div class="col-12 col-md-6  ">
              <label class="form-label" for="title">عنوان التدريب </label>
              <input type="text" id="title" name="title" class="form-control " placeholder="تدريب تعاوني لتقنية المعلومات">
          </div>
          <div class="col-md-6 col-12 mb-4">
            <label for="bs-rangepicker-basic" id="flatpickr-range" class="form-label">بداية ونهاية التدريب</label>
            <input type="text" name="date" id="bs-rangepicker-basic" class="form-control">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="specialization">المسارات المطلوبة</label>
            <select id="specialization" name="specialization" class="form-select" aria-label="Default select example">
              <option value="GENERAL" selected="">عام </option>
              <option value="IT">تقنية المعلومات</option>
              <option value="FT">ادارة مالية</option>
              <option value="HR">موارد بشرية</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="specialization">المدينة</label>
            <select id="city" name="city" class="form-select" aria-label="Default select example">
              <option value="GENERAL" selected="">المدينة </option>
              <option value="riyadh">الرياض</option>
              <option value="jeddah">جدة</option>
              <option value="tabuk">تبوك</option>
              <option value="dammam">الدمام</option>
              <option value="dubai">دبي</option>
              <option value="sydney">سيدني,استراليا</option>
              <option value="int">جميع المدن</option>

            </select>
          </div>
          <div class="col-12 col-md-6  ">
            <label class="form-label" for="title">البريد الالكتروني </label>
            <input type="email" id="email" name="email" class="form-control " placeholder="Opportunity@mouj.com.sa">
        </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="desc">نبذة عن التدريب</label>
              <textarea type="text" id="desc" name="desc" class="form-control" rows="4" cols="50"> </textarea>
            </div>
            <div class="col-12 col-md-6">
                <label class="form-label" for="requirments">الاشترطات</label>
                <textarea type="text" id="requirments" name="requirments" class="form-control" rows="4" cols="50"> </textarea>
              </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserCountry">نوع التدريب</label>
              <div class="position-relative">
                <div class="position-relative">
                <select id="modalEditUserCountry" name="type" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" tabindex="-1" aria-hidden="true" data-select2-id="modalEditUserCountry">
                <option value="" data-select2-id="72">Select</option>
                <option value="حضوري">حضوري</option>
                <option value="مدمج">مدمج</option>
                <option value="عن-بعد">عن بعد</option>
              </select>
            </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
                <label class="form-label" for="method">طريقة استقبال التقديمات</label>
                <select id="method" name="method" class="form-select" aria-label="Default select example">
                  <option value="email" selected="">عن طريق الايميل </option>
                  <option value="api">عن طريق API</option>
                  <option value="platform">عن طريق المنصة</option>
                </select>
              </div>
              <div class="col-12 col-md-6  ">
                <label class="form-label" for="gpa_limit">شرط المعدل </label>
                <input type="number" id="gpa_limit" name="gpa_limit" class="form-control ">
            </div>

            <div class="col-12">
              <label class="switch">
                <input type="checkbox" name="nationality" class="switch-input">
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">فقط سعوديين الجنسية</span>
              </label>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-primary me-sm-3 me-1">اضافة التدريب</button>
            </div>
          <div></div><input type="hidden"></form>
        </div>
      </div>
    </div>
  </div>
  <style>
    .faq-header{background:url("../../assets/img/header.png");background-repeat:no-repeat;background-size:cover;min-height:300px !important;border-radius:.375rem}.faq-header .input-wrapper{position:relative;width:100%;max-width:55%}@media(max-width: 575.98px){.faq-header .input-wrapper{max-width:70%}}.faq-nav-icon{font-size:1.25rem}.light-style .bg-faq-section{background-color:rgba(67,89,113,.05)}.dark-style .bg-faq-section{background-color:rgba(255,255,255,.03)}

  </style>
@endsection
