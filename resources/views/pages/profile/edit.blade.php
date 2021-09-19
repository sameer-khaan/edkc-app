@extends('layout/app')


@section('content')
    

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit Your Profile</h3>
            </div>
            
        </div>
        <div class="clearfix"></div>


<div class="row">
  <!-- form input mask -->
  <div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
           
           <?php
           $str=Session::get("str");
           if(isset($str))
           {
               
           
           ?>
           <div class="alert alert-secondary" role="alert">
Profile Updated
</div>
    
    <?php
    }
    
    ?>
    
    
           <?php
           $str1=Session::get("str1");
           if(isset($str1))
           {
               
           
           ?>
           <div class="alert alert-secondary" role="alert">
Your Password do not Match
</div>
    
    <?php
    }
    
    ?>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form method="post" action="/add-litter" class="form-horizontal form-label-left">

          {{csrf_field()}}

    @foreach($profile as $pp)
          <div class="form-group row">
            <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">First Name</label>
            <div class="col-md-10 col-sm-9 col-xs-9">
                  <div class="col-md-4 col-sm-9 col-xs-9">
             
                <input type="text" class="form-control" value="{{$pp->name}}" name="fname">
              
            </div>
            </div>
            <label class="control-label col-md-2 col-sm-3 col-xs-3 ac" style="">Sur Name</label>
            <div class="col-md-10 col-sm-9 col-xs-9">
             
                <div class="col-md-4 col-sm-9 col-xs-9">
             
                <input type="text" class="form-control" value="{{$pp->surname}}" name="surname">
              
            </div>
              
            </div>
          </div>
          
          <div class="form-group row">
            <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Telephone</label>
            <div class="col-md-2 col-sm-9 col-xs-9">
                  <div class="col-md-10 col-sm-9 col-xs-9">
             
                <input type="text" class="form-control" value="{{$pp->code}}" name="code">
              
            </div>
            </div>
           
            <div class="col-md-2 col-sm-9 col-xs-9">
             
                <div class="col-md-10 col-sm-9 col-xs-9">
             
                <input type="text" class="form-control" value="{{$pp->phone}}" name="phone">
              
            </div>
              
            </div>
          </div>
          
           <div class="form-group row">
            <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Email</label>
            <div class="col-md-2 col-sm-9 col-xs-9">
                  <div class="col-md-10 col-sm-9 col-xs-9">
             
                <input type="text" class="form-control" value="{{$pp->email}}" name="email">
              
            </div>
            </div>
           
            <div class="col-md-6 col-sm-9 col-xs-9">
               <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Address</label>
                <div class="col-md-10 col-sm-9 col-xs-9">
             
                <input type="text" class="form-control" value="{{$pp->address}}" name="address">
              
            </div>
              
            </div>
          </div>
          
            <div class="form-group row">
            <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Town</label>
            <div class="col-md-2 col-sm-9 col-xs-9">
                  <div class="col-md-10 col-sm-9 col-xs-9">
             
                <input type="text" class="form-control" value="{{$pp->town}}" name="town">
              
            </div>
            </div>
           
            <div class="col-md-6 col-sm-9 col-xs-9">
               <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Post Code</label>
                <div class="col-md-10 col-sm-9 col-xs-9">
             
                <input type="text" class="form-control" value="{{$pp->postcode}}" name="postcode">
              
            </div>
              
            </div>
          </div>
          
          
            <div class="form-group row">
            <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Country</label>
            <div class="col-md-2 col-sm-9 col-xs-9">
                  <div class="col-md-10 col-sm-9 col-xs-9">
             
                <input type="text" class="form-control" value="{{$pp->country}}" name="country">
              
            </div>
            </div>
           
            <div class="col-md-6 col-sm-9 col-xs-9">
               <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">To Confirm , enter your current password</label>
                <div class="col-md-10 col-sm-9 col-xs-9">
             
                <input type="text" class="form-control" name="password">
              
            </div>
              
            </div>
          </div>
          
          
          
           
          
     
          








        
          <div class="ln_solid"></div>

          <div class="form-group">
            <button type="submit"  class="btn btn-primary">Save</button>
        </div>
@endforeach
        </form>
      </div>
    </div>
  </div>
  <!-- /form input mask -->

  
</div>
</div>
</div>
<!-- /page content -->


@endsection