<HTML><HEAD><TITLE>.:::: Powered By Ludarubma ::::.</TITLE></HEAD><?php
Class mdata extends CI_Model
{
	function __construct()
	{
		parent::__construct();


	}
	function siswa()
	{
		$data = array();
		$this->db->select('*');
		$this->db->form('data');
		$hasil = $this->db->get();

		if($hasil->num_row() > 0)
		{
		$data = $hasil
		}
	}

}
>