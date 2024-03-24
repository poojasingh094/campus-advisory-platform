<?php
include('config/dbcon.php');
error_reporting(0);
$data = mysqli_query($conn, $query);
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
            
        </tbody>
    </table>
<?php
} else {
    echo "No records found";
}
?>

