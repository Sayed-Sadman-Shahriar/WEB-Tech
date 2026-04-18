<?php
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];

	$birthDate = new DateTime($dob);
	$today = new DateTime();
	$age = $today->diff($birthDate);
?>

<html>
	<head>
		<title>Eligibility</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>

	<div class="card">
		<h2>Eligibility Check</h2>

		<div class="box">
			<p style="color:green;">You are eligible for registration</p>

			<p>Name: <?php echo $name; ?></p>
			<p>Age: <?php echo $age->y . "Y " . $age->m . "M " . $age->d . "D"; ?></p>
		</div>

		<form action="register.php" method="POST">
			<input type="hidden" name="name" value="<?php echo $name; ?>">
			<input type="hidden" name="gender" value="<?php echo $gender; ?>">
			<button type="submit">Register</button>
		</form>

		<a href="start.html"><button>Go Back</button></a>

	</div>

	</body>
</html>