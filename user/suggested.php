<?php
include('includes/header.php');
include('config/dbcon.php');
?>

<div class="selected-data">
    <h2>Recommended College based on your profile</h2>
    <table id="selectedRowTable" class="table">
        <tr>
            <th>College Code</th>
            <th>College Name</th>
            <th>Location</th>
            <th>Accreditation</th>
            <th>Placement</th>
            <th>Average Package</th>
            <th>Highest Package</th>
            <th>College Official Website</th>
            <th>Action</th> <!-- Add Action column header -->
            <!-- Add any other columns here -->
        </tr>
        <?php
        // Database connection
        include('config/dbcon.php');

        // If row data is passed through URL parameter
        if (isset($_GET['data'])) {
            // Decode the URL parameter
            $decodedData = urldecode($_GET['data']);
            // Convert the JSON string to array
            $rowData = json_decode($decodedData, true);

            // Insert the row data into the database
            $sql = "INSERT INTO suggested_data (collegecode, collegename, location, accred, placement, avpackage, hpackage, weburl) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssssss", $rowData['College Code'], $rowData['College Name'], $rowData['Location'], $rowData['Accreditation'], $rowData['Placement'], $rowData['Average Package'], $rowData['Highest Package'], $rowData['College Official Website']);
            $stmt->execute();
            $stmt->close();
        }

        // Retrieve data from the database
        $sql = "SELECT * FROM suggested_data";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data in table format
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                // Output data for each column
                foreach ($row as $key => $value) {
                    echo "<td>" . $value . "</td>";
                }
                // Add Apply button in the Action column with query parameters
                echo "<td><a href='../college/select.php?college_code=" . $row['collegecode'] . "&college_name=" . urlencode($row['collegename']) . "' class='btn btn-primary'>Apply</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>No row data available</td></tr>";
        }

        // Close database connection
        $conn->close();
        ?>
    </table>
</div>

<?php
include('includes/footer.php');
?>
