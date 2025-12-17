<?php
    session_start();
    include __DIR__ . "/../data/connect_db.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signin']))
    {
        $email = $_POST['emaillog'];
        $passwordlogi = $_POST['passwordlog'];

        $query = "SELECT * FROM users WHERE email = '$email'";
        $declar = mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($declar, "s", $email);
        mysqli_stmt_execute($declar);
        $resul = mysqli_stmt_get_result($declar);
        $user = mysqli_fetch_assoc($resul);

        
        if(password_verify($passwordlogi, $user['password']))
        {
            $_SESSION['user'] = [
                'id' => $user['id'],
                'fullname' => $user['fullname'],
                'email' => $user['email'],
                'url' => $user['url']
            ];

            if(isset($_SESSION))
            {
                header("Location: /profile");
                exit;
            }
        }
        
    }
?>

