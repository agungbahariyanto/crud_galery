<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
      integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
      crossorigin="anonymous"
    />
</head>
<body>
    <!--	<img src="<?php echo base_url('upload/'.$upload_data['file_name']); ?>"> -->
	<!-- <?=anchor('upload/'.$upload_data['file_name'], 'View My Image!')?> -->
	<td>
 	<?php foreach ($hasil as $val) {
 	?>
 		<img src="<?php echo base_url('upload/'.$val->Gambar); ?>">
 	<?php
	}
 	?>
 	</td>
</body>
</html>
