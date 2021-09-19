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
                <h3 class="ac">Edit Dog </h3>
                
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
    
    
    <form  method="post" action="/edit-dog">

        {{csrf_field()}}
                                            
                    @foreach($dog as $dd)
                    
                    
                    <input type="hidden" value="{{$dd->dog_id}}" name="dog_id">
                    
                    <div class="form-group row">
                        <div class="col-sm-6 col-xs-12">
                            <label for="dog_edit_regName" class="required">Dog Name</label>
                            <input type="text"  name="dog_name" required="required" class="form-control" value="{{$dd->name}}">
                            
                        </div>
                        <div class="col-sm-3 col-xs-12">
                            <label for="dog_edit_dob" class="required">Date of Birth</label>
                            <input type="date"  name="dob" required="required" class="form-control" value="{{$dd->dob}}">
                            
                        </div>
                        <div class="col-sm-3 col-xs-12">
                            <label  class="required">Sex</label>
                            <select  value="{{$dd->sex}}"  name="sex" required="required" class="form-control"><option value="">-- Please choose --</option><option value="Male" selected="selected">Male</option><option value="Female">Female</option></select>
                            
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <div class="col-sm-3 col-xs-12">
                            <label  class="required">Colour</label>
                            <input type="text"  name="colour" required="required" class="form-control" value="{{$dd->colour}}">
                        </div>
                        <div class="col-sm-3 col-xs-12">
                            <label >Registration Number</label>
                            <input type="text"  name="regNumber" class="form-control" placeholder="You can generate this on the view page or enter manually" value="EDKC{{$dd->dog_id}}">
                        </div>
                        <div class="col-sm-3 col-xs-12">
                            <label >Breeding Licence Number</label>
                            <input type="text"  name="breed_license_number" value="{{$dd->breeding_license_number}}" class="form-control">
                        </div>
                        <div class="col-sm-3 col-xs-12">
                            <label >Microchip Number</label>
                            <input type="text"  name="micro" value="{{$dd->microchip_number}}" class="form-control">
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <div class="col-sm-6 col-xs-12">
                            <label for="dog_edit_colour" class="required">Breed</label>
                             <select class="form-control select2" value="{{$dd->breed}}" name="breed_id">
                            <?php
                            $fd=DB::select(" SELECT * FROM `breed` ");
                            foreach($fd as $rr)
                            {
                            ?>
                           
                                <option value="{{$rr->breed_id}}">{{$rr->name}}</option>
                                
                            
                            <?php
                            
                            }
                            ?>
                            </select>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <label for="dog_edit_regNumber">If the breed you want is not found, choose Other and specify below:</label>
                            <input type="text"  name="regNumber" class="form-control" >
                        </div>
                       
                    </div>
                    
                       
                       <div class="form-group row">
                        <div class="col-sm-12 col-xs-12">
                            <label  class="required">Details of any restrictions (to lift any restrictions, simply clear the box and save)</label>
                           <input type="text"   class="form-control" >
                        </div>
                     
                       
                    </div>
                    
                     <div class="form-group row">
                        <div class="col-sm-6 col-xs-12">
                            <label  class="required">Sire</label>
                        <select class="form-control select2" name="sire_id">
                            <?php
                            $ww=DB::select(" SELECT * FROM `dog` WHERE `sex`='Male' ");
                            foreach($ww as $rf)
                            {
                            ?>
                        <option value="{{$rf->dog_id}}">{{$rf->name}}</option>    
                        <?php
                            }
                        ?>
                        </select>
                        </div>
                        
                          <div class="col-sm-6 col-xs-12">
                            <label  class="required">Dam</label>
                           <select class="form-control select2" name="dam_id">
                            <?php
                            $ww1=DB::select(" SELECT * FROM `dog` WHERE `sex`='Female' ");
                            foreach($ww1 as $rf1)
                            {
                            ?>
                        <option value="{{$rf1->dog_id}}">{{$rf1->name}}</option>    
                        <?php
                            }
                        ?>
                        </select>
                        </div>
                     
                       
                    </div>
                        
                    
                    
                    
    
         
         
          <div class="row other-parents-msg">
                        <div class="col-xs-12">
                            <p>If your Sire and / or Dam is not registered with Dog World Kennel Club, please enter them below and they will be checked.</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6 col-xs-12">
                            <label for="dog_edit_otherSire">Sire</label>
                            <input type="text" id="dog_edit_otherSire" name="otherSire" class="form-control" >
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <label for="dog_edit_otherDam">Dam</label>
                            <input type="text" id="dog_edit_otherDam" name="otherDam" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit"  class="btn btn-primary">Save</button>
                                            </div>
                                            @endforeach

        </form>
         
    
  </div>
    </div>
  </div>
  <!-- /form color picker -->

 

</div>
</div>
</div>
<!-- /page content -->


@endsection