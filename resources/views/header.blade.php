<header class="row bg-success" style="border-bottom: 1px solid silver">
  <div class="col-sm-5 text-start text-light py-1">
    <i class="bi bi-geo-alt-fill"></i>
    004 LONG AN
    <i class="bi bi-envelope-fill"></i>
    yenhuynhhai12082004@gmail.com
  </div>
  <div class="col-sm-7 text-end text-light py-1">
    FOLLOW US
    <a href=""><i class="bi bi-facebook"></i></a>
    <a href=""><i class="bi bi-whatsapp"></i></a>
  </div>
</header>

<div class="row">
  <div class="col-sm-4 logo justify-content-lg-start">
    <img class="logo" src="{{asset('img/Logo.png')}}" width="150px">
  </div>
  <div class="col-sm-8 menu">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid text-end">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link" href="{{asset('/')}}">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{asset('/products')}}">Sản phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{asset('/contact')}}">Liên hệ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{asset('/blog')}}">Tin tức</a>
            </li>
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">
                <i class="bi bi-person-check"></i>
                Đăng nhập</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('register')}}">
                <i class="bi bi-person-add"></i>
                Đăng Kí</a>
            </li>
            @endguest

            @auth
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-person"></i>
                {{auth()->user()->name}}
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('logout')}}">
                Đăng Xuất
                <i class="bi bi-box-arrow-right"></i>

              </a>
            </li>
            @endauth
            <li class="nav-item">
              <a class="nav-link" href="{{route('cart')}}">
                <i class="bi bi-basket3-fill">
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    2
                  </span>
                </i>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>