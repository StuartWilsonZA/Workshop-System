<!DOCTYPE html>
<!--

-->
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="view/style/newjobcard.css">
<title>Create New Job </title>
</head>
<body>
   <div class="jobcardtop">'
       <form method="post" action="">
           
            <?php
           session_start();
           $cname = $_SESSION['cname'];
          
           
           
           $connection = mysqli_connect('localhost', 'root', '','warehouse');
           
           include 'quickmenu.php';
  
           if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();}    //sqli query
                $mysql_query = "SELECT * FROM `login` WHERE firstname='$cname'";//mysql
                $result = mysqli_query($connection,$mysql_query);//mysqli 
                $user = (mysqli_num_rows($result)==1) ? mysqli_fetch_assoc($result) : null;
                $count = mysqli_num_rows($result);//not used
                if ($user['jobbook']=='yes'){
                
                echo '<h1>Auto-Part Workshop System</h1>'; 
                echo '<span style="font-weight: bold; float: right;">';  

                echo "User: " . "<font color='red'>$cname</font>";
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
                
                echo '</span>';
                echo '<br />';
              
                echo '<div class="newjob1">';          
                echo '<h2>New Job Book Entry:</h2>';
                
                //show next job book number auto incremented.
                $db = new mysqli('localhost', 'root', '', 'warehouse');
                if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();} 
                $sql = "SELECT MAX(job_no) FROM jobbook";
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
                $job_no = $row['MAX(job_no)'] + 1 ;
                //$job_no = $job_no;
                echo '<label class="jobnumlabel" for="jobnumlabel">New Job No:</label>';  
                echo '<label class="jobnumlabel" for="jobnumshow"><font color="red">'.$job_no.'</font></label>';
                echo '<br />';
                
                echo '<label class="custnamelabel" for="jobcodelabel">Job Code:</label>';
                echo '<input type="text" class="custnametextbox" name="jobcode" value="" />';
                echo '<br />';
                
                echo '<label class="custnamelabel" for="assignedlabel">Assigned To:</label>';
                echo '<input type="text" class="custnametextbox" name="assigned_to" value="" />';
                echo '<br />';
                
                echo '<label class="custnamelabel" for="custlabel">Customer:</label>';
                echo '<input class="custnametextbox" type="text" name="cust_name" value="" />';
                echo '<br />';
                echo '<br />';
                
                echo '<label class="custnamelabel" for="jobdetaillabel">Job Detail:</label>';
                echo '<textarea rows="2" cols="28" name="job_detail"></textarea>';
                echo '<br />';
                
              
                
                echo '</div>';}
               
                ?>
            <div class="newjobmenu">    
            <input class="submit" type="submit" name="jobbook" value="Create Job">
            <br />
            <input class="submit" type="button" onclick="location.href='jobbookmenu.php';" name="logout" value="Back"> 
            </div>
       </form>
  
</body>
<?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //checks if menu button was clicked.
    
            if (isset($_POST['jobbook'])) {
                $job_code = $_POST['jobcode'];
                $assigned_to = $_POST['assigned_to'];
                $cust_name = $_POST['cust_name'];
                $created_date = date("d/m/Y");
                $job_detail = $_POST['job_detail'];
                
                $con = new mysqli('localhost','root','','warehouse');
                if($con -> connect_error){
                    die("Connection Faild" . $con -> connect_error);
                }
                $sql = "INSERT INTO jobbook (job_code, assigned_to, created_date, customer, job_detail)"
                        . "VALUES ( '$job_code', '$assigned_to','$created_date', '$cust_name', '$job_detail')";
                        
                
                if($con->query($sql) === TRUE){
                   
                    header('Location: jobbookmenu.php');
                                        exit();
                }else {
                    echo 'Error:' . $sql . "<br />" . $con->error;
                }       
                
                
                
            }}
?>
   
   </html>

