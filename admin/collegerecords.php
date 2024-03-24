<?php
include('config/dbcon.php');
include('includes/header.php');

error_reporting(0);
$query = "SELECT * FROM regform";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);

if ($total != 0) {
    ?>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            padding: 5px;
            text-align: center;
            font-size: 24px;
        }

        td {
            text-align: center;
            padding: 5px;
            font-size: 20px;
        }

        .small {
            zoom: 75%;
        }

        tr:hover {
            background-color: #D6EEEE;
        }

        .selected-row {
            background-color: #ffcccb;
        }

        .selected-data {
            margin-top: 20px;
        }
    </style>
    <h2 style="text-align: center;">Displaying All Records</h2>
    <table class="small" border="1" align="center" cellspacing="7">
        <tr style="background-color:#7F96FF;color:#ffffff;">
            <th style="height:65px">College Code</th>
            <th>College Name</th>
            <th>Location</th>
            <th>Accreditation</th>
            <th>Placement</th>
            <th>Average Package </th>
            <th>Highest Package</th>
            <th>College Official Website</th>
            <th>Action</th>
        </tr>
        <?php
        while ($result = mysqli_fetch_assoc($data)) {
            $collegeCode = $result['collegecode'];

            $isSelected = isset($_GET['collegecode']) && $_GET['collegecode'] == $collegeCode;
            $rowClass = $isSelected ? 'selected-row' : '';
            echo "<tr class='$rowClass'>
                <td>" . $collegeCode . "</td>
                <td>" . $result['collegename'] . "</td>
                <td>" . $result['location'] . "</td>
                <td>" . $result['accred'] . "</td>
                <td>" . $result['placement'] . "</td>
                <td>" . $result['avpackage'] . "</td>
                <td>" . $result['hpackage'] . "</td>
                <td>" . $result['weburl'] . "</td>
                <td>
                    <a href='edit.php?user_id=" . $collegeCode . "' class='btn btn-info btn-sm'>Edit</a>
                    <button class='btn btn-danger btn-sm select-btn' onclick='selectRow(this)'>Select</button>
                </td>
            </tr>";
        }
        echo "</table>";
} else {
    echo "No records found";
} 
?>
<script>
    function selectRow(button) {
        var row = button.parentNode.parentNode;
        var rowData = {};
        var cells = row.cells;
        for (var i = 0; i < cells.length - 1; i++) { // excluding last cell with action buttons
            var columnName = row.parentNode.rows[0].cells[i].innerText; // Get column name from the header row
            var cellValue = cells[i].innerText;
            rowData[columnName] = cellValue;
        }
        var encodedData = encodeURIComponent(JSON.stringify(rowData));
        var otherPageUrl = 'application.php?data=' + encodedData; // Redirect to application.php
        window.location.href = otherPageUrl;
    }
</script>
