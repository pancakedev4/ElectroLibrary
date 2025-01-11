<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta data-n-head ="ssr" property="og:type" content="{{$og_type}}">
  <meta data-n-head ="ssr" property="og:title" content="{{$og_title}}">
  <meta data-n-head ="ssr" property="og:site_name" content="{{$og_title}}">
  <meta data-n-head ="ssr" property="og:url" content="{{$og_url}}">
  <meta data-n-head ="ssr" property="og:image" content="{{$og_image}}">
  <meta data-n-head ="ssr" property="og:description" content="{{$og_description}}">
  <meta data-n-head ="ssr" property="product:plural_title" content="{{$product_plural_title}}">
  <meta data-n-head ="ssr" property="thumbnail" content="{{$og_image}}">
  <meta data-n-head ="ssr" property="twitter:title" content="{{$og_title}}">
  <meta data-n-head ="ssr" property="twitter:description" content="{{$og_description}}">
  <!-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" /> -->
  @stack('styles')
  @stack('scripts')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
<title></title>
<meta name="description" content="">
        
<!-- Facebook Meta Tags -->
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:image" content="">
<meta property="og:url" content="">
<meta property="og:site_name" content="">
<meta property="og:type" content="website">
        
<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="">
<!-- Meta Tags Generated via https://toolsaday.com -->
</head>
<body>
<div class="navbar bg-base-100">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
        <li><a>Книги</a></li>
        <li><a>Комиксы, манга, артбуки</a></li>
        <li><a>Аудиокниги</a></li>
        <li><a>Подкасты</a></li>
      </ul>
    </div>
    <a class="btn btn-ghost text-xl">Книжник</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
        <li><a>Книги</a></li>
        <li><a>Комиксы, манга, артбуки</a></li>
        <li><a>Аудиокниги</a></li>
        <li><a>Подкасты</a></li>
    </ul>
  </div>
  <div class="navbar-end">
  
        <!-- if there is a button in form, it will close the modal -->
        @guest() 
  <a href="/login" class="btn">Вход</a> 
 <a href="/register" class="btn">Регистрация</a>
@else 
 <a href="/profile" class="btn">Профиль</a>
                                    <a href="{{ route('logout') }}" class="dropdown-item logout btn"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Выход
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
@endguest
  </div>
</div>
 {{ $slot }}
 <footer class="footer footer-center bg-base-200 text-base-content rounded p-10">
  <nav class="grid grid-flow-col gap-4">
    <a href="/about" class="link link-hover">О нас</a>
    <a href="/contact" class="link link-hover">Контакты</a>
    <a class="link link-hover">Вакансии</a>
    <a href="/user_agreement" class="link link-hover">Пользовательское соглашение</a>
  </nav>
  <nav>
    <div class="grid grid-flow-col gap-4">
      <a>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          class="fill-current">
          <path
            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
        </svg>
      </a>
      <a>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          class="fill-current">
          <path
            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
        </svg>
      </a>
      <a>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          class="fill-current">
          <path
            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
        </svg>
      </a>
    </div>
  </nav>
  <aside>
    <p>Copyright © {new Date().getFullYear()} - All right reserved by ACME Industries Ltd</p>
  </aside>
  {{$_SERVER['REQUEST_URI']}}
</footer>
</body>
</html>