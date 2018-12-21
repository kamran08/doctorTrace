<div class="menu box_shadow bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-auto">
        <img class="logo" src="{{ asset('img/logo.png') }}" alt="" title="">
      </div>
      <div class="col"></div>
      <div class="col-auto">
        <ul class="logo_ul">
          <li class="logo_ul_active"><a href="{{ route('home') }}">HOME</a></li>
          
          <li><a href="{{ route('search') }}">SEARCH</a></li>
          @if (Auth::guard('doctor')->check() || Auth::guard()->check())

          <li><a href="{{ route('profile', ['id' => 1 ]) }}">{{ (Auth::guard('doctor')->check())? Auth::guard('doctor')->user()->name : Auth::user()->name}}</a></li>
          <li><a  href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
        </li>
         @else

         <li class="nav-item dropdown">
          <a id="linkDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ __('Login') }}
              <span class="caret"></span>
          </a>

          <div class="dropdown-menu" aria-labelledby="linkDropdown">
              <a class="dropdown-item" href="{{ route('login') }}">
                  {{ __('User') }}
              </a>
              <a class="dropdown-item" href="{{ route('doctor.login') }}">
                  {{ __('Doctor') }}
              </a>
          </div>
        </li>
         <li><a href="{{ route('register') }}">Register</a></li>
         @endif
          
        </ul>
      </div>
    </div>
  </div>
</div>