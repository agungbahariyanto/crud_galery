<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Gambar</title>

	<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
      integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
      crossorigin="anonymous"
    />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="<?php echo base_url('/tambah'); ?>" method='POST' enctype="multipart/form-data" id='tambah-gambar'>
					<input type="text" name="deskripsi">
					<input type="text" name="nama">
					<input type="file" name="foto" size="20">
					<input class="btn btn-primary" type="submit" value="Upload"/>
				</form><!-- 
				<textarea>jhashgasvjhvsadja</textarea>
				<img src=""> -->
				<div class="col-md-6">
					
				</div>

			</div>
		</div>
	</div>
</body>
</html>