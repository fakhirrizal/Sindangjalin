					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Lihat Data
                        <small>Rapat</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
<style type="text/css">
	.fc-time{ display: none; }
</style>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/global/plugins/fullcalendar/fullcalendar.css'; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'; ?>">
		<link href="<?=base_url('assets/css/custom.css');?>" rel="stylesheet" type="text/css" />

                            <div class="portlet-body">
                                
                                <!-- place -->
                                <!-- if($ak=='B'){
            $warna = '#3598dc';
            $kategori = 'Badan';
        }
        elseif($ak=='P'){
            $warna = '#f3c200';
            $kategori = 'Pansus';
        }
        elseif($ak=='K'){
            $warna = '#D91E18';
            $kategori = 'Komisi';
        }
        else{
            $warna = '#2f353b';
            $kategori = 'Lain-lain';
        } -->
                                
                                <div class="row">
                                    <div class="note note-info">
                                        <p> Keterangan label berdasarkan alat kelengkapan Dewan. </p>
                                    </div>
                                    
                                    <div class="col-md-2 col-sm-2 col-xs-6">
                                        <div class="color-demo tooltips" data-original-title="Click to view demos for this color" data-toggle="modal" data-target="#demo_modal_blue">
                                            <div class="color-view bg-blue bg-font-blue bold uppercase">  </div>
                                            <div class="color-info bg-white c-font-14 sbold"> Badan </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-6">
                                        <div class="color-demo tooltips" data-original-title="Click to view demos for this color" data-toggle="modal" data-target="#demo_modal_blue">
                                            <div class="color-view bg-red-thunderbird bg-font-red-thunderbird bold uppercase">  </div>
                                            <div class="color-info bg-white c-font-14 sbold"> Komisi </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-6">
                                        <div class="color-demo tooltips" data-original-title="Click to view demos for this color" data-toggle="modal" data-target="#demo_modal_blue">
                                            <div class="color-view bg-yellow-crusta bg-font-yellow-crusta bold uppercase">  </div>
                                            <div class="color-info bg-white c-font-14 sbold"> Pansus </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-6">
                                        <div class="color-demo tooltips" data-original-title="Click to view demos for this color" data-toggle="modal" data-target="#demo_modal_dark">
                                            <div class="color-view bg-green-jungle bg-font-green-jungle bold uppercase">  </div>
                                            <div class="color-info bg-white c-font-14 sbold"> Panja </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-6">
                                        <div class="color-demo tooltips" data-original-title="Click to view demos for this color" data-toggle="modal" data-target="#demo_modal_dark">
                                            <div class="color-view bg-dark bg-font-dark bold uppercase">  </div>
                                            <div class="color-info bg-white c-font-14 sbold"> Pimpinan </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-6">
                                        <div class="color-demo tooltips" data-original-title="Click to view demos for this color" data-toggle="modal" data-target="#demo_modal_dark">
                                            <div class="color-view bg-purple-seance bg-font-purple-seance bold uppercase">  </div>
                                            <div class="color-info bg-white c-font-14 sbold"> DPRD </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="calendarIO"></div>
                             
								<!-- end place -->
								<div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<!-- <div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel"></h4>
											</div> -->
											<div class="modal-body">
												<div class="box box-primary" >
													<form class="form-horizontal" method="POST" action="POST" id="form_create">
														<input type="hidden" name="calendar_id" value="0">
														<div class="modal-header">
															<h4 class="modal-title" id="myModalLabel">Detail Rapat</h4>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group form-md-line-input has-success form-md-floating-label">
																		<div class="input-icon">
																			<label for="form_control_1">Nama Kegiatan</label>
																			<input readonly type="text" name="title" class="form-control">
																			<i class="icon-note"></i>
																		</div>
																	</div>
																</div>
																
															</div>
															<br>
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group form-md-line-input has-error form-md-floating-label">
																		<div class="input-icon">
																			<label for="form_control_1">Tempat</label>
																			<input type="text" readonly name="description" class="form-control">
																			<i class="icon-pointer"></i>
																		</div>
																	</div>
																</div>
																
															</div>
															<br>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group form-md-line-input has-warning form-md-floating-label">
																		<div class="input-icon">
																			<label for="form_control_1">Tanggal</label>
																			<input type="date" name="start_date" readonly class="form-control">
																			<i class="fa fa-calendar-o"></i>
																		</div>
																	</div>
																</div>
																<!-- <div class="col-md-6">
																	<div class="form-group form-md-line-input has-warning form-md-floating-label">
																		<div class="input-icon">
																			<label for="form_control_1">Tanggal berakhir</label>
																			<input type="date" name="end_date" class="form-control">
																			<i class="fa fa-calendar-o"></i>
																		</div>
																	</div>
																</div> -->
																<div class="col-md-6">
																	<div class="form-group form-md-line-input has-warning form-md-floating-label">
																		<div class="input-icon">
																			<label for="form_control_1">Jam</label>
																			<input type="time" name="jam" class="form-control" readonly>
																			<i class="icon-speedometer"></i>
																		</div>
																	</div>
																</div>
															</div>
															<br>
															
																
															</div>
															<!-- <iframe width="875" height="500" src="<?=base_url()?>assets/surat_rapat/file_1523545885.pdf" frameborder="0" allowfullscreen scrolling="no"></iframe> -->
															<!-- <div id="filepdf" class="row" style="text-align: center;">
																
															</div> -->
															<!-- <div id="filegambar" class="row" style="text-align: center;">
																
															</div> -->
														</div>
														<div class="modal-footer">
															<a href="javascript::void" class="btn btn-danger" data-dismiss="modal">Tutup</a>
															
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
                            </div>
                      
  
    <script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/global/plugins/moment.min.js'; ?>"></script>  
    <script src="<?=base_url('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js');?>" type="text/javascript"></script>  <script type="text/javascript" src="<?php echo base_url().'assets/global/plugins/fullcalendar/fullcalendar.js'; ?>"></script>      
    <script type="text/javascript">
        var get_data        = '<?php echo $get_data; ?>';
        var backend_url     = '<?php echo base_url(); ?>';

        $(document).ready(function() {
			$.ajax({
				url : "<?php echo site_url('User/get_libur_nasional')?>",
				type: "GET",
				dataType: "JSON",
				success: function(data){
            $('.date-picker').datepicker();
            $('#calendarIO').fullCalendar({
                dayRender: function (date, cell) {
                	ymd = date.format("YYYYMMDD");
						try{
							var deskripsi = data[ymd]["deskripsi"];
							cell.css("background-color", "#ff6666");

							var month = date.format("M");
							var calendarDate = $('#calendarIO').fullCalendar('getDate');
							if(month==calendarDate.get('month')+1){
							cell.append('<br><div class="hari-libur-nasional">'+deskripsi+'</div>');
							}
						}catch(e){
						}
		                /*cell.find('<td>').css("background-color", "red");*/
				},
				header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                defaultDate: moment().format('YYYY-MM-DD'),
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                selectable: true,
                selectHelper: true,
                select: function(start, end) {
                    $('#create_modal input[name=start_date]').val(moment(start).format('YYYY-MM-DD'));
                    $('#create_modal input[name=end_date]').val(moment(end).format('YYYY-MM-DD'));
                    $('#create_modal').modal('show');
                    save();
                    $('#calendarIO').fullCalendar('unselect');
                },
                eventDrop: function(event, delta, revertFunc) { // si changement de position
                    editDropResize(event);
                },
                eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
                    editDropResize(event);
                },
                eventClick: function(event, element)
                {
                    deteil(event);
                    editData(event);
                    deleteData(event);
                },
                events: JSON.parse(get_data)
			});
			}
			});
        });

        $(document).on('click', '.add_calendar', function(){
            $('#create_modal input[name=calendar_id]').val(0);
            $('#create_modal').modal('show');  
        })

       

        function deteil(event)
        {
            $('#create_modal input[name=calendar_id]').val(event.id);
            $('#create_modal input[name=start_date]').val(moment(event.start).format('YYYY-MM-DD'));
            $('#create_modal input[name=end_date]').val(moment(event.end).format('YYYY-MM-DD'));
            $('#create_modal input[name=title]').val(event.title);
            $('#create_modal input[name=jam]').val(event.jam);
            $('#create_modal input[name=description]').val(event.description);
			if(event.nama_file==''){
                $("#filepdf").html('');    
            }
            else{
                $("#filepdf").html('<iframe width="875" height="500" frameborder="0" allowfullscreen scrolling="no" src="<?=base_url()?>assets/surat_rapat/'+event.nama_file+'"></iframe>');
            }
            $('#create_modal').modal('show');
        }
    </script>