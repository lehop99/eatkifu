{{-- navigation  --}}
<header class="header" id="header">
  <nav class="nav container">
      <a href="#" class="nav__logo">
        <img src="../../images/logokifueat.png" alt="" class="logo-img">  
      </a>

      <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
              <li class="nav__item">
                  <a href="#about" class="nav__link active-link">EatKifuとは?</a>
              </li>
              <li class="nav__item">
                  <a href="#about" class="nav__link">利用までの流れ</a>
              </li>
              <li class="nav__item">
                  <a href="#services" class="nav__link">新商品モニター一覧</a>
              </li>
              <li class="nav__item">
                <a href="#contact" class="nav__link">加盟ラストランとして登録</a>
              </li>
              
              <i class='bx bx-toggle-left change-theme' id="theme-button"></i>
     
              @auth
                {{auth()->user()->name}}
                <div>
                <a href="{{ route('logout.perform') }}" class="button-login">Logout</a>
                </div>
              @endauth

              @guest
                <div class="text-end">
                <a href="{{ route('login.perform') }}" class="button-login">Login</a>
                    
              @endguest

              
          </ul>
      </div>

      <div class="nav__toggle" id="nav-toggle">
          <i class='bx bx-grid-alt'></i>
      </div>

      {{-- <a href="#" class="button button__header">Order Now!</a> --}}
  </nav>
</header>