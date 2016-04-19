<!DOCTYPE html>
<!--

-->
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="view/style/mystyle.css">
<title>Administration</title>
</head>
<body>
    <div class="menu">
        <form method="post" action="#">
            <?php include 'quickmenu.php';?><h1>Auto-Part Workshop System</h1>
            
            <span style="font-weight: bold; float: right;">
            <?php
            //Show user that is currently logged in to the system.  
            session_start();
            $cname = $_SESSION['cname'];
            echo "User: " . "<font color='red'>$cname</font>" ?>
            </span>
            
            <br />
            <img src="view/images/forklift.jpg" alt="companysmall" style="width:212px;height:174px;float: left;">   
            <img src="view/images/companysmalljpg.jpg" alt="companysmall" style="width:332px;height:185px;float: right;">
            
            <h2>User Administration</h2>
            
            <?php
            
            // Create connection to db.
            $connection = mysqli_connect('localhost', 'root', '','warehouse');
            //check connecion
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();}    
                //Sql query to check the current users login details.
                $mysql_query = "SELECT * FROM `login` WHERE firstname='$cname'";//mysql
                $result = mysqli_query($connection,$mysql_query);//mysqli 
                $user = (mysqli_num_rows($result)==1) ? mysqli_fetch_assoc($result) : null ;
                $count = mysqli_num_rows($result);//not used
                
                //Display buttons
                if ($user['admin']=='yes'){// Add new User
                echo '<input class="submit" type="submit" name="addnewuser" value="Add New User" >';  
                echo '<br />';
                
                echo '<input class="submit" type="submit" name="edituser" value="Edit User" >'; 
                echo '<br />';
                
                echo '<input class="submit" type="submit" name="removeuser" value="Remove User" >'; 
                echo '<br />';
                //Exit Button
               
                echo '<input class="submit" type="submit" name="listusers" value="List All Users" >'; 
                echo '<br />';
                
                
                echo '<input class="submit" type="submit" name="mainmenu" value="Back to Main Menu" >';
                echo '<br />';
                }
  
            //MAIN MENU selection
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //checks if menu button was clicked.
            if (isset($_POST['addnewuser'])) { //Add new user
            header("Location: addnewuser.php");}
            if (isset($_POST['edituser'])) { //Add new user
            header("Location: edituser.php");}
            if (isset($_POST['removeuser'])) { //Remove a user
            header("Location: removeuser.php");}
            if (isset($_POST['listusers'])) { //List all users
            header("Location: userlisting.php");}
            if (isset($_POST['mainmenu'])) { //Back to main Menu
            header("Location: mainmenu.php");}
            
            }
                ?>
 
        </form>
    
   
</div>
    </body>
</html>
