					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Timeline
                        <small>Perjalanan Dinas</small>
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
                                <div id="calendarIO"></div>
                              
                                <!-- end place -->
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
            
            window.location='<?= base_url() ?>Master/detail_jaldis/'+event.kode_jaldis;
          
        }
    </script>