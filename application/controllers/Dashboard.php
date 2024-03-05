<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index() {
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard/dashboard_index');
		$this->load->view('template/footer');
	}

	public function proses_tambah_activity() {
		// Waktu mulai
		$s_time = $this->input->post('s_time');
		$waktu_mulai=strtotime($s_time);
		
		// Waktu selesai
		$f_time = $this->input->post('f_time');
		$waktu_selesai=strtotime($f_time);

		// Menghitung selisih waktu
		$selisih=$waktu_selesai - $waktu_mulai;

		// Mengonversi selisih waktu ke format jam:menit AM/PM
		$jam=floor($selisih / (60 * 60));
		$sisa=$selisih - ($jam * 60 * 60);
		$menit=floor($sisa / 60);
		$sisa=$sisa - ($menit * 60);
		$format_jam=date("h:i", mktime(0, 0, 0, 0, 0, 0) + $selisih);

		// Menampilkan hasil
		echo "Lama pekerjaan: ". $format_jam;

		$data=array('tanggal'=> $this->input->post('tanggal'),
			's_time'=> $this->input->post('s_time'),
			'category'=> $this->input->post('category'),
			'detail'=> $this->input->post('detail'),
			'status'=> $this->input->post('status'),
			'f_time'=> $this->input->post('f_time'),
			'durasi'=> $format_jam,
			'pic'=> $this->input->post('pic'),
			'remark'=> $this->input->post('remark'),
		);

$this->db->insert('activity', $data);
return redirect('laporan');

	}
}
