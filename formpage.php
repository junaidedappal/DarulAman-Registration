 <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect(....);
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
        echo "APPLICATION SUBMITTED SUCCESSFULLY.
         ";
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
    }

 
// Close statement

 
// Close connection
mysqli_close($link);
?>












 
 
