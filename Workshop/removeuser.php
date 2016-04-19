<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="view/style/mystyle.css">
<title>Remove User</title>
</head>
<body>
    <div class="menu1">    
    <form action="removeuser.php" method="post">
         <h1>Auto-Part Workshop System</h1>
	 
         <span style="font-weight: bold; float: right;">
         <?php
         //Show user that is currently logged in to the system.  
         session_start();
         $cname = $_SESSION['cname'];
         echo "User: " . "<font color='red'>$cname</font>" ?>
         </span>
         
         <h2>Remove User</h2>

         <h3>Please enter user to be deleted:</h3>
         
         <?php
            
            // Create connection to db.
            $connection = mysqli_connect('localhost', 'root', '','warehouse');
            //check connecion
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();}    

                //new mysqli query
                $mysql_query = "SELECT * FROM `login` WHERE firstname='$cname'";//mysql
                $result = mysqli_query($connection,$mysql_query);//mysqli 
                $user = (mysqli_num_rows($result)==1) ? mysqli_fetch_assoc($result) : null ;
                $count = mysqli_num_rows($result);//not used
                
                //Display Input
                if ($user['admin']=='yes'){
                  
                echo '<label for="userid"> User ID Number:</label><img src="view/images/companysmalljpg.jpg" alt="companysmall" style="width:332px;height:185px;float: right;">';  
                echo '<input type="text" name="userid"   value="" /> '; 
                echo '<br />';
                echo '<br />';
                echo '<label for="or">OR</label> ';
                echo '<br />';
                echo '<br />';
                echo '<label for="firstname">First Name :</label>  ';
                echo '<input type="text" name="firstname" value="" /> ';
                echo '<br />';
                echo '<br />';
                echo '<input class="submit" type="submit" name="removeuser" value="Delete User">';
                echo '<br />';
                echo '<input class="submit" type="submit" name="adminmenu" value="Back" >';
                echo '<br />';}
                ?>
       
     <?php
        //check if remove user button was clicked
    if (isset($_POST['removeuser'])) {
        // Create connection to db.
        $connection = mysqli_connect('localhost', 'root', '','warehouse');
        //check connecion
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();}
     
         $userid = $_POST['userid']; 
         $username = $_POST['firstname'];
         //check if either input fields are blank
         if(empty($_POST['userid']) and empty($_POST['firstname']))  {
             echo "<br />";
             echo "<br />";
             echo "<font color='red'>ERROR! Please Complete One of the Feilds & Try Again...</font>"; }
            
         else {
            $query = "SELECT * FROM `login` WHERE firstname='$username' or userid='$userid'";
            $result = mysqli_query($connection,$query) or die(mysql_error());
            $count = mysqli_num_rows($result);
       // If the posted values are equal to the database values, then user will be deleted.
         if ($count == 1){
             $query="DELETE FROM login WHERE userid = '$userid' or firstname = '$username'";
             $result = mysqli_query($connection,$query) or die(mysql_error());
             echo "<br />";
             echo "<br />";
             echo "<font color='green'>User DELETED Sucessfully!</font>";}
        else{
            echo "<br />";
            echo "<br />";  
            echo "<font color='red'>Invalid User ID or Username! </font>";
            echo "<font color='red'>Please try again...</font>";}
            } }    
    if (isset($_POST['adminmenu'])) {
        header("Location: admin.php");} 
    
     ?>

    </form>
    </div>
    </body>
</html>
