<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('table1');
		$this->table1->col1 = "col val 1";
		$this->table1->col2 = "col val 2";
		$this->table1->col3 = "col val 3";
		$new_id = $this->table1->insert();
		echo $new_id;
	}
	public function update()
	{
		$this->load->model('table1');
		$this->table1->col1 = "edit col val 13413413413";
		$this->table1->col3 = "nuizoro222";
		$this->table1->update_by_condition(['id'=>"1"]);
	}
	public function wheres(){
		$this->load->model('table1');
		$result = $this->table1->get_by_conditions(["id"=>"1"]);
		print_r($result);
	}
	public function showEntry(){
		$this->load->model('table1');
		$result = $this->table1->get(2);
		print_r($result);
	}
}
