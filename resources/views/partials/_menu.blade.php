<div class="menu box_shadow bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-auto">
        <img class="logo" src="img/logo.png" alt="" title="">
      </div>
      <div class="col"></div>
      <div class="col-auto">
        <ul class="logo_ul">
          <li class="logo_ul_active"><a href="{{ route('home') }}">HOME</a></li>
          
          <li><a href="{{ route('search') }}">SEARCH</a></li>
          @guest
          <li><a href="{{ route('login') }}">Login</a></li>
          @if (Route::has('register'))
          <li><a href="{{ route('register') }}">Register</a></li>
          @endif
          @else
          <li><a href="{{ route('profile') }}">{{ Auth::user()->name }}</a></li>
          <li><a  href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form></li>
          @endguest
          
        </ul>
      </div>
    </div>
  </div>
</div>