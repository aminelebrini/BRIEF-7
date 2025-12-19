<?php
session_start();
include __DIR__ . "/../data/connect_db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signin'])) {

    $email = $_POST['emaillog'];
    $passwordlogi = $_POST['passwordlog'];

    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($passwordlogi, $user['password'])) {

        $_SESSION['id'] = $user['id'];
        $_SESSION['user'] = $user;
      
            if ($user['status'] === 'admin') {
                $_SESSION['user'] = $user;
                header("Location: /profileadmin");
            
            } else {
                $_SESSION['user'] = $user;
                header("Location: /profileuser");
            }
    }

}
?>