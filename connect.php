<?php
$conn =mysqli_connect("localhost","root","","net_banking");
if($conn){
echo "connection success";
}
else{
echo "connection not success";
}
?>