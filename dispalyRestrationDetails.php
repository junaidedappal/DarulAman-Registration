<style>


  a:link {
  color: red;
  text-decoration: none;
}
a:visited {
  text-decoration: none;
  color: black;
}
    table{
        border: 1px solid black;
          border-collapse: collapse;

    }
    tr:nth-child(even) 
    {background-color: #f2f2f2;}

    td
    {
    padding: 5px;
    border-bottom: 1px solid #ddd;
    
        }
     th
     {
         
     background-color: #4CAF50;
     color: white;
     padding: 10px;
     text-align: left;
     border: 1px solid black;

}
</style>


<table>
    <tr>
<th>Name </th>
<th>Place</th>
<th>Age</th>
<th>DateOfBirth</th>
<th>fathername</th>
<th>Course</th>
<th>Address</th> 
<th>District</th>
<th>SSLC_no</th>
<th>school_studied</th>
<th>contact1</th>
<th>contact2</th>

    </tr>

<?php
                    $host="localhost";
                    $user="id11682759_junaidkottilil";
                    $password="Mu/7034911822";
                    $dB="id11682759_localhost";
                    $conn = mysqli_connect($host, $user,  $password, $dB);
                     $sql = "SELECT * FROM `admissiondetails`";
                    if ($result=mysqli_query($conn,$sql))
                        {
                            while ($row=mysqli_fetch_row($result))
                                { ?>
                <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[5]; ?></td>
                    <td><?php echo $row[6]; ?></td>
                    <td><?php echo $row[7]; ?></td>
                    <td><?php echo $row[8]; ?></td>
                    <td><?php echo $row[9]; ?></td>
                    <td><a href="tel:<?php echo $row[10]; ?>"><?php echo $row[10]; ?></a></td>
                    <td><a href="tel:<?php echo $row[11]; ?>"><?php echo $row[11]; ?></a></td>
                     
                   
                </tr>
                <?php }} ?>
    </table>


