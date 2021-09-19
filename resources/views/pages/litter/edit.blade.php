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
    
         
     <form action="/edit-puppy" method="post">

<input type="hidden" name="puppy_id" value="{{$puppy_id}}">
@foreach($puppy as $pp)
                    <div class="form-group">
                        <label for="form_name" class="required">Name</label>
                       <input type="text" id="form_name" name="name" required="required" class="form-control" value="{{$pp->name}}" />
                                                
                    </div>

                    <div class="form-group">
                        <label for="form_colour" class="required">Colour</label>
                        <input type="text" id="form_colour" name="colour" required="required" class="form-control" value="{{$pp->color}}" />
                        
                    </div>

                    <div class="form-group">
                        <label for="form_microchipNumber">Microchip Number</label>
                        <input type="text" id="form_microchipNumber" name="microchipNumber" class="form-control" value="{{$pp->microchip}}" />
                    </div>

                    <div class="form-group">
                        <label for="form_petlogId">Petlog ID</label>
                        <input type="text" id="form_petlogId" name="petlogId" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="form_tattooNo">Tattoo Number</label>
                        <input type="text" id="form_tattooNo" name="tattooNo" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="pedigree">3 Generation Pedigree</label>
                        <input id="pedigree" name="pedigree" type="checkbox" value="1" style="float:left;margin-right:5px" />
                        <br />
                        This A4 certificate includes information on three generations of your pedigree dog's ancestry, Breed, Sex, Date of Birth, Registration/Stud Book Number, Colour and name of Breeder.
                    </div>

                    <div><button type="submit"  class="btn btn-primary">Save Puppy</button></div>
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