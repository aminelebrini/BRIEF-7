<?php include __DIR__ . "/../controllers/profileDisplay.php" ?>
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
    <header class="bg-[#3C2877] p-3 flex flex-row">
        <h1>NovaCraft</h1>
        <div class="flex flex-row">
            <h2></h2>
            <img src="" alt="userphoto">
            <button>Log-out</button>
        </div>
    </header>

    <div class="display flex flex-col w-full">
        <nav class="flex flex-row items-center justify-evenly gap-5 mt-2">
            <a href="#">Dashboard</a>
            <a href="#">EMAILS</a>
        </nav>
        <div class="display2">
            <div class="userstab">
                <?php foreach($Users as $us): ?>
                    <div class="user flex flex-row items-center justify-center gap-3">
                        <img src="<?= htmlspecialchars($us['url']) ?>" class="w-[50px] h-[50px]" alt="">
                        <div>
                            <h1><?= htmlspecialchars($us['fullname']) ?></h1>
                            <p><?= htmlspecialchars($us['email']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>