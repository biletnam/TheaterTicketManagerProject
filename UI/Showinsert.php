<?php
session_start();
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "testdatabase";
// Create connection
$link =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.<br>";
        $uploadOk = 0;
    }
//}
    // Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
    $uploadOk = 0;
}
$showname = filter_input(INPUT_POST,"showname");
$startDate = filter_input(INPUT_POST,"startDate");
$endDate = filter_input(INPUT_POST,"endDate");
$location = filter_input(INPUT_POST,"location");
//$companyName =filter_input(INPUT_POST,"Company");
$month = filter_input(INPUT_POST,"month");
$day = filter_input(INPUT_POST,"day");
$year =filter_input(INPUT_POST,"year");
$showingIN = filter_input(INPUT_POST,"showing");

$show_name = mysqli_real_escape_string($link, $showname);
$start_date = mysqli_real_escape_string($link, $startDate);
$end_Date = mysqli_real_escape_string($link, $endDate);
$locationDB = mysqli_real_escape_string($link, $location);
$Company_Name = $_SESSION['varname'];//mysqli_real_escape_string($link, $companyName);
$Month = mysqli_real_escape_string($link, $month);
$Day =mysqli_real_escape_string($link, $day);
$Year = mysqli_real_escape_string($link, $year);
$imagetmp= addslashes (file_get_contents($_FILES['fileToUpload']['tmp_name']));
$showId =com_create_guid();
$showing = mysqli_real_escape_string($link, $showingIN);
//$someDate = '11/27/2016';
$someDate ="$Year/$Month/$Day";
$someTime = '7:00';
$mysqli_get_users = mysqli_query($link,"SELECT * FROM showname where showName= '$showId' " );
$get_rows = mysqli_affected_rows($link);
if($get_rows >= 1)
{
    echo "Show exists: please pick a different Showname.<br>";
    echo "You are being redirected.<br>";
    header("refresh:3; url = CreateShow.php");
}
else
{
    if ($check !== false)
    {
        $sql = "INSERT INTO showName (showname,date, time, location,Company, image,showId, showing)
        VALUES ('$show_name','$someDate','$someTime','$locationDB','$Company_Name', '$imagetmp','$showId', '$showing')";
            if ($link->query($sql) === TRUE) 
            {
                echo "New record created successfully<br>";
                echo "You are being redirected.";
                header("refresh:3; url = Super.php");
            }
            else 
            {
                echo "Error: " . $sql . "<br>" . $link->error;
            }
    }
    else
    {
        echo "Show counld not be added to the database please try again.<br>";
        echo "You are being redirected.<br>";
        header("refresh:3; url = index.php");
    }
}
$link->close();