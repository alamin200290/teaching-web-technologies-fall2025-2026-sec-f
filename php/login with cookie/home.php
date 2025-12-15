<?php
    session_start();
    if(isset($_COOKIE['status']) !== true){
        header('location: login.html');
    }
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
        <h1>Welcome Home! <?php echo $_SESSION['username'];?></h1>
        <a href="logout.php"> logout</a>
</body>
</html>