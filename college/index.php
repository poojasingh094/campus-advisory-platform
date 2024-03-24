<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
?>

<style>
  .container-fluid {
    display: inline-block;
    width: 100%; 
    padding: 10px 30px;
    background: #fff;
    color: #787878;
  }

  .content-wrapper {
    display: flex;
    justify-content: center;
    align-items: flex-start; 
    height: 110vh;
    overflow-x: hidden; 
  }

  .card-wrapper {
    display: flex;
    flex-wrap: wrap; 
    margin-top: 35px;
    justify-content: center;
    gap: 20px;
    animation: moveCards 3s infinite alternate;
  }

  .card {
    width: 48%; /* Adjusted width to fit two cards in one row */
  }

  @keyframes moveCards {
    0% {
      transform: translateX(0);
    }

    50% {
      transform: translateX(20px);
    }

    100% {
      transform: translateX(0);
    }
  }

  h5 {
    padding-top: 5px; 
    margin-top: 0; 
    font-weight: bold;
    border-bottom: 3px solid red; 
  }

  .card-body ul {
    margin-top: 33px;
  }
</style>

<div class="content-wrapper">
  <div class="container-xxl">
    <h5>You are not yet registered with ScholarRank. Complete the registration form to begin accessing our services and optimizing your college admissions.</h5>

    <div class="card-wrapper">

      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Key Features</h3>
          <ul>
            <li>Streamlined college registration process</li>
            <li>Student selection assistance</li>
            <li>Data-driven admission recommendations</li>
            <li>Personalized application management</li>
            <li>Real-time analytics dashboard</li>
          </ul>
        </div>
      </div>

      <!-- Benefits for Colleges Section -->
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Benefits for Colleges</h3>
          <ul>
            <li>Access to a large pool of eligible students</li>
            <li>Increased visibility and outreach to potential applicants</li>
            <li>Streamlined admissions process for faster decision-making</li>
            <li>Customized data analysis to optimize admissions strategy</li>
            <li>Over 5000+ colleges benefited and increased admission requests</li>
          </ul>
        </div>
      </div>

      <!-- Benefits for Students Section -->
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Benefits for Students</h3>
          <ul>
            <li>Access to a wide range of colleges and universities</li>
            <li>Personalized recommendations based on academic profile and preferences</li>
            <li>Increased chances of admission to top colleges</li>
            <li>Transparent application process with real-time updates</li>
            <li>Assistance in finding deserving colleges</li>
          </ul>
        </div>
      </div>

      <!-- FAQ Section -->
      <div class="card">
        <div class="card-body">
         
          <h4 class="card-subtitle mb-2 text-muted">Frequently Asked Questions</h4>
          <ul>
            <li>
              <strong>How does ScholarRank help colleges?</strong><br>
              ScholarRank assists colleges in efficiently managing admissions, accessing a larger applicant pool, and making data-driven decisions.
            </li>
            <li>
              <strong>How does ScholarRank benefit students?</strong><br>
              Students benefit from personalized college recommendations, transparent application processes, and increased chances of admission to their desired colleges.
            </li>
            <li>
              <strong>How many colleges have benefited from ScholarRank?</strong><br>
              Over 5000+ colleges have experienced increased admission requests and streamlined admissions processes through our platform.
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/script.php'); ?>
<?php include('includes/footer.php'); ?>
