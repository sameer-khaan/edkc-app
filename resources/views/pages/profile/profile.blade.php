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
                <h3 class="ac">Profile <a  class="btn btn-primary" type="button" href="/edit-profile">Edit Profile</a></h3>
                
            </div>
           
          
        </div>
        <div class="clearfix"></div>


<div class="row">
  
  <!-- form color picker -->
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">


  

        <!--<h2 class="ac">Terms &amp; Conditions <br> <small class="ac">In order to register a new litter, you must agree to the terms and conditions.</small></h2>-->

       
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
    
         
   <div class="row">
    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-body">
            <div class="table-responsive fos_user_user_show">
                <table class="table-striped table">
                    @foreach($profile as $pp)
                    <tr>
                        <td style="font-weight:600">Username</td><td>{{$pp->username}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight:600">Email</td><td>{{$pp->email}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight:600">Name</td><td>{{$pp->name}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight:600">Address</td>
                        <td>{{$pp->address}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight:600">Telephone</td><td>{{$pp->code}}{{$pp->phone}}‬‬</td>
                    </tr>
                    @endforeach
                </table>
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