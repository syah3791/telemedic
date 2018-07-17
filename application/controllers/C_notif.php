<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_notif extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_notif');
	}
	public function index(){
		$cek = $this->M_notif->check();
		echo json_encode($cek);
	}

	function call($id = null){
		$data = array('caller' => $this->session->id, 'receiver' => $id);
		$replay = $this->M_notif->call($data);
		echo json_encode($replay);
	}
	function check_call(){
		$check = $this->M_notif->check_call($this->session->id);
		if ($check != null) {
			echo json_encode($check);
		}else echo json_encode(null);
	}

	function check_receive(){
		$id_call = $this->input->post();
		$replay = $this->M_notif->check_receive($id_call['id_call']);
		if ($replay == 2){
			echo json_encode(2);
		}elseif ($replay == 0) {
			echo json_encode(0);
		}else echo json_encode(null);
	}

	function receive(){
		$id_call = $this->input->post();
		$replay = $this->M_notif->receive($id_call['id_call']);
	}
	function cancel(){
		$id_call = $this->input->post();
		$replay = $this->M_notif->cancel($id_call['id_call']);
		echo json_encode(0);
	}
}