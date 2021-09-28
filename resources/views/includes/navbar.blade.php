
        
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="/" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('images/img.jpg')}}" alt="">
                    <?php
                      $user = Auth::user();
                      echo $user->name;
                    ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/profile"> Profile</a>
                    <a class="dropdown-item" href="/change-password">Change Password</a>
                    <a class="dropdown-item" href="javascript://">
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-sm btn-danger" type="submit">Log Out</button>
                      </form>
                    </a>
                  </div>
                </li>
                <!-- <div style="float:right;" id="google_translate_element"></div> -->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->