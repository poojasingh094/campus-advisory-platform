<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li style="margin-top: 8px;">
            <!-- <button type="button" style="margin-top: 8px; border-radius: 10px;"> -->
            <?php
            if(isset($_SESSION['auth']))
            {
              echo $_SESSION['auth_user']['user_name'];
            }
            else{
              echo "Not Logged in";
            }
            ?>
            <!-- </button> -->
</li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
            <a href="http://localhost/myproject/Ams/admin/login.php" class="nav-link">
            <p>Log Out &nbsp<i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i></p>   
            </a>
          </li>
          
    </ul>
  </nav>
  <!-- /.navbar -->