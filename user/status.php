<?php
include('config/dbcon.php');
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');

$studentName = "SMI";
$column_value = "'Selected', 'Rejected'";
$query = "SELECT * FROM apply_form WHERE name = '$studentName' AND selection IN ($column_value)";
$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $selection = $row['selection'];
} else {
    $selection = 'Pending';
}
?>
<style>
.container-fluid {
    display: inline-block;
    width: 80%;
    padding: 10px 30px;
    background: #fff;
    color: #787878;
    margin: 0 5px;
    margin-top: 20px;
    border-bottom: 4px solid red;
}
</style>
</head>
<body>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <h3>Student Selection: <?php echo $selection; ?></h3>
            </div>
        </section>
    </div>
</body>
