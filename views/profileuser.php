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

    <div class="flex flex-col items-center justify-center mt-7 md:mt-4 w-full">
    <div class="relative bg-[url('https://img.freepik.com/premium-vector/geometric-gradient-technology-background_23-2149110132.jpg?semt=ais_hybrid&w=740&q=80')] w-[95%] md:w-[95vw] h-64 md:h-[35vh] bg-cover bg-center rounded-2xl">
        
        <div class="absolute inset-0 bg-black/30 rounded-2xl"></div>
        <div class="absolute inset-0 h-full flex flex-col md:flex-row items-center justify-between gap-1 px-6 py-4">  
            <img src="<?= htmlspecialchars($Users['url']) ?>" 
                 class="w-[100px] h-[100px] md:w-[150px] md:h-[150px] rounded-full object-cover border-2 border-white" 
                 alt="userphoto">
            
            <div class="flex flex-col items-start justify-center gap-1 md:w-1/2">
                <h1 class="text-white text-xl md:text-4xl font-bold"><?= htmlspecialchars($Users['fullname']) ?></h1>
                <p class="text-white text-sm md:text-xl"><?= htmlspecialchars($Users['email']) ?></p>
                <div class="online flex flex-row items-center justify-evenly gap-3">
                    <div class="w-[14px] h-[14px] rounded-full bg-green-600"></div>
                    <h1 class="text-white">Available</h1>
                </div>
            </div>
            
            <div class="flex flex-row md:flex-col items-start justify-between gap-3 w-full md:w-1/3 text-white">
                <div class="flex flex-col items-start">
                    <h2 class="text-sm md:text-[40px] font-bold">Created At:</h2>
                    <p class="text-xs md:text-[30px]"><?= htmlspecialchars($Users['created_at']) ?></p>
                </div>
                <div class="flex flex-col items-start">
                    <h2 class="text-sm md:text-[40px] font-bold">Status:</h2>
                    <p class="text-xs md:text-[30px]"><?= htmlspecialchars($Users['status']) ?></p>
                </div>
            </div>

        </div>
    </div>
</div>


    <script src="/Scripts/script.js"></script>
</body>
</html>

