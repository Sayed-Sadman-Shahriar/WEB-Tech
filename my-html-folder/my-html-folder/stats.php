<?php
	$male = 0;
	$female = 0;

	$file = fopen("data.txt", "r");

	while(!feof($file)) 
	{
		$line = trim(fgets($file));

		if ($line == "Male") $male++;
		if ($line == "Female") $female++;
	}

	fclose($file);

	$total = $male + $female;
?>

<html>
<head>
    <title>Stats</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="card">
    <h2>Registration Stats</h2>

    <div class="box">
        <p>Total: <?php echo $total; ?></p>
        <p>Male: <?php echo $male; ?></p>
        <p>Female: <?php echo $female; ?></p>
    </div>

    <a href="start.html">
        <button>Register Another</button>
    </a>
</div>

</body>
</html>