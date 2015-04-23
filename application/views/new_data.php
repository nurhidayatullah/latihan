<?php
$this->load->view('head');
?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<h3> Latihan CI </h3>
					<p> ini adalah tampilan 1 </p>
				</div>
				<div class="col-xs-12 col-md-12 col-lg-12"></br>
					<div class="panel panel-danger">
						<div class="panel-heading">
							<h4>Data Siswa</h4><a href="<?php echo base_url();?>siswa/" class="btn btn-success">Batal</a>
						</div>
						<div class="panel-body">
							<div class="col-lg-12">
								<form class="form-horizontal" name="new" method="post" action="<?php echo base_url();?>siswa/save/">
									<div class="form-group">
										<label for="nama">Nama
										<input type="text" class="form-control" name="nama" required/>
									</div>
									<div class="form-group">
										<label for="kelas">Kelas
										<input type="text" name="kelas" class="form-control" />
									</div>
									<div class="form-group">
										<label for="alamat">Alamat
										<input type="text" name="alamat" class="form-control" />
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Simpan</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
$this->load->view('footer');
?>
		
		
		