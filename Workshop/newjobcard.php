<!DOCTYPE html>
<!--

-->
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="view/style/newjobcard.css">
<title>New Job Card</title>
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
                echo '<div class="border0">';
                echo '<div class="border1">';          
                echo '<h2>New Job Card:</h2>';
            
                echo '<label class="custnamelabel" for="jobcardnum">Job Card No:</label>';  
                echo '<label class="custnamelabel" for="jobcardnumshow"><font color="red">578</font></label>';
                echo '<label class="custnamelabel" for="custname">To:</label>';
                echo '<input type="text" class="custnametextbox" name="custname" value="" />';
                echo '<br />';
                echo '<label class="custnamelabel" for="jobdate">Date:</label>';
                echo '<input class="custnametextbox" type="text" name="custphone" value="" />';
                echo '<br />';
                echo '<label class="custnamelabel" for="vehiclereg">Order No:</label>';
                echo '<input class="custnametextbox" type="text" name="vehiclereg" value="" />';
                echo '<br />';
                echo '</div>';
                
                echo '<div class="border2">';
                echo '<h2>Forklift Details:</h2>';
                echo '<label class="custnamelabel" for="forkliftmake">Make:</label>';
                echo '<input type="text" class="custnametextbox" name="forkliftmake" value="" />';
                echo '<br />';
                echo '<label class="custnamelabel" for="forkliftmodel">Model:</label>';
                echo '<input class="custnametextbox" type="text" name="custphone" value="" />';
                echo '<br />';
                echo '<label class="custnamelabel" for="forkliftserial">Serial No:</label>';
                echo '<input class="custnametextbox" type="text" name="forkliftserial" value="" />'; 
                echo '<br />';
                echo '<label class="custnamelabel" for="forklifthours">Hours:</label>'; 
                echo '<input class="custnametextbox" type="text" name="forklifhours" value="" />'; 
                echo '</div>';
                echo '</div>';
                
                echo '<div class="border5">';
                echo '<label class="partsheading" for="checklist">Check List</label>';
                echo '<br />';
                echo '<br />';
                echo '<label class="partsheading" for="forkliftbody">Body :</label>';
                echo '<br />';
                echo '<label class="custnamelabel" for="forklifttyre">Tyre Condition</label><input type="checkbox" name="tyrecondcheck" value="tyrecond" />';
                echo '<br />';
                echo '<label class="custnamelabel" for="forkliftlight">Lights</label><input type="checkbox" name="lightcheck" value="lightcheck" />'; 
                echo '<br />'; 
                echo '<label class="custnamelabel" for="forklifthorn">Horn & Guages</label><input type="checkbox" name="hornguage" value="hornguage" />'; 
                echo '<br />'; 
                echo '<label class="custnamelabel" for="forkliftkey">Key Switch</label><input type="checkbox" name="keyswitchcheck" value="keyswitch" />'; 
                echo '<br />'; 
                echo '<label class="custnamelabel" for="forkliftservice">Service Ready</label><input type="checkbox" name="serviceready" value="serviceready" />'; 
                echo '<br />'; 
                echo '<br />'; 
                
                echo '<label class="partsheading" for="drivetrain">Drivetrain :</label>';
                echo '<br />'; 
                echo '<label class="custnamelabel" for="forkliftoillvl">Oil Level</label><input type="checkbox" name="oillvlcheck" value="oillvlcheck" />'; 
                echo '<br />';  
                echo '<label class="custnamelabel" for="forkliftleaks">Oil Leaks</label><input type="checkbox" name="oilleakcheck" value="oilleak" />';  
                echo '<br />';  
                echo '<label class="custnamelabel" for="forkliftfan">Fan</label><input type="checkbox" name="fancheck" value="fancheck" />';  
                echo '<br />';  
                echo '<label class="custnamelabel" for="forkliftvbelt">V-Belt & Hoses</label><input type="checkbox" name="vbeltheck" value="vbeltcheck" />';  
                echo '<br />';  
                echo '<label class="custnamelabel" for="forkliftwater">Water Condition</label><input type="checkbox" name="watercheck" value="watercheck" />';  
                echo '<br />';  
                echo '<label class="custnamelabel" for="forkliftrad">Radiator Condition</label><input type="checkbox" name="radcheck" value="radcheck" />';  
                echo '<br />';   
                
                echo '<div class="checklist">';
                echo '<label class="partsheading" for="drivetrain">Hydraulics :</label>';
                echo '<br />'; 
                echo '<label class="custnamelabel" for="forkliftoilleak">Oil Leaks</label><input type="checkbox" name="oilleakcheck" value="oilleakcheck" />'; 
                echo '<br />';  
                echo '<label class="custnamelabel" for="forklifthose">Hose Condition</label><input type="checkbox" name="hosecheck" value="hosecheck" />';  
                echo '<br />';  
                echo '<label class="custnamelabel" for="forkliftfork">Fork Condition</label><input type="checkbox" name="forkcheck" value="forkcheck" />';  
                echo '<br />';  
                echo '<label class="custnamelabel" for="forkliftground">Fork Ground Clearence</label><input type="checkbox" name="groundcheck" value="vbeltcheck" />';  
                echo '<br />';  
                echo '<label class="custnamelabel" for="forkliftcarrage">Carrage Loose</label><input type="checkbox" name="carragecheck" value="watercheck" />';  
                echo '<br />';  
                echo '<label class="custnamelabel" for="forklifload">Load Guard Condition</label><input type="checkbox" name="loadcheck" value="radcheck" />';  
                echo '<br />';  
                echo '<br />'; 
                
                
                echo '<label class="partsheading" for="drivetrain">Operation :</label>';
                echo '<br />'; 
                echo '<label class="custnamelabel" for="forkliftbreaks">Break Effiecny</label><input type="checkbox" name="brakecheck" value="breakcheck" />'; 
                echo '<br />';  
                echo '<label class="custnamelabel" for="forkliftinch">Inching Setting</label><input type="checkbox" name="inchcheck" value="inchcheck" />';  
                echo '<br />';  
                echo '<label class="custnamelabel" for="forklifhydraulic">Hydraulics & Steering</label><input type="checkbox" name="hydraulicscheck" value="hydraulicscheck" />';  
                echo '<br />';  
                echo '<label class="custnamelabel" for="forklifttrans">Transmission Strength</label><input type="checkbox" name="transcheck" value="transcheck" />';  
                echo '<br />';  
                echo '<label class="custnamelabel" for="forkliftstarting">Hard Starting</label><input type="checkbox" name="hardcheck" value="hardcheck" />';  
                echo '<br />';  
                echo '<label class="custnamelabel" for="forkliftdriver">Driver Complaints</label><input type="checkbox" name="drivercheck" value="drivercheck" />';  
                echo '<br />';  
                
                echo '</div>';
                
                echo '</div> ';  
                
                echo '<div class="border3">';  
                echo '<h2>Description Of Work Done:</h2>';  
                echo '<textarea rows="6" cols="78" name="notes"></textarea>';  
                echo '<br />';  
                echo '</div>';  
                echo '<br />';  
                
                echo '<div class="border4">'; 
                echo '<label class="partsheading" for="parthead">Parts Used :</label><label class="qtyheading" for="qtypart">Qty</label><label class="amountheading" for="amounthead">COST excl. VAT</label>'; 
                echo '<br />'; 
                echo '<input type="text" class="partstextbox" name="partno1" value=""/>'; 
                echo '<label class="quanlabel" for="qtypartno1">Qty :</label>'; 
                echo '<input type="text" class="qtytextbox" name="qtypartno1" value=""/>';
                echo '<input type="text" class="amounttextbox" name="costpartno1" value=""/>'; 
                echo '<br />'; 
                echo '<input type="text" class="partstextbox" name="partno2" value=""/>'; 
                echo '<label class="quanlabel" for="qtypartno2">Qty :</label>'; 
                echo '<input type="text" class="qtytextbox" name="qtypartno2" value=""/>';  
                echo '<input type="text" class="amounttextbox" name="costpartno2" value=""/>';  
                echo '<br/>';
                echo '<input type="text" class="partstextbox" name="partno3" value=""/>';
                echo '<label class="quanlabel" for="qtypartno3">Qty :</label>';
                echo '<input type="text" class="qtytextbox" name="qtypartno3" value=""/>';
                echo '<input type="text" class="amounttextbox" name="costpartno3" value=""/>';
                echo '<br />';
                echo '<input type="text" class="partstextbox" name="partno4" value=""/>';
                echo '<label class="quanlabel" for="qtypartno4">Qty :</label>';
                echo '<input type="text" class="qtytextbox" name="qtypartno4" value=""/>';
                echo '<input type="text" class="amounttextbox" name="costpartno4" value=""/>';
                echo '<br />';
                echo '<input type="text" class="partstextbox" name="partno5" value=""/>';
                echo '<label class="quanlabel" for="qtypartno5">Qty :</label>';
                echo '<input type="text" class="qtytextbox" name="qtypartno5" value=""/>';
                echo '<input type="text" class="amounttextbox" name="costpartno5" value=""/>';
                echo '<br />';
                echo '<input type="text" class="partstextbox" name="partno6" value=""/>';
                echo '<label class="quanlabel" for="qtypartno6">Qty :</label>';
                echo '<input type="text" class="qtytextbox" name="qtypartno6" value=""/>';
                echo '<input type="text" class="amounttextbox" name="costpartno6" value=""/>';
                echo '<br />';
                echo '<input type="text" class="partstextbox" name="partno7" value=""/>';
                echo '<label class="quanlabel" for="qtypartno7">Qty :</label>';
                echo '<input type="text" class="qtytextbox" name="qtypartno7" value=""/>';
                echo '<input type="text" class="amounttextbox" name="costpartno7" value=""/>';
                echo '<br />';}
                echo '</div>';
 
                echo '<div class="border6">';  
                echo '<label class="custnamelabel" for="custname">Labour:</label>';
                echo '<input type="text" class="qtytextbox" name="custname" value="" />';
                echo '<br />';
                echo '<label class="custnamelabel" for="jobdate">Trips Made:</label>';
                echo '<input class="qtytextbox" type="text" name="custphone" value="" />';
                echo '<br />';
                echo '</div>';
                
                echo '<div class="border7">';  
                echo '<label class="signedlabel" for="custname">Customer Signed:</label>';
                echo '<input type="checkbox" name="drivercheck" value="drivercheck" />';
                echo '<br />';
                echo '<label class="signedlabel" for="jobdate">Technician Signed:</label>';
                echo '<input type="checkbox" name="drivercheck" value="drivercheck" />';
                echo '<br />';
                echo '</div>';
                
                echo '<div class="border8">';  
                echo '<label class="custnamelabel" for="custname">Remarks:</label>';
                echo '<textarea rows="3" cols="75" name="notes"></textarea>'; 
                echo '<br />';
                
                echo '</div>';
                
                ?>
                <input class="submit" type="button" onclick="location.href='jobcardmenu.php';" name="jobbook" value="Job Card Menu">
                <br />
                <input class="submit" type="button" onclick="location.href='index.php';" name="logout" value="Exit"> 

        </form>

</body>
</html>
