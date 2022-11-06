
@extends('layouts/horizontalLayout')
@section('title', 'Home')
@section('content')
{{-- <script>
  async function query(data) {
    const response = await fetch(
      "https://api-inference.huggingface.co/models/Davlan/bert-base-multilingual-cased-ner-hrl",
      {
        headers: { Authorization: "Bearer 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" },
        method: "POST",
        body: JSON.stringify(data),
      }
    );
    const result = await response.json();
    return result;
  }
  
  query({"inputs": "تدريب صيفي في ارامكو جدة"}).then((response) => {
    console.log(JSON.stringify(response));
  });
  </script> --}}
<div class="">
    <div class="row py-3">
      @foreach ($companis as $company)
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-start">
              <div class="d-flex align-items-start">
                <div class="avatar me-3">
                  <img src="{{ asset('images/'.$company->image) }}" alt="Avatar" class="rounded-circle">
                </div>
                <div class="me-2">
                  <h5 class="mb-1">{{ $company->name }}</h5>
                  <div class="client-info d-flex align-items-center">
                    <h6 class="mb-0 me-1"> </h6><span class="primary">{{ $company->site }}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex align-items-center flex-wrap">
              <div class="bg-lighter p-2 rounded me-auto mb-3">
                  <span>وصف</span>
                <h6 class="mb-1">{{ $company->desc }}</h6>
              </div>
            </div>
            <div class="card-body border-top">
              <ul class="p-0 m-0">
                  <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                      <span class="avatar-initial rounded bg-label-success"><i class="fa-solid fa-passport"></i></span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">البريد الاكتروني</h6>
                        <small class="text-muted"></small>
                      </div>
                      <div class="user-progress">
                        <small class="fw-semibold">{{ $company->email }}</small>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                      <span class="avatar-initial rounded bg-label-info"><i class="fa-solid fa-school"></i></span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">مقر الشركة</h6>
                        <small class="text-muted"></small>
                      </div>
                      <div class="user-progress">
                        <small class="fw-semibold">{{ $company->hq }}</small>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex">
                    <div class="avatar flex-shrink-0 me-3">
                      <span class="avatar-initial rounded bg-label-secondary"><i class="fa-solid fa-list"></i></span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">اختصاصات الشركة</h6>
                        <small class="text-muted"></small>
                      </div>
                      <div class="user-progress">
                        <small class="fw-semibold">عامة</small>
                      </div>
                    </div>
                  </li>
                </ul>
          </div>
        </div>
      </div>
      </div>
      @endforeach
    </div>
  </div>
  <style>
    .faq-header{background:url("../../assets/img/header.png");background-repeat:no-repeat;background-size:cover;min-height:300px !important;border-radius:.375rem}.faq-header .input-wrapper{position:relative;width:100%;max-width:55%}@media(max-width: 575.98px){.faq-header .input-wrapper{max-width:70%}}.faq-nav-icon{font-size:1.25rem}.light-style .bg-faq-section{background-color:rgba(67,89,113,.05)}.dark-style .bg-faq-section{background-color:rgba(255,255,255,.03)}

  </style>
@endsection
