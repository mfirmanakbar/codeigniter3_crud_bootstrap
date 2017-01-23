<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $title;?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" type="image/ico" href="<?php echo base_url('assets/img/logo1.png')?>">
		<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/navbar-fixed-top.css')?>" rel="stylesheet">
	</head>
	<body>

		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#ffffff;color:#000000;">
			<div class="row">
				<div class="text-center" style="background-color:#00c853;color:#ffffff;padding-top:10px; padding-bottom:10px; font-size:1.2em;">
					Template CI_3 Bootstrap_3
				</div>
			</div>
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img width="70%" src="<?php echo base_url('assets/img/logo2.png')?>"></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo site_url('home');?>">Home</a></li>
						<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report <span class="caret"></span></a>
              <ul class="dropdown-menu">
								<li class="dropdown-header">Export to:</li>
                <li><a href="<?php echo site_url('home/excel');?>" target="_blank">Excel</a></li>
                <li><a href="<?php echo site_url('home/pdf');?>" target="_blank">PDF</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="http://toriatec.com/" target="_blank">www.toriatec.com</a></li>
              </ul>
            </li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Fixed navbar -->

		<br/><br/><br/>

		<div class="container">
			<!--Search-->
			<div class="row">
				<div class="col-xs-12 col-md-6 col-lg-8">
				</div>
				<div class="col-xs-12 col-md-6 col-lg-4">
					<form class="form" method="get" action="cari.php"> <!-- form-inline -->
						<div class="form-group">
							<div class="input-group">
																<input type="text" class="form-control" id="txtcari" name="txtcari" value="" placeholder="Type here and press Enter">
								<div class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!--Search-->

			<!-- Modal Add-->
      <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form method="post" action="<?php echo site_url('home/input');?>">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Data</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label for="txtname">Name</label>
                  <input type="text" class="form-control" id="txtnama" name="txtnama" placeholder="Name" required="required">
                </div>
                <div class="form-group">
                  <label for="txtemail">Email</label>
                  <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Email" required="required">
                </div>
                <div class="form-group">
                  <label for="txturl">Website</label>
                  <input type="text" class="form-control" id="txturl" name="txturl" placeholder="Website/Url">
                </div>
                <div class="form-group">
                  <label for="txtpesan">Message</label>
                  <textarea id="txtpesan" name="txtpesan" class="form-control" rows="3" placeholder="Message" required="required"></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="btnsimpan" name="btnsimpan" class="btn btn-success">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Modal Add-->

			<?php
			if ($this->session->flashdata('inputValidationF')==TRUE) {
				echo '<div class="alert alert-danger">
								<a class="close" data-dismiss="alert">&times;</a>
								'.$this->session->flashdata('inputValidationF').'
							</div>';
			}else if ($this->session->flashdata('inputValidationT')==TRUE){
				echo '<div class="alert alert-success">
								<a class="close" data-dismiss="alert">&times;</a>
								'.$this->session->flashdata('inputValidationT').'
							</div>';
			}?>

			<div class="row">
				<table class="table table-hover">
	        <thead>
	          <tr>
	              <td class="text-center"><b>Id</b></td>
	              <td class="text-center"><b>Time</b></td>
	              <td class="text-center"><b>Name</b></td>
	              <td class="text-center"><b>Email</b></td>
	              <td class="text-center"><b>Website</b></td>
	              <td class="text-center"><b>Message</b></td>
	              <td class="text-center">
	                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalAdd"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
	              </td>
	          </tr>
	        </thead>
	        <tbody>
						<?php
		          $no=1+$this->uri->segment(3);
	            foreach ($record->result() as $r){
		        ?>
				        <tr>
				          <td class="text-center"><?php echo $no; ?></td>
				          <td class="text-center"><?php echo $r->time; ?></td>
				          <td class="text-center"><?php echo $r->nama; ?></td>
				          <td class="text-center"><?php echo $r->email; ?></td>
				          <td class="text-center"><?php echo $r->url; ?></td>
				          <td class="text-center"><?php echo $r->pesan; ?></td>
									<td>
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalEdit<?php echo $r->id; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
										<!-- Modal Edit-->
							      <div class="modal fade" id="ModalEdit<?php echo $r->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							        <div class="modal-dialog" role="document">
							          <div class="modal-content">
							            <form method="post" action="<?php echo site_url('home/edit');?>">
							              <div class="modal-header">
							                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							                <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
							              </div>
							              <div class="modal-body">
							                <div class="form-group">
							                  <label for="txtname">Name</label>
																<input type="hidden" id="txtid" name="txtid" value="<?php echo $r->id; ?>">
							                  <input type="text" class="form-control" id="txtnama" name="txtnama" placeholder="Name" required="required" value="<?php echo $r->nama; ?>">
							                </div>
							                <div class="form-group">
							                  <label for="txtemail">Email</label>
							                  <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Email" required="required" value="<?php echo $r->email; ?>">
							                </div>
							                <div class="form-group">
							                  <label for="txturl">Website</label>
							                  <input type="text" class="form-control" id="txturl" name="txturl" placeholder="Website/Url" value="<?php echo $r->url; ?>">
							                </div>
							                <div class="form-group">
							                  <label for="txtpesan">Message</label>
							                  <textarea id="txtpesan" name="txtpesan" class="form-control" rows="3" placeholder="Message" required="required"><?php echo $r->pesan; ?></textarea>
							                </div>
							              </div>
							              <div class="modal-footer">
							                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							                <button type="submit" id="btnedit" name="btnedit" class="btn btn-success">Save Changed</button>
							              </div>
							            </form>
							          </div>
							        </div>
							      </div>
							      <!-- Modal Edit-->

										<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalDelete<?php echo $r->id; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
										<!-- Modal Delete-->
							      <div class="modal fade" id="ModalDelete<?php echo $r->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							        <div class="modal-dialog" role="document">
							          <div class="modal-content">
							            <form method="post" action="<?php echo site_url('home/delete');?>">
							              <div class="modal-header">
							                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
							              </div>
							              <div class="modal-body">
							                <div class="form-group">
																<input type="hidden" id="txtid" name="txtid" value="<?php echo $r->id; ?>">
							                  <label>Are you sure delete this data (<?php echo "ID : ".$r->id;?>)?</label>
							                </div>
							              </div>
							              <div class="modal-footer">
							                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							                <button type="submit" id="btndelete" name="btndelete" class="btn btn-danger">Yes, Delete it !</button>
							              </div>
							            </form>
							          </div>
							        </div>
							      </div>
							      <!-- Modal Delete-->
									</td>
				        </tr>
		        <?php
		          	$no++;
		          }
		        ?>
					</tbody>
	      </table>
				<?php echo $paging; ?>
			</div>
		</div>

		<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	</body>
</html>
