@extends('layout/app')


@section('content')
    

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>ADD BREED</h3>
            </div>
            
        </div>
        <div class="clearfix"></div>


<div class="row">
  <!-- form input mask -->
  <div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
           <?php
           if(isset($rf))
           {
           ?>
    <div class="alert alert-success" role="alert">
  Breed Added Successfully
</div>
<?php
}
?>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form method="post" action="/add-breed" class="form-horizontal form-label-left">

          {{csrf_field()}}

          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3 ac">Name</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
                <input required type="text" name="breed_name" class="form-control">
            </div>
            
          </div>





        
          <div class="ln_solid"></div>

          <div class="form-group">
            <button type="submit"   class="btn btn-primary">Save Breed</button>
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