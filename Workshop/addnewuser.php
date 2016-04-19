<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="view/style/mystyle.css">
<title>Add New User</title>
</head>
<body>
    <div class="menu1">    
    <form action="addnewuser.php" method="post">
         <h1>Auto-Part Workshop System</h1>
	
         <span style="font-weight: bold; float: right;">
         <?php
         //Show user that is currently logged in to the system.  
         session_start();
         $cname = $_SESSION['cname'];
         echo "User: " . "<font color='red'>$cname</font>" ?>
         </span>
         
         <h2>Add New User</h2>
                
         <img src="view/images/companysmalljpg.jpg" alt="companysmall" style="width:332px;height:185px;float: right;">
   
         <br />
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
                  
                echo '<label for="firstname">First Name:</label> ';  
                echo '<input class ="addnewuser" type="text"   name="firstname" value="" />'; 
                echo '<br />';
                echo '<label for="lastname">Last Name:</label> ';
                echo '<input class ="addnewuser" type="text"   name="lastname" value="" />';
                echo '<br />';
                echo '<label for="password"> Password :</label> ';
                echo '<input type="password" name="password"   value="" />  ';
                echo '<br />';
                echo '<br />';
                echo '<label for="jobbook">Job Book:</label><input type="checkbox" name="jobbook"   value="jobbook" />';
                echo '<br />';
                echo '<br />';
                echo '<label for="admin">Administrator:</label><input type="checkbox" name="admin"   value="admin" />';
                echo '<br />';
                echo '<input class="submit" type="submit" name="adduser" value="Add User">';
                echo '<br />';
                echo '<input class="submit" type="submit" name="adminmenu" value="Back" >';
                echo '<br />';
                echo '<br />';}
                 mysqli_close($connection);
     ?>

     <?php
     //MAIN MENU selection
    if (isset($_POST['adduser'])) {
    // Create connection to db.
            $connection = mysqli_connect('localhost', 'root', '','warehouse');
            //check connecion
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();}    
         
         $firstname = $_POST['firstname']; 
         $lastname = $_POST['lastname'];
         $password = $_POST['password'];
         $admin = " ";
         $jobbook = " ";
         $logout = "yes";
         
      // check if user set to Administrator   
         if (isset($_POST['admin'])) {
             $admin = "yes";}
         else {
             $admin = "no";}
         if (isset($_POST['jobbook'])) {
             $jobbook = "yes";}
         else {
             $jobbook = "no";}    
         if(empty($_POST['firstname'])or empty($_POST['lastname'])or empty($_POST['password'])) {
             echo "<br />";
             echo "<br />";
             echo "<font color='red'>ERROR! Please Complete ALL the fields & Try Again...</font>";}
         if(!empty($_POST['firstname']) and !empty($_POST['lastname'])and !empty($_POST['password']))  {
             // Insert data into mysql 
         $sql="INSERT INTO `login` (userid, firstname, lastname, password, jobbook, admin, logout) VALUES (NULL, '$firstname', '$lastname','$password', '$jobbook', '$admin','$logout')";
         $result=mysqli_query($connection,$sql);
           // if successfully insert data into database, displays message "Successful". 
         if($result){
            
             echo "<font color='green'>New User Added Sucessfully!</font>";}
     else {
         echo "<br />";
         echo "ERROR! Please Try Again...</font>";
         }
    }}  
   
    if (isset($_POST['adminmenu'])) {
        header("Location: admin.php");} 
    

     ?>

     </form>
    </div>
    </body>
</html>
