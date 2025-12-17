<?php
    include __DIR__ . "/../data/connect_db.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE email = '$email'";
        $resul = mysqli_query($connect, $query);
        $user = mysqli_fetch_assoc($resul);

        print_r($user);
    }
?>

