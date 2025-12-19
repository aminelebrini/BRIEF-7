<?php
include __DIR__ . "/../controllers/profileDisplay.php";
include __DIR__ . "/../controllers/logout.php";

$Users = $Users ?? [];
$Emails = $Emails ?? [];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>NovaCraft WorkSpace</title>
</head>
<body>
    <header class="bg-[#3C2877] p-3 flex flex-row items-center justify-between">
        <h1 class="text-[20px] text-white font-bold">NovaCraft</h1>
        <?php foreach($Users as $us): ?>
            <?php if($us['status'] === "admin"): ?>
                <div class="flex flex-row items-center justify-center gap-3">
                    <img src="<?= htmlspecialchars($us['url']) ?>" class="w-[40px] h-[40px] rounded-[50%]" alt="userphoto">
                    <form method="post">
                        <button type="submit" class="text-white" name="logout">Log-out</button>
                    </form>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </header>

    <div class="display grid md:grid-cols-[150px_1fr_1fr_1fr] grid-col-4 grid-rows-4 w-full">
        <nav class="col-span-4 row-span-1 md:col-span-1 md:row-span-3 flex flex-row md:flex-col items-center justify-evenly md:justify-start gap-5 mt-2 md:mt-0 h-auto md:h-screen bg-transparent md:bg-[#3C2877]">
            <div class="md:mt-4 flex md:flex-col md:items-start md:justify-start flex-row items-center justify-evenly gap-5">
                <a id="dash" class="text-white md:text-[20px] cursor-pointer">Dashboard</a> 
                <a id="email" class="text-white md:text-[20px] cursor-pointer">EMAILS</a>
            </div>
        </nav>

        <div class="display2 md:col-start-2 md:row-end-4 md:row-start-1 md:row-end-4">
            <div class="userstab hidden mt-5 flex flex-row items-center justify-center">
                <?php foreach($Users as $us): ?>
                <div class="user flex flex-row items-center justify-start gap-3 bg-gray-100 w-[90%] p-3 rounded-[20px]">
                    <img src="<?= htmlspecialchars($us['url']) ?>" class="w-[50px] h-[50px] rounded-[50%]" alt="userphoto">
                    <div>
                        <h1><?= htmlspecialchars($us['fullname']) ?></h1>
                        <p><?= htmlspecialchars($us['email']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>


            <div class="conatcttab hidden mt-5 flex flex-col items-center justify-center gap-4">
                <?php foreach($Emails as $Em): ?>
                <div class="user flex flex-col items-start justify-center gap-3 bg-gray-100 w-[90%] p-3 rounded-[20px]">
                    <div class="flex flex-col items-start justify-center">
                        <h1 class="text-black-500"><?= htmlspecialchars($Em['ffullname']) ?></h1>
                        <p  class="text-black-500"><?= htmlspecialchars($Em['message']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <script src="/Scripts/script.js"></script>
</body>
</html>

