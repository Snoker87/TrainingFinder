@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')

<div class="row">
    <div class="col-md-6 col-12 mb-md-0 mb-4">
        <div class="card">
          <h5 class="card-header">طلبات التقديم 😎</h5>
          <div class="card-body">
            <p>هنا تستطيع متابعة جميع طلبات التقديم التي قمت بها سابقاً</p>
            <!-- Connections -->
            @foreach ($requests as $request)
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{ asset('images/'.$request->company->image) }}" alt="google" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-6 mb-sm-0 mb-2">
                  <h6 class="mb-0">{{ $request->opportunity->title }}</h6>
                  <small class="text-muted">{{ $request->company->name }}</small>
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
            <hr class="m-4">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class='bx bx-plus-circle'></i> البحث عن فرص تدريبية جديدة</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bx bx-trash me-1"></i> حذف جميع التقديمات</a></li>
              </ul>
          </div>
        </div>
      </div>
</div>

@endsection
