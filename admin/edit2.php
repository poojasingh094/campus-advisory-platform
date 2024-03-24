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
                        <li class="breadcrumb-item active">Edit Courses</li>
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
                            <h3 class="card-title">Edit-Courses</h3>
                            <a href="managecourse.php" class="btn btn-danger float-right">BACK</a>
                        </div>
                        <div class="card-body">
                            <div class="row"></div>
                            <div class="col-md-6">
                                <form action="codex.php" method="POST">
                                    <div class="modal-body">

                                        <?php
                                        if (isset($_GET['user_id'])) {
                                            $user_id = $_GET['user_id'];
                                            $query = "SELECT * FROM course WHERE id='$user_id' LIMIT 1";
                                            $query_run = mysqli_query($con, $query);

                                            if (mysqli_num_rows($query_run) > 0) {
                                                foreach ($query_run as $row) {
                                                    ?>
                                                    <input type="hidden" name="user_id" value="<?php echo $row['id'] ?>">
                                                    <div class="form-group">
                                                        <label for="">College Name </label>
                                                        <input type="text" name="collegename" value="<?php echo $row['collegename'] ?>"
                                                            class="form-control" placeholder="College Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Course Offered</label>
                                                        <input type="text" name="courseoffered" value="<?php echo $row['courseoffered'] ?>"
                                                            class="form-control" placeholder="Course Offered">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Specialization Offered</label>
                                                        <textarea type="text" name="specoffered" value="<?php echo $row['specoffered'] ?>"
                                                            class="form-control" placeholder="Specialization Offered"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Fee Structure</label>
                                                        <input type="text" name="feestr" value="<?php echo $row['feestr'] ?>"
                                                            class="form-control" placeholder="Fee Structure">
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
                                        <button type="submit" name="updateCourse" class="btn btn-info">Update</button>
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
