<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalender_agenda extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
        parent::__construct();
        // $this->load->model('mkalender','model');
    }

	public function index()
	{
		$data['active'] = 'agenda';
		$data['sub'] = 'kalender';
		$data['sub2'] = '';
		$month = date("m");
		$year = date("Y");
		/*$this->load->view('kalender', array('kalender'=>$this->draw_calendar($month,$year)));*/
		$this->load->view('template/header',$data);
		$this->load->view('kalender',$data);
		$this->load->view('template/footer');
	}

	public function check_events(){
		$tanggal = $this->uri->segment(5);
		$output = "";
		$array = json_decode(file_get_contents("https://raw.githubusercontent.com/guangrei/Json-Indonesia-holidays/master/calendar.json"),true);
		$datetimeyear = substr($tanggal, 0, 4);
		$datetimemonth = substr($tanggal, 4, 2);
		$datetimeday = substr($tanggal, 6, 2);
		$datetime = $datetimeyear."-".$datetimemonth."-".$datetimeday;
		$where = "where waktu BETWEEN '$datetime 00:00:00' AND '$datetime 23:59:59'";
		$query = 'select id as id_agenda,acara as deskripsi_agenda,tempat,materi,peserta, DATE_FORMAT(waktu, "%H:%i") as jam from agenda '.$where. 'ORDER BY jam ASC';
		// $agenda = $this->model->GetAgenda("where waktu BETWEEN '$datetime 00:00:00' AND '$datetime 23:59:59'")->result_array();
		$agenda = $this->Main_model->manualQuery($query)->result_array();
		if (isset($array[$tanggal]["deskripsi"])) {
			$output = "<div class='box_deskripsi' style='color:red'>".$array[$tanggal]["deskripsi"]."</div>";
		}
		
		foreach ($agenda as $row) {
			// $output = $output."<div onclick='myFunction(".$row['id_agenda'].")' class='box_deskripsi popup'><span class='waktu_agenda'>".$row['jam']."</span><span class='deskripsi_agenda'>".ucfirst($row['deskripsi_agenda'])."</span><span class='popuptext' id='myPopup".$row['id_agenda']."'><button type='button' class='btn btn-primary' style='margin-right:10px' onclick='edit_agenda(".$row['id_agenda'].")'>Ubah</button><button type='button' class='btn btn-danger' onclick='delete_agenda(".$row['id_agenda'].")'>Hapus</button></span></div>";
			$output = $output."<div onclick='myFunction(".$row['id_agenda'].")' class='box_deskripsi popup'><span class='waktu_agenda'><b>Acara</b> ".$row['deskripsi_agenda']." (".$row['tempat'].")<br><b>Jam</b> ".$row['jam']." WIB<br><b>Materi/ keperluan</b> ".$row['materi']."<br><b>Yang diundang</b> ".$row['peserta']."</span></div>";
		}

		$data = array("deskripsi"=>$output);
		echo json_encode($data);
		
	}

	public function draw_calendar($month, $year){
		if ($month==null && $year==null) {
			$month = date("m");
			$year = date("Y");
		}
		
		

			// Draw table for Calendar 
			$calendar = '
		<table cellpadding="0" cellspacing="0" class="calendar">';

			// Draw Calendar table headings 
			$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
			$calendar.= '
		<tr class="calendar-row">
		<td class="calendar-day-head">'.implode('</td>
		<td class="calendar-day-head">',$headings).'</td>
		</tr>
		';

			//days and weeks variable for now ... 
			$running_day = date('w',mktime(0,0,0,$month,1,$year));
			$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
			$days_in_this_week = 1;
			$day_counter = 0;
			$dates_array = array();
			$array = json_decode(file_get_contents("https://raw.githubusercontent.com/guangrei/Json-Indonesia-holidays/master/calendar.json"),true);

			// row for week one 
			$calendar.= '
		<tr class="calendar-row">';

			// Display "blank" days until the first of the current week 
			for($x = 0; $x < $running_day; $x++):
				$calendar.= '
		<td class="calendar-day-np"> </td>
		';
				$days_in_this_week++;
			endfor;

			// Show days.... 
			for($list_day = 1; $list_day <= $days_in_month; $list_day++):
				if($list_day==date('d') && $month==date('n'))
				{
					$currentday='currentday';
				}else
				{
					$currentday='';
				}
				$calendar.= '
		<td class="calendar-day '.$currentday.'" onclick="modal_events('.$list_day.')">';
					$ymd = $year.sprintf("%02s", $month).sprintf("%02s", $list_day);
					if(isset($array[$ymd])) {
						$showtoday='<strong class="overday" style="color:red">'.$list_day.'</strong>';
						$deskripsi_event = $array[$ymd]["deskripsi"];
					}
					elseif(date("D",strtotime($ymd))==="Sun"){
						$showtoday='<strong class="overday" style="color:red">'.$list_day.'</strong>';
						$deskripsi_event ='';
					}
					else
					{
						$showtoday=$list_day;
						$deskripsi_event ='';
					}
					$datetimeyear = substr($ymd, 0, 4);
					$datetimemonth = substr($ymd, 4, 2);
					$datetimeday = substr($ymd, 6, 2);
					$datetime = $datetimeyear."-".$datetimemonth."-".$datetimeday;
					$where = "where waktu BETWEEN '$datetime 00:00:00' AND '$datetime 23:59:59'";
					$query = 'select id as id_agenda,acara as deskripsi_agenda,tempat,materi,peserta, DATE_FORMAT(waktu, "%H:%i") as jam from agenda '.$where. 'ORDER BY jam ASC';
					$agenda = $this->Main_model->manualQuery($query)->result_array();
					// $agenda = $this->model->GetAgenda("where waktu BETWEEN '$datetime 00:00:00' AND '$datetime 23:59:59' ")->result_array();

					$calendar.= '
		<div class="day-number" id="tanggal">'.$showtoday.'</div><br>
		<div class="deskripsi-event" style="color:red;font-weight:bold">'.$deskripsi_event.'</div>';
		foreach ($agenda as $row) {
			$calendar = $calendar.'<div class="deskripsi-event">'.$row['deskripsi_agenda'].'<br>'.$row['jam'].'</div>';
		}

				// Draw table end
				$calendar.= '</td>
		';
				if($running_day == 6):
					$calendar.= '</tr>
		';
					if(($day_counter+1) != $days_in_month):
						$calendar.= '
		<tr class="calendar-row">';
					endif;
					$running_day = -1;
					$days_in_this_week = 0;
				endif;
				$days_in_this_week++; $running_day++; $day_counter++;
			endfor;

			// Finish the rest of the days in the week
			if($days_in_this_week < 8):
				for($x = 1; $x <= (8 - $days_in_this_week); $x++):
					$calendar.= '
		<td class="calendar-day-np"> </td>
		';
				endfor;
			endif;

			// Draw table final row
			$calendar.= '</tr>
		';

			// Draw table end the table 
			$calendar.= '</table>
		';
			
			// Finally all done, return result 
			return $calendar;

			/*$data = array("button_delete" => $calendar);
    	echo json_encode($data);*/



			
}

public function change_month_year(){
	$month = $_GET['month'];
	$years = $_GET['years'];
	$data = $this->draw_calendar($month,$years);
	echo json_encode($data); 
}

public function submit_agenda(){
	$tanggal = $_GET['tanggal'];
	$time = $_GET['time'];
	$deskripsi = $_GET['deskripsi'];
	$datetimeyear = substr($tanggal, 0, 4);
	$datetimemonth = substr($tanggal, 4, 2);
	$datetimeday = substr($tanggal, 6, 2);
	$datetime = $datetimeyear."-".$datetimemonth."-".$datetimeday;
	$data = array(
			"waktu"=>$datetime." ".$time,
			"acara"=> $deskripsi
			);
	$submit = $this->Main_model->tambahdata('agenda', $data);
	echo json_encode($submit);
}

public function submit_edit_agenda(){
	$tanggal = $_GET['tanggal'];
	$time = $_GET['time'];
	$deskripsi = $_GET['deskripsi'];
	$id_agenda = $_GET['id_agenda'];
	$datetimeyear = substr($tanggal, 0, 4);
	$datetimemonth = substr($tanggal, 4, 2);
	$datetimeday = substr($tanggal, 6, 2);
	$datetime = $datetimeyear."-".$datetimemonth."-".$datetimeday;
	$data = array(
			"waktu"=>$datetime." ".$time,
			"acara"=> $deskripsi
			);
	$submit = $this->Main_model->updateData('agenda', $data,array('id'=>$id_agenda));
	echo json_encode($submit);
}

public function delete_agenda(){
	$id_agenda = $_GET['id_agenda'];
	$delete = $this->Main_model->deleteData('agenda', array('id'=>$id_agenda));
	echo json_encode($delete);
}

public function edit_agenda(){
	$id_agenda = $_GET['id_agenda'];
	$where = "where id = '$id_agenda'";
	$query = 'select id as id_agenda,acara as deskripsi_agenda,tempat,materi,peserta, DATE_FORMAT(waktu, "%H:%i") as jam from agenda '.$where. 'ORDER BY jam ASC';
	$data_agenda = $this->Main_model->manualQuery($query)->row();
	// $data_agenda = $this->model->GetAgenda("where id = '$id_agenda'")->row();
	$deskripsi = $data_agenda->deskripsi_agenda;
	$time = $data_agenda->jam;
	$data = array("acara" => $deskripsi, "time" => $time);
	echo json_encode($data);
}



}
