					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Lihat Data
                        <small>Agenda</small>
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
                                
                                
                                <div id="calendarIO"></div>
                                <div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <form class="form-horizontal" method="POST" action="POST" id="form_create">
                                                <input type="hidden" name="calendar_id" value="0">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel">Detail Rapat</h4>
                                                </div>
                                                <div class="modal-body">
													<div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                            <label for="form_control_1">Tanggal</label>
                                                            <input type="date" name="tanggal" class="form-control" required>
                                                            
                                                            <span class="help-block"></span>
                                                            <i class="fa fa-calendar-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                            <label for="form_control_1">Jam</label>
                                                            <input type="time" name="jam" class="form-control" required>
                                                            
                                                            <span class="help-block"></span>
                                                            <i class="icon-speedometer"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="tempat" class="form-control edited" maxlength="200" required="">
                                                            <label for="form_control_1">Tempat</label>
                                                            <span class="help-block"></span>
                                                            <i class="icon-pin"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="acara" class="form-control edited" maxlength="300" required>
                                                            <label for="form_control_1">Acara</label>
                                                            <span class="help-block"></span>
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
                                                            <input type="text" name="materi" class="form-control edited" maxlength="300" required>
                                                            <label for="form_control_1">Materi/ keperluan</label>
                                                            <span class="help-block"></span>
                                                            <i class="icon-pencil"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div> 
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="peserta" class="form-control edited" maxlength="1000" required>
                                                            <label for="form_control_1">Yang diundang</label>
                                                            <span class="help-block"></span>
                                                            <i class="icon-users"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div> 
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="javascript::void" class="btn btn-danger" data-dismiss="modal">Tutup</a>
                                                  
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end place -->
                            </div>
                      
  
    <script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/global/plugins/moment.min.js'; ?>"></script>  
    <script src="<?=base_url('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js');?>" type="text/javascript"></script>  <script type="text/javascript" src="<?php echo base_url().'assets/global/plugins/fullcalendar/fullcalendar.js'; ?>"></script>      
    <script type="text/javascript">
        var get_data        = '<?php echo $get_data; ?>';
        var backend_url     = '<?php echo base_url(); ?>';

        $(document).ready(function() {
            $('.date-picker').datepicker();
            $('#calendarIO').fullCalendar({
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
        });

        $(document).on('click', '.add_calendar', function(){
            $('#create_modal input[name=calendar_id]').val(0);
            $('#create_modal').modal('show');  
        })

       

        function deteil(event)
        {
            $('#create_modal input[name=calendar_id]').val(event.id);
            $('#create_modal input[name=tanggal]').val(moment(event.start).format('YYYY-MM-DD'));
            $('#create_modal input[name=acara]').val(event.title);
            $('#create_modal input[name=materi]').val(event.materi);
            $('#create_modal input[name=jam]').val(event.jam);
            $('#create_modal input[name=peserta]').val(event.peserta);
            $('#create_modal input[name=tempat]').val(event.tempat);
            $('#create_modal').modal('show');
        }
    </script>