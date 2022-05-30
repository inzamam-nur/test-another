<?php
class db{
 
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "finaldb";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    
    return $conn;
 }
 function Insert($conn,$fname,$lname)
 {
    $sql="INSERT INTO sample(first_name,last_name) VALUES('$fname','$lname')";
    if($conn->query($sql)===TRUE)
    {
        
        echo "New record created successfully";
    }
    else
    {
        echo "Error: ".$sql."<br>".$conn->error;
    }
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>