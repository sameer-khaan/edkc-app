<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ asset('images/favicon.ico')}}" type="image/ico" />

    <title>EDKC</title>

    <link href="{{ asset('cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css')}}">
    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
	<link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css')}}" rel="stylesheet" />


     <!-- Datatables -->
    
     <link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <style>
.ac
{
    color: black; 
    font-weight:bold;
}

    .card1 {
     position: relative;
     display: flex;
     width: 100%;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 2px;
     -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
     -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
     box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
 }

 .card1 .card-body1 {
     padding: 1rem 1rem
 }

 .card-body1 {
     flex: 1 1 auto;
     padding: 1.25rem
 }

 .title1 {
     font-size: 25px;
     font-weight: 300;
     margin-top: 17px;
     color: #544a26
 }

 .description1 {
     font-size: 14px;
     color: #867f64
 }

 .mt-301 {
     margin-top: 30px
 }

 .modal {
     text-align: center !important;
     margin-top: 50px
 }

 .btn-center1 {
     margin-top: 200px
 }

 .btn1:focus {
     outline: none
 }

 .btn1 {
     border-radius: 2px;
     text-transform: capitalize;
     font-size: 15px;
     padding: 10px 19px;
     cursor: pointer;
     color: #fff;
     width: 100%
 }
  </style>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
          @include('includes/sidebar')
          @include('includes/navbar')

          @yield('content')

          @include('includes/footer')

        </div>
    </div>

    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js')}}"></script>
 
    <script src="{{ asset('vendors/validator/multifield.js')}}"></script>
    <script src="{{ asset('vendors/validator/validator.js')}}"></script>
    
 

   
    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{ asset('vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{ asset('vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{ asset('vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{ asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{ asset('vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{ asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>


    

  <!-- Datatables -->
  <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{ asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{ asset('vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>

    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js')}}"></script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('build/js/custom.min.js')}}"></script>
	
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>


    <script>
    
    function breedother()
    {
        var sd=document.getElementById("otherbreed").value;
        if(sd=="Other")
        {
        document.getElementById("other_breed").readOnly = false; 
        }
        else
        {
            document.getElementById("other_breed").readOnly = true; 
        }
            
        }
    
      $(document).ready(function() {
$('.select2').select2({
closeOnSelect: false
});
});








	
			
$(document).ready(function(){

// code to read selected table row cell data (values).
$(".batchTable").on('click','.editbatchbtn',function(){
     // get the current row
     var keyupdate="11";
     var currentRow=$(this).closest("tr"); 
     var col1=currentRow.find("td:eq(0) input[type='hidden']"). val();
    var col3=currentRow.find("td:eq(1) input[type='hidden']").val(); // get current row 1st TD value
     //var col2=currentRow.find("select").val();
   var data=col3+"\n"+col1;
     
//alert(data);
 $('#edit_batch').modal('show');
$('#batch_id_modal').val(col1);
$('#batch_name_modal').val(col3);

});
});











$(document).ready(function(){

// code to read selected table row cell data (values).
$(".courseTable").on('click','.editcoursebtn',function(){
     // get the current row
     var keyupdate="11";
     var currentRow=$(this).closest("tr"); 
     var course_id=currentRow.find("td:eq(0) input[type='hidden']"). val();
     var batch_id=currentRow.find("td:eq(1) input[type='hidden']"). val();
    var course_code=currentRow.find("td:eq(0)").text();
    var course_name=currentRow.find("td:eq(1)").text(); // get current row 1st TD value
    var credit_hour=currentRow.find("td:eq(2)").text();
    var batch_name=currentRow.find("td:eq(3)").text();
    var type=currentRow.find("td:eq(4)").text();
     //var col2=currentRow.find("select").val();
   var data=course_id+"\n"+course_name+"\n"+credit_hour+"\n"+batch_name+"\n"+type;
     
//alert(data);
 $('#edit_course').modal('show');
$('#course_id_modal').val(course_id);
$('#course_batch_name_modal').val(batch_id);
$('#course_type_modal').val(type);
//document.getElementById('course_type_modal').value = "Adhoc"

$('#course_name_modal').val(course_name);
$('#course_code_modal').val(course_code);
$('#course_credit_hour_modal').val(credit_hour);

});
});



function assigncourse()
{
  var batch_id=document.getElementById("ass_cou").value;

  $.ajax({
    url:'includes/ajax.php',
    method:'get',
    dataType:'json',
    data:
    {
      asscouajax:batch_id,
      batch_id:batch_id

    },
    success:function(data)
    {
      $(".course").html(data);
      console.log(data);
    }
  });


}

//Admin Ajax

$(document).ready(function(){
// code to read selected table row cell data (values).
$(".userrecordTable").on('click','.userrecordbtn',function(){
     // get the current row
     var keyupdate="11";
     var currentRow=$(this).closest("tr"); 
     var user_id=currentRow.find("td:eq(0)").text();

     
//alert(data);
 $('#adminusermodal').modal('show');
 
 $.ajax({
     url:'/userrecordshow',
     type:'get',
     dataType:'json',
     data:
     {
         user_id:user_id
     },
     success:function(data)
     {
         //console.log(data);
         $('#name_adminmodal').val(data[0][0]["name"]);
         $('#user_id_adminmodal').val(data[0][0]["username"]);
         $('#phone_adminmodal').val(data[0][0]["phone"]);
          $('#email_adminmodal').val(data[0][0]["email"]);
           $('#town_adminmodal').val(data[0][0]["town"]);
            $('#country_adminmodal').val(data[0][0]["country"]);
             $('#address_adminmodal').val(data[0][0]["address"]);
        //$('#user_id_adminmodal').val();
     }
     
     
 });
 
// $('#course_id_modal').val(course_id);
// $('#course_batch_name_modal').val(batch_id);
// $('#course_type_modal').val(type);
// //document.getElementById('course_type_modal').value = "Adhoc"

// $('#course_name_modal').val(course_name);
// $('#course_code_modal').val(course_code);
// $('#course_credit_hour_modal').val(credit_hour);

});
});




function checkyes(event)
{
    var ch=confirm("Yes or No");
    if(ch==true)
    {
        return true;
    }
    else
    {
        event.stopPropagation();
        event.preventDefault();
    }
}

    </script>

  </body>
</html>

@include('includes/modal')