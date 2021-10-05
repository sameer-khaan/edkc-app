@extends('layout/app') @section('content')
<!-- page content -->
<style>
    #chart-container {
    font-family: Arial;
    height: 420px;
    border: 2px dashed #aaa;
    border-radius: 5px;
    overflow: auto;
    text-align: center;
    }

    .orgchart {
    background: #fff; 
    width: -webkit-fill-available !important;
    height: -webkit-fill-available !important;
    display: flex !important;
    justify-content: center !important;
    }
    .orgchart td.left, .orgchart td.right, .orgchart td.top {
    border-color: #aaa;
    }
    .orgchart td>.down {
    background-color: #aaa;
    }
    .orgchart .middle-level .title {
    background-color: #006699;
    }
    .orgchart .middle-level .content {
    border-color: #006699;
    }
    .orgchart .product-dept .title {
    background-color: #009933;
    }
    .orgchart .product-dept .content {
    border-color: #009933;
    }
    .orgchart .rd-dept .title {
    background-color: #993366;
    }
    .orgchart .rd-dept .content {
    border-color: #993366;
    }
    .orgchart .pipeline1 .title {
    background-color: #996633;
    }
    .orgchart .pipeline1 .content {
    border-color: #996633;
    }
    .orgchart .frontend1 .title {
    background-color: #cc0066;
    }
    .orgchart .frontend1 .content {
    border-color: #cc0066;
    }

    #github-link {
    position: fixed;
    top: 0px;
    right: 10px;
    font-size: 3em;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.1.1/css/jquery.orgchart.css" integrity="sha512-8m7AdRqvsZpBTW8SivqVVySlGq78M7Zj8West+fF9JLpTyJ9SXdydI+Sl1Gz+FAH7DuBV8s8UX0IVdIfN9zJTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
                <h3>Dog Pedigree</h3>
            </div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<!-- form input mask -->
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
                        <h2>Dog Pedigree</h2>
                        <div class="clearfix"></div>
					</div>
					<div class="x_content">
                        <div id="chart-container"></div>
					</div>
				</div>
			</div>
			<!-- /form input mask -->
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.1.1/js/jquery.orgchart.min.js" integrity="sha512-alnBKIRc2t6LkXj07dy2CLCByKoMYf2eQ5hLpDmjoqO44d3JF8LSM4PptrgvohTQT0LzKdRasI/wgLN0ONNgmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    'use strict';
    (function($){
    $(function() {
        var datascource = {
            'name': '{{$child_name}}',
            'title': '{{$child_sex}}',
            'children': [
                <?php if($male_p_name!=''){?>
                { 'name': '{{$male_p_name}}', 'title': 'Male Parent', 'className': 'middle-level',
                    'children': [
                        <?php if($p_male_male_name!=''){?>
                        { 'name': '{{$p_male_male_name}}', 'title': 'Male Parent', 'className': 'product-dept' },
                        <?php }?>
                        <?php if($p_male_female_name!=''){?>
                        { 'name': '{{$p_male_female_name}}', 'title': 'Female Parent', 'className': 'product-dept',}
                        <?php }?>
                    ]
                },
                <?php }?>
                <?php if($female_p_name!=''){?>
                { 'name': '{{$female_p_name}}', 'title': 'Female Parent', 'className': 'middle-level',
                    'children': [
                        <?php if($p_female_male_name!=''){?>
                        { 'name': '{{$p_female_male_name}}', 'title': 'Male Parent', 'className': 'product-dept' },
                        <?php }?>
                        <?php if($p_female_female_name!=''){?>
                        { 'name': '{{$p_female_female_name}}', 'title': 'Female Parent', 'className': 'product-dept',}
                        <?php }?>
                    ]
                }
                <?php }?>
            ]
        }
        var oc = $('#chart-container').orgchart({
            'data' : datascource,
            'nodeContent': 'title'
        });

    });

    })(jQuery);
</script>
<!-- /page content -->
@endsection