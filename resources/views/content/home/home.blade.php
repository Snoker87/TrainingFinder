
@extends('layouts/horizontalLayout')
@section('title', 'Home')
@section('content')
<script>
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
  
  </script>
<div class="">
    <div class="row justify-content-center">
      <div class="faq-header d-flex flex-column justify-content-center align-items-center">
        <h3 class="text-center"> ودك بتدريب  صح؟ 😅 </h3>
        <div class="input-wrapper my-3 input-group input-group-merge">
          <span class="input-group-text" id="basic-addon1">
            <i class="bx bx-search-alt bx-xs text-muted"></i>
          </span>
          <div class="col-10">
          <form action="{{ route('home.search') }}" method="post">
            @csrf
            <input type="text" name="text" class="form-control form-control-lg" placeholder="هنا تقدر تبحث عن الفرص المتاحة حول المملكة "
             aria-label="Search" aria-describedby="basic-addon1">
          </form>
        </div>
        </div>
        <p class="text-center mb-0 px-3">اذا عندك فرص تدريبية ودك تضيفها تقدر من هنا</p>
      </div>
    </div>
    <div class="row py-3">
      @foreach ($opportunities as $opportunity)
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-start">
              <div class="d-flex align-items-start">
                <div class="avatar me-3">
                  <img src="{{ asset('images/'.$opportunity->company->image) }}" alt="Avatar" class="rounded-circle">
                </div>
                <div class="me-2">
                  <h5 class="mb-1">{{ $opportunity->title }}</h5>
                  <div class="client-info d-flex align-items-center">
                    <h6 class="mb-0 me-1"> </h6><span>{{ $opportunity->company->name }}</span>
                  </div>
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
            
            <p class="mb-0" style="white-space: pre-line">{{ Str::limit($opportunity->desc,150) }} <span><a href="#">تفاصيل اكثر</a></span></p>
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
                <div class="d-grid">
                  @if(Auth::check() && Auth::user()->type == 'company')
                  <button class="btn btn-primary btn-next" data-bs-toggle="modal" data-bs-target="#addOpp" disabled>التقديم</button>
                  @elseif (Auth::check())
                  <form action="{{'request/new/'.$opportunity->id}}" method="post">
                    @csrf
                  <button class="btn btn-primary btn-next" data-bs-toggle="modal" data-bs-target="#addOpp" type="submit">التقديم</button>
                  </form>
                  @else
                  <a href="#" class="btn btn-primary btn-next">الرجاء تسجيل الدخول</a>
                  @endif
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
