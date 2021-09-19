<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/" class="site_title">
                  <!--<i class="fa fa-paw"></i> -->
                  <img style="width:100px;height:100px;" src="{{ asset('images/logo.c3761255.svg')}}">
                  </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
                <h2><?php
                $user = Auth::user();
                echo $user->name;
                    //$conn=mysqli_connect("localhost","root","","asadrajput_db");
                    // $rte1=$conn->query(" SELECT * FROM `admin` WHERE `admin_id`='".$_SESSION["user"]."' ");
                    // $rew1=$rte1->fetch_assoc();
                    // echo $rew1["name"];
                    ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
              
                <ul class="nav side-menu">
                
                <?php
                  if($user->type=="Admin")
                  {
                  ?>
                  <li><a href="/user-records"><i style="font-size:20px;" class="fas fa-user"></i>&nbsp;&nbsp;  User Records</a>
                 
                  </li>
                  
                     <li><a><i style="font-size:20px;" class="fas fa-inbox"></i>&nbsp;&nbsp;  Litter<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/add-dog">Pending Litters</a></li>
              
                      <li><a href="/dog-records">Approved Litters</a></li>
                    
                    </ul>
                  </li>
                  
                  
                  <li><a href="/add-dam"><i style="font-size:20px;" class="fas fa-user"></i>&nbsp;&nbsp;  Dam</a>
                 
                  </li>
                  
                  <li><a href="/add-sire"><i style="font-size:20px;" class="fas fa-user"></i>&nbsp;&nbsp;  Sire</a>
                 
                  </li>
                  
                  <?php
                  }
                  ?>    
                    
                    
                  <?php
                  if($user->type=="user")
                  {
                  ?>
                  <li><a><i style="font-size:20px;" class="fas fa-dog"></i>&nbsp;&nbsp;  Dog<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/add-dog">Add Dog</a></li>
              
                      <li><a href="/dog-records">Dog Records</a></li>
                    
                    </ul>
                  </li>
               


                  <li><a><i  style="font-size:20px;" class="fas fa-dog"></i>&nbsp;&nbsp;Breeds<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/add-breed">Add Breed</a></li>
              
                      <li><a href="/breed-records">Breed Records</a></li>
                    
                    </ul>
                  </li>

                  <li>
                    <a href="/litter-records"><i class="fa fa-inbox"></i> Litter</a>
                    
                  </li>

                  <li><a href="/change-of-ownership"><i style="color: white; font-size:20px;" class="fas fa-address-book"></i> &nbsp;&nbsp;Change Of ownership</a>
                   
                  </li>

                  <li>
                    <a href="/stud-enquiries"><i style="color: white; font-size:20px;" class="fas fa-question-circle"></i>&nbsp;&nbsp;STUD Enquiries</a>
                   
                  </li>


                  <li>
                    <a href="/litter-enquiries"><i style="color: white; font-size:20px;" class="fas fa-question-circle"></i>&nbsp;&nbsp;Litter Enquiries</a>
                   
                  </li>
                  
                  <li>
                    <a href="/profile"><i style="color: white; font-size:20px;" class="fas fa-user"></i>&nbsp;&nbsp;Your Profile</a>
                   
                  </li>
                  <li> <a class="btn btn-primary" href="/add-dog">Add Dogs</a> </li>
                  <br>
                  <li> <a class="btn btn-primary" href="/add-litter">Add Litters</a> </li>
   <?php
                  }
                  ?>
                 
                </ul>
              </div>
          
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>