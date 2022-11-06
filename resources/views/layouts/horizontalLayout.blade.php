@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset
@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/commonMaster' )
@php

$menuHorizontal = true;
$navbarFull = true;

/* Display elements */
$isNavbar = ($isNavbar ?? true);
$isMenu = ($isMenu ?? true);
$isFlex = ($isFlex ?? false);
$isFooter = ($isFooter ?? true);
$customizerHidden = ($customizerHidden ?? '');
$pricingModal = ($pricingModal ?? false);

/* HTML Classes */
$menuFixed = (isset($configData['menuFixed']) ? $configData['menuFixed'] : '');
$navbarFixed = (isset($configData['navbarFixed']) ? $configData['navbarFixed'] : '');
$footerFixed = (isset($configData['footerFixed']) ? $configData['footerFixed'] : '');
$menuCollapsed = (isset($configData['menuCollapsed']) ? $configData['menuCollapsed'] : '');

/* Content classes */
$container = ($container ?? 'container-xxl');
$containerNav = ($containerNav ?? 'container-xxl');

@endphp

@section('layoutContent')
@include('sweetalert::alert')

<div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
  <div class="layout-container">

    <!-- BEGIN: Navbar-->
    @if ($isNavbar)
    
    @include('layouts/sections/navbar/navbar')
    @endif
    <!-- END: Navbar-->


    <!-- Layout page -->
    <div class="layout-page">

      <!-- Content wrapper -->
      <div class="content-wrapper">
        {{-- <div class="row justify-content-center p-1">
          <div class="col-5 text-center">
            <div class="alert alert-dark mb-0 alert-dismissible mb-0 text-center" role="alert">
              <span class="badge badge-center rounded-pill bg-dark border-label-dark p-3 me-2"><i class="bx bx-error-circle fs-3 "></i></span>
              <div class=" ps-1 text-center align-items-center">
                <h6 class="alert-heading align-items-center fw-bold mb-1">Be Aware!! <span>All data shown in this page are fake generated for testing puropse</span>                </h6>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              </button>
            </div>
          </div>
        </div> --}}
        @if ($isMenu)
        @include('layouts/sections/menu/horizontalMenu')
        @endif

        <!-- Content -->
        @if ($isFlex)
        <div class="{{$container}} d-flex align-items-stretch flex-grow-1 p-0">
          @else
          <div class="{{$container}} flex-grow-1 container-p-y">
            @endif

            @yield('content')

            <!-- pricingModal -->
            @if ($pricingModal)
            @include('_partials/_modals/modal-pricing')
            @endif
            <!--/ pricingModal -->
          </div>
          <!-- / Content -->

          <!-- Footer -->
          @if ($isFooter)
          @include('layouts/sections/footer/footer')
          @endif
          <!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>
    <!-- / Layout Container -->

    @if ($isMenu)
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    @endif
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->
  @endsection
