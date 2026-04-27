
<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }
?>

    <html>
        <head>
            <title>Home Page</title>
        </head>
        <body>
                <h1>Welcome Home  <?php echo $_SESSION['username'];?></h1>
                <a href="user_list.php">User List</a> |
                <a href="../controller/logout.php">Logout</a> 
        </body>
        </html>

