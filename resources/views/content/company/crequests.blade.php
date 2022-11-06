
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
    <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">الشركة /</span> الاعدادات
    </h4>
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
          <li class="nav-item"><a class="nav-link" href="{{ route('company.dashboard',$company->slug) }}"><i class="bx bx-user me-1"></i> معلومات الشركة</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ '../'.$company->slug.'/'.'opportunities' }}"><i class="bx bx-detail me-1"></i> الفرص التدريبية</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ '../'.$company->slug.'/'.'api' }}"><i class="bx bx-lock-alt me-1"></i> واجهة برمجة التطبيقات (API) </a></li>
          <li class="nav-item"><a class="nav-link active" href="#"><i class="bx bx-archive me-1"></i> التقديمات </a></li>

  
        </ul>
            <div class="card">
              <h5 class="card-header">طلبات التقديم 😎</h5>
              <div class="card-body">
                <!-- Connections -->
                @if($requests == null)
                <p>نعتذر لا يوجد اي طلب تقديم </p>
                @else
                <p>هنا تستطيع متابعة جميع طلبات التقديم </p>
                @foreach ($requests as $request)
                <div class="d-flex mb-3">
                  <div class="flex-shrink-0">
                    {{-- <img src="{{ asset('images/'.$request->user->profile_photo_url) }}" alt="google" class="me-3" height="30"> --}}
                  </div>
                  <div class="flex-grow-1 row">
                    <div class="col-6 mb-sm-0 mb-2">
                      <h6 class="mb-0">{{ $request->user->name }}</h6>
                      <small class="text-muted">المعدل : {{ $request->user->gpa }} - </small>
                      <small class="text-muted">الكلية : {{ $request->user->college }} - </small>

                    </div>
                    <div class="col-6 text-end">
                      <label class="switch me-0">
                        <input type="checkbox" class="switch-input" checked="">
                        <span class="switch-toggle-slider">
                          <span class="switch-on">
                            <i class="bx bx-check"></i>
                          </span>
                          <span class="switch-off">
                            <i class="bx bx-x"></i>
                          </span>
                        </span>
                        <span class="switch-label"></span>
                      </label>
                      <small class="text-end">{{ $request->created_at->diffForHumans();}}</small>
                    </div>
                  </div>
                </div>
                <!-- /Connections -->
                @endforeach
                @endif
                <hr class="m-4">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="bx bx-trash me-1"></i> حذف جميع التقديمات</a></li>
                  </ul>
              </div>
            </div>
          </div>
    </div>
  </div>
  <style>
    .faq-header{background:url("../../assets/img/header.png");background-repeat:no-repeat;background-size:cover;min-height:300px !important;border-radius:.375rem}.faq-header .input-wrapper{position:relative;width:100%;max-width:55%}@media(max-width: 575.98px){.faq-header .input-wrapper{max-width:70%}}.faq-nav-icon{font-size:1.25rem}.light-style .bg-faq-section{background-color:rgba(67,89,113,.05)}.dark-style .bg-faq-section{background-color:rgba(255,255,255,.03)}

  </style>
@endsection
