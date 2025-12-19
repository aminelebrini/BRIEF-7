<?php
include __DIR__ . "/../controllers/profileDisplay.php";
include __DIR__ . "/../controllers/loginValidation.php";
include __DIR__ . "/../controllers/logout.php";

$Users = $_SESSION['user'];
$UsersTab = $UsersTabl ?? [];
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
            <?php if($Users['status'] === "admin"): ?>
                <div class="flex flex-row items-center justify-center gap-3">
                    <img src="<?= htmlspecialchars($Users['url']) ?>" class="w-[40px] h-[40px] rounded-[50%]" alt="userphoto">
                    <form method="post">
                        <button type="submit" class="text-white" name="logout">Log-out</button>
                    </form>
                </div>
            <?php endif; ?>
    </header>

    <div class="display grid h-screen md:grid-cols-[150px_1fr_1fr_1fr] grid-col-4 grid-rows-4">
        <nav class="col-span-4 md:col-span-1 md:row-span-4
            flex flex-row md:flex-col
            items-center md:items-start
            justify-evenly md:justify-start
            gap-5
            p-4
            h-auto md:h-screen
            bg-transparent md:bg-[#3C2877]">

            <div class="md:mt-4 flex md:flex-col md:items-start md:justify-start flex-row items-center justify-evenly gap-5">
                <a id="dash" class="text-white md:text-[20px] cursor-pointer">Dashboard</a> 
                <a id="email" class="text-white md:text-[20px] cursor-pointer">EMAILS</a>
            </div>
        </nav>

        <div class="display2 md:col-start-2 md:row-start-1 md:row-span-4">
            <div class="userstab hidden mt-5 flex flex-wrap items-center justify-center gap-4">

                <?php foreach ($UsersTab as $Ust): ?>
                    <div class="user flex flex-col items-center justify-center gap-3 
                             w-[90%] md:w-[200px] 
                             h-auto md:h-[200px] 
                             p-3 rounded-[20px] bg-[#3C2877]">

                     <img src="<?= htmlspecialchars($Ust['url']) ?>"
                          class="md:w-[100px] md:h-[100px] border-[4px] border-white rounded-full"
                          alt="userphoto">

                        <div class="text-center text-white">
                            <h1><?= htmlspecialchars($Ust['fullname']) ?></h1>
                            <p class="text-sm"><?= htmlspecialchars($Ust['email']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="conatcttab hidden mt-5 flex flex-col items-center justify-center gap-4">
                <?php foreach ($Emails as $Em): ?>
                    <div class="user flex flex-col items-start justify-center gap-3 
                                bg-gray-100 w-[90%] p-3 rounded-[20px]">
                        <h1><?= htmlspecialchars($Em['ffullname']) ?></h1>
                        <p><?= htmlspecialchars($Em['message']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <script src="/Scripts/script.js"></script>
</body>
</html>

