
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="view/style/mystyle.css">
<title>Login Page</title>
</head>
<body>
    <div class="menu1">
        <form method="post" action="index.php">
            <h1>Welcome to the</h1>
            <h1>Auto-Part Workshop System</h1>            
            <img src="view/images/companysmalljpg.jpg" alt="companysmall" style="width:332px;height:185px;float: right;">
            <br />
            <br />
            <h2><font color='red'>Please Login!</font></h2>
            <label for="username" >Username:</label>
	    <input type="text" name="username" value="" size="25" /> 
	    <br />
	    <label for="password" >Password : </label> 
	    <input type="password" name="password" size="25" value="" />
            <br />    
            <input class="submit" type="submit" name="submit" value="Login">
            <br />
  
   <?php
    //checks if Submit button was clicked.
    if (isset($_POST['submit'])) {
        // Create connection to db.
        $connection = mysqli_connect('localhost', 'root', '','warehouse');
        //check connecion
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();}
        
    //Start session
    session_start();
    // username and password sent from form     
    $username=$_POST['username']; 
    $password=$_POST['password'];
    //session username set
  
    // To protect MySQL injection
    $username = stripslashes($username);
    $password = stripslashes($password);
   
    //new mysqli query
    $mysql_query = "SELECT * FROM `login` WHERE firstname='$username' and password='$password'";//mysql
    $result = mysqli_query($connection,$mysql_query);//mysqli 
    $count = mysqli_num_rows($result);
    //If the posted values are equal to the database values, then session will be created for the user.
    if ($count == 1){
    //set username in a session
    $_SESSION['cname'] = $username; 
    header("location: mainmenu.php");}
    else{
    echo "<br />";    
    echo "<font color='red'>Invalid login credentials! </font>";
    echo "<font color='red'>Please try again...</font>";}
    
     mysqli_close($connection);
    }
   
    ?>
                  </form>
     </div> 
  
    </body>
    
</html>
