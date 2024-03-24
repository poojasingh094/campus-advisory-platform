<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
  <title>Login Form</title>
  <style>
   
nav {
  background-color: #9370DB;
  color: red;
  height: 70px;
  width: 100%;
  display: flex;
  align-items: center;
  overflow: hidden;
    margin-top: 2px;
}
.hover-heading:hover {
  color: red;
}

nav ul {
  margin-left: auto;
  margin-right: 20px;
  list-style: none;
  display: flex;
  flex-wrap: wrap;
}
.navbar-menu{
  
      margin-left: 315px;
      margin-right: 10px;
      flex-wrap: wrap;
}
label {
  display: block;
  text-align: left;
  font-weight: bold;
  font-size:18px;
  margin-bottom:10px; 
}


input[type="text"],
input[type="email"]{
  width: 60%;
  padding: 10px;
  margin-top: 5px;
  color: #FF69B4;
  border: 1px solid #ccc;
  border-radius: 3px;
  background-color:#E0E0E0;
}
textarea{
  width: 60%;
  height: 35%;
  padding: 10px;
  margin-top: 5px;
  color: #FF69B4;
  border: 1px solid #ccc;
  border-radius: 3px;
  background-color:#E0E0E0;
}
input[type="submit"] {
  width: 20%;
  padding: 10px;
  margin-top: 20px;
  background-color: #9370DB;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  padding: 10px 20px;
  text-decoration: none;
  display: inline-block;
}
nav ul li a {
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  color: white;
  white-space: nowrap;
}
form {
  width: 750px;
  margin: 0 auto;
  background-color:#fff;
  padding: 20px;
  border-radius: 10px;
  margin-top: 30px;
  border: 3px solid #ccc;
  box-shadow:0 2px 3px rgba(0,0,0,1);
  height:420px;
}
a.active,
a:hover {
  background: #ffff;
}
body{
  background-color:#9370DB;
}
h3 {
  color:#222;
}


.get-in-touch {
    border: 1px solid #ccc;
    padding: 5px;
    margin-left: 490px;
    margin-top: -304px;
    box-shadow:0 2px 3px rgba(0,0,0,1);
    width: 220px;
    height: 220px;
    background-color: #E0E0E0;
  }

</style>
</head>
<body>
<nav>

  <ul class="navbar-menu">
    <li><a href="index.php">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Process</a></li>
  
    <li><a href="#">Services</a></li>
    <li><a href="#">Contact</a></li>
    
  </ul>
</nav>
<div class="bgc">
<form id="enquiryForm">
    <h2>Send an Enquiry</h2>
    <label for="name"></label>
    <input type="text" id="name" placeholder="Your Name" required>
    <br>
    <label for="email"></label>
    <input type="email" id="email" placeholder="Your Email" required>
    <br>
    <label for="message"></label>
    <textarea id="message" placeholder="Message" required></textarea>
    <br>
    <input type="submit" value="Send Message">
    
    <div class="get-in-touch">
    <h3>Get in Touch</h3>
    <p><strong>Location:</strong> MMDU, Ambala, Haryana</p>
    <p><strong>Email:</strong> mmdu@example.com</p>
    <p><strong>Call:</strong> +1 234 567 890</p>
    <img src="./sss.png" alt="Image description" style="width: 220px; height: auto;">
  </div>
 
  </form>

</div>
</body>
<img src="./ss.png" alt="Image description" style="width: 200px; height: auto; margin-top: -200%; margin-left: 1000px;" >
</html>