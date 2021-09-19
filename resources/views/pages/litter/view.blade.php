@extends('layout/app')

@section('content')
    
    
       
<!-- page content -->
<div class="right_col" role="main">
    <div class=>
        <div class="page-title">
            <div class="title_left">
                <h3 class="ac">LITTER REGISTRATION<br><small>
GRAY DOLLY / ROPE FOR DAYS BIG MAK</small> </h3>
                
            </div>
              <div class="text-right">
                                                    <a href="/litter-sell/{{$litter_id}}" class="btn btn-success">Sell this Litter</a>
                                <a href="/litters" class="btn btn-info">Back to Litters</a>
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
    
                        <div class="row white-box">
            <div class="col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-striped table-hover dog-table">
                        <tbody>
                            @foreach($litter as $ll)
                            <?php
                            $litter_id=$ll->litter_id;
                            ?>
                            <tr>
                                <td>Litter ID</td><td>{{$ll->litter_id}}</td>
                            </tr>
                            <tr>
                                <?php
                                $fed=DB::select(" SELECT * FROM `dog` WHERE `litter_id`='".$ll->litter_id."' ");
                                foreach($fed as $ff)
                                {
                                    $m_id=$ff->male_parent;
                                    $s_id=$ff->female_parent;
                                }
                                
                                $fed1=DB::select(" SELECT * FROM `dog` WHERE `dog_id`='".$m_id."' ");
                                foreach($fed1 as $ff1)
                                {
                                    $sire_name=$ff1->name;
                                    $sire_id=$ff1->dog_id;
                                }
                                $fed2=DB::select(" SELECT * FROM `dog` WHERE `dog_id`='".$s_id."' ");
                                foreach($fed2 as $ff2)
                                {
                                    $dam_name=$ff2->name;
                                    $dam_id=$ff2->dog_id;
                                }
                                ?>
                                <td>Dam Name / Reg. No.</td><td><a href="/view/{{$dam_id}}">{{$dam_name}} / EDKC{{$dam_id}}</a></td>
                            </tr>
                            <tr>
                                <td>Sire Name / Reg. No.</td><td><a href="/view/{{$sire_id}}}">{{$sire_name}} / EDKC{{$sire_id}}</a></td>
                            </tr>
                            <tr>
                                <td>No. Bitches</td><td>{{$ll->no_of_bitches}}</td>
                            </tr>
                            <tr>
                                <td>No. Dogs</td><td>{{$ll->no_of_dogs}}</td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td><td>{{$ll->dob}}</td>
                            </tr>
                            <tr>
                                <td>Date Litter Registered</td><td>{{$ll->timestamp}}</td>
                            </tr>
@endforeach
                        </tbody>
                    </table>
                </div> <!-- white box -->
            </div>
        </div>
    
       <div class="row white-box">
            <div class="col-sm-12 col-xs-12">
                <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Puppy</th>
                            <th width="100" class="text-center">Sex</th>
                            <th>Colour</th>
                            <th>Microchip</th>
                            <th class="text-center" width="170">Actions</th>
                        </tr>
                        </thead>
                        
                        <?php
                        $pup=DB::select(" SELECT * FROM `dog` WHERE `litter_id`='".$litter_id."' ");
                        ?>
                        
                        @foreach($pup as $pp)
                                            <tr>
                            <td>{{$pp->name}}</td>
                            <td width="100" class="text-center">
                                <?php
                                if($pp->sex=="Male")
                                {
                                ?>
                                <i style="padding:0" style="color:blue;font-weight:bold;" class="fa fa-mars "> </i>
                                <?php
                                }
                                else
                                {
                                ?>
                                <i style="padding:0" style="color:pink;font-weight:bold;" class="fa fa-venus female"> </i>
                                <?php
                                }
                                ?>
                                </td>
                            <td>{{$pp->colour}}</td>
                            <td>{{$pp->microchip_number}}</td>
                            <td class="text-right" width="170">
                                <a href="/edit-puppy/{{$pp->dog_id}}" class="btn btn-sm btn-info">Edit</a>
                                <a href="/delete-puppy/{{$pp->dog_id}}" class="remove-puppy btn btn-sm btn-danger" >Delete</a>
                            </td>
                        </tr>
                        @endforeach
                                        </table>
                                    </div>
                </div></div>
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