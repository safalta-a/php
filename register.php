<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
    <link rel="stylesheet" href="index.css">
    <style>
        ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  li a:hover {
    background-color: #111;
  }
  </style>
   
</head>
<body>>

<!--nav bar-->
<ul>
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="register.php">Register</a></li>
    <li><a href="#edit.php">Edit</a></li>
    <li><a href="show.php">Show User</a></li>
    <li><a href="delete.php">Delete Data</a></li>
</ul>
    <div class="wrapper">
        <div class="title">
            Register Here
        </div>
        <div class="form">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="input">
                <input type="text" placeholder="Enter Name" name="name" class="input-field" required/>
                <span class="error">* <?php echo $namerror;?></span>
            </div>
            <div class="input">
                <input type="text" placeholder="Enter your email" name="email" class="input-field" required/>
                <span class="error">* <?php echo $mailerror;?></span>
            </div>
            <div class="input">
                <input type= "password" placeholder="Choose a password" name="pass" class="input-field" required/>
                <span class="error">* <?php echo $pwderror;?></span>
            </div>
            <div class="input">
                <input type= "text" placeholder="Confirm Password" name="cpass" class="input-field" required/>
                <span class="error">* <?php echo $cpwderror;?></span>
            </div>
            <div class="input">
                <input type="file" name="img" class="input-field" required/>
                <span class="error">* <?php echo $imgerror;?></span>
            </div>
    
            <div class="btn">
                <input type="submit" name="submit" value="Register">
            </div>
            
            </form>
        </div>
    </div>
    
</body>
</html>