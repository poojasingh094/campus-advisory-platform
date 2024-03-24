<!-- Main Sidebar Container -->
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <style>
    .log {
        color: white;
        font-weight: 500;
        font-size: 25px;
        transform: scale(1.1);
        display: inline-block;
    }

    .red {
        height: 20px;
        width: 16px;
        background-color: lightgreen;
        display: inline-block;
        vertical-align: middle;
    }
    </style>
                <div class="log">
                    <h1 class="m-4 log">ScholarRank<div class="red"></div>
                    </h1>
                </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="collegerecords.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Registered Colleges
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Admission Application
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Application</p>
                </a>
              </li>
              <li class="nav-item">
                <a href='./select.php' class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reviewed Application </p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href='./reject.php' class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rejected Application</p>
                </a>
              </li> -->
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Courses
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./addcourse.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Course</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="manageCourse.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Course</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              
              <i class="nav-icon fa-regular fa-credit-card"></i>
              <p>
                Fee Details
              </p>
            </a> -->
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Notice
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Adminn/pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-regular fa-user"></i>
              <p>
                Admin Profile
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="update.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Update Password
              </p>
            </a>
</li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>