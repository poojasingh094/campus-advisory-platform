<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Your CSS Styles */
    </style>
</head>
<body>
    <div class="content-wrapper">
        <form action="codefill.php" method="POST" enctype="multipart/form-data">
            <div class="container">
                <h1 class="text-center ab">Scholarship Details</h1>
                <hr>
                <?php
                if (isset($_SESSION['status'])) {
                    echo "<h4>" . $_SESSION['status'] . "</h4>";
                    unset($_SESSION['status']);
                }
                ?>
                <div class="card">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="code">College Code:</label>
                                <input type="text" id="code" name="collegecode" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div id="criteria-container">
                                <!-- Dynamic Criteria and Scholarship Amount Fields will be appended here -->
                            </div>
                            <button type="button" class="btn btn-success" id="add-criteria">Add Criteria</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="align-items-center">
                            <div class="submit-btn">
                                <button type="submit" class="btn btn-primary" name="fillscholar">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('add-criteria').addEventListener('click', function() {
                var criteriaContainer = document.getElementById('criteria-container');
                var div = document.createElement('div');
                div.innerHTML = `
                    <div class="form-row mt-3">
                        <div class="col-md-6">
                            <label class="form-label">Criteria:</label>
                            <textarea name="criteria[]" class="form-control mb-1" required rows="1"></textarea>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Scholarship Amount(in %age):</label>
                            <input type="text" name="amount[]" class="form-control mb-1" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Fee After Scholarship(per semester):</label>
                            <input type="text" name="feeremain[]" class="form-control mb-1" required>
                        </div>
                    </div>`;
                criteriaContainer.appendChild(div);
            });
        });
    </script>
</body>
</html>
