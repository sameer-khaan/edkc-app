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
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Litter Records</h3>
                
            </div>
            <a href="/add-litter" class="btn btn-primary" type="button" style="float: right;">Add Litter</a>
       
        </div>
        <div class="clearfix"></div>


<div class="row">
  
  <!-- form color picker -->
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">


      <?php
if(isset($_GET["str1"]))
{
?>

<div class="alert alert-success" role="alert">
Course Updated successfully.
</div>
<?php
}
?>

<?php
if(isset($str2))
{
?>

<div class="alert alert-danger" role="alert">
Litter Deleted successfully.
</div>
<?php
}
?>


        <h2>Litter Records<small></small></h2>
      
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
      
        <table id="datatable" class="table table-striped table-bordered courseTable" style="width:100%">
          <thead>
            							      						    
            <tr>
              <th>Litter ID</th>
              <th>Dam</th>
              <th>Sire</th>
              <th>No. Bitches</th>
              <th>No. Dogs</th>
              <th>Date of Birth</th>
              <th>Date Created</th>
              <th>Paid</th>
              <th>	Actions </th>
             
            </tr>
          </thead>


          <tbody>
          		@foreach($litter as $ll)				        				
            <tr>
              <td>{{$ll->litter_id}}</td>
              <td>
                  <?php
                  $as=DB::select(" SELECT * FROM `dog` WHERE `dog_id`='".$ll->dam."' ");
                  foreach($as as $fg)
                  {
                      $d_name=$fg->name;
                  }
                  ?>
                  {{$d_name}}
                  
                  </td>
              <td>
                  <?php
                  $as1=DB::select(" SELECT * FROM `dog` WHERE `dog_id`='".$ll->sire."' ");
                  foreach($as1 as $fg1)
                  {
                      $s_name=$fg1->name;
                  }
                  ?>
                  {{$s_name}}
                  
              </td>
              <td>{{$ll->no_of_bitches}}</td>
              <td>{{$ll->no_of_dogs}}</td>
              <td>{{$ll->dob}}</td>
              <td>{{$ll->timestamp}}</td>
              <td>{{$ll->status}}</td>
             <td><a href="/litter-view/{{$ll->litter_id}}" ><i class="fa fa-eye"></i></a>&nbsp;&nbsp;&nbsp;<a onclick="return confirm('Are you sure want to delete this?');" href="/litter-delete/{{$ll->litter_id}}" ><i class="fa fa-times"></i></a>&nbsp;&nbsp;&nbsp;<a href="/add-puppies/{{$ll->litter_id}}" ><i class="fa fa-shopping-cart"></i></a>
              </td>
            
            </tr>
           @endforeach
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