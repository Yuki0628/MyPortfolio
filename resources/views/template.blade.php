
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yuki's Portfolio</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link
      href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
      rel="stylesheet"
    />

  </head>
  <body>
    <div id="global-container">
      <div class="container">
          <div class="mobile-menu__cover"></div>
          <header class="header">
            <div class="header__inner">
              <div class="logo">
                <a href="{{ url('/') }}">
                  <span class="logo__text">Yuki's Portfolio</span>
                </a>
              </div>
              <nav class="nav">
                <ul class="nav__ul">
                  <li><a href="{{ url('/') }}" class="{{url()->current() == url('/')? 'active' : ''}}">Home</a></li>
                  <li><a href="{{ url('/works') }}" class="{{url()->current() == url('/works')? 'active' : ''}}">Works</a></li>
                  <li><a href="{{ url('/history') }}" class="{{url()->current() == url('/history')? 'active' : ''}}">History</a></li>
                  <li><a href="{{ url('/contact') }}" class="{{url()->current() == url('/contact')? 'active' : ''}}">Contact</a></li>
                </ul>
              </nav>
              <!-- ハンバーガーメニュー -->
              <button class="mobile-menu__btn">
                <span></span>
                <span></span>
                <span></span>
              </button>
            </div>
          </header>
          @yield('content')
      </div>
      <!-- For SmartPhone -->
      <nav class="mobile-menu">
        <ul class="mobile-menu__main">
          <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="{{ url('/') }}">
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="{{ url('/works') }}">
              <span class="menu-title">Works</span>
            </a>
          </li>
          <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="{{ url('/history') }}">
              <span class="menu-title">History</span>
            </a>
          </li>
          <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="{{ url('/contact') }}">
              <span class="menu-title">Contact</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <script src="{{ asset('/js/libs/mobile-menu.js') }}"></script>
    @yield('scriptContent')
  </body>
</html>
