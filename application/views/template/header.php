<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?= $judul; ?></title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  	 <div class="container">
	  <a class="navbar-brand" href="#">PAGINATION</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav ml-5">
	      <a class="nav-item nav-link active" href="<?= base_url('home/index');  ?>">Home</a>
	      <a class="nav-item nav-link active" href="<?= base_url('peoples'); ?>">User</a>
	      </div>
	    </div>
	  </div>
	</nav>