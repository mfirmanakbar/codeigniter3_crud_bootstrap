<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_api');
	}

	function index(){
		$post = json_decode(file_get_contents('php://input'));
    if(!empty($post->email)){
        $data = array(
            'email' => $post->email,
            'password' => md5($post->password)
        );
        $hasil = $this->model_api->user_register($data);
        if(!empty($hasil)){
            $response = array(
                'content'=>$hasil,
                'success' => true,
                'message' => 'Terima kasih, Akun Anda sudah terdaftar!');
        }else{
            $response = array(
                'content'=>null,
                'success' => false,
                'message' => 'Email tersebut sudah terdaftar!');
        }
		}else {
			$response = array(
					'success' => false,
					'message' => 'Mohon lengkapi data form!');
		}
		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($response, JSON_PRETTY_PRINT))
			->_display();
		exit;
	}

	function login(){
		$post = json_decode(file_get_contents('php://input'));
    if(!empty($post->email)){
        $data = array(
            'email' => $post->email,
            'password' => md5($post->password)
        );
        $hasil = $this->model_api->user_login($data);
        if(!empty($hasil)){
            $response = array(
                'content'=>$hasil,
                'success' => true,
                'message' => 'Login sukses!');
        }else{
            $response = array(
                'content'=>null,
                'success' => false,
                'message' => 'Email dan Password tidak valid!');
        }
		}else {
			$response = array(
					'success' => false,
					'message' => 'Mohon lengkapi data form!');
		}
		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($response, JSON_PRETTY_PRINT))
			->_display();
		exit;
	}

	function update_password(){
		$post = json_decode(file_get_contents('php://input'));
    if(!empty($post->email)){
        $data = array(
            'email' => $post->email,
						'old_password' => md5($post->old_password),
            'new_password' => md5($post->new_password)
        );
        $hasil = $this->model_api->update_password($data);
        if(!empty($hasil)){
            $response = array(
                'content'=>$hasil,
                'success' => true,
                'message' => 'Update password sukses!');
        }else{
            $response = array(
                'content'=>null,
                'success' => false,
                'message' => 'Password lama anda salah!');
        }
		}else {
			$response = array(
					'success' => false,
					'message' => 'Mohon lengkapi data form!');
		}
		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($response, JSON_PRETTY_PRINT))
			->_display();
		exit;
	}

	function show_all_users(){
		$post = json_decode(file_get_contents('php://input'));
		$hasil = $this->model_api->all_users();
    if($hasil){
        $response = array(
            'content' => $hasil,
            'success' => true,
            'info' => 'success'
            );
    }else{
        $response = array(
            'content' => null,
            'success' => false,
            'info' => 'failed');
    }
    $this->output
	    ->set_status_header(200)
	    ->set_content_type('application/json', 'utf-8')
	    ->set_output(json_encode($response, JSON_PRETTY_PRINT))
	    ->_display();
    exit;
	}

	function show_one_user(){
		$post = json_decode(file_get_contents('php://input'));
		if(!empty($post->email)){
				$data = array(
						'email' => $post->email
				);
				$hasil = $this->model_api->one_user($data['email']);
				if(!empty($hasil)){
						$response = array(
								'content'=>$hasil,
								'success' => true,
								'message' => 'Data berhasil ditemukan!');
				}else{
						$response = array(
								'content'=>null,
								'success' => false,
								'message' => 'Data tidak ditemukan!');
				}
		}else {
			$response = array(
					'success' => false,
					'message' => 'Mohon lengkapi data form!');
		}
		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($response, JSON_PRETTY_PRINT))
			->_display();
		exit;
	}

	function show_one_user_header(){
		//echo $hasil = $this->model_api->cek_header("2d47436625a76b11e5eca1b94e55e2aa98d5f725","67a74306b06d0c01624fe0d0249a570f4d093747");
		$post = json_decode(file_get_contents('php://input'));
		$req = $this->input->request_headers();
    $get_req = $req['Session-id']. " dan " .$req['Token-api'];
		$hasil = $this->model_api->cek_header($req['Session-id'],$req['Token-api']);
		if($hasil == 1){
				if(!empty($post->email)){
					$data = array(
							'email' => $post->email
					);
					$hasil_query = $this->model_api->one_user($data['email']);
					if (count($hasil_query)==1) {
						$response = array(
							'get_req'=> $get_req,
							'hasil'=> $hasil,
							'content'=>$hasil_query,
							'success' => true,
							'message' => 'Data berhasil ditemukan!'
						);
					}else {
						$response = array(
							'get_req'=> $get_req,
							'hasil'=> $hasil,
							'content'=>"null",
							'success' => false,
							'message' => 'Data tidak ditemukan!'
						);
					}
			}else {
				$response = array(
					'get_req'=> $get_req,
					'hasil'=> $hasil,
					'content'=> "null",
					'success' => false,
					'message' => 'Mohon lengkapi form!'
				);
			}
		}else {
			$response = array(
					'success' => false,
					'message' => 'Mohon set header!');
		}
		$this->output
			->set_status_header(200)
			->set_header("Set-Cookie: session-id=1")
			->set_content_type('application/json', 'utf-8')
			->set_header('token-api: '.$req['Token-api'])
			->set_header('session-id: '.$req['Session-id'])
			->set_output(json_encode($response, JSON_PRETTY_PRINT))
			->_display();
		exit;
	}

	function delete_user(){
		$post = json_decode(file_get_contents('php://input'));
		if(!empty($post->email)){
				$data = array(
						'email' => $post->email
				);
				$hasil_query = $this->model_api->one_user($data['email']);
				if (count($hasil_query)==1){
						$hasil = $this->model_api->delete_user($data['email']);
						$response = array(
								'success' => true,
								'message' => 'Data berhasil dihapus!');
				}else{
						$response = array(
								'success' => false,
								'message' => 'Data tidak ditemukan!');
				}
		}else {
			$response = array(
					'success' => false,
					'message' => 'Mohon lengkapi data form!');
		}
		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($response, JSON_PRETTY_PRINT))
			->_display();
		exit;
	}

}
