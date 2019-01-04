<!-- Top Bar Start -->
<div class="topbar">

  <!-- LOGO -->
  <div class="topbar-left">
      <a href="index.html" class="logo"><span>Zir<span>cos</span></span><i class="mdi mdi-cube"></i></a>
      <!-- Image logo -->
      <!--<a href="index.html" class="logo">-->
          <!--<span>-->
              <!--<img src="assets/images/logo.png" alt="" height="30">-->
          <!--</span>-->
          <!--<i>-->
              <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
          <!--</i>-->
      <!--</a>-->
  </div>

  <!-- Button mobile view to collapse sidebar menu -->
  <div class="navbar navbar-default" role="navigation">
      <div class="container">

          <!-- Navbar-left -->
          <ul class="nav navbar-nav navbar-left">
              <li>
                  <button class="button-menu-mobile open-left waves-effect waves-light">
                      <i class="mdi mdi-menu"></i>
                  </button>
              </li>
              <li class="hidden-xs">
                  <a href="#" class="menu-item waves-effect waves-light">New</a>
              </li>
          </ul>

          <!-- Right(Notification) -->
          <ul class="nav navbar-nav navbar-right">
              <li>
                  <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell"></i>
                      <span class="badge up bg-primary">4</span>
                  </a>

                  <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                      <li>
                          <h5>Notifications</h5>
                      </li>
                      <li>
                          <a href="#" class="user-list-item">
                              <div class="icon bg-info">
                                  <i class="mdi mdi-account"></i>
                              </div>
                              <div class="user-desc">
                                  <span class="name">New Signup</span>
                                  <span class="time">5 hours ago</span>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#" class="user-list-item">
                              <div class="icon bg-danger">
                                  <i class="mdi mdi-comment"></i>
                              </div>
                              <div class="user-desc">
                                  <span class="name">New Message received</span>
                                  <span class="time">1 day ago</span>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#" class="user-list-item">
                              <div class="icon bg-warning">
                                  <i class="mdi mdi-settings"></i>
                              </div>
                              <div class="user-desc">
                                  <span class="name">Settings</span>
                                  <span class="time">1 day ago</span>
                              </div>
                          </a>
                      </li>
                      <li class="all-msgs text-center">
                          <p class="m-0"><a href="#">See all Notification</a></p>
                      </li>
                  </ul>
              </li>

              <li class="dropdown user-box">
                  <a href="" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown" aria-expanded="true">
                      <img src="doctor/img/12.jpg" alt="user-img" class="img-circle user-img">
                  </a>

                  <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                      <li>
                      <h5>{{Auth::guard('doctor')->user()->name}}</h5>
                      </li>
                      <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                      <li><a  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="ti-power-off m-r-5"></i>{{ __('Logout') }}</a></li>
            
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                    </li>
                  </ul>
              </li>

          </ul> <!-- end navbar-right -->

      </div><!-- end container -->
  </div><!-- end navbar -->
</div>
<!-- Top Bar End -->