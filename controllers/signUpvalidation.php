<?php
    include __DIR__ . "/../data/connect_db.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup']))
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $urlinp = $_POST['url'];
        $passwordinp = $_POST['password'];

        $query = "SELECT id FROM users WHERE email = ?";
        
        $check = mysqli_prepare($connect, $query);

        mysqli_stmt_bind_param($check, "s", $email);
        mysqli_stmt_execute($check);
        mysqli_stmt_store_result($check);

        if(mysqli_stmt_num_rows($check))
        {
            echo '<div class="popupsucess bg-red-600 p-5 fixed top-20 right-0">
                <h1 class="text-2xl text-white">Email already exists!</h1>
            </div>';
            return;
        }

        $passhached = password_hash($passwordinp, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (fullname, email, url, password) VALUES (?, ?, ?, ?)";

        $prepare = mysqli_prepare($connect, $query);

        mysqli_stmt_bind_param($prepare, "ssss", $fullname, $email,$urlinp, $passhached);

        if(mysqli_stmt_execute($prepare))
        {
             echo '<div class="popupsucess bg-green-500 p-5 fixed top-20 right-0">
                <h1 class="text-2xl text-white"><i class="fas fa-multiply text-2xl"></i> Your account has been successfully created !</h1>
            </div>';
        } else {
            echo '<div class="popupsucess bg-red-600 p-5 fixed top-20 right-0">
                <h1 class="text-2xl text-white"><i class="fas fa-multiply text-2xl"></i> Your account has not been created !</h1>
            </div>';
        }
    }
?>