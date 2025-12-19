<?php
include __DIR__ . "/../controllers/profileDisplay.php";
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
            <?php if($Users['status'] === "user"): ?>
                <div class="flex flex-row items-center justify-center gap-3">
                    <img src="<?= htmlspecialchars($Users['url']) ?>" class="w-[40px] h-[40px] rounded-[50%]" alt="userphoto">
                    <form method="post">
                        <button type="submit" class="text-white" name="logout">Log-out</button>
                    </form>
                </div>
            <?php endif; ?>
    </header>

    <div class="displayuser w-full">
        <div class="display2user">
            <div class="userstab mt-5 flex flex-row items-center justify-center">
                <div class="user flex flex-row items-center justify-start gap-3 bg-gray-100 w-[90%] p-3 rounded-[20px]">
                    <img src="<?= htmlspecialchars($Users['url']) ?>" class="w-[50px] h-[50px] rounded-[50%]" alt="userphoto">
                    <div>
                        <h1><?= htmlspecialchars($Users['fullname']) ?></h1>
                        <p><?= htmlspecialchars($Users['email']) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/Scripts/script.js"></script>
</body>
</html>

