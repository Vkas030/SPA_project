<?php
// Database connection settings
$servername = "localhost";  // Replace with your database server name
$username = "username";     // Replace with your database username
$password = "password";     // Replace with your database password
$database = "your_database"; // Replace with your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_name = $_POST["student_name"];
    $student_roll = $_POST["student_roll"];
    $student_email = $_POST["student_email"];

    // SQL query to insert student data into the database
    $sql = "INSERT INTO students (name, roll, email) VALUES (?, ?, ?)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error in SQL statement: " . $conn->error);
    }

    // Bind parameters and execute the statement
    $stmt->bind_param("sss", $student_name, $student_roll, $student_email);

    if ($stmt->execute()) {
        echo "Student data inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Student Data</title>
</head>
<body>
    <h1>Insert Student Data</h1>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="student_name">Name:</label>
        <input type="text" name="student_name" required><br>
        <label for="student_roll">Roll:</label>
        <input type="text" name="student_roll" required><br>
        <label for="student_email">Email:</label>
        <input type="email" name="student_email" required><br>
        <input type="submit" value="Submit">
    </form>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
