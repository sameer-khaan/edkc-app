@extends('layout/app')

@section('content')
    

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Breed Records</h3>
                
            </div>
            <a href="/add-breed" class="btn btn-primary" type="button" style="float: right;">Add Records</a>
       
        </div>
        <div class="clearfix"></div>


<div class="row">
  
  <!-- form color picker -->
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">


      <?php
if(isset($str))
{
?>

<div class="alert alert-success" role="alert">
Breed Updated successfully.
</div>
<?php
}
?>

<?php
if(isset($str2))
{
?>

<div class="alert alert-danger" role="alert">
Breed Deleted successfully.
</div>
<?php
}
?>


        <h2>Breed Records<small></small></h2>
      
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
           <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
      
        <table id="datatable" class="table table-striped table-bordered courseTable" style="width:100%">
          <thead>
           						    
            <tr>
              <th >ID</th>
              <th>Breed Name</th>
             
              <th>Actions</th>
             
            </tr>
          </thead>

<?php
foreach($breed as $br)
{
?>
          <tbody>
            				
            <tr>
              <td>{{$br->breed_id}}</td>
              <td>{{$br->name}}</td>
              <td><a href="/update-breed/{{$br->breed_id}}/{{$br->name}}" ><i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;<a onclick="return confirm('Are you sure want to delete this?');" href="/delete-breed/{{$br->breed_id}}" ><i class="fa fa-times"></i></a>
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