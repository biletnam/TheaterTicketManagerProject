<?php
 //include "connection.php";
session_start();
    $var_value =  $_SESSION['Companyname'];
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "testdatabase";

$link =  mysqli_connect($servername, $username, $password, $dbname);
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 

$result =  mysqli_query($link, "SELECT firstname, lastname,  ticketnumber, email, phonenumber, seat, day, "
        . "time, address, company FROM seasonticket WHERE company = '$var_value'");
//mysqli_query($link,"SELECT * FROM seasonticket WHERE CompanyName ='$var_value' ");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Phone #</th>
<th>Address</th>
<th>Ticket #</th>
<th>Seat #</th>
<th>Day</th>
<th>Time</th>
<th>Edit</th>
<th>Delete</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phonenumber'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['ticketnumber'] . "</td>";
echo "<td>" . $row['seat'] . "</td>";
echo "<td>" . $row['day'] . "</td>";
echo "<td>" . $row['time'] . "</td>";
echo "<td><a href='javascript:void(0);' id='editLink'>Edit</a></td>";
echo "<td><a href='javascript:void(0);' id='editLink'>Delete</a></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link);

?>
