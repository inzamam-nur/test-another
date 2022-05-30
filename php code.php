<?php
include "db.php";
if($_POST['fname']!="" && $_POST['lname']!="")
{
    //echo $_POST['fname']." ".$_POST['lname'];
    $connection=new db();
    $connobj=$connection->OpenCon();
    $connection->Insert($connobj,$_POST["fname"],$_POST["lname"]);
    $connection->CloseCon($connobj);
}
else
{
    echo "First name and last name can not be empty.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php code.php"></form>
    <table>
            <tr>
                <td>First Name: </td>
                <td><input type="text" id="fname"></td>
            </tr>
            <tr>
                <td>Last Name: </td>
                <td><input type="text" id="lname"></td>
            </tr>
            <tr>
                <td><button type="button" >Insert Data</button></td>
            </tr>
        </table>
</body>
</html>