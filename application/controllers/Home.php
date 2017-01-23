<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_home');
		$this->load->library('fpdf_gen');
	}

	function index(){
		$this->load->library('pagination');
		$config['base_url'] = site_url().'home/index/';
		$config['total_rows']= $this->model_home->display_data()->num_rows();
		$config['per_page'] = 2;
		$this->pagination->initialize($config);
		$data_paging = $this->pagination->create_links();
		$halaman = $this->uri->segment(3);
		$halaman = $halaman==''?0:$halaman;
		$data = array(
				'title' => 'Home',
				'paging' => $data_paging,
				'record' => $this->model_home->display_data_paging($halaman,$config['per_page']),
			);
		$this->load->view('page_home', $data);
	}

	function input(){
		if(isset($_POST['btnsimpan']))
		{
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('txtnama', 'Name', 'required|min_length[5]|max_length[15]');
			$this->form_validation->set_message('txtnama', 'Name must be required min 5-15 letter.');
			$this->form_validation->set_rules('txtemail', 'Email', 'required|valid_email');
			$this->form_validation->set_message('txtemail', 'Email must be valid.');
			$this->form_validation->set_rules('txtpesan', 'Message', 'required|min_length[10]|max_length[250]');
			$this->form_validation->set_message('txtpesan', 'Message must be required 10-250 letter.');
			//$this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]'); //phonenumber

			if ($this->form_validation->run() == FALSE) {
				//echo "Failed!";
        $this->session->set_flashdata('inputValidationF', "<strong>Error!</strong>".validation_errors());
				redirect(site_url('home'));
			} else {
				//echo "Successfully!";
				$data_input = array(
					'nama'=> $this->input->post('txtnama'),
					'email'=> $this->input->post('txtemail'),
					'url'=> $this->input->post('txturl'),
					'pesan'=> $this->input->post('txtpesan'),
				);
				$this->model_home->input($data_input);
				$this->session->set_flashdata('inputValidationT', "<strong>Save Successfully!</strong>");
				redirect(site_url('home'));
			}
		}else {
			redirect(site_url('home'));
		}
	}

	function edit(){
		if(isset($_POST['btnedit'])){
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('txtnama', 'Name', 'required|min_length[5]|max_length[15]');
			$this->form_validation->set_message('txtnama', 'Name must be required min 5-15 letter.');
			$this->form_validation->set_rules('txtemail', 'Email', 'required|valid_email');
			$this->form_validation->set_message('txtemail', 'Email must be valid.');
			$this->form_validation->set_rules('txtpesan', 'Message', 'required|min_length[10]|max_length[250]');
			$this->form_validation->set_message('txtpesan', 'Message must be required 10-250 letter.');
			//$this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]'); //phonenumber

			if ($this->form_validation->run() == FALSE) {
				//echo "Failed!";
        $this->session->set_flashdata('inputValidationF', "<strong>Error!</strong>".validation_errors());
				redirect(site_url('home'));
			} else {
				//echo "Successfully!";
				$data_input = array(
					'nama'=> $this->input->post('txtnama'),
					'email'=> $this->input->post('txtemail'),
					'url'=> $this->input->post('txturl'),
					'pesan'=> $this->input->post('txtpesan'),
				);
				$id = $this->input->post('txtid');
				$this->model_home->edit($data_input,$id);
				$this->session->set_flashdata('inputValidationT', "<strong>Update Successfully!</strong>");
				redirect(site_url('home'));
			}
		}else {
			redirect(site_url('home'));
		}
	}

	function delete(){
		if(isset($_POST['btndelete'])){
			$id = $this->input->post('txtid');
			$this->model_home->delete($id);
			$this->session->set_flashdata('inputValidationT', "<strong>Delete Successfully!</strong>");
			redirect(site_url('home'));
		}else {
			redirect(site_url('home'));
		}
	}

	function excel(){
			header("Content-type=appalication/vnd.ms-excel");
			header("content-disposition:attachment;filename=laporandata.xls");
			$data['record'] = $this->model_home->display_data();
			$this->load->view('page_excel',$data);
	}

	function pdf(){

		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->AliasNbPages();
		$CI =& get_instance();
		$CI->fpdf = $pdf;

		$this->fpdf->SetFont('Arial','B',16);
		$pdf->MultiCell(0,5,"All Data",0);
		$data = $this->model_home->display_data();
		foreach ($data->result() as $r) {
			$pdf->SetFont('Arial','',10);
			$isi = $r->nama." (".$r->time.") - ".$r->email." - ".$r->url."\n".$r->pesan;
			$pdf->MultiCell(0,5,$isi,1);
		}
		$this->fpdf->Output();

		// $this->load->library('cfpdf');
		// $pdf=new FPDF('P','mm','A4');
		// $pdf->AddPage();
		// $pdf->SetFont('Arial','B','L');
		// $pdf->SetFontSize(14);
		// $pdf->Text(10, 10, 'LAPORAN TRANSAKSI');
		// $pdf->SetFont('Arial','B','L');
		// $pdf->SetFontSize(10);
		// $pdf->Cell(10, 10,'','',1);
		// $pdf->Cell(10, 7, 'No', 1,0);
		// $pdf->Cell(27, 7, 'Tanggal', 1,0);
		// $pdf->Cell(30, 7, 'Operator', 1,0);
		// $pdf->Cell(38, 7, 'Total Transaksi', 1,1);
		// // tampilkan dari database
		// $pdf->SetFont('Arial','','L');
		// $data=  $this->model_transaksi->laporan_default();
		// $no=1;
		// $total=0;
		// foreach ($data->result() as $r)
		// {
		// 		$pdf->Cell(10, 7, $no, 1,0);
		// 		$pdf->Cell(27, 7, $r->tanggal_transaksi, 1,0);
		// 		$pdf->Cell(30, 7, $r->nama_lengkap, 1,0);
		// 		$pdf->Cell(38, 7, $r->total, 1,1);
		// 		$no++;
		// 		$total=$total+$r->total;
		// }
		// // end
		// $pdf->Cell(67,7,'Total',1,0,'R');
		// $pdf->Cell(38,7,$total,1,0);
		// $pdf->Output();

	}


}
