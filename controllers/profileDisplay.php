<?php
include __DIR__ . "/../data/connect_db.php";

$query  = "SELECT * FROM users";
$query2 = "SELECT * FROM contacts";

$result  = mysqli_query($connect, $query);
$result2 = mysqli_query($connect, $query2);

$Users  = [];
$Emails = [];

if ($result) {
    while ($User = mysqli_fetch_assoc($result)) {
        $Users[] = $User;
    }
}

if ($result2) {
    while ($Email = mysqli_fetch_assoc($result2)) {
        $Emails[] = $Email;
    }
}
?>
