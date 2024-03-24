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
                        <li class="breadcrumb-item active">Edit-Registered Students</li>
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
                            <h3 class="card-title">Edit-Registered Students</h3>
                            <a href="registered.php" class="btn btn-danger float-right">BACK</a>
                        </div>
                        <div class="card-body">
                            <div class="row"></div>
                            <div class="col-md-6">
                                <form action="code.php" method="POST">
                                    <div class="modal-body">

                                        <?php
                                        if (isset($_GET['user_id'])) {
                                            $user_id = $_GET['user_id'];
                                            $query = "SELECT * FROM studentlist WHERE id='$user_id' LIMIT 1";
                                            $query_run = mysqli_query($con, $query);

                                            if (mysqli_num_rows($query_run) > 0) {
                                                foreach ($query_run as $row) {
                                                    ?>
                                                    <input type="hidden" name="user_id" value="<?php echo $row['id'] ?>">
                                                    <div class="form-group">
                                                        <label for="">Student Name </label>
                                                        <input type="text" name="studentname" value="<?php echo $row['studentname'] ?>"
                                                            class="form-control" placeholder="Student Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Email Id</label>
                                                        <input type="email" name="email" value="<?php echo $row['email'] ?>"
                                                            class="form-control" placeholder="Email Id">
                                                    </div>
                                            
                                                    
                                                    <div class="form-group">
                                                        <label for="">Contact No.</label>
                                                        <input type="text" name="contact" value="<?php echo $row['contact'] ?>"
                                                            class="form-control" placeholder="Contact No.">
                                                    </div>
                                                    <div class="form-group">
    <label for="status">Status</label>
    <select id="status" name="status" class="form-control">
        <option value="applied">Applied</option>
        <option value="not_applied">Not Applied</option>
    </select>
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
                                        <button type="submit" name="updatestudent" class="btn btn-info">Update</button>
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
