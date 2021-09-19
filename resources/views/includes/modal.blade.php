<div id="syllabusmodal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
    <div class="row">
        <div class="container d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card1 text-center">
                    <div class="card-body1"> <img src="https://img.icons8.com/cute-clipart/100/000000/open-in-browser.png">
                    
                    <h5 class="title1">Select a batch to see the courses</h5>
                        <p class="description1"></p>
                        <div class="row">
                            <div class="col-sm-6 mb-2 mb-md-0"> <button class="btn1 btn-out btn-primary btn-square btn-large"> <i class="fa fa-download"></i> DOWNLOAD CHROME</button> </div>
                            <div class="col-sm-6"> <button class="btn1 btn-out btn-primary btn-square btn-large"> <i class="fa fa-download"></i> DOWNLOAD FIREFOX</button> </div>
                        </div>
                        <div class="text-center mt-301"> <a href="#" id="close-modal" type="button" class="btn btn-secondary" data-dismiss="modal">Not Now</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<!-- Modal -->
<div class="modal fade" id="syllabusmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Update Batch</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        

                <div class="card1 text-center">
                    <div class="card-body1"> <img src="https://img.icons8.com/cute-clipart/100/000000/open-in-browser.png">
                    
                    <h5 class="title1">Select a batch to see the courses</h5>
                        <p class="description1"></p>
                        <div class="row">
                          <?php
                          // $mnbvcc=$conn->query(" SELECT * FROM `batch` ");
                          // while($rqsw=$mnbvcc->fetch_assoc())
                          // {
                          ?>
                            <div class="col-sm-6 "> <a href="syllabus.php?batch_id=<?php //echo $rqsw["batch_id"]?>" style="color:white;" class="btn1 btn-out btn-primary btn-square btn-large"> <i class="fa fa-book"></i> <?php //echo $rqsw["batch_name"]?></a> </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <?php
                          // }
                        ?>
                          </div>
                        <!-- <div class="text-center mt-301"> <a href="#" id="close-modal" type="button" class="btn btn-secondary" data-dismiss="modal">Not Now</a> </div> -->
                    </div>
                </div>
            </div>
        </div>
        
    
    
                  <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="edit_batch" class="btn btn-success">Update</button>
                </div>
                 -->
     
  </div>
</div>







<!-- Modal -->
<div class="modal fade" id="edit_batch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Batch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="includes/ajax.php" method="post">
        <input type="hidden" name="batch_id" id="batch_id_modal">
        <label >Batch Name</label>
    <input class="form-control" type="text" name="batch_name" id="batch_name_modal">
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit_batch" class="btn btn-success">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="academic" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Academic Calender</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="includes/ajax.php" method="post" enctype="multipart/form-data">
    
        <label >From</label>
    <input required class="form-control" type="date" name="from" >
    <label >To</label>
    <input required class="form-control" type="date" name="to" >
    <label >Upload Academic Calender</label>
    <br>
    <input required type="file" name="academic_pic" >
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="upload_academic" class="btn btn-success">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="timetable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Timetable</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="includes/ajax.php" method="post" enctype="multipart/form-data">
       
        <label ></label>
    <input required class="form-control" type="file" name="timetable_pic" id="">
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="upload_timetable" class="btn btn-success">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="edit_course" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"  id="exampleModalLabel">Update Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="includes/ajax.php" method="post">
        <input type="hidden" name="course_id" id="course_id_modal">
        <label >Batch Name</label>
     <select class="form-control " style="width: 100%;" tabindex="-1" aria-hidden="true"  name="batch_id" id="course_batch_name_modal">
        
        <?php
        // $conn=mysqli_connect("localhost","root","","asadrajput_db");
        // $sadkjl=$conn->query(" SELECT * FROM `batch` ");
        // while($rr=$sadkjl->fetch_assoc())
        // {
        ?>
    <option value="<?php //echo $rr["batch_id"]?>"><?php //echo $rr["batch_name"]?></option>
    <?php
        //}
    ?>


    </select>
        <!-- <input style="text-allign:left;" class="form-control" type="text" name="batch_name" id="course_batch_name_modal"> -->


    
    <label >Course Name</label>
    <input class="form-control" type="text" name="course_name" id="course_name_modal">

    <label >Course Code</label>
    <input class="form-control" type="text" name="course_code" id="course_code_modal">
    <label >Credit Hours</label>
    <input class="form-control" type="text" name="credit_hours" id="course_credit_hour_modal">
    <label >Type</label>
    <select class="form-control " style="width: 100%;" tabindex="-1" aria-hidden="true"  name="type" id="course_type_modal">
        <option value="Theory">Theory</option>
        <option value="Practical">Practical</option>
    </select>
    <!-- <input class="form-control" type="text" name="type" id="course_type_modal"> -->
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit_course" class="btn btn-success">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>










<!-- Modal -->
<div class="modal fade" id="adminusermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"  id="exampleModalLabel">Detail Of User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="includes/ajax.php" method="post">
        <input type="hidden" name="user_id" id="user_id_adminmodal">
        <label >User Name</label>
    

    <label >Name</label>
    <input class="form-control" type="text" name="name" id="name_adminmodal">

    <label >Phone</label>
    <input class="form-control" type="text" name="phone" id="phone_adminmodal">
    <label >Address</label>
    <input class="form-control" type="text" name="credit_hours" id="address_adminmodal">
    <label >Town</label>
 
     <input class="form-control" type="text" name="type" id="town_adminmodal"> 
        <label >Country</label>
 
     <input class="form-control" type="text" name="type" id="country_adminmodal"> 
        <label >Email</label>
 
     <input class="form-control" type="text" name="type" id="email_adminmodal"> 
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="submit" name="edit_course" class="btn btn-success">Update</button>-->
      </div>
      </form>
    </div>
  </div>
</div>
