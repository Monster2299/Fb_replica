<?php
if(isset($_POST['submit1'])){
    $username = $_POST['userid'];
    $password = $_POST['password'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>facebook details</title>
</head>
<body>

<table>
    <tr>
<th>
    userid
</th>
<th>
password
</th>
</tr>
<tr>
    <td>
        <?php  echo $username; ?>
    </td>
    <td>
    <?php   echo $password;  ?>
    </td>
</tr>
</table>


  



</body>
</html>

