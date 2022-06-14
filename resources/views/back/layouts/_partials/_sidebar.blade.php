<aside class="sidebar-wrapper" data-simplebar="true">

    <div class="sidebar-header">
      <div>
        <img src="{{ asset('back/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
      </div>
      <div>
        <h4 class="logo-text">Onedash</h4>
      </div>
      <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
      </div>
    </div>


    <!--navigation-->
    <ul class="metismenu" id="menu">
      <li>
        <a href="{{ route('home') }}">
          <div class="parent-icon"><i class="fadeIn animated bx bx-home-circle"></i>
          </div>
          
          <div class="menu-title">Anasayfa</div>
        </a>
      </li>
    
      <li>
        <a href=" {{ route('settings.index') }} ">
          <div class="parent-icon"><i class="lni lni-cog"></i>
          </div>
          
          <div class="menu-title">Site Ayarları</div>
        </a>
      </li>
      <li>
        <a href=" {{ route('kurumsal.index') }} ">
          <div class="parent-icon"><i class="lni lni-apartment"></i>
          </div>
          
          <div class="menu-title">Kurumsal</div>
        </a>
      </li>

      <li class="menu-label">Hizmetlerimiz</li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-checkbox"></i>
          </div>
          <div class="menu-title">Kategoriler</div>
        </a>
        <ul>
          <li> <a href="{{ route('servicesCategori.create')}}"><i class="lni lni-archive"></i>Hizmet Kategori Ekle</a>
          </li>
          <li> <a href="{{ route('servicesCategori.index')}}"><i class="lni lni-plus"></i>Hizmet Kategori Listele</a>
          </li>
        </ul>
      </li>  
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-rocket"></i>
          </div>
          <div class="menu-title">Hizmetlerimiz</div>
        </a>
        <ul>
          <li> <a href="{{ route('services.create') }}"><i class="lni lni-archive"></i>Hizmet Ekle</a>
          </li>
          <li> <a href="{{ route('services.index') }}"><i class="lni lni-plus"></i>Hizmet Listesi</a>
          </li>
        </ul>
      </li>  

      
      <li class="menu-label">Duyurular</li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-flag"></i>
          </div>
          <div class="menu-title">Duyurular</div>
        </a>
        <ul>
          <li> <a href="{{ route('announcement.create')}}"><i class="lni lni-archive"></i>Duyuru Ekle</a>
          </li>
          <li> <a href="{{ route('announcement.index')}}"><i class="lni lni-plus"></i>Duyuru Listele</a>
          </li>
        </ul>
      </li> 
      
      <li class="menu-label">Projeler</li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-write"></i>
          </div>
          <div class="menu-title">Projeler</div>
        </a>
        <ul>
          <li> <a href="{{ route('projects.create')}}"><i class="lni lni-archive"></i>Proje Ekle</a>
          </li>
          <li> <a href="{{ route('projects.index')}}"><i class="lni lni-plus"></i>Proje Listele</a>
          </li>
        </ul>
      </li> 

      <li class="menu-label">Slider</li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-gallery"></i>
          </div>
          <div class="menu-title">Slider</div>
        </a>
        <ul>
          <li> <a href="{{ route('slider.create')}}"><i class="lni lni-archive"></i>Slider Ekle</a>
          </li>
          <li> <a href="{{ route('slider.index')}}"><i class="lni lni-plus"></i>Slider Listele</a>
          </li>
        </ul>
      </li>  




      


    </ul>
    <!--end navigation-->
 </aside>

