<?php
    include __DIR__ . "/../data/connect_db.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $url = $_POST['url'];
        $password = $_POST['password'];

        $passhached = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (fullname, email, url, password) VALUES (?, ?, ?, ?)";

        $prepare = mysqli_prepare($connect, $query);

        mysqli_stmt_bind_param($prepare, "ssss", $fullname, $email,$url, $passhached);

        if(mysqli_stmt_execute($prepare))
        {
             echo '<div class="popupsucess bg-green-500 p-5 fixed top-20 right-0">
                <h1 class="text-2xl text-white"><i class="fas fa-multiply text-2xl"></i> Your account has been successfully created !</h1>
            </div>';
        } else {
            echo '<div class="popupsucess bg-red-500 p-5 fixed top-20 right-0">
                <h1 class="text-2xl text-white"><i class="fas fa-multiply text-2xl"></i> Your account has not been created !</h1>
            </div>';
        }
    }
?>