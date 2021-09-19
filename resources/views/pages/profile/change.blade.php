@extends('layout/app')

@section('content')
    
    <style>
    label
    {
        color:black;
    }
</style>  
    
       
<!-- page content -->
<div class="right_col" role="main">
    <div class=>
        <div class="page-title">
            <div class="title_left">
                <h3 class="ac">Change Password </h3>
                
            </div>
           
          
        </div>
        <div class="clearfix"></div>


<div class="row">
  
  <!-- form color picker -->
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">

 <?php
 $str=Session::get("str");
if(isset($str))
{
?>

<div class="alert alert-danger" role="alert">
Your Old Password is incorrect.
</div>
<?php
}
?>

 <?php
 $str1=Session::get("str1");
if(isset($str1))
{
?>

<div class="alert alert-danger" role="alert">
Your Both Passwords do not match.
</div>
<?php
}
?>


 <?php
 $str2=Session::get("str2");
if(isset($str2))
{
?>

<div class="alert alert-success" role="alert">
Password Changed Successfully.
</div>
<?php
}
?>
  

        <!--<h2 class="ac">Terms &amp; Conditions <br> <small class="ac">In order to register a new litter, you must agree to the terms and conditions.</small></h2>-->

       
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
    
         
   <div class="row">
    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-body">
            <div >
                    <form action="/change-password" method="post">
                        {{csrf_field()}}
        <label>Old Password: <input class="form-control" type="password" name="old_password"></label><br>
        <label>New Password: <input class="form-control" type="password" name="password"></label><br>
        <label>Retype New Password: <input class="form-control" type="password" name="re_password"></label><br>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>
            </div>
            </div>
            </div>
        </div>
    </div>
    
    
    
  </div>
    </div>
  </div>
  <!-- /form color picker -->

 

</div>
</div>
</div>
<!-- /page content -->


@endsection