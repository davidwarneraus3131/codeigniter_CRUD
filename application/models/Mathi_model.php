<?php


class Mathi_model extends CI_Model {

public function __construct(){
    parent::__construct();
}


function getAllProducts(){

$products=$this->db->get('products');

$result=$products->result();
return $result;
    }


    function storedata($data){

$this->db->insert('products',$data);

    }


    function getProduct($id){


       return $this->db->where('id',$id)->get('products')->row();

    }



    function updateproduct($id,$data){
        $this->db->where('id',$id)->update('products',$data);
        redirect('Mathi');
    }

    function deleteproduct($id){
        $this->db->where('id',$id)->delete('products');
        redirect('Mathi');
    }



	
}
