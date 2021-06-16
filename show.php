<?php require_once "app/db.php"; ?>
<?php require_once "app/function.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	
	<?php 


		$id = $_GET['id'];
		$sql = "SELECT * FROM students WHERE id='$id' ";
		$data = $connection -> query($sql);

		$student_data = $data -> fetch_assoc();




	 ?>



	<div style="width: 450px;" class="wrap-table">
		<a class="btn btn-info btn-sm" href="all-student.php">Back</a>
		<div class="card shadow bg-warning">
			<div class="card-body">
				<img style="width: 250px; height: 250px; border: 7px solid white; border-radius: 50%;>" class="d-block mx-auto shadow" src="photos/<?php echo $student_data['photo']; ?>" alt="">
				<br>
				<table class="table">
					<tr style="background-color: #CFD5EA;">
						<td>Name</td>
						<td><?php echo $student_data['name']; ?></td>
					</tr>
					<tr style="background-color: #E9EBF5;">
						<td>E-mail </td>
						<td><?php echo $student_data['email']; ?></td>
					</tr>
					<tr style="background-color: #CFD5EA;">
						<td>Cell </td>
						<td><?php echo $student_data['cell']; ?></td>
					</tr>
					<tr style="background-color: #E9EBF5;">
						<td>Location</td>
						<td><?php echo $student_data['location']; ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>