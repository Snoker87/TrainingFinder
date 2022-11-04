@php
$containerNav = $containerNav ?? 'container-fluid';
$navbarDetached = ($navbarDetached ?? '');
@endphp

<!-- Navbar -->

@if(isset($navbarDetached) && $navbarDetached == 'navbar-detached')

<nav class="layout-navbar {{$containerNav}} navbar navbar-expand-xl {{$navbarDetached}} align-items-center bg-navbar-theme" id="layout-navbar">
  @endif
  @if(isset($navbarDetached) && $navbarDetached == '')
  <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="{{$containerNav}}">
      @endif
      <!--  Brand demo (display only for navbar-full and hide on below xl) -->
      @if(isset($navbarFull))

      <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
        <a href="{{url('/')}}" class="app-brand-link gap-2">
          <span class="app-brand-logo demo">
            @include('_partials.macros',["width"=>25,"withbg"=>'#696cff'])
          </span>
          <span class="app-brand-text demo menu-text fw-bolder">Training Finder </span>
        </a>
      </div>
      @endif

      <!-- ! Not required for layout-without-menu -->
      @if(!isset($navbarHideToggle))
      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0{{ isset($menuHorizontal) ? ' d-xl-none ' : '' }} {{ isset($contentNavbar) ?' d-xl-none ' : '' }}">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="bx bx-menu bx-sm"></i>
        </a>
      </div>
      @endif

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">



        <ul class="navbar-nav flex-row align-items-center ms-auto">
          <!-- Style Switcher -->
        <div class="navbar-nav align-items-center">
          <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
            <i class='bx bx-sm'></i>
          </a>
        </div>
        <!--/ Style Switcher -->
        @if(!Auth::user())
          <div>
            <a href="/sign-up" class="btn btn-sm btn-primary">
              <i class='bx bxs-folder-plus' ></i></span>&nbsp; تسجيل حساب جديد
            </a>
            <a href="/sign-in"  class="btn btn-sm btn-primary">
              <i class='bx bxs-log-in-circle' ></i>&nbsp; تسجيل دخول
            </a>
            <a href="/new/opportunity"  class="btn btn-sm btn-primary">
              <i class='bx bxs-message-square-add'></i> &nbsp; اضافة فرصة تدريبية جديدة
            </a>
          </div>
          @endif
          @if(Auth::user())
          <!-- User -->
          <a href="/sign-up" class="btn btn-sm btn-primary">
            <i class='bx bxs-folder-pludws' ></i></span>&nbsp; Account type : {{ Auth::user()->type }}
          </a>
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="{{Auth::user()->profile_photo_url}}" alt class="w-px-40 h-auto rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="{{ Route::has('profile.show') ? route('profile.show') : 'javascript:void(0);' }}">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar avatar-online">
                        <img src="{{Auth::user()->profile_photo_url}}" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <span class="fw-semibold d-block">
                        {{ Auth::user()->name }}
                      </span>
                      <small class="text-muted">مستخدم</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="{{route('profile.show')}}">
                  <i class="bx bx-user me-2"></i>
                  <span class="align-middle">الملف الشخصي</span>
                </a>
              </li>
              @if (Auth::check() && Laravel\Jetstream\Jetstream::hasApiFeatures())
              <li>
                <a class="dropdown-item" href="{{ route('api-tokens.index') }}">
                  <i class='bx bx-key me-2'></i>
                  <span class="align-middle">API Tokens</span>
                </a>
              </li>
              @endif

              @if (Auth::User() && Laravel\Jetstream\Jetstream::hasTeamFeatures())
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <h6 class="dropdown-header">Manage Team</h6>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="{{route('teams.show', Auth::user()->currentTeam->id)}}">
                  <i class='bx bx-cog me-2'></i>
                  <span class="align-middle">Team Settings</span>
                </a>
              </li>
              @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
              <li>
                <a class="dropdown-item" href="{{ route('teams.create') }}">
                  <i class='bx bx-user me-2'></i>
                  <span class="align-middle">Create New Team</span>
                </a>
              </li>
              @endcan
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <lI>
                <h6 class="dropdown-header">Switch Teams</h6>
              </lI>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              @foreach (Auth::user()->allTeams() as $team)
              {{-- Below commented code read by artisan command while installing jetstream. !! Do not remove if you want to use jetstream. --}}

              <x-jet-switchable-team :team="$team" />
              @endforeach
              @endif
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class='bx bx-power-off me-2'></i>
                  <span class="align-middle">تسجيل الخروج</span>
                </a>
              </li>
              <form method="POST" id="logout-form" action="{{ route('logout') }}">
                @csrf
              </form>
            </ul>
          </li>
          <!--/ User -->
          @endif
        </ul>
      </div>

      @if(!isset($navbarDetached))
    </div>
    @endif
  </nav>
  <!-- / Navbar -->
