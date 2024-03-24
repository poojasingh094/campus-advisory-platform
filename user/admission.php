<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admission Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #d3d3d3;
    }

    .content-wrapper {
      padding: 35px;
    }
.text-center{
  font-family: system-ui;
}
    input[type="checkbox"] {
      border-radius: 50%;
      width: 1.2em;
      height: 1.3em;
      border: 2px solid #aaa;
      cursor: pointer;
    }

    table {
      width: 100%;
    }

    table th,
    table td {
      padding: 10px;
    }
  </style>
</head>

<body>
  <div class="content-wrapper">
    <form action="code.php" method="POST" enctype="multipart/form-data">
      <div class="container">
        <h1 class="text-center">Admission Form</h1>
        <p class="text-center">Please fill in this form to apply for admission.</p>
        <hr>
        <?php
        if (isset($_SESSION['status'])) {
          echo "<h4>" . $_SESSION['status'] . "</h4>";
          unset($_SESSION['status']);
        }
        ?>
        <div class="row">
          <div class="col-md-6">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control mb-3" required>

            <label for="fname">Father's Name:</label>
            <input type="text" id="fname" name="fname" class="form-control mb-3" required>

            <label for="mname">Mother's Name:</label>
            <input type="text" id="mname" name="mname" class="form-control mb-3" required>

            <label for="nation">Nationality:</label>
            <input type="text" id="nation" name="nation" class="form-control mb-3" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control mb-3" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" class="form-control mb-3" required>
            
            <label>Category:</label>
            <input list="cat" placeholder="Select Category" name="cat" class="form-control mb-3" required>
            <datalist id="cat">
              <option value="General">
              <option value="OBC">
              <option value="SC/ST">
            </datalist>
          </div>
          <div class="col-md-6">

           
          <label>Courses:</label>
            <input list="course" placeholder="Select Course" name="course" class="form-control mb-3" required>
            <datalist id="course">
              <option value="Btech">
              <option value="Mtech">
              <option value="MCA">
            </datalist>

            <label style="margin-top: 10px;">Specialization:</label>
            <input list="pro" placeholder="Select Specialization" name="pro" class="form-control mb-3" required>
           


            <label for="gender">Gender:</label><br>
            <div>
              <label class="mr-3">
                <input type="radio" name="gender" value="male">
                Male
              </label>
              <label class="mr-3">
                <input type="radio" name="gender" value="female">
                Female
              </label>
              <label>
                <input type="radio" name="gender" value="other">
                Other
              </label>
            </div>
            <br>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" class="form-control mb-3" required>
            <label for="address">Correspondence Address:</label>
            <textarea id="address" name="address" class="form-control mb-3" required rows="4"></textarea><br><br>

          </div>
        </div>

        <!-- Upload Documents -->
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>Transfer Certificate:</label>
              <input type="file" id="documents" name="file" required class="form-control-file mb-3">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>10th Marksheet:</label>
              <input type="file" id="documents" name="doc" required class="form-control-file mb-3">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>12th Marksheet:</label>
              <input type="file" id="documents" name="docu" required class="form-control-file mb-3">
            </div>
          </div>
        </div>

        <!-- Other Fields -->
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Level</th>
                <th>Board/University</th>
                <th>Year</th>
                <th>Percentage</th>
                <th>Stream</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><h6>10th (Secondary):</h6></td>
                <td><input type="text" name="degree" placeholder="Board/University" class="form-control"></td>
                <td><input type="text" name="year" placeholder="Year" class="form-control"></td>
                <td><input type="text" name="percentage" placeholder="Percentage" class="form-control"></td>
                <td><input type="text" name="stream" placeholder="Stream" class="form-control"></td>
              </tr>
              <tr>
                <td><h6>12th (Senior Secondary):</h6></td>
                <td><input type="text" name="degre" placeholder="Board/University" class="form-control"></td>
                <td><input type="text" name="yea" placeholder="Year" class="form-control"></td>
                <td><input type="text" name="percentag" placeholder="Percentage" class="form-control"></td>
                <td><input type="text" name="strea" placeholder="Stream" class="form-control"></td>
              </tr>
            </tbody>
          </table>
        <hr>
        <div class="form-group">
          <p> <input type="checkbox" id="checkbox" name="checkbox" required>&nbsp; &nbsp; I hereby state that facts
            mentioned above are true to the best of my knowledge and belief.</p>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="addUser" onclick="openPopup()">Submit</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>