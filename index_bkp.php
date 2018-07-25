<head>
</head>
<body>
		<?php
		$servername = "mysql.titanide.kinghost.net";
		$username = "titanide";
		$password = "Dreamcast2017";
		$dbname = "titanide";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO Score (name, score, country)
		VALUES ('Luiz', 10 , 'Brazil')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
		?>
</body>
</html>
