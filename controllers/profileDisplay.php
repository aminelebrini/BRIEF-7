<?php
include __DIR__ . "/../data/connect_db.php";
include __DIR__ . "/controllers/loginValidation.php";
if (!isset($_SESSION['id'])) {
    header("Location: /");
    exit();
}

$query  = "SELECT * FROM users WHERE status = 'user'";
$query2 = "SELECT * FROM contacts";

$result  = mysqli_query($connect, $query);
$result2 = mysqli_query($connect, $query2);

$UsersTabl = [];
$Emails = [];

if($result)
{
    while($Users = mysqli_fetch_assoc($result))
    {
        $UsersTabl[] = $Users;
    }
}
if ($result2) {
    while ($Email = mysqli_fetch_assoc($result2)) {
        $Emails[] = $Email;
    }
}
?>
