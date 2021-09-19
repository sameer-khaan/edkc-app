@extends('layout/app')

@section('content')
    

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Pending Litters</h3>
                
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


        <h2>Pending Litters<small></small></h2>
      
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
           <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
      
        <table id="datatable" class="table table-striped table-bordered userrecordTable" style="width:100%">
          <thead>
           						    
            <tr>
              <th >User Name</th>
              <th>Litter Id</th>
            <th>Dam/Sire</th>
            <th>No of Bitches/No of Dogs</th>
                <th>Breed Name</th>
            <th>Country</th>
              <th>Actions</th>
             
            </tr>
          </thead>

<?php
foreach($litter as $ll)
{
?>
          <tbody>
            				
            <tr>
              <td>
                  <?php
                  $as=DB::select(" SELECT * FROM `user` WHERE `id`='".$br->user_id."' ");
                  foreach($as as $fd)
                  {
                      $name=$fd->name;
                  }
                  ?>
                  {{$name}}
              </td>
              <td>{{$br->litter_id}}</td>
              <td>{{$br->dam}}/{{$br->sire}}</td>
               <td>{{$br->no_of_bitches}}/{{$br->no_of_dogs}}</td>
               <td>
                  <?php
                  $as1=DB::select(" SELECT * FROM `breed` WHERE `breed_id`='".$br->breed_id."' ");
                  foreach($as1 as $fd1)
                  {
                      $breed_name=$fd1->name;
                  }
                  ?>
                  {{$breed_name}}
              </td>
              <td>
                  <?php
                  $as2=DB::select(" SELECT * FROM `country` WHERE `id`='".$br->country."' ");
                  foreach($as2 as $fd2)
                  {
                      $country_name=$fd2->name;
                  }
                  ?>
                  {{$country_name}}
              </td>
              <td><a href="#" class="userrecordbtn"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;&nbsp;<a href="/delete-user" ><i class="fa fa-times"></i></a>
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