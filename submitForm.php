 <!DOCTYPE html>
<html>
<head>
  <title></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="$1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<style >
    body{
         width:100%;
        max-width:400px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: ;
    }
    table {
        width:100%;
        max-width:400px;
    border-collapse: collapse;
    border: 1px solid #ddd;
    align-items: center;
    justify-content: center;
   }
   tr{
       width: 100%;
   }
    td {
    padding: 1px;
    height: 12px;
    border-bottom: 1px solid #ddd;
    padding-left:10px;
    padding-right:10px;
    width:100%;
        
    }
    th{
     padding-right:10px;
    }
    
    .container{
        background-color: white;
        margin-top: 50px;
        border-radius: 20px;
         width:100%;
        max-width:400px;
        }
    .head{
        margin-left: 20px;
        margin-right:20px;
        color: #8b0000;
    }
    .lastdiscript{
      margin-left: 10px;
    }
    </style>
 <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "id11682759_junaidkottilil", "Mu/7034911822", "id11682759_localhost");
  $name = $_POST['name'];
$place = $_POST['place'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$fathername = $_POST['fathername'];
$course = $_POST['course'];
$address = $_POST['address'];
$district = $_POST['district'];
$sslcno = $_POST['sslcno'];
$laststudied = $_POST['laststudied'];
$contact1 = $_POST['contact1'];
$contact2 = $_POST['contact2'];
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Prepare an insert statement
$sql = "INSERT INTO admissiondetails (name, place, age, dob, fathername, course, address, district, sslcno, laststudied, contact1, contact2) VALUES ( '$name', '$place', '$age', '$dob', '$fathername', '$course', '$address', '$district', '$sslcno', '$laststudied', '$contact1', '$contact2')";
 

    
    // Set parameters
   
    // Attempt to execute the prepared statement
   if ($link->query($sql) === TRUE){
  ?>
  <div class="container"><div><h3 class="head">Application Submitted Successfully  </h3> </div>
        <table><tr>
        <td><h4>Name</h4></td><td><h4><?php echo $name; ?></h4> </td></tr>       
        <tr>
        <td><h4>admissio for :</h4></td><td><h4><?php echo $course; ?></h4></td></tr>
        <tr>
        <td><h4>SSLC_NO</h4></td><td><h4><?php echo $sslcno; ?> </h4></td></tr>
        <tr>
        <td><h4>Contact No :</h4></td><td><h4><?php echo $contact1; ?></h4></td></tr></table>
        <div class="lastdiscript">
        <center><h6>Dear <?php echo $name; ?> , <br>You are registered successfully<br>Attend interview on June-10</h6></center>
        </div></div> 
  <?php            
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
    }

 
// Close statement

 
// Close connection
mysqli_close($link);
?>


</body>
</html>










 
 
