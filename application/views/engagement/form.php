
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
  <title>MB | SURVEY</title>
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
  											<option value=""></option>
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
  											<option value=""></option>
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
  								<div class="form-group form-md-line-input">
  									<label class="col-md-2 control-label" for="form_control_1">Masa Kerja</label>
  									<div class="col-md-10">
  										<select name="masa_kerja" class="form-control" id="form_control_1">
  											<option value=""></option>
  											<option value="Kurang dari 1 Tahun">Kurang dari 1 Tahun</option>
  											<option value="Lebih dari 1 Tahun, Kurang dari 2 Tahun">Lebih dari 1 Tahun, Kurang dari 2 Tahun</option>
  											<option value="Lebih dari 2 Tahun, Kurang dari 5 Tahun">Lebih dari 2 Tahun, Kurang dari 5 Tahun</option>
  											<option value="Lebih dari 5 Tahun, Kurang dari 10 Tahun">Lebih dari 5 Tahun, Kurang dari 10 Tahun</option>
  											<option value="Lebih dari 10 Tahun">Lebih dari 10 Tahun</option>
  										</select>
                      <span class="help-block">Please Select One</span>

  										<div class="form-control-focus">
  										</div>
  									</div>
  								</div>
  								<div class="form-group form-md-line-input">
  									<label class="col-md-2 control-label" for="form_control_1">Pendidikan</label>
  									<div class="col-md-10">
  										<select name="pendidikan" class="form-control" id="form_control_1">
  											<option value=""></option>
  											<option value="<= SMA"><= SMA</option>
  											<option value="Diploma">Diploma</option>
  											<option value="S1">S1</option>
  											<option value="S2">S2</option>
  											<option value="Lainnya">Lainnya</option>
  										</select>
                      <span class="help-block">Please Select One</span>

  										<div class="form-control-focus">
  										</div>
  									</div>
  								</div>
  								<div class="form-group form-md-radios">
  									<label class="col-md-2 control-label" for="form_control_1">Jenis Kelamin</label>
  									<div class=" col-md-10 md-radio-list">
                      <div class="md-radio">
                        <input type="radio" value="Pria" id="radio2" name="gender" class="md-radiobtn" checked>
                        <label for="radio2">
                        <span class="inc"></span>
                        <span class="check"></span>
                        <span class="box"></span>
                        Pria </label>
                      </div>
  										<div class="md-radio">
  											<input type="radio" value="Wanita" id="radio1" name="gender" class="md-radiobtn">
  											<label for="radio1">
  											<span class="inc"></span>
  											<span class="check"></span>
  											<span class="box"></span>
  											Wanita </label>
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
  					<!-- BEGIN SAMPLE FORM PORTLET-->
  					<div class="portlet light bordered quesioner  hide">
  						<div class="portlet-title">
  							<div class="caption font-green-haze">
  								<i class="icon-settings font-green-haze"></i>
  								<span class="caption-subject bold uppercase"> Quesioner </span>
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
  							<!-- BEGIN FORM-->
                <!-- <h4 id="respon_id">XXXXXXXXXXXXX</h4> -->
                <hr>
  							<form id="form-question" class="form-horizontal form-row-seperated">
  								<input type="hidden" name="id_responden">
  								<div class="form-body">
  									<?php
  									$radio=4;
  									$id_level1='';
  									$head='<h4><b>'.$question[0]['jenis'].'</b></h4>';
                    $no=1;
  									foreach ($question as $key) {
  										if($id_level1==$key['id_level1']){
  											$head='';
  										}else{
  											$head='<h4><b>'.$key['jenis'].'</b></h4>';
  											$id_level1=$key['id_level1'];
  										}
  									?>
  									<?php echo $head; ?>
  									<div class="form-group">
  										<label class="control-label col-md-7"><?php echo $no.'. '.substr($key['question'], 4,  strlen($key['question']));?></label>
  										<div class="col-md-5">
  											<div class="md-radio-inline">
  												<?php
  												for($i=0;$i<10;$i++){
  													?>
  													<div class="md-radio">
  														<input type="radio" id="radio<?php echo $radio ?>" value="<?php echo $i+1;?>" name="<?php echo $key['id_question']?>" class="md-radiobtn">
  														<label for="radio<?php echo $radio ?>">
  														<span></span>
  														<span class="check"></span>
  														<span class="box"></span>
  														<?php echo $i+1; ?> </label>
  													</div>
  													<?php $radio++; }?>
  											</div>
                        <span class="help-block">
                        Please Select One</span>
  										</div>
  									</div>
  								<?php $no++; } ?>
  									<!-- on here -->
  								</div>
  							</div>
              </form>
  								<div class="form-actions">
  									<div class="row">
  										<div class="col-md-offset-3 col-md-9">
  											<button type="button" onclick="save_question()" class="btn green"><i class="fa fa-check"></i> Submit</button>
  											<button type="button" class="btn default">Cancel</button>
  										</div>
  									</div>
  								</div>
  							<!-- END FORM-->
  						</div>
  					</div>
  					<!-- END SAMPLE FORM PORTLET-->
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
    $('#question').addClass('active');
    $('#report').removeClass('active');
     // initiate layout and plugins
  Metronic.init(); // init metronic core components
  Layout.init(); // init current layout
  QuickSidebar.init(); // init quick sidebar
  Demo.init(); // init demo features
  });

  function save_responden(){
           var formdata = new FormData($("#responden-form")[0]);
          $('.form-group').removeClass('has-error'); // clear error class
          $('.help-block').empty(); // clear error string
             $.ajax({
                 url : '<?php echo site_url('/survey/responden') ?>',
                 type: "POST",
                 data: formdata,
                 processData: false,
                 contentType: false,
                 dataType: "JSON",
                 success: function(data)
                 {
                   if(data.status){
                    //  bootbox.alert({
                    //    title: '<p class="text-success">Success</p>',
                    //    message: 'Your request has been sent',
                    //  });
  									 $("[name='id_responden']").val(data.id_responden);
                     $('.quesioner').removeClass('hide');
                     $("#respon_id").text('ID Responden : '+data.id_responden);

                 }else{
                   alert("Harap Jawab semua Pertanyaan yang ada");
                   for (var i = 0; i < data.inputerror.length; i++)
                      {
                         if(data.inputerror[i]!='gender'){
                            // $('[name="'+data.inputerror[i]+'"]').parent().addClass('has-error');
                            $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
                            $('[name="'+data.inputerror[i]+'"]').next().text('Please select one');
                            $('[name="'+data.inputerror[i]+'"]').parent().addClass('has-error');
                          }
                      }
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

  function save_question(){
          var formdata = new FormData($("#form-question")[0]);
            $('.form-group').removeClass('has-error'); // clear error class
            $('.md-radio').removeClass('has-error');
            $('.help-block').empty(); // clear error string
            $.ajax({
                url : '<?php echo site_url().'/survey/save_unswer'?>',
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function(data)
                {
                  if(data.status){
                    alert("success");
                    get_data(data.id);


                }else{
                  alert("Harap Jawab semua Pertanyaan yang ada");
                  for (var i = 0; i < data.inputerror.length; i++)
                     {
                       // $('[name="'+data.inputerror[i]+'"]').parent().addClass('has-error');
                       $('[name="'+data.inputerror[i]+'"]').parent().parent().parent().parent().addClass('has-error');
                       $('[name="'+data.inputerror[i]+'"]').parent().parent().next().text('Please select one');
                       $('[name="'+data.inputerror[i]+'"]').parent().addClass('has-error');
                     }

                     // bootbox.alert({
                     //   title: '<p class="text-danger">Error!!</p>',
                     //   message: pesan,
                     // });

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
                     $('.quesioner').addClass('hide');
                     $('.graph').removeClass('hide');
                     draw_chart(data);

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
        text: 'SUMMARY VIEW -',
        subtext: 'Overall',
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
           // label: {
           //     normal: {
           //         formatter: '{a|{a}}{abg|}\n{hr|}\n  {b|{b}：}{c}  {per|{d}%}  ',
           //         backgroundColor: '#eee',
           //         borderColor: '#aaa',
           //         borderWidth: 1,
           //         borderRadius: 4,
           //         rich: {
           //             a: {
           //                 color: '#999',
           //                 lineHeight: 22,
           //                 align: 'center'
           //             },
           //             hr: {
           //                 borderColor: '#aaa',
           //                 width: '100%',
           //                 borderWidth: 0.5,
           //                 height: 0
           //             },
           //             b: {
           //                 fontSize: 16,
           //                 lineHeight: 33
           //             },
           //             per: {
           //                 color: '#eee',
           //                 backgroundColor: '#334455',
           //                 padding: [2, 4],
           //                 borderRadius: 2
           //             }
           //         }
           //     }
           // },
           data:data.level1
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
