@extends('layout/app')

@section('content')
    

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>User Records</h3>
                
            </div>
            <!--<a href="/add-breed" class="btn btn-primary" type="button" style="float: right;">Add Records</a>-->
       
        </div>
        <div class="clearfix"></div>


<div class="row">
  
  <!-- form color picker -->
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">


 

<?php
$wq=Session::get("str");
if(isset($wq))
{
?>

<div class="alert alert-danger" role="alert">
User Deleted successfully.
</div>
<?php
}
?>


        <h2>User Records<small></small></h2>
      
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
           <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
      
        <table id="datatable" class="table table-striped table-bordered userrecordTable" style="width:100%">
          <thead>
           						    
            <tr>
              <th >User ID</th>
              <th>Name</th>
            <th>Surname</th>
            <th>Phone</th>
              <th>Actions</th>
             
            </tr>
          </thead>

<?php
foreach($user as $br)
{
?>
          <tbody>
            				
            <tr>
              <td>
                
                  {{$br->id}}
                  </td>
              <td>{{$br->name}}</td>
              <td>{{$br->surname}}</td>
               <td>{{$br->code}}&nbsp;&nbsp;{{$br->phone}}</td>
              <td><a href="#" class="userrecordbtn"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;&nbsp;<a href="/delete-user/{{$br->id}}" ><i class="fa fa-times"></i></a>
              </td>
            
            </tr>
<?php
}
?>
          
          </tbody>
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