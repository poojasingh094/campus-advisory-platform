<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php');
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit-Registered College</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div><!-- /.content-header -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit-Registered College</h3>
                            <a href="collegerecords.php" class="btn btn-danger float-right">BACK</a>
                        </div>
                        <div class="card-body">
                            <div class="row"></div>
                            <div class="col-md-6">
                                <form action="code.php" method="POST">
                                    <div class="modal-body">

                                        <?php
                                        if (isset($_GET['user_id'])) {
                                            $user_id = $_GET['user_id'];
                                            $query = "SELECT * FROM regform WHERE collegecode='$user_id' LIMIT 1";
                                            $query_run = mysqli_query($con, $query);

                                            if (mysqli_num_rows($query_run) > 0) {
                                                foreach ($query_run as $row) {
                                                    ?>
                                                    <input type="hidden" name="user_id" value="<?php echo $row['collegecode'] ?>">
                                                    <div class="form-group">
                                                        <label for="">College Code </label>
                                                        <input type="text" name="collegecode" value="<?php echo $row['collegecode'] ?>"
                                                            class="form-control" placeholder="College Code">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">College Name </label>
                                                        <input type="text" name="collegename" value="<?php echo $row['collegename'] ?>"
                                                            class="form-control" placeholder="College Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Location</label>
                                                        <input type="text" name="location" value="<?php echo $row['location'] ?>"
                                                            class="form-control" placeholder="Location">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Accreditation </label>
                                                        <input type="text" name="accred" value="<?php echo $row['accred'] ?>"
                                                            class="form-control" placeholder="Accreditation">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Placement </label>
                                                        <input type="text" name="placement" value="<?php echo $row['placement'] ?>"
                                                            class="form-control" placeholder="Placement">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Average Package</label>
                                                        <input type="text" name="avpackage" value="<?php echo $row['avpackage'] ?>"
                                                            class="form-control" placeholder="Average Package">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Highest Package</label>
                                                        <input type="text" name="hpackage" value="<?php echo $row['hpackage'] ?>"
                                                            class="form-control" placeholder="Highest Package">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Web Url</label>
                                                        <input type="text" name="weburl" value="<?php echo $row['weburl'] ?>"
                                                            class="form-control" placeholder="College Id">
                                                    </div>
                
                                                    <?php
                                                }
                                            } else {
                                                echo "<h4>No Record Found!</h4>";
                                            }
                                        }
                                        ?>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="updateCollege" class="btn btn-info">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<?php include('includes/script.php'); ?>
<?php include('includes/footer.php'); ?>
