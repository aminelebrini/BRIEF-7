<?php include __DIR__ . "/../controllers/conatctValidation.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>NovaCraft</title>
</head>
<body class="h-screen flex flex-col justify-between">
<?php include __DIR__ . "/../templates/header.php"?>
<?php include __DIR__ . "/../templates/side-bar.php"?>
<div class="contain p-10 flex flex-col items-center justify-center md:w-full md:justify-evenly gap-10 md:flex-row md:gap-15">
    <div class="md:w-full flex flex-col items-center justify-evenly md:gap-[20px] text-center md:text-left p-6 md:p-0">
    <h1 class="text-[50px] md:text-[80px] font-bold text-[#3C2877]">Contact Us</h1>
    <p class="text-[16px] md:text-[30px] text-[#3C2877] max-w-[900px]">
        Have a project in mind or just want to say hello? Fill out the form, and our team at NovaCraft Studio will respond promptly.<br>
        We’re excited to hear from you and bring your ideas to life!
    </p>
    </div>

    <div class="w-full flex flex-col items-center justify-center gap-10 p-6 rounded-[20px] md:w-full mx-auto">

    <form method="POST" class="w-full max-w-2xl flex flex-col gap-5">
        <div class="flex flex-col">
            <label for="fullname" class="text-base sm:text-lg md:text-xl font-medium">FULL NAME</label>
            <input 
                class="border-2 border-[#3C2877] rounded-lg p-3 sm:p-4 focus:outline-none focus:ring-2 focus:ring-[#3C2877]" 
                name="name" type="text" id="fullname" placeholder="FULL NAME"/>
            <p class="text-red-500 text-sm mt-1"><?= $nameErr; ?></p>
        </div>

        <div class="flex flex-col">
            <label for="email" class="text-base sm:text-lg md:text-xl font-medium">EMAIL</label>
            <input 
                class="border-2 border-[#3C2877] rounded-lg p-3 sm:p-4 focus:outline-none focus:ring-2 focus:ring-[#3C2877]" 
                name="email" type="email" id="email" placeholder="EMAIL"/>
            <p class="text-red-500 text-sm mt-1"><?= $emailErr ?></p>
        </div>

        <div class="flex flex-col">
            <label for="message" class="text-base sm:text-lg md:text-xl font-medium">MESSAGE</label>
            <textarea 
                class="border-2 border-[#3C2877] rounded-lg p-3 sm:p-4 resize-none h-40 sm:h-48 focus:outline-none focus:ring-2 focus:ring-[#3C2877]" 
                name="message" id="message" placeholder="MESSAGE"></textarea>
            <p class="text-red-500 text-sm mt-1"><?= $messageErr ?></p>
        </div>

        <div class="flex flex-row w-full justify-center md:justify-end">
            <button 
                type="submit" 
                class="border-2 border-[#3C2877] w-40 h-12 rounded-lg text-[#3C2877] font-semibold 
                       hover:bg-[#3C2877] hover:text-white transition-all duration-300 ease-in-out">
                SEND
            </button>
        </div>
    </form>
</div>

</div>
    <?php include __DIR__ . "/../templates/footer.php" ?>
    <script src="/Scripts/script.js"></script>
</body>
</html>