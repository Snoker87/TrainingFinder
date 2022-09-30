@php
$configData = Helper::appClasses();
@endphp
<!-- Horizontal Menu -->
<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal  menu bg-menu-theme flex-grow-0">
  <div class="{{$containerNav}} d-flex h-100">
    <ul class="menu-inner">
      <!-- Dashboards -->
      <li class="menu-item @if(Route::currentRouteName()=='home') active @endif open">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Dashboards">الرئيسية</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item @if(Route::currentRouteName()=='pages-home') active @endif">
            <a href="{{ Route('pages-home') }}" class="menu-link">
              <div data-i18n="Analytics">لوحة</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="#" class="menu-link">
              <div data-i18n="CRM">البيانات</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item @if(Route::currentRouteName()=='about') active open @endif">
        <a href="javascript:void(0);" class="menu-link">
          <i class="menu-icon tf-icons bx bx-info-circle"></i>
          <div data-i18n="Dashboards">من نحن</div>
        </a>
      </li>
      
      <li class="menu-item @if(Route::currentRouteName()=='profile.show' || Route::currentRouteName()=='teams.show') active open @endif">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-chart"></i>
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

      @if(Auth::user() && Auth::user()->haveCompany)
      
      <li class="menu-item @if(Route::currentRouteName()=='profile.show' || Route::currentRouteName()=='teams.show') active open @endif">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-chart"></i>
          <div data-i18n="Charts">ادارة {{ Auth::user()->company->name }}</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item @if(Route::currentRouteName()=='profile.show') active @endif">
            <a href="{{ route('profile.show') }}" class="menu-link">
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
    </ul>
  </div>
</aside>
<!--/ Horizontal Menu -->
