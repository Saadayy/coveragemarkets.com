<?php

$servername = "localhost";
$username = "u201170674_stellar";
$password = "LoGFC;GLQa:6";
$dbname = "u201170674_stellar_db";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['submit']))
{
      date_default_timezone_set('US/Eastern');  
    $currenttime = date('Y-m-d h:i:s'); 
$phone = $_REQUEST['phone'];
$zipcode = $_REQUEST['zipcode'];
$leadid = $_REQUEST['universal_leadid'];
$campaign_id = $_REQUEST['campaign_id'];
$domain_id= $_REQUEST['domain_name'];
  $created_at = $currenttime;

    $sql = "INSERT INTO  leads (lead_unqiue_id,domain_id,phone,zipcode,created_at,updated_at) VALUE ('$leadid','18','$phone','$zipcode','$created_at','$updated_at')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Thankyou for filling out the plan review form. One of our licensed insurance agent will contact you shortly. ');</script>";
  echo "<script>window.location.href='index.php';</script>";
  exit;
} else {
 echo "<script>alert('Form Unable to Submit');</script>";
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
     mysqli_close($conn);
  
  }


?>