<html>	
	<head>
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/kalender2.css">
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>
	<body>
    <div class="title_month_year container">
		<div>
			<h3><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left" onclick="change_month_left()"><span class="fc-icon fc-icon-left-single-arrow"></span></button> <span class="title_month" id="title_month"></span> <span id="title_year"></span> <button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right" onclick="change_month_right()"><span class="fc-icon fc-icon-right-single-arrow"></span></button></h3>
		</div>
    </div>
    <!-- <div class="title_month_year container">
		<div class="row">
			<div class="col-5" style="text-align: right;padding-top: 4px">
			<span class="change_month_arrow"><i class='fa fa-arrow-left fa-md' onclick="change_month_left()"></i></span>
			</div>
			<div class="col-2">
			<span class="title_month" id="title_month"></span>
			</div>
			<div class="col-5" style="text-align: left;padding-top: 4px">
			<span class="change_month_arrow"><i class='fa fa-arrow-right fa-md' onclick="change_month_right()"></i></span>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
			<span id="title_year"></span>
			</div>
		</div>
    </div> -->
	<div class="draw_kalender" id="draw_kalender"></div>
    <?php
/*    echo "<div class='judul_bulan' id='bulan'>".date("F")."</div>";
    echo "<div class='judul_tahun' id='tahun'>".date("Y")."</div>";
*/
   /* echo $kalender;*/
    ?>
    <!-- Modal_edit_events-->
    <div class="modal fade" id="modal_edit_events" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="title_modal_edit_events">Edit Events </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="close_events()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                  <input class="form-control" type="hidden" id="id_agenda">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Time:</label>
                  <input class="form-control" type="time" value="00:00:00" id="time_edit">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Description:</label>
                <textarea class="form-control" id="form_deskripsi_edit"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="submit_edit_agenda()">Save Changes <i class='fa fa-plus fa-sm'></i></button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal_add_events-->
    <div class="modal fade" id="modal_add_events" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="title_modal_add_events">Tambah Agenda </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="close_events()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Jam:</label>
                  <input class="form-control" type="time" value="00:00:00" id="time">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Acara:</label>
                <textarea class="form-control" id="form_deskripsi"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="submit_agenda()">Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal_events -->
    <div class="modal fade" id="modal_events" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="title_modal_events">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="close_events()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="deskripsi"></div>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="modal_add_events()">Tambah Agenda <i class='fa fa-plus fa-sm'></i></button>
          </div> -->
        </div>
      </div>
    </div>
    <div class="flashdata" id="flashdata"></div>
    
  </body>
	<footer>
		<script type="text/javascript">
    var months_now=0;
    var years_now=0;
    var months = {
      'Januari' : '01',
      'Februari' : '02',
      'Maret' : '03',
      'April' : '04',
      'Mei' : '05',
      'Juni' : '06',
      'Juli' : '07',
      'Agustus' : '08',
      'September' : '09',
      'Oktober' : '10',
      'November' : '11',
      'Desember' : '12'
    }
    var months_1 = {
      'Januari' : '0',
      'Februari' : '1',
      'Maret' : '2',
      'April' : '3',
      'Mei' : '4',
      'Juni' : '5',
      'Juli' : '6',
      'Agustus' : '7',
      'September' : '8',
      'Oktober' : '9',
      'November' : '10',
      'Desember' : '11'
      }
    var month = new Array();
      month[0] = "Januari";
      month[1] = "Februari";
      month[2] = "Maret";
      month[3] = "April";
      month[4] = "Mei";
      month[5] = "Juni";
      month[6] = "Juli";
      month[7] = "Agustus";
      month[8] = "September";
      month[9] = "Oktober";
      month[10] = "November";
      month[11] = "Desember";

    function month_year_now(konteks){
      var month = new Array();
      month[0] = "Januari";
      month[1] = "Februari";
      month[2] = "Maret";
      month[3] = "April";
      month[4] = "Mei";
      month[5] = "Juni";
      month[6] = "Juli";
      month[7] = "Agustus";
      month[8] = "September";
      month[9] = "Oktober";
      month[10] = "November";
      month[11] = "Desember";
      if (konteks==null) {
        var d = new Date();
        var month = month[d.getMonth()];
        var year = d.getFullYear();
        document.getElementById("title_month").innerText = month;
        document.getElementById("title_year").innerText = year;
        var years = year;
        years_now = year;
      }
      else{
        var years = years_now;
      }
      var month = months_now + 1;
      $.ajax({
      url : "<?php echo site_url('kalender/change_month_year')?>?month="+month+"&years="+years,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {     
          document.getElementById("draw_kalender").innerHTML = data;   
      }
      });
    }

    function change_month_left(){
      
      months_now = parseInt(months_1[document.getElementById("title_month").innerText]);
      if(months_now!=0){
        months_now = months_now - 1;
      }
      else{
        years_now = years_now -1;
        months_now = 11;
      }
      document.getElementById("title_month").innerText = month[months_now];
      proses_ganti_kalender();
      document.getElementById("title_year").innerText = years_now;
    }

    function change_month_right(){
      months_now = parseInt(months_1[document.getElementById("title_month").innerText]);
      if(months_now!=11){
        months_now = months_now + 1;
      }
      else{
        years_now = years_now +1;
        months_now = 0;
      }
        document.getElementById("title_month").innerText = month[months_now];
        document.getElementById("title_year").innerText = years_now;
        proses_ganti_kalender();
    }

    function proses_ganti_kalender(){
      var month = months_now + 1;
      var years = years_now;
      $.ajax({
      url : "<?php echo site_url('kalender/change_month_year')?>?month="+month+"&years="+years,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {     
          document.getElementById("draw_kalender").innerHTML = data;   
      }
      });
    }

    window.onload = function() {
      month_year_now();
      var submit_konteks = sessionStorage.getItem("submit");
      var delete_konteks = sessionStorage.getItem("delete");
      if (submit_konteks) {
          sessionStorage.removeItem("submit");
          document.getElementById("flashdata").style.backgroundColor = "#53942a";
          flash_data("Agenda berhasil ditambahkan !");
      }
      else if(delete_konteks){
          sessionStorage.removeItem("delete");
          document.getElementById("flashdata").style.backgroundColor = "red";
          flash_data("Agenda berhasil dihapus !");
      }
    }

    function myFunction(id) {
      var popup = document.getElementById("myPopup"+id);
      popup.classList.toggle("show");
    }

		function modal_events(tanggal){
      var tanggal_full= document.getElementById('title_year').innerText+months[document.getElementById('title_month').innerText]+pad(tanggal);
      check_events(tanggal_full);
			// document.getElementById("title_modal_events").innerHTML = "Agenda @"+tanggal+" "+document.getElementById('title_month').innerText+" "+document.getElementById('title_year').innerText;
			document.getElementById("title_modal_events").innerHTML = "Agenda pada tanggal "+tanggal+" "+document.getElementById('title_month').innerText+" "+document.getElementById('title_year').innerText;
      $('#modal_events').modal({backdrop: 'static', keyboard: false}) 
			$('#modal_events').modal('show');
		}
		function modal_add_events(){
      document.getElementById("title_modal_add_events").innerHTML = "Tambah "+document.getElementById("title_modal_events").innerHTML;
			$('#modal_events').modal('hide');
			$('#modal_add_events').modal('show');
		}

    function pad(d) {
      return (d < 10) ? '0' + d.toString() : d.toString();
    }
      
    function check_events(tanggal){
      $.ajax({
          url : "<?php echo site_url('kalender/check_events')?>/" + tanggal,
          type: "POST",
          dataType: "JSON",
          success: function(data)
          {          
                document.getElementById("deskripsi").innerHTML = data.deskripsi;
          }
      });
    }

    function close_events(){
      document.getElementById("deskripsi").innerHTML = "";
    }

    function delete_agenda(id_agenda){
      $.ajax({
      url : "<?php echo site_url('kalender/delete_agenda')?>?id_agenda="+id_agenda,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {          
          $('#modal_events').modal('hide');
          setTimeout(function(){
            reload_calendar("delete");
          },300);   
      }
      });
    }

    function edit_agenda(id_agenda){
      $.ajax({
      url : "<?php echo site_url('kalender/edit_agenda')?>?id_agenda="+id_agenda,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {          
          document.getElementById("title_modal_edit_events").innerHTML = "Edit "+document.getElementById("title_modal_events").innerHTML;
          document.getElementById("form_deskripsi_edit").value = data.deskripsi_agenda;
          document.getElementById("time_edit").value = data.time;
          document.getElementById("id_agenda").value = id_agenda;
          $('#modal_events').modal('hide');
          $('#modal_edit_events').modal('show');

            
      }
      });
    }

    function submit_edit_agenda(){
      
      $('#modal_edit_events').modal('hide');
      var tanggal = document.getElementById("title_modal_events").innerText.substring(8, 10);
      var time = document.getElementById('time_edit').value;
      var id_agenda = document.getElementById('id_agenda').value;
      var tanggal_full= document.getElementById('title_year').innerText+months[document.getElementById('title_month').innerText]+pad(tanggal);
      var deskripsi = document.getElementById("form_deskripsi_edit").value;
      $.ajax({
        url : "<?php echo site_url('kalender/submit_edit_agenda')?>?deskripsi="+deskripsi+"&tanggal="+tanggal_full+"&time="+time+"&id_agenda="+id_agenda,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {          
            reload_calendar("edit");

        }
      });
    }

    function submit_agenda(){
      
      $('#modal_add_events').modal('hide');
      var tanggal = document.getElementById("title_modal_events").innerText.substring(8, 10);
      var time = document.getElementById('time').value;
      var tanggal_full= document.getElementById('title_year').innerText+months[document.getElementById('title_month').innerText]+pad(tanggal);
      var deskripsi = document.getElementById("form_deskripsi").value;
      $.ajax({
        url : "<?php echo site_url('kalender/submit_agenda')?>?deskripsi="+deskripsi+"&tanggal="+tanggal_full+"&time="+time,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {          
            reload_calendar("submit");
        }
      });
    }

    function flash_data(isi){
      document.getElementById("flashdata").innerHTML = isi;
                $('.flashdata').fadeIn(1000);
                setTimeout(function(){
                  $('.flashdata').fadeOut(1000);
                },3000);
    }

    function flash_data_delete(){
      document.getElementById("flashdata").innerHTML = "Agenda berhasil ditambahkan";
                $('.flashdata').fadeIn(1000);
                setTimeout(function(){
                  $('.flashdata').fadeOut(1000);
                },3000);
    }

    function reload_calendar(konteks) {
      if (konteks=="submit") {
        document.getElementById("flashdata").style.backgroundColor = "#53942a";
          flash_data("Agenda berhasil ditambahkan !");
      }
      else if (konteks=="edit") {
        document.getElementById("flashdata").style.backgroundColor = "#53942a";
          flash_data("Agenda berhasil diubah !");
      }
      else{
        document.getElementById("flashdata").style.backgroundColor = "red";
          flash_data("Agenda berhasil dihapus !");
      }
      /*document.location.reload();*/
      month_year_now("reload");
    }		

		</script>
	</footer>
</html>




