<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Data Pisuhan</title>
	<!--Load file bootstrap.css-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<h1>Data <strong>Pisuhan</strong></h1>

		<table class="table table-striped">
			<thead>
				<tr>
					<th>Pisuhan</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<!--Fetch data dari database-->
				<?php foreach ($data->result() as $row) :?>
				<tr>
					<td><?php echo $row->pisuhan; ?></td>
					<td><?php echo $row->keterangan; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<div class="row">
			<div class="col">
				<!--Tampilkan pagination-->
				<?php echo $pagination; ?>
			</div>
		</div>


	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>