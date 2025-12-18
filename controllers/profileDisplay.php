<?php
include __DIR__ . "/../data/connect_db.php";

$query = "SELECT * FROM users";
$result = mysqli_query($connect, $query);

$Users = [];
if($result)
{
    while ($User = mysqli_fetch_assoc($result)) {
        $Users[] = $User; 
    }
}
?>
