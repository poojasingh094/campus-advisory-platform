<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
           
        }
.card{
    padding: 25px 30px;
}
#website-url{
    width: 32vw;
    height: 5vh;
    border: 1px solid lightgrey
}
.textline{
    margin-top: 15px;
    /* font-weight: bold; */
    font-size: 16px;
    }      
.ab {
            background-color: #ACE1AF;
            font-size: 25px;
            padding: 13px;
        }

        .content-wrapper {
            padding: 35px;
            font-family: Arial, Helvetica, sans-serif;
           
        }

        .form-group {
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: bold;
        }

        .checkbox-label {
            margin-top: 10px;
            display: flex;
            align-items: center;
            padding: 15px 25px;
        }

        .checkbox-label input[type="checkbox"] {
            margin-right: 10px;
            margin-bottom: 10px;
            transform: scale(1.5);
           
        }

        .submit-btn {
            margin-top: 20px;
            padding: 2px 15px;
        }
    </style>
</head>

<body>
    <div class="content-wrapper">
        <form action="codeform.php" method="POST" enctype="multipart/form-data">
            <div class="container">
              
                    <h1 class="text-center ab">Online Registration</h1>
                    <p class="text-center">Please fill in this form to apply for student admission request.</p>
                    <hr>
                    <?php
                    if (isset($_SESSION['status'])) {
                        echo "<h4>" . $_SESSION['status'] . "</h4>";
                        unset($_SESSION['status']);
                    }
                    ?>
                      <div class="card">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label class="form-label" for="code">College code:</label>
                                <input type="text" id="code" name="collegecode" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="cname">Name of the College/Institution:</label>
                                <input type="text" id="cname" name="collegename" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="location">Location:</label>
                                <input type="text" id="location" name="location" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="nation">Accreditation type:</label>
                                <input type="text" id="nation" name="accred" class="form-control" required>
                            </div>
                            
                        
                        </div>

                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label class="form-label" for="phone">Placement Record:</label>
                                <input type="tel" id="phone" name="placement" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="avg-package">Average Package:</label>
                                <input type="tel" id="avg-package" name="avpackage" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="highest-package">Highest Package:</label>
                                <input type="tel" id="highest-package"name="hpackage" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="website-url">URL to my website:</label>
                                <input type="url" id="website-url" name="weburl" placeholder="Enter URL">
                            </div>
                        </div>
                        <div class="form-group">
    <div class="align-items-center">
        <div class="checkbox-label mr-3">
            <input type="checkbox" id="checkbox" name="checkbox" required>
            <label for="checkbox">I hereby state that facts mentioned above are true to the best of my knowledge and belief.</label>
        </div>
        
        <div class="submit-btn">
            <button type="submit" class="btn btn-primary" name="addCollege">Submit</button>
        </div>
        <h3 class="textline">"After filling out this form, please remember to add the course. You can navigate to the 'Add Course' section in the sidebar to manage and update your course, specialization, and fee structure."</h3>
    </div>
</div>


                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
