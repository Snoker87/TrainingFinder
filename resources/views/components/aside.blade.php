  <!-- Menu -->
  
  <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
  
    
    <div class="app-brand demo ">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo">
  
          <img src="{{url('/assets/img/panel-logo.jpg')}}" width="30%" alt="logo"/>
  
  </span>
      </a>
  
      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>
  
    <div class="menu-inner-shadow"></div>
  
    
    
    <ul class="menu-inner py-1 ps ps__rtl">
      <!-- Dashboards -->
      <li class="menu-item @if(Route::currentRouteName()=='homepage') active @endif open">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Dashboards">الرئيسية</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item @if(Route::currentRouteName()=='homepage') active @endif">
            <a href="{{ Route('homepage') }}" class="menu-link">
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
      <!-- Charts & Maps -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">الخدمات & منتجات سلة </span>
      </li>
      <!--
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-chart"></i>
          <div data-i18n="Charts">المنتجات</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="charts-apex.html" class="menu-link">
              <div data-i18n="Apex Charts">Apex Charts</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="charts-chartjs.html" class="menu-link">
              <div data-i18n="ChartJS">ChartJS</div>
            </a>
          </li>
        </ul>
      </li>-->
      <li class="menu-item @if(Route::currentRouteName()=='products') active @endif">
        <a href="{{ Route('products') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-map-alt"></i>
          <div data-i18n="Leaflet Maps">المنتجات</div>
        </a>
      </li>
      <li class="menu-item @if(Route::currentRouteName()=='services') active @endif">
        <a href="{{ Route('services') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-link"></i>
          <div data-i18n="Leaflet Maps">ربط الخدمات</div>
        </a>
      </li>
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">ادارة التواصل الاجتماعي </span>
      </li>

      <li class="menu-item @if(Route::currentRouteName()=='providers' || Route::currentRouteName()=='SmmOrders') active @endif open">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-file"></i>
          <div data-i18n="Dashboards">دعم التواصل الاجتماعي</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item @if(Route::currentRouteName()=='SmmOrders') active @endif">
            <a href="{{ Route('SmmOrders') }}" class="menu-link">
              <div data-i18n="Analytics">الطلبات</div>
            </a>
          </li>
          <li class="menu-item @if(Route::currentRouteName()=='providers') active @endif">
            <a href="{{ Route('providers') }}" class="menu-link">
              <div data-i18n="CRM">المزودين</div>
            </a>
          </li>
        </ul>
      </li>
      <!-- Misc -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">ادارة الاشتراكات </span>
      </li>

      <li class="menu-item @if(Route::currentRouteName()=='subs' || Route::currentRouteName()=='Paccounts') active @endif open">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-id-card"></i>
          <div data-i18n="Dashboards">اشتراكات اليوتيوب</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item @if(Route::currentRouteName()=='subs') active @endif">
            <a href="{{ Route('subs') }}" class="menu-link">
              <div data-i18n="Analytics">الطلبات</div>
            </a>
          </li>
          <li class="menu-item @if(Route::currentRouteName()=='Paccounts') active @endif">
            <a href="{{ Route('Paccounts') }}" class="menu-link">
              <div data-i18n="CRM">الحسابات</div>
            </a>
          </li>
        </ul>
      </li>

    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; left: 254px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
  </aside>
  <!-- / Menu -->