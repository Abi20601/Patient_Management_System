<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" >
   <meta http-equiv="X-UA-Compatible" content="IE=edge" >
   <meta name="viewport" content="width=device-width, initial-scale=1.0" >
   <link rel="stylesheet" href="admin.css" >
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <title>Patient_details</title>
 </head>
 <?php 
    include "connection.php";
    $query="select * from patient";
    $result=mysql_query($query);
 ?>
 <body style="background-image: url('1.gif'); background-size: cover">
   <nav class="navbar">
     <!-- LOGO -->
     <div class="logo"><i class="material-icons" style="font-size:36px;">supervisor_account</i>&nbsp;  ADMIN</div>
     <!-- NAVIGATION MENU -->
     <ul class="nav-links">
       
       <!-- NAVIGATION MENUS -->
       <div class="menu">
         <li><a href="../index.html">Home</a></li>
         <li class="services">
           <a href="admin_patient_details.html">Patient</a>
           <!-- DROPDOWN MENU -->
           <ul class="dropdown">
             <li><a href="admin_patient_details.html">Details </a></li>
             <li><a href="admin_patient_prescriptions.html">Prescriptions</a></li>
             <li><a href="admin_patient_bills.html">Bills</a></li>
           </ul>
           <li class="services">
            <a href="admin_doctor_details.html">Doctor</a>
            <!-- DROPDOWN MENU -->
            <ul class="dropdown">
              <li><a href="admin_patient_details.html">Details </a></li>
              <li><a href="admin_doctor_patientscured.html">Patients Cured</a></li>
            </ul>
            <li class="services">
            <a href="admin_records_deaths.html">Records</a>
            <!-- DROPDOWN MENU -->
            <ul class="dropdown">
              <li><a href="admin_records_deaths.html">Deaths </a></li>
              <li><a href="admin_records_disease.html">Diseases</a></li>
            </ul>
            <li><a href="admin_contact.html">Contact</a></li>
         </li>
     </ul>
   </nav><br>
   <div class="form-container" >
       <h3>Patients Details</h3><br>
    <form action="#">
      <label for="Pname">Patient name:</label>
      <input type="text" id="fname" name="fname" value="Patient name.."><br>
      <label for="Rname">Room No:</label>
      <input type="text" id="Rname" name="Rname" value="Room no.."><br>
      <label for="P_phno">Phone number</label>
      <input type="text" id="P_phno" name="P_phno" value="patient phno..."><br><br>
      <a href="end.html"><input type="button" value="Submit"></a>
    </form> 
   </div>
   <table> 
       <tr>
           <th>ID</th>
           <th>Name</th>
           <th>ph_no</th>
           <th>city</th>
       </tr>
       <?php 
            while($rows=mysql_fetch_array($result))
            {   ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['p_no']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                </tr>
        <?php
            }
        ?>
   </table>
 </body>
</html>