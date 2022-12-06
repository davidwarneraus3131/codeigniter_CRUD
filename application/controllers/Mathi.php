<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mathi extends CI_Controller {
	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		 $this->load->model('Mathi_model');
		
	}
	
	
	public function index(){	
		
		// $this->load->helper('url');
$data['products']=$this->Mathi_model->getAllProducts();
$data['title']="TOP TRENDING GAMES in @2k22";
$this->load->view('ready',$data);

	}


function storedata(){

$data['title']=$this->input->POST('title');
$data['description']=$this->input->POST('description');

 $this->load->model('Mathi_model');
$this->Mathi_model->storedata($data);

redirect('Mathi');

}


function create(){
	
	$this->load->view('create');

}


function Edit($id){

$data['product']=$this->Mathi_model->getProduct($id);
$data['title']="GAMERWORLD";
$this->load->view('Edit',$data);


}



function updateproduct($id){

	$data['title']=$this->input->POST('title');
$data['description']=$this->input->POST('description');

 $this->load->model('Mathi_model');
 $this->Mathi_model->updateproduct($id,$data);
 
redirect('Mathi');
}



function delete($id){

$this->Mathi_model->deleteproduct($id);
}


}


?>


<!-- // class sridhar{
// 	$name='haridas';

// 	function age(){
// 		$age=21;
// 	}

// 			function work()
// 			{
// 				$sample=new Mathi;
// 			$this->$name;
// 			$this->age();
// 			$sample->index()
// 			}
// } -->





