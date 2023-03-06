<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

.form{  
        padding: 25px;   
        background-color: white; 
	border-radius: 30px;
}
	
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}



/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
  position: center;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
	

}
 </style>
<body>

<form action="insert.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
<ul>	
    <label for="Name"><b>Name:</b></label><br>
    <input type="text" placeholder="Enter Name" name="username" required><br>

    <label for="email"><b>Email:</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="psw"><b>Password:</b></label><br>
    <input type="password" placeholder="Enter Password" name="pass" required><br>

    <label for="psw-repeat"><b>Repeat Password:</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
    
</ul> 

    <p>If you already have an account just login<a href="index.html" style="color:dodgerblue">sign in</a>.</p>

    <div class="clearfix">
    
      <center><button type="submit" class="signupbtn">Sign Up</button></center>
    </div>

  </div>
</form>

</body>
</html>