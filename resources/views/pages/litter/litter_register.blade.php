@extends('layout/app')


@section('content')
    

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>REGISTER NEW LITTER</h3>
            </div>
            
        </div>
        <div class="clearfix"></div>


<div class="row">
  <!-- form input mask -->
  <div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
           
        <div class="alert alert-danger" role="alert">
            IMPORTANT: If the dam and / or sire used for mating are not registered on European Dog Kennel Club, please contact us before registering your litter.
            Please also note that only the dogs you own and have registered with European Dog  Kennel Club will appear in the Dam list.
            </div>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form method="post" action="/add-litter" class="form-horizontal form-label-left">

          {{csrf_field()}}

          <div class="form-group row">
            <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Dam</label>
            <div class="col-md-4 col-sm-9 col-xs-9">
                <select class="form-control select2" name="dam_id" id="">
                    <option value="" selected disabled>---Please Choose---</option>
                    <?php 
                    $ed=DB::select(" SElECT * FROM `dog` WHERE `sex`='Female' ");
                    foreach($ed as $axs)
                    {
                       
                            $dam_name=$axs->name;
                        
                    ?>
                    <option value="{{$axs->dog_id}}">{{$dam_name}}</option>
                    <?php
                    
                    }
                    ?>
                </select>
            </div>
            <label class="control-label col-md-2 col-sm-3 col-xs-3 ac" style="">Sire</label>
            <div class="col-md-4 col-sm-9 col-xs-9">
             
                <select class="form-control select2" name="sire_id" id="">
                    <option value="" selected disabled>---Please Choose---</option>
                  <?php
                  $asqws=DB::select(" SELECT * FROM `dog` WHERE `sex`='Male' ");
                  foreach($asqws as $cx)
                  {
                  ?>
                    <option value="{{$cx->dog_id}}">EDKC{{$cx->dog_id}}</option>
                  <?php
                  }
                  ?>
                </select>
              
            </div>
          </div>
          
          
          
             <div class="form-group row">
            <label class="control-label col-md-2 col-sm-3 col-xs-3 ac" style="">No of Dogs</label>
            <div class="col-md-4 col-sm-9 col-xs-9">
             
                <input type="text" class="form-control" name="no_of_dogs">
              
            </div>
            <label class="control-label col-md-2 col-sm-3 col-xs-3 ac" style="">No of Bitches</label>
            <div class="col-md-4 col-sm-9 col-xs-9">
             
                <input type="text" class="form-control" name="no_of_bitches">
              
            </div>
          </div>
          
           <div class="form-group row">
            <label class="control-label col-md-2 col-sm-3 col-xs-3 ac" style="">Date of Birth</label>
            <div class="col-md-10 col-sm-9 col-xs-9">
             
                <input type="date" class="form-control" name="dob">
              
            </div>
            
          </div>
          

          <div class="form-group row">
            <p class="control-label col-md-2 col-sm-9 col-xs-9 ac">Breed</p>
            <div class="col-md-4 col-sm-9 col-xs-9">
            <select class="form-control select2" name="breed_id" id="">
                <option value="" selected disabled>---Please Choose---</option>
              <?php
              $qaswqqq=DB::select(" SELECT * FROM `breed` ");
              foreach($qaswqqq as $qazx)
              {
              ?>
                <option value="{{$qazx->breed_id}}">{{$qazx->name}}</option>
             <?php
             }
             ?>

            </select>
            </div>

            <p class="control-label col-md-3 col-sm-9 col-xs-9 ac">Please State here if other</p>
            <div class="col-md-3 col-sm-9 col-xs-9">
            <input class="form-control " type="text" name="other" id="">
            </div>

         

          </div>




          <div class="form-group row">
          

            <p class="control-label col-md-3 col-sm-9 col-xs-9  ac">
                Was this litter born by cesarean section?</p>
            <div class="col-md-3 col-sm-9 col-xs-9">
                <select class="form-control select2" name="cesarean" id="">
                    <option value="" selected disabled>---Please Choose---</option>
                    <option value="No">No</option>
                    <option value="Yes-Emergency">Yes-Emergency</option>
                    <option value="Yes-Elective">Yes-Elective</option>
    
                </select>
            </div>


            <p class="control-label col-md-3 col-sm-9 col-xs-9  ac">Country</p>
            <div class="col-md-3 col-sm-9 col-xs-9">
                <select class="form-control select2" name="country_id" id="">
                    <option value="" selected disabled>---Please Choose---</option>
                   <?php
                   $jsakdhads=DB::select(" SELECT * FROM `country` ");
                   foreach($jsakdhads as $loi)
                   {
                   ?>
                    <option value="{{$loi->id}}">{{$loi->nicename}}</option>
                  <?php
                  }
                  ?>
     </select>
            </div>

          </div>



        
          <div class="ln_solid"></div>

          <div class="form-group">
            <button type="submit"  class="btn btn-primary">Save and Add Puppies</button>
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