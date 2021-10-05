@extends('layout/app')


@section('content')
    

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add Your Dog</h3>
            </div>

           
        </div>
        <div class="clearfix"></div>


<div class="row">
  <!-- form input mask -->
  <div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
 <?php
 if(isset($suc))
 {
 ?>
           <div class="alert alert-success" role="alert">
Dog Added Successfully.
</div>
<?php
}
?>
        <h2>Add Dog</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form method="post" action="/add-dog" class="form-horizontal form-label-left" enctype="multipart/form-data">

                {{csrf_field()}}
            <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 col-xs-3 ac">Dog Name</label>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <input required type="text" class="form-control" name="dog_name">
                  
                </div>
              </div>

          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3 ac">Date Of Birth</label>
            <div class="col-md-3 col-sm-9 col-xs-9">
              <input required type="date" class="form-control" name="dob">
              
            </div>
            <label class="control-label col-md-2 col-sm-3 col-xs-3 ac" style="">Sex</label>
            <div class="col-md-4 col-sm-9 col-xs-9">
             
                <select class="form-control select2" name="sex" id="">
                    <option value="" selected disabled>---Please Choose---</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
              
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3 ac">Breed</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <select onchange="breedother();" class="form-control select2" name="breed_id" id="otherbreed">
                  <option value="" selected disabled>Please Select</option>
                  <option value="Other">Other</option>
                  <?php
                  $ed=DB::select(" SELECT * FROM `breed` ");
                  foreach($ed as $rt)
                  {
                  ?>
                  <option value="{{$rt->breed_id}}">{{$rt->name}}</option>
                  <?php
                  }
                  ?>
              </select>
              
            </div>
          </div>

         

          <div class="form-group row">
            <p class="ac">If the breed you want is not found, choose Other and specify below:</p>
            <div class="col-md-12 col-sm-9 col-xs-9">
            
                <input readonly id="other_breed" type="text" name="other_breed" class="form-control">
              
            </div>
          </div>

          <div class="form-group row">
            
            <div class="col-md-12 col-sm-9 col-xs-9">
            <p class="ac">If your dog is a crossbreed, check here <input name="crossbreed" type="checkbox"></p>
               
              
            </div>
          </div>
        
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3 ac">Colour</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
            
                <input name="colour" type="text" class="form-control">
              
            </div>
          </div>
          
          
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3 ac">Microchip Number</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
            
                <input name="micro" type="text" class="form-control">
              
            </div>
          </div>
          
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3 ac">Breeding Licence Number</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
            
                <input name="breed_license_number" type="text" class="form-control">
              
            </div>
          </div>
          
          
          
          <div class="form-group row">
            
            <div class="col-md-12 col-sm-9 col-xs-9">
            <p class="ac">If you would like to place restrictions on your dog (such as do not breed etc.), check here <input name="restrictions" type="checkbox"></p>
               
              
            </div>
          </div>


          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3 ac">Do you own a pedigree for this dog?</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <select class="form-control select2" name="pedigree" id="">
                  <option value="" selected disabled>Please Select</option>
                  <option value="Yes"> Yes</option>
                  <option value="No"> No</option>
              </select>
              
            </div>
          </div>

          <div class="form-group row">
            
            <div class="col-md-9 col-sm-9 col-xs-9">
            
            <p class="ac">Upload Pedigree Image (if available)  <input name="pedigree_img" type="file" ></p>   
              
            </div>
          </div>

          <div class="form-group row">
            
            <div class="col-md-9 col-sm-9 col-xs-9">
            <p style="color: black;"> You will automatically receive a 3 generation pedigree once your dog is registered with European World Kennel Club.
            </p>
               
            </div>
          </div>

          
          <div class="alert alert-primary" role="alert">
            NOTE: Certificate delivery is free, which is up to 14 days. To get your certificate quicker (typically within 3 days) click the checkbox below to add £10:
          </div>

          <div class="form-group row">
            
            <div class="col-md-9 col-sm-9 col-xs-9">
            <p style="color: black;"> <input type="checkbox" name="within" id=""> Click here to add £10 to get your certificate delivered within 3 days.
            </p>
               
            </div>
          </div>

          <div class="form-group row">
            
            <div class="col-md-12 col-sm-9 col-xs-9">
            <p style="color: black;"><img src="images/dog.jpeg" style="width: 100px;height:100px;" alt=""><input name="quantity" type="text">EDKC pet tags - Price is £4.99 a tag.
            </p>
               
            </div>
          </div>
         
          <div class="ln_solid"></div>

          <div class="form-group row">
            <div class="col-md-9 offset-md-3">
              
              <button style="float: left;" type="submit"  class="btn btn-success">Submit</button>
            </div>
          </div>

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