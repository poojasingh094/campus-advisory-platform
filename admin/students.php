<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php');
?>
<style>
    .table th, .table td {
    white-space: nowrap;
}
</style>

<div class="content-wrapper">

<!-- Modal -->
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="coex.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
            <label for="">Student Name </label>
            <input type="text" name="studentname" class="form-control" placeholder="Student Name">
        </div>
        <div class="form-group">
            <label for="">Email Id</label>
            <input type="email" name="email"class="form-control" placeholder="Email Id">
        </div>
        <div class="form-group">
    <label for="status">Status</label>
    <select id="status" name="status" class="form-control">
        <option value="applied">Applied</option>
        <option value="not_applied">Not Applied</option>
    </select>
</div>

        <div class="form-group">
            <label for="">Contact No.</label>
            <input type="text" name="contact"class="form-control" placeholder="Contact No.">
        </div>
        <div class="form-group">
            <label for=""> Password</label>
            <input type="password" name="password"class="form-control" placeholder="Password">
        </div>             
        <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" name="confirmpassword"class="form-control" placeholder="Confirm Password">
        </div>             
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="addStudent"class="btn btn-primary">Save</button>
      </div>
</form>
    </div>
  </div>
</div>

<!-- Delete User -->
<!-- Modal -->
<div class="modal fade" id="DeletModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Remove Student</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="code.php" method="POST">
      <div class="modal-body">
        <input type="hidden" name="delete_id" class="delete_user_id">
        <p>
          Are you sure, you want to remove this student?
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="DeleteStudent"class="btn btn-primary">Yes, Delete.</button>
      </div>
</form>
    </div>
  </div>
</div>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Registered Students</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
</div>

<section class="content">
<div class="container">

    <div class="row">
        <div class="col-md-12">
    <div class="card">
            <div class="card-header">
                <h3 class="card-title">Registered Students</h3>
                <a href="#" data-toggle="modal" data-target="#AddUserModal" class="btn btn-primary float-right">Add Student</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover" >
                <thead>
                <tr>
                <th> S.No.</th>
                    <th>Student Name</th>
                    <th>Email Id</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $query= "SELECT * FROM studentlist";
                    $query_run = mysqli_query($con, $query);
                    if(mysqli_num_rows($query_run)> 0){
                     foreach($query_run as $row){
                     
                      ?>
                      <tr>
                  <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['studentname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                   <td>
                    <a href="edit.php?user_id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm">Edit</a>
                    <button type="button" value="<?php echo $row['id']; ?>" class="btn btn-danger btn-sm deletebtn">Delete</button></td>
                  </tr>
                      <?php
                     }
                    }
                    else{
                     ?>
                     <tr>
                      <td>No record Found</td>
                    </tr>
                    <?php
                    }
                    ?>
                 
</tbody>
                </table>
                </div>
            </div>
        
            </div>
            </div>
    </div>
</div>
</section>
</div>

<?php include('includes/script.php'); ?>
<script>
  $(document).ready(function () {
    $('.deletebtn').click(function (e){
      e.preventDefault();
      var user_id = $(this).val();
      // console.log(user_id);
$('.delete_user_id').val(user_id);
$('#DeletModal').modal('show');

    });
  });
  </script>
<?php include('includes/footer.php'); ?>

