
@extends('layout/app')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Dog Records</h3>
                
            </div>
             @foreach($dog as $dd)
                
                <?php
                $dog_id=$dd->dog_id;
                ?>
            <a href="/edit-dog/{{$dog_id}}" class="btn btn-primary" type="button" style="float: right;">Edit Dog</a>
       
        </div>
        <div class="clearfix"></div>

 <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
                 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                                
                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dog Information</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Health Records</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">DNA Records</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#show" role="tab" aria-controls="show" aria-selected="false">Show Records</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
               
                <div class="col-sm-2 hidden-xs">
                                            <img style="width:150px;height:150px;" class="dog-pic img-responsive" src="../{{$dd->img_dir}}" />
                                        <div style="position:relative;">
                        <form   method="post" enctype="multipart/form-data" action="/upload_img">
                            
                            {{csrf_field()}}
                            <input type="hidden" value="{{$dd->dog_id}}" name="dog_id" id="dog-id" />
                            <input type="file" id="dog_image" class="dog-image-file" name="dog_image" />
                            <button class="change-img-btn btn btn-xs btn-info" type="submit">Change Image</a>
                        </form>
                    </div>
                </div>
                <div class="col-sm-10 col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-striped dog-table">
                            <tbody>
                                                                <tr>
                                    <td>Kennel Name</td><td>Unstoppabullz</td>
                                </tr>
                                                                                                <tr>
                                    <td>Registered Owner</td><td><a href="/client/240">{{$dd->name}}</a></td>
                                </tr>
                                <tr>
                                    <td>Registered Name</td><td>{{$dd->name}}</td>
                                </tr>
                                 <tr>
                                            <?php
                                            if($dd->sex=="Male")
                                            {
                                             $fv=DB::select(" SELECT count(litter_id) as 'li_do' FROM `litters` WHERE `dam`='".$dd->dog_id."' ");
                                             foreach($fv as $jj)
                                             {
                                                 $c_do=$jj->li_do;
                                             }
                                             if($c_do>0)
                                             {
                                             
                                            
                                            ?>                                    
                                    <td>Registered Litters</td><td><a href="/litters-puppies/{{$dog_id}}">See {{$dd->name}}'s Litters</a></td>
                                <?php
                                            }
                                            }
                                            else
                                            {
                                                 $fv1=DB::select(" SELECT count(litter_id) as 'li_do' FROM `litters` WHERE `sire`='".$dd->dog_id."' ");
                                             foreach($fv1 as $jj1)
                                             {
                                                 $c_do1=$jj1->li_do;
                                             }
                                             if($c_do1>0)
                                             {
                                ?>
                                
                                 <td>Registered Litters</td><td><a href="/litters-puppy/{{$dog_id}}">See {{$dd->name}}'s Litters</a></td>
                                
                                
                                <?php
                                             }
                                            }
                                ?>
                                </tr>
                                 <tr>
                                <?php
                                if($dd->litter_id!='')
                                {
                                    $dcv=DB::select(" SELECT * FROM `dog` WHERE `dog_id`='".$dd->male_parent."' ");
                                    foreach($dcv as $ht)
                                    {
                                    $dam_name=$ht->name;
                                    $dam_id=$ht->dog_id;
                                    }    
                                    $dcv1=DB::select(" SELECT * FROM `dog` WHERE `dog_id`='".$dd->female_parent."' ");
                                    foreach($dcv1 as $ht1)
                                    {
                                    $sire_name=$ht1->name;
                                    $sire_id=$ht1->dog_id;
                                    }    
                                        
                                ?>
                                
                            
                                    <td>Dam / Sire</td><td>
                                    <a href="/view/{{$dam_id}}">{{$dam_name}}</a> /
                                        <a href="/view/{{$sire_id}}">{{$sire_name}}</a> 
                                        </td>
                                        <!--<a href="/dog/45234/view-pedigree" class="view-pedigree btn btn-sm btn-info">View Pedigree</a>                                                                            </td>-->
                                
                                <?php
                                    }
                                
                                else
                                {
                                ?>
                                <td>Dam / Sire</td>
                                <td>
                                  <a href="#">NoT Found</a> /
                                        <a href="#">NoT Found</a>
                                        </td>
                                <?php
                                }
                                ?>        
</tr>
                                <tr>
                                    <td>Sex</td><td>
                                        <?php
                                        if($dd->sex=="Male")
                                        {
                                        ?>
                                        Dog
                                        <?php
                                        }
                                        else
                                        {
                                        ?>
                                        Bitch
                                        <?php
                                        }
                                        ?>
                                        </td>
                                </tr>
                                <tr>
                                    <td>Breed</td>
                                    <td>
                                        <?php
                                        $erw=DB::select(" SELECT * FROM `breed` WHERE `breed_id`='".$dd->breed."' ");
                                        foreach($erw as $rft)
                                        {
                                            $name=$rft->name;
                                        }
                                        ?>
                                        {{$name ?? ''}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Colour</td><td>{{$dd->colour}}</td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td><td>{{$dd->dob}}</td>
                                </tr>
                                <tr>
                                    <td>Registration Number</td><td class="reg-number">EDKC{{$dd->dog_id}}</td>
                                </tr>
                                <tr>
                                    <td>Ownership Code</td><td class="owner-code">3843-0829-1342-9584</td>
                                </tr>
                                <tr>
                                    <td>Microchip Number</td><td>{{$dd->microchip_number}}</td>
                                </tr>
                                <tr>
                                    <td>Registration Date</td><td>{{$dd->timestamp}}</td>
                                </tr>

                                 


                                <tr>
                                    <td valign="top" style="vertical-align: top">Notes</td><td><textarea class="form-control" id="notes" name="notes" rows="10" id="">TRACKING NUMBER -NY-2803 2772 0GB</textarea>
                                        <div class="form-group">
                                            <a href="" id="save-notes" class="save-notes btn btn-small btn-success">Save Notes</a>
                                        </div></td>
                                </tr>
@endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
              
                       
                       
                       
                       
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          
                <div class="col-sm-8 col-xs-12">
                    <h1>Health Records for UnstoppaBullz Choco Loco </h1>
                </div>
                <div class="col-sm-12">
                        <form  method="post" action="/health-records">
                                {{csrf_field()}}
                                
                                <?php
                                   $qw=DB::select(" SELECT count(id) AS 'gyt' FROM `health_records` WHERE `dog_id`='".$id."'  ");
                               
                               foreach($qw as $fdeee)
                               {
                                   $qq=$fdeee->gyt;
                               }
                               
                                if($qq>0)
                                {
                                     $qw1=DB::select(" SELECT * FROM `health_records` WHERE `dog_id`='".$id."'  ");
                                foreach($qw1 as $hh)
                                {
                                    $rec=$hh->health_records;
                                    $date=$hh->date;
                                }
                                }
                                else
                                {
                                    $rec="";
                                    $date="";
                                }
                                ?>
                            
                                <input type="hidden" name="dog_id" value="{{$dog_id}}">
                        <div class="form-group">
                            <label for="form_content" class="required">Record Details</label>
                            <textarea id="form_content"  name="record_detail" required="required" class="form-control" style="height:200px;resize:none">{{$rec}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="form_recordDate" class="required">Date of Record</label>
                            <input type="date" name="date" value="{{$date}}"  required="required" class="recordDate form-control" style="width:50%" />
                            
                        </div>

                        <div class="form-group">
                            <button type="submit"  class="btn btn-primary">Save</button>
                        </div>

                       </form>
                </div>

                <div class="col-xs-12">
                                                    <p>There are no existing Health Records for this dog.</p>
                                    
            </div>
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="col-sm-8 col-xs-12">
                    <h1>DNA Results for UnstoppaBullz Choco Loco </h1>
                </div>
                <div class="col-sm-12">
                        <form  method="post" action="/dna-results">
                                {{csrf_field()}}
                                
                                 <?php
                                   $qw2=DB::select(" SELECT count(id) AS 'gyt1' FROM `dna_records` WHERE `dog_id`='".$id."'  ");
                               
                               foreach($qw2 as $fdeee1)
                               {
                                   $qq1=$fdeee1->gyt1;
                               }
                               
                                if($qq1>0)
                                {
                                     $qw3=DB::select(" SELECT * FROM `dna_records` WHERE `dog_id`='".$id."'  ");
                                foreach($qw3 as $hh1)
                                {
                                    $rec1=$hh1->dna_details;
                                    $date1=$hh1->date;
                                }
                                }
                                else
                                {
                                    $rec1="";
                                    $date1="";
                                }
                                ?>
                                
                                  <input type="hidden" name="dog_id" value="{{$dog_id}}">
                        <div class="form-group">
                            <label for="form_content" class="required">Result Details</label>
                            <textarea id="form_content" name="result_details" required="required" class="form-control" style="height:200px;resize:none">{{$rec1}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="form_dnaResultDate" class="required">Date of Result</label>
                            <input type="date" value="{{$date1}}"  name="date" required="required" class="dnaResultDate form-control" style="width:50%" />
                            
                        </div>

                        <div class="form-group">
                            <button type="submit"  class="btn btn-primary">Save</button>
                        </div>

                       </form>
                </div>

                <div class="col-xs-12">
                                                    <p>There are no DNA results for this dog.</p>
                                        </div>
                      </div>
                      
                      
                      
                        <div class="tab-pane fade" id="show" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="col-sm-8 col-xs-12">
                    <h1>Show Results for UnstoppaBullz Choco Loco </h1>
                </div>
                <div class="col-sm-12">
                        <form  method="post" action="/show-results">
                            {{csrf_field()}}
                              <?php
                                   $qw4=DB::select(" SELECT count(id) AS 'gyt2' FROM `show_records` WHERE `dog_id`='".$id."'  ");
                               
                               foreach($qw4 as $fdeee2)
                               {
                                   $qq2=$fdeee2->gyt2;
                               }
                               
                                if($qq2>0)
                                {
                                     $qw5=DB::select(" SELECT * FROM `show_records` WHERE `dog_id`='".$id."'  ");
                                foreach($qw5 as $hh2)
                                {
                                    $rec2=$hh2->show_records;
                                    $date2=$hh2->date;
                                }
                                }
                                else
                                {
                                    $rec2="";
                                    $date2="";
                                }
                                ?>
                             <input type="hidden" name="dog_id" value="{{$dog_id}}">
                        <div class="form-group">
                            <label for="form_content" class="required">Show Details</label>
                            <textarea id="form_content" name="show_details" required="required" class="form-control" style="height:200px;resize:none">{{$rec2}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="form_dnaResultDate" class="required">Date of Result</label>
                            <input type="date" value="{{$date2}}" name="date" required="required" class="dnaResultDate form-control" style="width:50%" />
                            
                        </div>

                        <div class="form-group">
                            <button type="submit"  class="btn btn-primary">Save</button>
       
                        </div>
</form>
                </div>

                <div class="col-xs-12">
                                                    <p>There are no  results for this dog.</p>
                                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              
              
              </div>
</div>
</div>
<!-- /page content -->


@endsection
                    