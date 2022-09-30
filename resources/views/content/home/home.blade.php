@extends('layouts/horizontalLayout')
@section('title', 'Home')
@section('content')
<div class="">
    <div class="row">
        
      <div class="faq-header d-flex flex-column justify-content-center align-items-center">
        <h3 class="text-center"> ودك بتدريب صيفي صح؟ 😅 </h3>
        <div class="input-wrapper my-3 input-group input-group-merge">
          <span class="input-group-text" id="basic-addon1">
            <i class="bx bx-search-alt bx-xs text-muted"></i>
          </span>
          <input type="text" class="form-control form-control-lg" placeholder="هنا تقدر تبحث عن الفرص المتاحة حول المملكة " aria-label="Search" aria-describedby="basic-addon1">
        </div>
        <p class="text-center mb-0 px-3">اذا عندك فرص تدريبية ودك تضيفها تقدر من هنا</p>
      </div>
    </div>
    <div class="row py-3">
      <div class="col-md-6 col-lg-8 mb-4 mb-md-0">
        <div class="card">
            <h5 class="card-header">اخر الفرص المتاحة  🔥</h5>
          <div class="table-responsive text-nowrap">
            <table class="table text-nowrap">
              <thead>
                <tr>
                  <th>اسم الشركة</th>
                  <th>نوع التدريب</th>
                  <th>المكأفة</th>
                  <th>المقاعد المتوفرة</th>
                </tr>
              </thead>
              <tbody class="table table-borderless">
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets/img/company/stc.png') }}" alt="Oneplus" height="32" width="32" class="me-2">
                      <div class="d-flex flex-column">
                        <span class="fw-semibold lh-1">الاتصالات السعودية</span>
                        <small class="text-muted">شركة عامة</small>
                      </div>
                    </div>
                  </td>
                  <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class="bx bx-mobile-alt bx-xs"></i></span> محاسبة مالية</td>
                  <td>
                    <small class="text-muted">None</small>

                  </td>
                  <td><a href="#"> <span class="badge bg-label-primary">التقديم الان</span></a> </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets/img/company/Elm_logo.jpg') }}" alt="Apple" height="32" width="32" class="me-2">
                      <div class="d-flex flex-column">
                        <span class="fw-semibold lh-1"> علم</span>
                        <small class="text-muted">شركة حكومية</small>
                      </div>
                    </div>
                  </td>
                  <td><span class="badge bg-label-warning rounded-pill badge-center p-3 me-2"><i class="bx bx-mouse bx-xs"></i></span> تقنية المعلومات</td>
                  <td>
                    <div class="lh-1"><span class="text-primary fw-semibold">$149</span></div>
                    <small class="text-muted">Fully Paid</small>
                  </td>
                  <td><a href="#"> <span class="badge bg-label-primary">التقديم الان</span></a> </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/company/ZAIN.png') }}" alt="Apple" height="32" width="32" class="me-2">
                        <div class="d-flex flex-column">
                        <span class="fw-semibold lh-1">زين للاتصالات</span>
                        <small class="text-muted">شركة خاصة</small>
                      </div>
                    </div>
                  </td>
                  <td><span class="badge bg-label-info rounded-pill badge-center p-3 me-2"><i class="bx bx-desktop bx-xs"></i></span> الشبكات</td>
                  <td>
                    <small class="text-muted">None</small>
                  </td>
                  <td><span class="badge bg-label-danger">انتهى التقديم</span></td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/company/banda.png') }}" alt="Apple" height="32" width="32" class="me-2">
                        <div class="d-flex flex-column">
                        <span class="fw-semibold lh-1">اسواق بندة</span>
                        <small class="text-muted">شركة خاصة</small>
                      </div>
                    </div>
                  </td>
                  <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class="bx bx-mobile-alt bx-xs"></i></span> قانون</td>
                  <td>
                    <small class="text-muted">None</small>
                  </td>
                  <td><a href="#"> <span class="badge bg-label-primary">التقديم الان</span></a> </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/company/T2.png') }}" alt="Apple" height="32" width="32" class="me-2">
                        <div class="d-flex flex-column">
                        <span class="fw-semibold lh-1">شركة تي تو</span>
                        <small class="text-muted">شركة نائشة</small>
                      </div>
                    </div>
                  </td>
                  <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class="bx bx-mobile-alt bx-xs"></i></span> علوم حاسب</td>
                  <td>
                    <div class="lh-1"><span class="text-primary fw-semibold">$399</span></div>
                    <small class="text-muted">Fully Paid</small>
                  </td>
                  <td><span class="badge bg-label-danger">انتهى التقديم</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style>
    .faq-header{background:url("../../assets/img/header.png");background-repeat:no-repeat;background-size:cover;min-height:300px !important;border-radius:.375rem}.faq-header .input-wrapper{position:relative;width:100%;max-width:55%}@media(max-width: 575.98px){.faq-header .input-wrapper{max-width:70%}}.faq-nav-icon{font-size:1.25rem}.light-style .bg-faq-section{background-color:rgba(67,89,113,.05)}.dark-style .bg-faq-section{background-color:rgba(255,255,255,.03)}

  </style>
@endsection
