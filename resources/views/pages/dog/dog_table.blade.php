@extends('layout/app')

@section('content')
    

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Dog Records</h3>
                
            </div>
            <a href="/add-dog" class="btn btn-primary" type="button" style="float: right;">Add Dogs</a>
       
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
$str2=Session::get('str2');
if(isset($str2))
{
?>

<div class="alert alert-danger" role="alert">
Dog Deleted successfully.
</div>
<?php
}
?>


        <h2>Dog Records<small></small></h2>
      
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
      
        <table id="datatable" class="table table-striped table-bordered courseTable" style="width:100%">
          <thead>
           						    
            <tr>
              <th> Reg/Studbook No</th>
              <th>Name</th>
              <th>Breed</th>
              <th>Date of Birth</th>
              <th>Colour</th>
              <th>Sex</th>
              <th>Pedigree</th>
              <th>Actions</th>
            </tr>
          </thead>


          <tbody>
            		@foreach($dog as $dd)		
            <tr>
              <td>{{$dd->dog_id}}</td>
              <td><a href="/view/{{$dd->dog_id}}">{{$dd->name}}</a></td>
              <?php
              $sc=DB::select(" SELECT * FROM `breed` WHERE `breed_id`='".$dd->breed."'");
              foreach($sc as $eds)
              {
                  $name=$eds->name;
              }
              ?>
              <td>{{$name ?? ''}}</td>
              <td>{{$dd->dob}}</td>
              <td>{{$dd->colour}}</td>
              <?php
              if($dd->sex=="Female")
              {
              ?>
              <td>&nbsp;&nbsp;&nbsp;<i class="fa fa-venus" aria-hidden="true" style="text-align:centre; font-weight:bold; color: pink;"></i>
              </td>
              <?php
              }
              else
              {
              ?>
              <td>&nbsp;&nbsp;&nbsp;<i class="fa fa-mars" aria-hidden="true" style="text-align:centre; font-weight:bold; color: blue;"></i>
              </td>
              <?php
              }
              ?>
              <td><a href="{{url('pedigree/'.$dd->dog_id)}}" class="btn btn-light"><i class="fas fa-sitemap"></i></a></td>
              <td><a href="/view/{{$dd->dog_id}}"><i class="fa fa-eye"></i>&nbsp;&nbsp;&nbsp;<a onclick="return confirm('Are you sure want to delete this?');" href="/delete-dog/{{$dd->dog_id}}" ><i class="fa fa-times"></i></a>
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