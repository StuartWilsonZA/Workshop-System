<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="view/style/mystyle.css">
<title>User Listing</title>
</head>
<body>
     
    <form action="#" method="post"> 
	 <span style="font-weight: bold; float: right;">
         <?php
         //Show user that is currently logged in to the system.  
         session_start();
         $cname = $_SESSION['cname'];
         echo "User: " . "<font color='red'>$cname</font>"
         ?>
        </span>       
        
        <h2>System User Listing :</h2>	
   
     <?php
        // Create connection to db.
        $connection = mysqli_connect('localhost', 'root', '','warehouse');
        //check connecion
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();}
     //checks if menu button was clicked.
         
      //new mysqli query
       $mysql_query = "SELECT * FROM `login` WHERE firstname='$cname'";//mysql
       $result = mysqli_query($connection,$mysql_query);//mysqli 
       $user = (mysqli_num_rows($result)==1) ? mysqli_fetch_assoc($result) : null ;
       $count = mysqli_num_rows($result);//not used
                
       //Display Input
       if ($user['admin']=='yes'){
        
       $query = "SELECT * FROM login"; //You don't need a ; like you do in SQL
       $result = mysqli_query($connection,$query);

     /* show tables */
     echo '<div class="datagrid1">';
     
     echo '<table border="1" cellpadding="1" cellspacing="1" class="db-table">';
     echo '<thead><tr><th>User ID</th><th>First Name(Username)</th><th>Last Name</th><th>Password</th><th>Job Book</th><th>Admin</th><th>Exit</th></tr></thead>';
	while($row = mysqli_fetch_row($result)) {
		echo '<tr>';
		foreach($row as $key=>$value) {
			echo '<td>',$value,'</td>';
                               }   
			echo '</tr>';
                               }
     echo '</table><br />';
     echo '</div';
 
    if (isset($_POST['admin'])) {
        header("Location: admin.php");}
    if (isset($_POST['mainmenu'])) {
       header("Location: mainmenu.php");} }    
    
     ?>
                   <br />
                   <input class="submit" type="submit" name="admin" value="Back" >
                   <br />
                   <input class="submit" type="submit" name="mainmenu" value="Main Menu" >
	</form>		

    </body>
</html>
