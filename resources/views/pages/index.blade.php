@extends('layout/app')

@section('content')
    
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    
    
    
    
    
    <div class="row" style="display: inline-block;" >
    
    <div class="alert alert-success" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only"></span>
       Please choose a page from the menu to the left, or use the quick links below
      </div>

<br>    
        
    <div class="tile_count">
      <div class="col-md-3 col-sm-4 col-6  tile_stats_count">
        <span class="count_top"> </span>
        <div ><a href="/dog-records" type="button" class="btn btn-success" style="color: white;">View Your Dogs</a></div>
        <span class="count_bottom"> </span>
      </div>
      <div class="col-md-3 col-sm-4 col-6  tile_stats_count">
        <span class="count_top"> </span>
        <div ><a href="/add-dog" type="button" class="btn btn-success" style="color: white;">Add a New Dogs</a></div>
        <span class="count_bottom"> </span>
      </div>
      <div class="col-md-3 col-sm-4 col-6  tile_stats_count">
        <span class="count_top"> </span>
        <div ><a href="/litter-records" type="button" class="btn btn-success" style="color: white;">View Your Litters</a></div>
        <span class="count_bottom"> </span>
      </div>
      <div class="col-md-3 col-sm-4 col-6  tile_stats_count">
        <span class="count_top"> </span>
        <div ><a href="/add-litter" type="button" class="btn btn-success" style="color: white;">Register a new Litter</a></div>
        <span class="count_bottom"> </span>
      </div>
     
    </div>
  </div>
    <!-- /top tiles -->


    <div class="alert alert-success" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Welcome: </span>
        YOUR KENNEL NAME IS UNSTOPPABULLZ
      </div>


    <br />
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Your Dog </h2>
             
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <div class="row">
                  @foreach($dog as $dd)
                <div class="col-md-55">
                <a href="/view/{{$dd->dog_id}}">
                  <div class="thumbnail">
                    <div class="image view view-first">
                      <img style="width: 100%; display: block;" src="images/media1.jpg" alt="image" />
                      <!--<div class="mask">-->
                      <!--  <p>Your Text</p>-->
                      <!--  <div class="tools tools-bottom">-->
                      <!--    <a href="#"><i class="fa fa-link"></i></a>-->
                      <!--    <a href="#"><i class="fa fa-pencil"></i></a>-->
                      <!--    <a href="#"><i class="fa fa-times"></i></a>-->
                      <!--  </div>-->
                      <!--</div>-->
                    </div>
                    <div class="caption">
                      <p>{{$dd->name}}</p>
                    </div>
                  </div>
                </a>
                </div>
                @endforeach
             
              </div>
            </div>
          </div>
        </div>
      </div>


  
  </div>
  <!-- /page content -->


@endsection