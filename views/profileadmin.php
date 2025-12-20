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
            <?php if($Users['status'] === "Admin"): ?>
                <div class="flex flex-row items-center justify-center gap-3">
                    <img src="<?= htmlspecialchars($Users['url']) ?>" class="w-[40px] h-[40px] rounded-[50%]" alt="userphoto">
                    <form method="post">
                        <button type="submit" class="text-white" name="logout">Log-out</button>
                    </form>
                </div>
            <?php endif; ?>
    </header>

    <div class="display grid h-screen md:grid-cols-[150px_1fr_1fr_1fr] grid-cols-1 grid-rows-[auto_1fr]">
        <nav class="col-span-1 md:col-span-1 md:row-span-4 flex flex-row md:flex-col items-center md:items-start justify-evenly md:justify-start gap-5 p-4 h-auto md:h-screen bg-[#3C2877]">
            <div class="md:mt-4 flex md:flex-col md:items-start md:justify-start flex-row items-center justify-evenly gap-5 w-full">
                <a id="dash" class="text-white md:text-[20px] cursor-pointer">Dashboard</a> 
                <a id="email" class="text-white md:text-[20px] cursor-pointer">EMAILS</a>
                <a id="profile" class="text-white md:text-[20px] cursor-pointer">PROFILE</a>
            </div>
        </nav>

        <div class="display2 col-span-1 md:col-start-2 md:row-start-1 md:row-span-4 flex flex-col items-center">
        
            <div class="userstab hidden mt-5 flex flex-wrap items-center justify-center gap-4 w-full">
                <?php foreach ($UsersTab as $Ust): ?>
                    <div class="user flex flex-col items-center justify-center gap-3 
                            w-[90%] sm:w-[45%] md:w-[200px] 
                            h-auto md:h-[200px] 
                            p-3 rounded-[20px] bg-[#3C2877] transform transition duration-300 hover:scale-105">

                        <img src="<?= htmlspecialchars($Ust['url']) ?>"
                            class="w-[80px] h-[80px] sm:w-[90px] sm:h-[90px] md:w-[100px] md:h-[100px] border-[4px] border-white rounded-full"
                            alt="userphoto">

                        <div class="text-center text-white">
                            <h1 class="text-base sm:text-lg md:text-xl"><?= htmlspecialchars($Ust['fullname']) ?></h1>
                            <p class="text-sm sm:text-base"><?= htmlspecialchars($Ust['email']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="conatcttab hidden mt-5 ml-5 flex flex-col gap-3 w-full">
                <?php foreach ($Emails as $Em): ?>
                    <div class="user flex flex-col gap-2 w-full p-4 bg-gray-100 rounded-[15px]">
            
                        <h1 class="text-base font-medium">
                            <?= htmlspecialchars($Em['ffullname']) ?>
                        </h1>

                        <p class="text-sm text-gray-700">
                            <?= htmlspecialchars($Em['message']) ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="display3 hidden w-full md:h-screen md:mt-4 md:col-start-3 md:col-end-4">
            <div class="bg-[url('https://img.freepik.com/premium-vector/geometric-gradient-technology-background_23-2149110132.jpg?semt=ais_hybrid&w=740&q=80')] relative h-48 md:h-[35vh] md:w-[85vw] bg-cover bg-center rounded-[20px]">
                <div class="absolute inset-0 bg-black/30 rounded-[20px]"></div>
                    <div class="relative h-full flex flex-row items-center gap-6 px-6">
                        <img src="<?= htmlspecialchars($Users['url']) ?>" class="w-24 h-24 md:w-40 md:h-40 rounded-full object-cover" alt="userphoto">
                        <div class="info flex flex-col items-start justify-evenly gap-[0px] md:w-full">
                            <h1 class="text-white md:text-[40px] font-bold"> <?= htmlspecialchars($Users['fullname']) ?></h1>
                            <p class="text-white md:text-[20px]"> <?= htmlspecialchars($Users['email']) ?></p>
                        </div>
                        <div class="md:w-[40%] flex flex-col items-start justify-center">
                            <h1 class="text-[40px] text-white font-bold">Created At:</h1>
                            <p class="text-white"><?= htmlspecialchars($Users['created_at']) ?></p>
                            <h1 class="text-[40px] text-white font-bold">Status:</h1>
                            <p class="text-white md:text-[20px]"> <?= htmlspecialchars($Users['status']) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    <script src="/Scripts/script.js"></script>
</body>
</html>

