<?php
$con = mysqli_connect("localhost","root","","bank");
if($con){
    // echo "connection successful";
}
else{
die("sorry we failed to connect:" .mysqli_connect_error());
} 
?>