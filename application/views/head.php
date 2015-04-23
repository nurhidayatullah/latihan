<html>
	<head>
		<link href="<?php echo theme_url();?>css/bootstrap.css" rel="stylesheet">
		<title>Latihan CI</title>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">Young Moslem</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo base_url();?>welcome/menu_1">Home <span class="sr-only">(current)</span></a></li>
				<li><a href="<?php echo base_url();?>welcome/menu_2">Profil</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Kategori <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="#">Java</a></li>
					<li><a href="#">Php</a></li>
				  </ul>
				</li>
			  </ul>
			  <form class="navbar-form navbar-right" role="search">
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			  </form>
			</div>
		  </div>
		</nav>
