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
        <form method="post" action="#">
           
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
                echo '</span>';
                echo '<br />';
              
                echo '<div class="newjob1">';          
                echo '<h2>New Job Book Entry:</h2>';
                
                //show next job book number auto incremented.
                $db = new mysqli('localhost', 'root', '', 'warehouse');
                if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();} 
                $sql = "SHOW TABLE STATUS LIKE 'jobbook'";
                $result=$db->query($sql);
                $row = $result->fetch_assoc();
                echo '<label class="custnamelabel" for="jobnumlabel">Job No:</label>';  
                echo '<label class="custnamelabel" for="jobnumshow"><font color="red">'.$row["Auto_increment"].'</font></label>';
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
                echo '<textarea rows="2" cols="28" name="notes"></textarea>';
                echo '<br />';
                
                echo '<label class="custnamelabel" for="cust_orderno">Order number:</label>';
                echo '<input class="custnametextbox" type="text" name="cust_orderno" value="" />';
                echo '<br />';
                
                echo '<label class="custnamelabel" for="job_amountlabel">Amount:</label>';
                echo '<input class="custnametextbox" type="text" name="job_amount" value="" />';
                echo '<br />';
                
                echo '<label class="custnamelabel" for="job_invoicelabel">Invoice No:</label>';
                echo '<input class="custnametextbox" type="text" name="job_invoice" value="" />';
                echo '<br />';
                
                echo '</div>';}
               
                ?>
            <div class="newjobmenu">    
            <input class="submit" type="button" onclick="location.href='jobbookmenu.php';" name="jobbook" value="Job Book Menu">
            <br />
            <input class="submit" type="button" onclick="location.href='index.php';" name="logout" value="Exit"> 
            </div>
        </form>
  
</body>
</html>

