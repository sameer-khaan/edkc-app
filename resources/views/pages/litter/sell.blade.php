@extends('layout/app')

@section('content')
    
    
       
<!-- page content -->
<div class="right_col" role="main">
    <div class=>
        <div class="page-title">
            <div class="title_left">
                <h3 class="ac">SELLING YOUR LITTER</h3>
                
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
    
                  <p class="ac">Before you can sell your litter, make sure your puppies are micro-chipped and, if you have applied for the Dog World Kennel Club naming service, that they are named.</p>

                <p class="ac">Please fill in the form below and proceed to payment. Make sure to upload a picture of the litter.</p>

                <form  action="/litter-sell" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" value="{{$litter_id}}" name="litter_id">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="required form-label ac">Price per puppy</label>
                                <input required="required" type="text" class="form-control" value="" placeholder="Enter price without currency symbol" name="price" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="required form-label ac">Upload a Picture</label>
                                <br>
                                <input required="required" type="file"  value="" name="litter_img" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="required form-label ac">Description</label>
                                <textarea required="required" class="form-control" style="height:120px;" name="description"></textarea>
                            </div>

                        </div>
                    </div>

                    <p class="ac">This advert will cost &pound;20.00. Click the Continue button below to be redirected to the payment form.</p>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Continue" />
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