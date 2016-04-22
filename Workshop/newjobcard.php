<!DOCTYPE html>
<!--

-->
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="view/style/newjobcard.css">
<title>Job Card Menu</title>
</head>
<body>
    <div class="jobcardtop">
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
            echo "User: " . "<font color='red'>$cname</font>" ?>
            </span>
    
            <br />
            <div class="border0">
            <div class="border1">          
            <h2>New Job Card:</h2>
            
                        <label class="custnamelabel" for="jobcardnum">Job Card No:</label>
                        <label class="custnamelabel" for="jobcardnum"><font color='red'>578</font></label>
			<label class="custnamelabel" for="custname">To:</label>
                        <input  type="text" class="custnametextbox" name="custname" value=""  /> 
                        <br />
                        <label class="custnamelabel" for="jobdate">Date:</label>
			<input  class="custnametextbox" type="text" name="custphone"  value="" />  
			<br />
                       	<label class="custnamelabel" for="vehiclereg">Order No:</label>
			<input  class="custnametextbox" type="text" name="vehiclereg"   value=""  /> 
                        <br />
                      
        
      
            </div>
             <div class="border2">           
            <h2>Forklift Details:</h2>
           
			<label class="custnamelabel" for="forkliftmake">Make:</label>
                        <input  type="text" class="custnametextbox" name="forkliftmake" value=""  /> 
                        <br />
                        <label class="custnamelabel" for="forkliftmodel">Model:</label>
			<input  class="custnametextbox" type="text" name="custphone"  value="" />  
			<br />
                       	<label class="custnamelabel" for="forkliftserial">Serial No:</label>
			<input  class="custnametextbox" type="text" name="forkliftserial"   value=""  /> 
                        <br />
                        <label class="custnamelabel" for="forklifthours">Hours:</label>
			<input  class="custnametextbox" type="text" name="forklifhours"   value=""  /> 
            
             </div>
            </div>
           
             <div class="border5">          
            <label class="partsheading" for="qtypartno1">Check List</label>
                
            <label class="partsheading" for="qtypartno1">Body :</label>
            <br />
            <label class="custnamelabel" for="forkliftmake">Tyre Condition</label>
            <br />
            <label class="custnamelabel" for="forkliftmake">Lights</label>           
            <br />
            <label class="custnamelabel" for="forkliftmake">Horn and Guages</label>
            <br />
            <label class="custnamelabel" for="forkliftmake">Key Switch</label>
            <br />          
	    <label class="custnamelabel" for="forkliftmake">Ready for Service</label>
            <br />	
          
            <label class="custnamelabel" for="forkliftmake">Tyre Condition</label>
            <br />
            <label class="custnamelabel" for="forkliftmake">Lights</label>           
            <br />
            <label class="custnamelabel" for="forkliftmake">Horn and Guages</label>
            <br />
            <label class="custnamelabel" for="forkliftmake">Key Switch</label>
            <br />          
	    <label class="custnamelabel" for="forkliftmake">Ready for Service</label>
            <br />	            
                      
        
      
            </div> 
            <div class="border3">          
                 <h2>Description Of Work Done:</h2>
                
           
			
                        <textarea rows="6" cols="78" name="notes"></textarea>
                        <br />
            </div>
            
            <div class="border4">     
                <label class="partsheading" for="qtypartno1">Parts Used :</label><label class="qtyheading" for="qtypartno1">Qty</label><label class="amountheading" for="qtypartno1">COST excl. VAT</label>
                        <br />
                      
                        <input type="text" class="partstextbox" name="partno1" value=""  />
                        <label class="quanlabel" for="qtypartno1">Qty :</label>
                        <input  type="text" class="qtytextbox" name="qtypartno1" value=""  />  
                        <input type="text" class="amounttextbox" name="partno1" value=""  />
                        
                        <br />
			<input type="text" class="partstextbox" name="partno1" value=""  />
                        <label class="quanlabel" for="qtypartno1">Qty :</label>
                        <input  type="text" class="qtytextbox" name="qtypartno1" value=""  />  
                        <input type="text" class="amounttextbox" name="partno1" value=""  />
                        
                        <br />
                        <input type="text" class="partstextbox" name="partno2" value=""  />
                        <label class="quanlabel" for="qtypartno2">Qty :</label>
                        <input type="text" class="qtytextbox" name="qtypartno2" value=""  />  
                        <input type="text" class="amounttextbox" name="partno1" value=""  />
                       
                        <br />
                        <input type="text" class="partstextbox" name="partno1" value=""  />
                        <label class="quanlabel" for="qtypartno1">Qty :</label>
                        <input  type="text" class="qtytextbox" name="qtypartno1" value=""  />  
                        <input type="text" class="amounttextbox" name="partno1" value=""  />
                       
                        <br />
			<input type="text" class="partstextbox"" name="partno3" value=""  />
                        <label class="quanlabel" for="qtypartno3">Qty :</label>
                        <input type="text" class="qtytextbox" name="qtypartno3" value=""  />  
                        <input type="text" class="amounttextbox" name="partno1" value=""  />
                        
                        <br />
                        <input type="text" class="partstextbox" name="partno1" value=""  />
                        <label class="quanlabel" for="qtypartno1">Qty :</label>
                        <input  type="text" class="qtytextbox" name="qtypartno1" value=""  />  
                        <input type="text" class="amounttextbox" name="partno1" value=""  />
                       
                        <br />
			<input type="text" class="partstextbox" name="partno4" value=""  />
                        <label class="quanlabel" for="qtypartno4">Qty :</label>
                        <input type="text" class="qtytextbox" name="qtypartno4" value=""  />  
                        <input type="text" class="amounttextbox" name="partno1" value=""  />
                       
                        <br />
                        
             </div>      
                        <br />
			<input class="submit" type="submit" name="submit" value="Create Job Card">		
                        <br />
                        <input class="submit" type="submit" name="jobcardmenu" value="Back" >
		

     <?php
     //MAIN MENU selection
    if (isset($_POST['submit'])) {
        // Create connection to db.
        $connection = mysqli_connect('localhost', 'root', '','stock');
        //check connecion
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();}
     //checks if menu button was clicked.
   
     
     $custname = $_POST['custname']; 
     $custphone = $_POST['custphone'];
     $vehiclereg = $_POST['vehiclereg'];
     $partno1 = $_POST['partno1'];
     $qtypartno1 = $_POST['qtypartno1'];
     $partno2 = $_POST['partno2'];
     $qtypartno2 = $_POST['qtypartno2'];
     $partno3 = $_POST['partno3'];
     $qtypartno3 = $_POST['qtypartno3'];
     $partno4 = $_POST['partno4'];
     $qtypartno4 = $_POST['qtypartno4'];
     $dateopen = date("Y/m/d");
     $datecompleted = "Not Complete";
     $notes = $_POST['notes'];
     if(empty($_POST['custname']) and empty($_POST['custphone']) and empty($_POST['vehiclereg']))  {
             echo "<br />";
             echo "<br />";
             echo "<font color='red'>ERROR! Please Complete ALL of the Feilds & Try Again...</font><img src='tdown.jpg' alt='tdown' style='width:93px;height:92px;'>"; 
     echo "<br />";}
     else{
// check parts database if parts enetered exist.
     $query = "SELECT * FROM `parts` WHERE partnumber = '$partno1' or partnumber = '$partno1' or partnumber = '$partno2'or partnumber = '$partno3'or partnumber = '$partno4'";
     $result = mysqli_query($connection,$query) or die(mysql_error());
     if(mysqli_num_rows($result)== 0){
           echo "<br />";
           echo "<br />";
           echo "<font color='red'>ERROR! No Such part  numbers in the database...</font><img src='tdown.jpg' alt='tdown' style='width:93px;height:92px;'>"; 
            echo "<br />"; }
    
     if(mysqli_num_rows($result) > 0){ 
     //update the parts system
     $query = "SELECT * FROM `parts` WHERE partnumber = '$partno1' or partnumber = '$partno1' or partnumber = '$partno2'or partnumber = '$partno3'or partnumber = '$partno4'";
     $result = mysqli_query($connection,$query) or die(mysql_error());   
     
     $subquery = "UPDATE `parts` SET quantity = quantity - '$qtypartno1' WHERE partnumber = '$partno1'";
     $result = mysqli_query($connection,$subquery) or die(mysql_error());
     $subquery1 = "UPDATE `parts` SET quantity = quantity - '$qtypartno2' WHERE partnumber = '$partno2'";
     $result1 = mysqli_query($connection,$subquery1) or die(mysql_error());
     $subquery2 = "UPDATE `parts` SET quantity = quantity - '$qtypartno3' WHERE partnumber = '$partno3'";
     $result2 = mysqli_query($connection,$subquery2) or die(mysql_error());
     $subquery3 = "UPDATE `parts` SET quantity = quantity - '$qtypartno4' WHERE partnumber = '$partno4'";
     $result3 = mysqli_query($connection,$subquery3) or die(mysql_error());
     
     
    // Insert data into jobcards 
     $sql="INSERT INTO jobcards(custname, custphone, vehiclereg, partno1, qtypartno1, partno2, qtypartno2, partno3, qtypartno3, partno4, qtypartno4, notes, datecreated, datecompleted) VALUES('$custname', '$custphone', '$vehiclereg', '$partno1', '$qtypartno1', '$partno2', '$qtypartno2', '$partno3', '$qtypartno3', '$partno4', '$qtypartno4', '$notes', '$dateopen','$datecompleted')";
     $result=mysqli_query($connection,$sql);
     // if successfully insert data into database, displays message "Successful". 
     if($result){
         echo '<br />'; 
          echo '<br />';    
     echo "<font color='green'>Job Card Created Successfully</font><img src='tup.jpg' alt='tup' style='width:93px;height:92px;'>";
     
        }

     else {
          echo '<br />';
           echo '<br />';    
     echo "<font color='red'>ERROR... Please Try Again</font><img src='tdown.jpg' alt='tdown' style='width:93px;height:92px;'>";
        }
    }}}
    if (isset($_POST['jobcardmenu'])) {
        header("Location: jobbookmenu.php");} 
   
   
     
     
     
     ?>
  </form>
    </div>
    </body>
</html>
