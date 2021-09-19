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
                <h3 class="ac">Add Puppies </h3>
                
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
    
         
          <p style="font-weight: 600;" class="ac">If you would like Dog World Kennel Club to name your puppies for you, leave the puppy names blank and just fill in the colour and microchip number (if available) and check the Naming Service box before submitting.</p>
                        <p class="ac" style="font-weight: 600;">The Dog World Kennel Club Puppy Naming Service costs &pound;20.00.</p>
                        <form method="post" action="/add-puppies">
                            <?php
                            // $id = Auth::id();
                            // echo $id;
                            ?>
                            {{csrf_field()}}
                            
                            
                            
                             <input type="text" value="{{$litter_id}}" name="litter_id">
                             <input type="text" value="{{$sire_id}}" name="sire_id">
                             <input type="text" value="{{$dam_id}}" name="dam_id">
                            
                            <?php
                           // $litter_id=Session::get("litter_id");
                            $df=DB::select(" SELECT * FROM `litters` WHERE `litter_id`='".$litter_id."' ");
                            foreach($df as $ss)
                            {
                                $no_b=$ss->no_of_bitches;
                                $no_d=$ss->no_of_dogs;
                            }
                            ?>
                            
                            <?php
                            $c_b=1;
                            for ($x = 1; $x <= $no_b; $x++) {
                            ?>
                           
                                        <h4 style="margin-bottom:10px;margin-top:20px;">Bitches</h4>
                                        <input type="hidden" value="puppy" name="bitch_type[]">
                                                                                                <div class="row">
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Name</label>
                                                <input class="form-control check_bitch_name" name="bitch_name[]" value="" type="text" />
                                                <span class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label required">Colour</label>
                                                <input required="required" class="form-control" name="bitch_colour[]" value="" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Microchip Number</label>
                                                <input class="form-control" name="bitch_microchip[]" value="" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                             
                             <?php
                          
                            }
                             ?>                   
                                                       
                                                       <?php
                                                      for ($y = 1; $y <= $no_d; $y++) {
                                                       ?>
                                                          
                                                              
                                                                                        <div class="clearfix" style="margin-bottom:10px"></div>
                                                                            <h4 style="margin-bottom:10px;">Dogs</h4>
                                                                                                <div class="row">
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <input type="hidden" value="dog" name="dog_type[]">
                                                <label class="control-label">Name</label>
                                                <input class="form-control check_dog_name" name="dog_name[]" value="" type="text" />
                                                <span class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label required">Colour</label>
                                                <input required="required" class="form-control" name="dog_colour[]" value="" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Microchip Number</label>
                                                <input class="form-control" name="dog_microchip[]" value="" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                                                  
                                  <?php
                                 
                                                       }
                                  ?>                                                       
                                                                    
                                                             
                                              
                                                                                                                <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input id="select-certificate" name="litter_certificate" type="checkbox" /> Include Litter Certificate (&pound;5.00 per copy)
                                            </label><br />
                                            <!--<label id="laminate-check" class="disabled-option">-->
                                            <label id="laminate-check">
                                                <input id="laminated_certificate" name="laminated_certificate" type="checkbox" /> Laminate Litter Certificate (&pound;6.00 per copy)
                                            </label><br />
                                            <label id="delivery-check">
                                                <input name="faster_delivery" type="checkbox" /> + &pound;10.00 for faster delivery (typically within 3 days)
                                            </label><br />
                                            <label>
                                                <input id="naming-service" name="naming_service" type="checkbox" /> Request Puppy Naming Service (&pound;20.00)
                                            </label> 
                                            <br /> 
                                            <img src = "https://crm.dogworldkennelclub.co.uk/assets/pettagimg.jpeg" style="width:125px;">
                                            <label>
                                                  <input id="pet_tags" name="pet_tags" type="text" placeholder="QTY" /> 
                                                     DWKC pet tags - Price is £4.99 a tag 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <input type="submit" class="btn btn-primary" value="Continue" />
                                </div>
                            </div>
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