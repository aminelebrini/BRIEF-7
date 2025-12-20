<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>NovaCraft</title>
</head>

<body class="flex flex-col min-h-screen w-full">

    <?php include __DIR__ . "/../templates/header.php" ?>
    <?php include __DIR__ . "/../templates/side-bar.php" ?>

    <div class="flex-grow flex flex-col items-center justify-center text-center px-4">
        <h1 class="text-6xl font-bold text-[#3C2877]">404</h1>
        <h2 class="text-4xl font-semibold text-[#3C2877] mt-2">Page Not Found</h2>
        <p class="text-xl md:text-2xl text-[#3C2877] mt-4 max-w-xl">
            Sorry, the page you are looking for doesn’t exist.
        </p>

        <a href="/home" class="mt-6 px-6 py-3 rounded-lg bg-[#3C2877] text-white font-medium hover:bg-[#2f1f5e] transition"> Go Back Home</a>
    </div>

    <?php include __DIR__ . "/../templates/footer.php" ?>

    <script src="/Scripts/script.js"></script>
</body>
</html>
