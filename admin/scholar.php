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
.headd{
  font-weight: bold;
  color: gray;
}
.selected {
    background-color: green !important; /* Change to green when selected */
    color: white !important;
}
</style>

<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Scholarship</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Scholarship Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title headd">Scholarship Scheme for B.tech Students (Based on National Level Entrance Exam and Intermediate exam)- Maximum 10% of total intake seats in each course shall be offered under the scheme.</h3>
            <!-- <a href="#" data-toggle="modal" data-target="#AddUserModal" class="btn btn-primary float-right">Add College</a> -->
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>College Code</th>
                    <th>Criteria</th>
                    <th>Scholarship Amount(in %age)</th>
                    <th>Fee After Scholarship(per semester)</th>
                    <th>Action</th> <!-- New column for the Select button -->
                  </tr>
                </thead>
                <tbody>
                  <?php
                   
                    $filterApplied = false;
                    // ?filter=amount_greater_than_50
                    if (isset($_GET['filter']) && $_GET['filter'] == 'amount_greater_than_30') {
                        $query = "SELECT collegecode, criteria, amount, feeremain FROM scholarlist WHERE amount > 30";
                        $filterApplied = true;
                    } else {
                        $query = "SELECT collegecode, criteria, amount, feeremain FROM scholarlist";
                    }
                    
                    $query_run = mysqli_query($con, $query);
                    if(mysqli_num_rows($query_run) > 0){
                      while($row = mysqli_fetch_assoc($query_run)) {
                        echo "<tr>";
                        echo "<td>" . $row['collegecode'] . "</td>";
                        echo "<td>" . $row['criteria'] . "</td>";
                        echo "<td>" . $row['amount'] . "</td>";
                        echo "<td>" . $row['feeremain'] . "</td>";
                        echo "<td><a href='collegerecords.php?collegecode=" . $row['collegecode'] . "' class='btn btn-success select-btn'>Select</a></td>"; // Add link to another page
                        echo "</tr>";
                      }
                    } else {
                      echo "<tr><td colspan='5'>No record Found</td></tr>";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div><!-- /.card-body -->
        </div>
      </div><!-- /.col-md-12 -->
    </div>
  </div><!-- /.container -->
</section>
</div><!-- /.content-wrapper -->

<?php include('includes/script.php'); ?>
<?php include('includes/footer.php'); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectBtns = document.querySelectorAll('.select-btn');
        selectBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                btn.classList.add('selected');
                btn.textContent = 'Selected';
            });
        });
    });
</script>
