<?php
include('config/dbcon.php');
error_reporting(0);

$filterCriteria = 60; 

$query = "SELECT * FROM apply_form WHERE `perc` >= $filterCriteria";
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
            padding: 7px;
            text-align: center;
        }

        td {
            padding: 5px;
            text-align: center;
        }

        .small {
            zoom: 75%;
        }

        tr {
            border-bottom: 10px;
        }

        tr:hover {
            background-color: #D6EEEE;
        }

        button {
            background-color: #7F96FF;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
        }

        button:hover {
            background-color: red;
        }
        a {
            color: #fff;
        }
        input#cat {
            background-color: #fff;
        }
    </style>

    <h2 align="center">Displaying All Student Records </h2>
    <table class="small" border="1" align="center" cellspacing="7">
        <thead>
            <tr style="background-color:#7F96FF;color:#ffffff;">
                <th style="height:65px">Name</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Nationality</th>
                <th>Category</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Address</th>
                <th>10th Marks</th>
                <th>12th Marks</th>
                <th>Applying For</th>
                <th>10th Marksheet</th>
                <th>12th Marksheet</th>  
                <th>JEE/Gate Marksheet</th>
                <th>Application Status</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<tr>";
                echo "<td>" . $result['name'] . "</td>";
                echo "<td>" . $result['fname'] . "</td>";
                echo "<td>" . $result['mname'] . "</td>";
                echo "<td>" . $result['nation'] . "</td>";
                echo "<td>" . $result['category'] . "</td>";
                echo "<td>" . $result['email'] . "</td>";
                echo "<td>" . $result['phone'] . "</td>";
                echo "<td>" . $result['gender'] . "</td>";
                echo "<td>" . $result['dob'] . "</td>";
                echo "<td>" . $result['addres'] . "</td>";
                echo "<td>" . $result['percent'] . "</td>";
                echo "<td>" . $result['perc'] . "</td>";
                echo "<td>" . $result['course'] . "</td>";
                echo "<td><button><a href='" . $result['pdf_url'] . "' download='" . $pdf_name . "'>Download PDF</a></button></td>";
                echo "<td><button><a href='" . $result['pd_url'] . "' download='" . $pdf_name . "'>Download PDF</a></button></td>";
                echo "<td><button><a href='" . $result['p_url'] . "' download='" . $pdf_name . "'>Download PDF</a></button></td>";
                echo "<td><button class='btn btn-danger btn-sm select-btn' onclick='selectRow(this)'>Select</button></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
<?php
} else {
    echo "No records found";
}
?>
<?php
// Decode the row data from the URL parameter
if (isset($_GET['data'])) {
    $decodedData = urldecode($_GET['data']);
    $rowData = json_decode($decodedData, true);
} else {
    $rowData = array(); // Default value if no data is passed
}
?>
<script>
    function selectRow() {
        var encodedData = encodeURIComponent(JSON.stringify(<?php echo json_encode($rowData); ?>));
        var otherPageUrl = '../user/suggested.php?data=' + encodedData; // Redirect to suggested.php
        window.location.href = otherPageUrl;
    }
</script>

