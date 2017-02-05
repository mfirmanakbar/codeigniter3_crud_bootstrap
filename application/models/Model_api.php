<?php if(!defined('BASEPATH')) exit('Hacking Attempt: Out now...!');

class Model_api extends CI_Model{

  function __construct(){
    parent::__construct();
  }

  function user_register($data){
    $this->db->where('email',$data['email']);
    $q = $this->db->count_all_results('tb_users');
    if($q > 0){
        unset($data);
        $data = null;
    }
    else{
        $this->db->insert('tb_users', $data);
        $data['id'] =$this->db->insert_id();
    }
    return $data;
  }

  function user_login($data){
      $this->db->where('email',$data['email']);
      $this->db->where('password',$data['password']);
      $q = $this->db->count_all_results('tb_users');
      if($q > 0){
        $sql = "SELECT * FROM tb_users WHERE email = ? AND password = ? ";
        $hasil = $this->db->query($sql, array($data['email'],$data['password']))->result_array();
        $session_id = sha1(md5($hasil[0]['id'].$hasil[1]['email']));
        $data['session_id'] = $session_id;
        $token_api = sha1(md5(strtotime(date('Y-m-d h:i:s').$hasil[0]['id'])));
        $data['token_api'] = $token_api;
        $this->db->where('id', $hasil[0]['id']);
        $this->db->update('tb_users', array('token_api'=>$token_api,'session_id'=>$session_id,'update_token_session'=>date('Y-m-d H:i:s')));
      }
      else{
          unset($data);
          $data = null;
      }
      return $data;
  }

  function update_password($data){
      $this->db->where('email',$data['email']);
      $this->db->where('password',$data['old_password']);
      $q = $this->db->count_all_results('tb_users');
      if($q > 0){
        $this->db->where('email', $data['email']);
        $this->db->update('tb_users', array('password'=>$data['new_password']));
      }
      else{
          unset($data);
          $data = null;
      }
      return $data;
  }

  function all_users(){
		return $this->db->get('tb_users')->result();
	}

  function one_user($email){
    $this->db->where('email',$email);
		return $this->db->get('tb_users')->result_array();
	}

  public function cek_header($session_id,$token_api){
    $this->db->where('session_id',$session_id);
    $this->db->where('token_api',$token_api);
    $q = $this->db->count_all_results('tb_users');
    if($q != 0){
        $data['cek_header'] = 1;
    }else{
        $data['cek_header'] = 0;
    }
    return $data['cek_header'];
  }

  function delete_user($email){
      $this->db->delete('tb_users', array('email' => $email));
  }
}
