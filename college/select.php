<?php
// Retrieve data from query parameters
$college_code = $_GET['college_code'] ?? '';
$college_name = $_GET['college_name'] ?? '';

// You can then use these variables as needed, for example:
echo "<h2>Application Details</h2>";
echo "<p>College Code: $college_code</p>";
echo "<p>College Name: $college_name</p>";

// Here you can include a form or other content to handle the application process
?>
