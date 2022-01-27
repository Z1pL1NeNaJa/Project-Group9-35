<header id="header" class="fixed-top d-flex align-items-center">
<div class="container">
    <header class="d-flex justify-content-center py-3">
    <nav id="navbar" class="navbar order-last order-lg-0">
       <ul>
       <li><a class="nav-link scrollto " href="{{asset('/')}}">หน้าแรก</a></li>
          <li><a class="nav-link scrollto " href="{{route('about')}}">สินค้า</a></li>
          <a href="{{asset('/')}}" class="logo me-auto"><img src="{{asset('admin/assetsfont/img/LOGO thawat.png')}}" alt=""></a>
          <li><a class="nav-link scrollto " href="{{asset('services')}}">เกี่ยวกับ</a></li>
          <li><a class="nav-link scrollto " href="{{asset('contact')}}">ติดต่อ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <div class="text-end">
      <a href="{{ route('login') }}" class="get-started-btn scrollto">Login</a>
      </div>
    </div>
  </header>