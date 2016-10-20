<HTML><HEAD><TITLE>.:::: Powered By Ludarubma ::::.</TITLE></HEAD><?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_c extends CI_Controller {

	public function index()
	{
		$data['judul']='tcontact';
		$data['deskription']='';
		$this->load->view('templete',$data);
	}
}