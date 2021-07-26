<?php

    session_start();
    $userId = "";
    if (isset($_SESSION["uid"]))
    {
        $userId = $_SESSION["uid"];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1 style="text-align: center;">Welcome to the system <?php echo $userId;?> </h1>
    <br><br>
    <h3 style="text-align: center;"><a href="logout.php">Logout</a></h3>
</body>
</html>