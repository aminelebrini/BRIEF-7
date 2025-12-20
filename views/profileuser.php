<?php
include __DIR__ . "/../controllers/profileDisplay.php";
include __DIR__ . "/controllers/loginValidation.php";
include __DIR__ . "/../controllers/logout.php";

$Users = $_SESSION['user'];


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
            <?php if($Users['status'] === "User"): ?>
                <div class="flex flex-row items-center justify-center gap-3">
                    <img src="<?= htmlspecialchars($Users['url']) ?>" class="w-[40px] h-[40px] rounded-[50%]" alt="userphoto">
                    <form method="post">
                        <button type="submit" class="text-white" name="logout">Log-out</button>
                    </form>
                </div>
            <?php endif; ?>
    </header>

    <div class="display md:w-full flex md:flex-col md:items-center md:justify-center md:mt-4">
        <div class="bg-[url('https://img.freepik.com/premium-vector/geometric-gradient-technology-background_23-2149110132.jpg?semt=ais_hybrid&w=740&q=80')] relative h-48 md:h-[35vh] md:w-[95vw] bg-cover bg-center rounded-[20px]">
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

