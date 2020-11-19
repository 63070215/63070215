<?php
	$conn = mysqli_init();
	mysqli_real_connect($conn, 'labbatabase.mysql.database.azure.com', 'jirapun@labbatabase', 'eB8oytxbfd', 'ITFLab', 3306);
	if(mysqli_connect_errno($conn)) {
		die('Failed to connect to MySQL: '.mysqli_connect_error());
	}
	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$link = $_POST['link'];
	$sql = "INSERT INTO guestbook (Name, Comment, Link) VALUES ('$name', '$comment', '$link')";
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD | 13th ITF LAB</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style type="text/css">
		.card {
			border-top: solid 5px #ffc107;
		}
	</style>
</head>
<body class="bg-light py-5">
	<div class="container text-dark">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<h2 align="center">
						<?php
							if(mysqli_query($conn, $sql)) {
								echo "ADD COMPLETED";
							}
							else {
								echo "FAILED TO ADD";
							}
						?>
						</h2>
						<p align="center" class="mt-4 mb-0"><a href="index.php" class="btn btn-link">BACK</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
