<!DOCTYPE html>
<!--

-->
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="view/style/mystyle.css">
<title>Job Book Menu</title>
</head>
<body>
    <div class="menu">
        <form method="post" action="#">
            
            <?php 
            //Display Quick Link menu
            include 'quickmenu.php';
            ?>
            
            <h1>Auto-Part Workshop System</h1>
              
            <span style="font-weight: bold; float: right;">
            <?php
            //Show user that is currently logged in to the system.  
            session_start();
            $cname = $_SESSION['cname'];
            echo "User: " . "<font color='red'>$cname</font>" ;
            echo'</span>';
            $db = new mysqli('localhost', 'root', '', 'warehouse');
                if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();} 
                $sql = "SELECT MAX(job_no) FROM jobbook";
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
                $job_no = $row['MAX(job_no)'] ;
                //$job_no = $job_no;
                echo '<div class="lastjob">';
                echo " Last Job No Created: " . "<font color='red'>$job_no</font>";
                echo '</div>';
                ?>
            
            
              
              
            <br />
            <img src="view/images/forklift.jpg" alt="companysmall" style="width:212px;height:174px;float: left;">   
            <img src="view/images/companysmalljpg.jpg" alt="companysmall" style="width:332px;height:185px;float: right;">
             
            <h2>Job Book Menu</h2>
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
                
                //Create new Job buttons
                if ($user['jobbook']=='yes'){
                echo '<input class="submit" type="submit" name="newjob" value="Create New Job">';  
                echo '<br />';}
                //Update Job 
                if ($user['jobbook']=='yes'){
                echo '<input class="submit" type="submit" name="updatejob" value="Update Job">'; 
                echo '<br />';}
                //Main Menu Button
                if ($user['jobbook']=='yes'){
                echo '<input class="submit" type="submit" name="mainmenu" value="Main Menu">'; 
                echo '<br />';}
                //Exit Button
                if ($user['logout']=='yes'){
                echo '<input class="submit" type="submit" name="logout" value="Exit">'; 
                echo '<br />';             
                }
                
            
                  
     
            //MAIN MENU selection
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //checks if menu button was clicked.
    
            if (isset($_POST['logout'])) {
            header("Location: index.php"); exit;}
            if (isset($_POST['mainmenu'])) {
            header("Location: mainmenu.php");exit;}
            if (isset($_POST['newjob'])) {
            header("Location: newjob.php"); exit;}
            
            }
                ?>
            
            <br />
            <br />    
            
        
   
 
     </form>     
    </body>
</html>

