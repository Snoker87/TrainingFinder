  <!-- Menu -->
  
  <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
  
    
    <div class="app-brand demo">
      <a href="{{url('/')}}" class="app-brand-link">
        <span class="app-brand-logo demo">
          @include('_partials.macros',["width"=>25,"withbg"=>'#696cff'])
        </span>
        <span class="app-brand-text demo menu-text fw-bold ms-1">training finder</span>
      </a>
  
      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>
  
    <div class="menu-inner-shadow"></div>
  
    
    
    <ul class="menu-inner py-1 ps ps__rtl">
      <!-- Dashboards -->
      <li class="menu-item @if(Route::currentRouteName()=='pages-home') active @endif open">
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
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">التقديمات</span>
      </li>
      <li class="menu-item @if(Route::currentRouteName()=='user.requests') active @endif">
        <a href="{{ route('user.requests') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-qr"></i>
          <div data-i18n="Charts">عرض جميع التقديمات</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link">
          <i class="menu-icon tf-icons bx bx-folder-plus"></i>
          <div data-i18n="Charts">انشاء تقديم جديد</div>
        </a>
      </li>
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">الاعدادات</span>
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

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">المشرف</span>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link">
          <i class="menu-icon tf-icons bx bx-document"></i>
          <div data-i18n="Charts">رفع التقارير</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link">
          <i class="menu-icon tf-icons bx bx-document"></i>
          <div data-i18n="Charts">التواصل مع المشرف</div>
        </a>
      </li>
      <!-- Charts & Maps -->

    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; left: 254px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
  </aside>
  <!-- / Menu -->