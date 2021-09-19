@extends('layout/app')


@section('content')
    

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3 class="ac">CHANGE OWNERSHIP FORM</h3>
            </div>

           
        </div>
        <div class="clearfix"></div>




        <div class="row">
            <!-- form input mask -->
            <div class="col-md-12 col-sm-12  ">
              <div class="x_panel">
                <div class="x_title">
                     
               
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form method="post" action="includes/ajax.php" class="form-horizontal form-label-left">
          
                      <div class="form-group row">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3 ac">Dog Ownership Code</label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                            <input required type="text" class="form-control" name="batch_name">
                            
                          </div>
                        </div>


          
                    
                  
          
                  </form>
                </div>
              </div>
            </div>
            <!-- /form input mask -->
          
            
          </div>












<div class="row">
  <!-- form input mask -->
  <div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
           
        <h2>NEW OWNER DETAILS
            <br>
        <small>OWNER 1</small>
        </h2>
       
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form method="post" action="includes/ajax.php" class="form-horizontal form-label-left">

            <p>Owner 1</p>
            <div class="form-group row">
                <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">First Name</label>
                <div class="col-md-4 col-sm-9 col-xs-9">
                  <input required type="text" class="form-control" name="batch_name">
                  
                </div>

                <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Surname Name</label>
                <div class="col-md-4 col-sm-9 col-xs-9">
                  <input required type="text" class="form-control" name="batch_name">
                  
                </div>

              </div>

              <p>Owner 2</p>
            <div class="form-group row">
                <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">First Name</label>
                <div class="col-md-4 col-sm-9 col-xs-9">
                  <input required type="text" class="form-control" name="batch_name">
                  
                </div>

                <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Surname Name</label>
                <div class="col-md-4 col-sm-9 col-xs-9">
                  <input required type="text" class="form-control" name="batch_name">
                  
                </div>

              </div>

              <p>Owner Address</p>
              <div class="form-group row">
                  <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Street Address</label>
                  <div class="col-md-4 col-sm-9 col-xs-9">
                    <input required type="text" class="form-control" name="batch_name">
                    
                  </div>
  
                  <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Town</label>
                  <div class="col-md-4 col-sm-9 col-xs-9">
                    <input required type="text" class="form-control" name="batch_name">
                    
                  </div>
  
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Post Code</label>
                    <div class="col-md-4 col-sm-9 col-xs-9">
                      <input required type="text" class="form-control" name="batch_name">
                      
                    </div>
    
                    <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Country</label>
                    <div class="col-md-4 col-sm-9 col-xs-9">
                      <input required type="text" class="form-control" name="batch_name">
                      
                    </div>
    
                  </div>

                  <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Telephone Number</label>
                    <div class="col-md-4 col-sm-9 col-xs-9">
                      <input required type="text" class="form-control" name="batch_name">
                      
                    </div>
    
                    <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Email Address</label>
                    <div class="col-md-4 col-sm-9 col-xs-9">
                      <input required type="text" class="form-control" name="batch_name">
                      
                    </div>
    
                  </div>

                  <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Microchip Number</label>
                    <div class="col-md-2 col-sm-9 col-xs-9">
                      <input required type="text" class="form-control" name="batch_name">
                      
                    </div>

                    <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Telephone Number</label>
                    <div class="col-md-2 col-sm-9 col-xs-9">
                      <input required type="text" class="form-control" name="batch_name">
                      
                    </div>
    
                    <label class="control-label col-md-2 col-sm-3 col-xs-3 ac">Dog Tag £4.99 each</label>
                    <div class="col-md-2 col-sm-9 col-xs-9">
                      <input required type="text" class="form-control" name="batch_name">
                      
                    </div>
    
                  </div>


          <div class="ln_solid"></div>

          <div class="form-group">
            <button type="submit" id="form_save" name="form[save]" class="btn btn-primary">Submit Ownership Change</button>
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