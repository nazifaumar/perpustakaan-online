
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login </title>
    <!-- Icon APP -->
    <link href="assets/img/book-bg.png" rel="icon">
    <!-- Select 2 -->
    <link rel="stylesheet" href="https://data.perpusnas.go.id/assets/theme/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="https://data.perpusnas.go.id/assets/theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://data.perpusnas.go.id/assets/theme/plugins/fontawesome-free/css/all.min.css">
    <!-- Boostrap 5 -->
    <link href="https://data.perpusnas.go.id/assets/css/bootstrap5.css" rel="stylesheet">
    <script src="https://data.perpusnas.go.id/assets/js/bootstrap5.js"></script>
    <!-- App Style -->
    <link rel="stylesheet" href="https://data.perpusnas.go.id/assets/css/app.css">
    <!-- Custom Override -->
    <link rel="stylesheet" href="https://data.perpusnas.go.id/assets/css/override_selec2.css">
    <!-- jQuery -->
    <script src="https://data.perpusnas.go.id/assets/theme/plugins/jquery/jquery.min.js"></script>
    <!-- jquery-validation -->
    <script src="https://data.perpusnas.go.id/assets/theme/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="https://data.perpusnas.go.id/assets/theme/plugins/jquery-validation/additional-methods.min.js"></script>
</head>

<body class="container-fluid h-full m-0 p-0">

    <!-- Content -->
    <div class="h-full d-flex justify-content-center">
    <form id="form_login" class="rounded-xl border-gray min-w-sm p-4 my-auto" action="{{route('add')}}" method="POST"> 
		<div class="main-body" style="width: 70%; padding: 1rem;">
	</div>
	<div class="container">
	  <h1>Formulir Upload Buku</h1>
	  <br>
	  <form action="{{route('add')}}" method="post" enctype="multipart/form-data">
		 @csrf 
		<div class="row">
		  <div class="column">
			<label for="judul">Judul Buku</label>
			<input type="text" name="judul" placeholder="Masukkan Nama Bank">

		  </div>
		  <div class="column">
			<label for="penulis">Penulis</label>
			<input type="text"  name="penulis" placeholder="Masukkan Nama Rekening">
		  </div>
		</div>
		<div class="row">
		  <div class="column">
			<label for="penerbit">Penerbit</label>
			<input type="text"  name="penerbit" placeholder="Masukkan Nomor Telephone">
		  </div>
		  <div class="column">
			<label for="isbn">No. ISBN</label>
			<input type="number"  name="isbn" placeholder="Masukkan Nominal">
		  </div>
		</div>
		<div class="row">
		  <div class="column">
			<label for="sinopsis">Sinopsis</label>
			<input type="text"  name="sinopsis" placeholder="Masukkan Nomor Telephone">
		  </div>
		  <div class="column">
			<label for="kategori">Kategori Buku</label>
			<input type="text"  name="kategori" placeholder="Masukkan Nominal">
		  </div>
		</div>
		<div class="row">
		  <div class="column" style="">
			<label for="issue">Sampul Buku</label>
			<input name="image" id="image" type="file" class="file-upload-field" style="color:#f6fbff;">
		  </div>
		</div>
		<button type="submit" style="cursor: pointer;">Submit</button>
	  </form>
</div>
</section>

    <script src="https://data.perpusnas.go.id/assets/theme/plugins/select2/js/select2.full.min.js"></script>

    </body>
</html>	