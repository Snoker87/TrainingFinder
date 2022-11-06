@php
$configData = Helper::appClasses();
@endphp
<!-- Horizontal Menu -->
<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal  menu bg-menu-theme flex-grow-0">
  <div class="{{$containerNav}} d-flex h-100">
    <ul class="menu-inner">
      <!-- Dashboards -->
      <li class="menu-item @if(Route::currentRouteName()=='home') active @endif">
        <a href="{{ route('home') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Dashboards">الرئيسية</div>
        </a>
      </li>
      <li class="menu-item @if(Route::currentRouteName()=='home.compains') active open @endif">
        <a href="{{ route('home.compains') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-list-minus"></i>
          <div data-i18n="Dashboards">قائمة الشركات </div>
        </a>
      </li>
      <li class="menu-item @if(Route::currentRouteName()=='teams.show') active open @endif">
        <a href="#" class="menu-link">
          <i class="menu-icon tf-icons bx bx-list-ol"></i>
          <div data-i18n="Dashboards">الفرص التدريبية </div>
        </a>
      </li>
      <li class="menu-item @if(Route::currentRouteName()=='about') active open @endif">
        <a href="javascript:void(0);" class="menu-link">
          <i class="menu-icon tf-icons bx bx-info-circle"></i>
          <div data-i18n="Dashboards">من نحن</div>
        </a>
      </li>


      @if(Auth::user() && Auth::user()->haveCompany)
      
      <li class="menu-item @if(Route::currentRouteName()=='company.dashboard' || Route::currentRouteName()=='company.opportunities') active open @endif">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-chart"></i>
          <div data-i18n="Charts">ادارة {{ Auth::user()->company->name }}</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item @if(Route::currentRouteName()=='company.dashboard') active @endif">
            <a href="{{ route('company.dashboard',Auth::user()->company->slug) }}" class="menu-link">
              <div data-i18n="Apex Charts">الاعدادت</div>
            </a>
          </li>
          <li class="menu-item @if(Route::currentRouteName()=='teams.show') active @endif">
            <a href="#" class="menu-link">
              <div data-i18n="ChartJS">الفريق</div>
            </a>
          </li>
        </ul>
      </li>
      @elseif(Auth::user() && Auth::user()->type == 'Company')
      <li class="menu-item @if(Route::currentRouteName()=='about') active open @endif">
        <a href="javascript:void(0);" class="menu-link">
          <i class="menu-icon tf-icons bx bx-new-circle"></i>
          <div data-i18n="Dashboards">اضافة الشركة </div>
        </a>
      </li>
      @endif
      <li class="menu-item @if(Route::currentRouteName()=='profile.show' || Route::currentRouteName()=='teams.show') active open @endif">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-cog"></i>
          <div data-i18n="Charts">اعدادت الحساب</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item @if(Route::currentRouteName()=='profile.show') active @endif">
            <a href="{{ route('profile.show') }}" class="menu-link">
              <div data-i18n="Apex Charts">الملف الشخصي</div>
            </a>
          </li>
          <li class="menu-item @if(Route::currentRouteName()=='teams.show') active @endif">
            <a href="#" class="menu-link">
              <div data-i18n="ChartJS">الفريق</div>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</aside>
<!--/ Horizontal Menu -->
