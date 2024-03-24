<?php
include('includes/header.php');
?>

<style>
    .flex-container p {
        margin-top: 4vh;
        font-size: 25px;
    }
 .flex-container {
        display: flex;
        text-align: center;
        flex-wrap: wrap;
        margin-top: 15vh;
    }
    .ab{
margin: 0 19vh;
    }
    .cd{
        margin: 0 19vh;
    }
    h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 20px; 
        align-content: space-evenly;
    }

    h2 {
        font-size: 1.25rem;
        line-height: 3.5;
        flex-wrap: wrap;
        justify-content: center;
        align-content: space-evenly;
    }

    .content-header {
        margin: 0;
        padding: 0;
        background: linear-gradient(to right, #e9f2e9 50%, transparent 50%);
        height: 100vh;
    }

    .header {
        color: #333;
        font-size: 20px;
        font-weight: bold;
        display: inline-block;
    }

    .button1 {
        color: white;
        font-size: 18px;
        font-weight: bold;
        margin-top: 20px;
      margin-left: 100px;
        background-color: #228B22;
        padding: 10px 19px;
        text-align: center;
        border-radius: 15px;
    }

    span {
        margin-top: -6px;
        font-weight: bold;
        font-size: 24px;
    }

    .button2 {
        color: white;
        font-size: 18px;
        font-weight: bold;
        margin-top: 5vh;
        background-color: #228B22;
        padding: 14px 40px;
        border-radius: 10px;
    }
.button3{
    color: black;
        font-size: 18px;
        font-weight: bold;
        margin-top: 5vh;
        padding: 14px 38px;
        border-radius: 10px;
        border: 2px solid black;
}
.button3:hover{
    color: blue;

}
    .top {
        background-color: darkcyan;
        height: 50px;
        margin-top: 0px;
    }

    .log {
        color: #343434;
        font-weight: 900;
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
<div class="container-xxl">
    <div class=" content-header">
        <div class="top"></div>
            <div class="row justify-content-between mb-4">
                <div class="col-sm-2 log">
                    <h1 class="m-4 log">ScholarRank<div class="red"></div>
                    </h1>
                </div>

                <div class="col-sm-2">
                    <a href="#" class="m-4 header">Services</a>
                </div>
                <div class="col-sm-2">
                    <a href="#" class="m-4 header">Products</a>
                </div>
                <div class="col-sm-2">
                    <a href="#" class="m-4 header">Solutions</a>
                </div>

                <div class="col-sm-2">
                    <a href="#" class="m-4 header">Contact Us</a>
                </div>

                <div class="col-sm-2  ">
                    <a href="signup.php" name="login_btn" class="btn btn-primary button1">Sign up</a>
                </div>
            
        </div><!-- content-header -->

        
        <div class="flex-container">
            <div class="col-md-6 ">

                <h1>For Students</h1>
                <p class="ab">We assist students in finding the ideal institution based on their grades,
                    ensuring they secure the best scholarships and affordable fees tailored to their needs.</p>
                <a href="login.php" name="login_btn" class="btn btn-primary button2">Log in</a>
                <h2>Don't have an account?<span> Sign up.<span></h2>
  </div>
            
  <div class="col-md-6 ">
                <h1>For Colleges</h1>
                <p class="cd">We ensure colleges receive applications from the most deserving students who meet their
                    eligibility criteria, without the need for advertising.</p>
                <a href="clogin.php" name="login_btn" class="btn button3">Log in</a>
                <h2>Don't have an account? <span>Sign up.<span></h2>
            </div>

        </div>
    </div><!-- container-xxl -->
    