<html>
	<head>
		<title>Latihan CI </title>
		<link href="<?php echo $this->config->item('theme_url');?>css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
		<p>ini adalah latihan pertama,halaman ke 2</p>
		<a href="<?php echo base_url('latihan/');?>" class="btn btn-info">kembali ke menu 1 <span class="glyphicon glyphicon-off"></span></a>
		<div class="col-lg-6 col-md-12 col-xs-12">
		<div class="panel panel-danger">
			<div class="panel-heading">
			Data siswa
			</div>
		  <div class="panel-body">
			<table class="table table-hover">
				<thead>
					<th>NIM</th>
					<th>Nama</th>
					<th>Alamat</th>
				</thead>
				<tbody>
					<tr>
						<td>11043001</td>
						<td>Okky</td>
						<td>Gresik</td>
					</tr>
					<tr>
						<td>11043001</td>
						<td>Okky</td>
						<td>Gresik</td>
					</tr>
					<tr>
						<td>11043001</td>
						<td>Okky</td>
						<td>Gresik</td>
					</tr>
					<tr>
						<td>11043001</td>
						<td>Okky</td>
						<td>Gresik</td>
					</tr>
				</tbody>
			</table>
		  </div>
		  <div class="panel-footer">Panel footer</div>
		</div>
		</div>
		<script type="text/javascript" src="<?php echo $this->config->item('theme_url');?>js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="<?php echo $this->config->item('theme_url');?>js/bootstrap.js"></script>
	</body>
</html>