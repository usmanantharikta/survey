
<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Mb | SURVEY</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<script src="<?php echo base_url().'assets/livecss.js'?>" type="text/javascript"></script>
<?php $this->load->view('include/css');?>
</head>
<style>
.form-horizontal .control-label {
    text-align: left;
}
</style>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content  page-sidebar-closed">
<!-- BEGIN HEADER -->
<?php $this->load->view('include/header'); ?>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
<?php $this->load->view('include/slidebar');?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
      <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
EMPLOYEE ENGAGEMENT SURVEY <small>PT PRAKARSALANGGENG MAJUBERSAMA</small>
			</h3>
			<div class="page-bar">
				<!-- <ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Form Stuff</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Material Design Form Controls</a>
					</li>
				</ul> -->
			</div>
			<!-- END PAGE HEADER-->

			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
        <div class="col-md-12">
          <!-- BEGIN SAMPLE FORM PORTLET-->
          <div class="portlet light bordered ">
            <div class="portlet-title">
              <div class="caption font-green-haze">
                <i class="icon-settings font-green-haze"></i>
                <span class="caption-subject bold uppercase"> Demografi </span>
              </div>
              <div class="actions">
                <!-- <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                <i class="icon-cloud-upload"></i>
                </a>
                <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                <i class="icon-wrench"></i>
                </a>
                <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                <i class="icon-trash"></i>
                </a> -->
                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
                </a>
              </div>
            </div>
            <div class="portlet-body form">
              <form id="responden-form" role="form" class="form-horizontal">
                <div class="form-group form-md-line-input">
                  <label class="col-md-2 control-label" for="form_control_1">Fungsi Kerja</label>
                  <div class="col-md-10">
                    <select name="fungsi_kerja" class="form-control" id="form_control_1">
                      <option value="all">All</option>
                      <option value="Marketing-Hygienic">Marketing-Hygienic</option>
                      <option value="Marketing-Energy">Marketing-Energy</option>
                      <option value="Engineering-Hygienic">Engineering-Hygienic</option>
                      <option value="Engineering-Energy">Engineering-Energy</option>
                      <option value="Manuf.Engineering-Bitung">Manuf.Engineering-Bitung</option>
                      <option value="Manuf.Engineering-Balaraja">Manuf.Engineering-Balaraja</option>
                      <option value="Project Mgt-Hygienic">Project Mgt-Hygienic</option>
                      <option value="Project Mgt-Energy">Project Mgt-Energy</option>
                      <option value="Workshop - Bitung">Workshop - Bitung</option>
                      <option value="Workshop-Balaraja">Workshop-Balaraja</option>
                      <option value="QC-Bitung">QC-Bitung</option>
                      <option value="QC-Balaraja">QC-Balaraja</option>
                      <option value="Purchasing">Purchasing</option>
                      <option value="Warehouse-Bitung">Warehouse-Bitung</option>
                      <option value="Warehouse-Balaraja">Warehouse-Balaraja</option>
                      <option value="HSE-Balaraja">HSE-Balaraja</option>
                      <option value="HSR-Bitung">HSR-Bitung</option>
                      <option value="Keu dan Akunting">Keu dan Akunting</option>
                      <option value="FSO">FSO</option>
                      <option value="HRD-GA">HRD-GA</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                    <span class="help-block">Please Select One</span>
                    <div class="form-control-focus">
                    </div>
                  </div>
                </div>
                <div class="form-group form-md-line-input">
                  <label class="col-md-2 control-label" for="form_control_1">Klasifikasi Pegawai</label>
                  <div class="col-md-10">
                    <select name="klasifikasi_kerja" class="form-control" id="form_control_1">
                      <option value="all">All</option>
                      <option value="General Manager">General Manager</option>
                      <option value="Manager">Manager</option>
                      <option value="Project Manager">Project Manager</option>
                      <option value="Deputy Manager">Deputy Manager</option>
                      <option value="Superintendent">Superintendent</option>
                      <option value="Supervisor">Supervisor</option>
                      <option value="Foreman">Foreman</option>
                      <option value="Staff / Officer">Staff / Officer</option>
                      <option value="Admin / Clerical">Admin / Clerical</option>
                      <option value="Worker (W/F/H)">Worker (W/F/H)</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                    <span class="help-block">Please Select One</span>

                    <div class="form-control-focus">
                    </div>
                  </div>
                </div>
                <div class="form-actions">
                  <div class="row">
                    <div class="col-md-offset-2 col-md-10">
                      <button type="button" class="btn default">Cancel</button>
                      <button type="button" onclick="save_responden()" class="btn blue">Next</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- END SAMPLE FORM PORTLET-->
        </div>
        <div class="col-md-12">
          <!-- BEGIN SAMPLE FORM PORTLET-->
          <div class="portlet light bordered graph hide">
            <div class="portlet-title">
              <div class="caption font-green-haze">
                <i class="icon-settings font-green-haze"></i>
                <span class="caption-subject bold uppercase"> Graph Result </span>
              </div>
              <div class="actions">
                <!-- <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                <i class="icon-cloud-upload"></i>
                </a>
                <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                <i class="icon-wrench"></i>
                </a>
                <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                <i class="icon-trash"></i>
                </a> -->
                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
                </a>
              </div>
            </div>
            <div class="portlet-body form">
                <div id="container"  style="height:800px"></div>
            </div>
          </div>
          <!-- END SAMPLE FORM PORTLET-->
        </div>
        <div class="col-md-12">
          <!-- BEGIN SAMPLE FORM PORTLET-->
          <div class="portlet light bordered graph hide">
            <div class="portlet-title">
              <div class="caption font-green-haze">
                <i class="icon-settings font-green-haze"></i>
                <span class="caption-subject bold uppercase"> Graph Result </span>
              </div>
              <div class="actions">
                <!-- <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                <i class="icon-cloud-upload"></i>
                </a>
                <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                <i class="icon-wrench"></i>
                </a>
                <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                <i class="icon-trash"></i>
                </a> -->
                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
                </a>
              </div>
            </div>
            <div class="portlet-body form">
                <div id="stat"  style="height:800px"></div>
            </div>
          </div>
          <!-- END SAMPLE FORM PORTLET-->
        </div>
        <div class="col-md-12">
          <!-- BEGIN SAMPLE FORM PORTLET-->
          <div class="portlet light bordered ">
            <div class="portlet-title">
              <div class="caption font-green-haze">
                <i class="icon-settings font-green-haze"></i>
                <span class="caption-subject bold uppercase"> Demografi </span>
              </div>
              <div class="actions">
                <!-- <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                <i class="icon-cloud-upload"></i>
                </a>
                <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                <i class="icon-wrench"></i>
                </a>
                <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                <i class="icon-trash"></i>
                </a> -->
                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
                </a>
              </div>
            </div>
            <div class="portlet-body form">
              <table id="table_report" class="table table-hover table-bordered">
                <thead >
                  <tr style="text-align:center">
                    <th colspan="2">User</th>
                    <th colspan="2">PIC</th>
                    <th colspan="11">Task detail</th>
                  </tr>
                  <tr>
                    <th>ID</th>
                    <th>Fungsi Kerja</th>
                    <th>Klasifikasi Pegawai</th>
                    <th>Masa Kerja</th>
                    <th>Pendidikan</th>
                    <th>Gender</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END SAMPLE FORM PORTLET-->
        </div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->
<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
<div class="page-footer-inner">
	 2014 &copy; Metronic by keenthemes.
</div>
<div class="scroll-to-top">
	<i class="icon-arrow-up"></i>
</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../survey/assets/global/plugins/respond.min.js"></script>
<script src="../../survey/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<?php $this->load->view('include/js');?>
<script>
jQuery(document).ready(function() {
   // initiate layout and plugins
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
$('#question').removeClass('active');
$('#report').addClass('active');
  var url='<?php echo site_url().'/survey/get_all'?>';
  var $table=$('#table_report').DataTable( {
  "ajax":
  {
      "url": url,
      "type": "POST",
      "retrieve": true,
      keys: true,
  },
  });
});

function save_responden(){
        var formdata = new FormData($("#responden-form")[0]);
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
           $.ajax({
               url : '<?php echo site_url('/survey/report') ?>',
               type: "POST",
               data: formdata,
               processData: false,
               contentType: false,
               dataType: "JSON",
               success: function(data)
               {
                  if(data.status){
                 $('.graph').removeClass('hide');
                 draw_chart(data);
                 draw_chart_stat(data);
                 $('html, body').animate({
                 scrollTop: $("div.graph").offset().top
                 }, 1000);
               }else{
                 alert(data.warning);
                  }
               },
               error: function (jqXHR, textStatus, errorThrown)
               {
                   alert('Error adding / update data');
                   $('#btnSave').text('save'); //change button text
                   $('#btnSave').attr('disabled',false); //set button enable
               }
           });
} //end ajax save



  function get_data(id){
          $('.graph').addClass('hide');
           var formdata = {"id_responden": id};
           console.log(formdata);
          $('.form-group').removeClass('has-error'); // clear error class
          $('.help-block').empty(); // clear error string
             $.ajax({
                 url : '<?php echo site_url('/survey/data_chart/') ?>'+id,
                 type: "POST",
                 data:formdata,
                 processData: false,
                 contentType: false,
                 dataType: "JSON",
                 success: function(data)
                 {
                   if(data.status){
                     console.log('responden: '+ data.id_responden);
                     $('.graph').removeClass('hide');

                     draw_chart(data);
                     $('html, body').animate({
                     scrollTop: $("div.graph").offset().top
                     }, 1000);

                 }else{

                    }
                 },
                 error: function (jqXHR, textStatus, errorThrown)
                 {
                     alert('Error adding / update data');
                     $('#btnSave').text('save'); //change button text
                     $('#btnSave').attr('disabled',false); //set button enable
                 }
             });
         } //end ajax save
</script>
<script type="text/javascript">
function draw_chart(data)
{

    var dom = document.getElementById("container");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    app.title = 'Survey Result';

    option = {
      title : {
      text: data.head,
      // subtext: 'Overall',
      x:'center'
  },
    tooltip: {
     trigger: 'item',
     formatter: "{a} <br/>{b}: {c} ({d}%)"
    },
    legend: {
     orient: 'vertical',
     x: 'left',
     data: data.legend
    },
    series: [
     {
         name:'Final',
         type:'pie',
         selectedMode: 'single',
         radius: [0, '30%'],

         label: {
             normal: {
                 position: 'inner'
             }
         },
         labelLine: {
             normal: {
                 show: false
             }
         },
         data:[data.level3]
     },
     {
         name:'Level2',
         type:'pie',
         selectedMode: 'single',
         radius: ['25%', '40%'],

         label: {
             normal: {
                 position: 'inner'
             }
         },
         labelLine: {
             normal: {
                 show: false
             }
         },
         data:data.level2
     },
     {
         name:'Survey',
         type:'pie',
         radius: ['40%', '55%'],
         data:data.level1
     }
    ]
    };;
    if (option && typeof option === "object") {
    myChart.setOption(option, true);
    }
}

function draw_chart_stat(data)
{
  var dom = document.getElementById("stat");
  var myChart = echarts.init(dom);
  var app = {};
  option = null;
  app.title = 'Survey Result';
  option = {
    title : {
    text: 'Statistic',
    // subtext: 'Overall',
    x:'center'
},
  tooltip: {
   trigger: 'item',
   formatter: "{a} <br/>{b}: {c} ({d}%)"
  },
  // legend: {
  //  orient: 'vertical',
  //  x: 'left',
  //  data: data.legend
  // },
  series: [
   {
       name:'Survey',
       type:'pie',
       radius: ['0%', '55%'],
       data:data.stat
   }
  ]
  };;
  if (option && typeof option === "object") {
  myChart.setOption(option, true);
  }
}
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
