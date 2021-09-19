
        
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
                    <img src="{{ asset('images/img.jpg')}}" alt=""><?php
                      $user = Auth::user();
                echo $user->name;
                    // $rte=$conn->query(" SELECT * FROM `admin` WHERE `admin_id`='".$_SESSION["user"]."' ");
                    // $rew=$rte->fetch_assoc();
                    // echo $rew["name"];
                    ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="/profile"> Profile</a>
                      <!--<a class="dropdown-item"  href="javascript:;">-->
                      <!--  <span class="badge bg-red pull-right">50%</span>-->
                      <!--  <span>Settings</span>-->
                      <!--</a>-->
                  <a class="dropdown-item"  href="/change-password">Change Password</a>
                  <form method="POST" action="{{ route('logout') }}">
                        @csrf
                    <button type="submit" ><i class="fa fa-sign-out pull-right"></i> Log Out</button>
                    </form>
                  </div>
                </li>

           <div style="float:right;" id="google_translate_element"></div>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->