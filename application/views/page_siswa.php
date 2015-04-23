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
							<h4>Data Siswa</h4><a href="<?php echo base_url();?>siswa/new_data" class="btn btn-success">Tambah Data</a>
						</div>
						<div class="panel-body">
							<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama</th>
									<th>Kelas</th>
									<th>Alamat</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php
							foreach($siswa as $value){
							?>
								<tr>
									<td><?php echo $value['id'];?></td>
									<td><?php echo $value['nama'];?></td>
									<td><?php echo $value['kelas'];?></td>
									<td><?php echo $value['alamat'];?></td>
									<td>
										<a href="<?php echo base_url('siswa/edit/'.$value['id']);?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span>Edit</a>&nbsp;
										<a href="<?php echo base_url('siswa/hapus/'.$value['id']);?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Hapus</a>
									</td>
								</tr>
							<?php
							}
							?>
							</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
$this->load->view('footer');
?>
		
		
		