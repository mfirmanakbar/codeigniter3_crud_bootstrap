<?php if(!defined('BASEPATH')) exit('Hacking Attempt: Out now...!');

class Model_home extends CI_Model{

  function __construct(){
    parent::__construct();
  }

  function display_data(){
		return $this->db->get('tb_tamu');
	}

	function display_data_paging($halaman,$list){
		return $this->db->query("select * from tb_tamu order by id desc limit $halaman, $list");
	}

  function input($data){
			$this->db->insert('tb_tamu',$data);
	}

  function edit($data,$id){
      $this->db->where('id',$id);
      $this->db->update('tb_tamu',$data);
  }

  function delete($id){
      $this->db->where('id',$id);
      $this->db->delete('tb_tamu');
  }

}
