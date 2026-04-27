<?php
    session_start();
    $users =[
        ['id'=>1, 'username'=>'alamin', 'email'=>'alamin@aiub.edu'],
        ['id'=>2, 'username'=>'xyz', 'email'=>'xyz@aiub.edu'],
        ['id'=>3, 'username'=>'abc', 'email'=>'alamin@aiub.edu'],
        ['id'=>4, 'username'=>'pqr', 'email'=>'alamin@aiub.edu'],
        ['id'=>5, 'username'=>'xyz', 'email'=>'alamin@aiub.edu'],
    ];

    $_SESSION['users']=$users;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
        <h1>List of User </h1>
        <a href="home.php">Back</a> |
        <a href="../controller/logout.php">Logout</a> 
        <br>

        <table border=1>
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>ACTION</th>
            </tr>
        <?php foreach($users as $user){   ?>
            <tr>
                <td><?php echo $user['id'];?></td>
                <td><?=$user['username']?></td>
                <td><?=$user['email']?></td>
                <td>
                    <a href='edit.php?id=<?=$user['id']?>'> EDIT </a> |
                    <a href='delete.php'> DELETE </a> |
                    <a href='details.php'> DETAILS </a>
                </td>
            </tr>

        <?php } ?>
        </table>
</body>
</html>