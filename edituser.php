<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="view/style/mystyle.css">
<title>Edit User</title>
</head>
<body>
    <div class="menu1">    
        <form action="edituser.php" method="post">
         <h1>Auto-Part Workshop System</h1>
	
         <span style="font-weight: bold; float: right;">
         <?php
         //Show user that is currently logged in to the system.  
         session_start();
         $cname = $_SESSION['cname'];
         echo "User: " . "<font color='red'>$cname</font>" ?>
         </span>
         
         <h2>Edit User</h2>
                
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
               // Search user from DB
                echo '<label for="namesearch">Username:</label> ';  
                echo '<input class ="searchuser" type="text"   name="searchuser" value="" />'; 
                echo ' ';
                echo '<input class="submit" type="submit" name="searchuserbutton" value="Search">';
                echo '<br />';
                echo '<br />';  
                }
             
                
                 
     ?>

     <?php
     //MAIN MENU selection
     if (isset($_POST['searchuser'])) {
      // Create connection to db.
           
                $searchuser = $_POST['searchuser'];
                
         
                $mysql_query = "SELECT * FROM `login` WHERE firstname='$searchuser'";//mysql
                $result = mysqli_query($connection,$mysql_query);//mysqli 
                
                $user = (mysqli_num_rows($result)==1) ? mysqli_fetch_assoc($result) : null ;
                $count = mysqli_num_rows($result);//not used
                $userid = $user['userid'];
                $userlastname = $user['lastname'] ;
                $userpassword = $user['password'] ;
                //Match User System ID Number
                if ($user['firstname']== $searchuser){
                echo '<label for="idno" name="useridno">ID No:  </label> ';  
                echo '<label class ="addnewuser for="idnumber" name="idnumber"><font color="red">'.$userid.'</font></label>';  
                //Match User System Firstname
                echo '<br />';
                echo '<label for="firstname">First Name:</label> ';  
                echo '<input class ="addnewuser" type="text"   name="firstname" value="'.$searchuser.'" />'; 
                echo '<br />';
                echo '<label for="lastname">Last Name:</label> ';
                echo '<input class ="addnewuser" type="text"   name="lastname" value="'.$userlastname.'" />';
                echo '<br />';
                echo '<label for="userpass">Password:</label> ';
                echo '<input class ="userpassword" type="text"   name="userpass" value="'.$userpassword.'" />';
                echo '<br />';
                echo '<br />';
                if ($user['jobbook']== "yes"){
                echo '<label for="jobbook">Job Book:</label><input type="checkbox" checked="checked" name="jobbook"   value="jobbook" />';
                echo '<br />';}
                if ($user['jobbook']== "no"){
                echo '<label for="jobbook">Job Book:</label><input type="checkbox" name="jobbook"   value="jobbook" />';
                echo '<br />';}
                if ($user['admin']== "yes"){
                echo '<label for="admin">Administrator:</label><input type="checkbox" checked="checked" name="admin"   value="admin" />';
                echo '<br />';}
                if ($user['admin']== "no"){
                echo '<label for="admin">Administrator:</label><input type="checkbox" name="admin"   value="admin" />';
                echo '<br />';}
                echo '<br />';
                echo '<input class="submit" type="submit" name="updateuser" value="Update User">';
                echo '<br />';
                echo '<input class="submit" type="submit" name="adminmenu" value="Back" >';
                echo '<br />';
                echo '<br />';
                
    
    if (isset($_POST['updateuser'])) {
    // Create connection to db. 
         
         $firstname = $_POST['firstname']; 
         $lastname = $_POST['lastname'];
         $password = $_POST['userpass'];
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
         // UPDATE data into mysql 
         $sql = "UPDATE login SET lastname='$lastname',password='$password',jobbook='$jobbook', admin='$admin' WHERE firstname='$firstname'";
            if(mysqli_query($connection, $sql)){
              echo "Records were updated successfully.";
              
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
            }           
                                
            
            }  
     
            
            }
      
            }
  
                echo '<br />';
                echo '<br />';
         if (isset($_POST['adminmenu'])) {
        header("Location: admin.php");}         
     
        ?>

     </form>
    </div>
    </body>
</html>

