@extends('layout/app')


@section('content')
    

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3 class="ac">STUD DOG ENQUIRIES</h3>
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
                          <label class="control-label col-md-12 col-sm-3 col-xs-3 ac">YOU CURRENTLY HAVE NO ENQUIRIES.</label>
                         
                        </div>


          
                    
                  
          
                  </form>
                </div>
              </div>
            </div>
            <!-- /form input mask -->
          
            
          </div>













  
</div>
</div>
</div>
<!-- /page content -->


@endsection