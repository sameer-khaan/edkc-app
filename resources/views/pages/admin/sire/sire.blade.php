@extends('layout/app')

@section('content')
    


<!-- page content -->
 <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Add Sire</h3>
                        </div>

                       
                    </div>
                    <div class="clearfix"></div>


            <div class="row">
              <!-- form input mask -->
              <div class="col-md-4 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                  <?php
$str=Session::get("str");                  
if(isset($str))
{
?>

          <div class="alert alert-success" role="alert">
  Sire Added successfully
</div>
<?php
}
?>
                    <h2>Add Sire</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form method="post" action="/add-sire" class="form-horizontal form-label-left">
                                {{csrf_field()}}
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Sire Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input required type="text" class="form-control" name="sire_name">
                          
                        </div>
                      </div>
                    
                      
                      
                     
                      <div class="ln_solid"></div>

                      <div class="form-group row">
                        <div class="col-md-9 offset-md-3">
                          
                          <button type="submit"  class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              <!-- /form input mask -->

              <!-- form color picker -->
              <div class="col-md-8 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">


                  <?php
    $str1=Session::get("str1");              
if(isset($str1))
{
?>

          <div class="alert alert-success" role="alert">
  Sire Updated successfully.
</div>
<?php
}
?>

<?php
 $str1=Session::get("str2");  
if(isset($str2))
{
?>

          <div class="alert alert-danger" role="alert">
  Sire Deleted successfully.
</div>
<?php
}
?>
    

                    <h2>Sire Records<small></small></h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                  
                    <table id="datatable" class="table table-striped table-bordered batchTable" style="width:100%">
                      <thead>
                        <tr>
                          <th>Sire Name</th>
                          <th>Edit</th>
                          <th>Delete</th>
                         
                        </tr>
                      </thead>


                      <tbody>
                          <?php
                          $ret=DB::select(" SELECT * FROM `sire`  ");
                       foreach($ret as $d)
                          {
                          ?>
                        <tr>
                          <td>
                          <input type="hidden" value="<?php echo $d->id;?>">  
                          {{$d->name}}
                        </td>
                          <td>
                          <input type="hidden" value="{{$d->name}}">
                          <button class="btn btn-success editbatchbtn" type="button">EDIT</button></td>
                          <td><a type="button" class="btn btn-danger" href="/delete-sire/{{$d->id}}">DELETE</a></td>
                      
                        </tr>
                       <?php
                          }
                       ?>
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