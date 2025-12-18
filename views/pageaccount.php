<?php include __DIR__ . "/../controllers/loginValidation.php"; ?>
<?php include __DIR__ . "/../controllers/signUpvalidation.php"; ?>

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

<body class="bg-gradient-to-tr from-[#3F2A78] via-[#5A3FB5] to-[#221C33] min-h-screen flex items-center justify-center">

<div id="signupform" class="signupform hidden flex flex-col md:flex-row w-full max-w-7xl mx-auto p-4 md:rounded-br-[20px] md:rounded-tr-[20px] h-[700px]">

    <div class="hidden md:flex flex-col justify-center items-center
                    bg-[#221C33] text-white p-6 w-1/2
                    md:rounded-bl-[20px] md:rounded-tl-[20px]
                    gap-16 h-[650px] shadow-lg">
            <h1 class="text-[50px] font-bold">NovaCraft</h1>
            <img src="https://topskilled.in/wp-content/uploads/2025/04/uiux.png"
                 alt="UI Illustration"
                 class="max-w-full h-auto rounded-md">
    </div>
    
    <div class="flex flex-col justify-center items-center w-full md:w-1/2 p-6 md:p-10 bg-[#FEFCED] shadow-lg md:rounded-br-[20px] md:rounded-tr-[20px] h-[650px] gap-6">
        <h1 class="text-[#0C0904] text-[40px] font-bold">Sign-up</h1>

            <form method="POST" class="w-full flex flex-col gap-5">

                <div class="flex flex-col">
                    <label class="text-[#56554C] mb-1">FULL NAME</label>
                    <input type="text" name="fullname" required
                        class="border-2 p-3 rounded-[10px] w-full
                                border-[#BDBDB9] outline-none
                                focus:border-[#7940E7]
                                 focus:ring-2 focus:ring-[#7940E7]/30"
                        placeholder="Your name">
                </div>

                <div class="flex flex-col">
                    <label class="text-[#56554C] mb-1">EMAIL</label>
                    <input type="email" name="email" required
                        class="border-2 p-3 rounded-[10px] w-full
                                border-[#BDBDB9] outline-none
                                focus:border-[#7940E7]
                                focus:ring-2 focus:ring-[#7940E7]/30"
                        placeholder="Email address">
                </div>

                <div class="flex flex-col">
                    <label class="text-[#56554C] mb-1">PROFILE IMAGE (URL)</label>
                    <input type="url" name="url"
                        class="border-2 p-3 rounded-[10px] w-full
                                border-[#BDBDB9] outline-none"
                        placeholder="https://image.com/avatar.png">
                </div>

                <div class="flex flex-col">
                    <label class="text-[#56554C] mb-1">PASSWORD</label>
                    <input type="password" name="password" required
                        class="border-2 p-3 rounded-[10px] w-full
                                border-[#BDBDB9] outline-none
                                focus:border-[#7940E7]
                                focus:ring-2 focus:ring-[#7940E7]/30"
                        placeholder="Password">
                </div>

                <p class="text-sm text-[#56554C]">
                    Already have an account?
                    <button type="button" id="creataccount"
                            class="underline text-blue-600 hover:text-blue-800">
                        Log-in
                    </button>
                </p>

                <button type="submit" name="signup"
                        class="bg-[#7940E7] text-white text-[20px]
                            py-3 rounded-[10px]
                            hover:bg-[#4B239C]
                            active:scale-95 transition">
                    Create account
                </button>

            </form>
        </div>
    </div>
<div class="loginform flex flex-col md:flex-row w-full max-w-7xl mx-auto p-4 md:p-10">

        <div class="hidden md:flex flex-col justify-center items-center
                    bg-[#221C33] text-white p-6 w-1/2
                    md:rounded-bl-[20px] md:rounded-tl-[20px]
                    gap-16 h-[600px]">
            <h1 class="text-[50px] font-bold">NovaCraft</h1>
            <img src="https://topskilled.in/wp-content/uploads/2025/04/uiux.png"
                 alt="UI Illustration"
                 class="max-w-full h-auto rounded-md">
        </div>

        <div class="flex flex-col justify-center items-center
                    w-full md:w-1/2 p-5 md:p-8
                    bg-[#FEFCED] shadow-lg rounded-[20px]
                    md:rounded-br-[20px] md:rounded-tr-[20px]
                    h-[600px] gap-3">

            <h1 class="text-[#0C0904] text-[40px] font-bold">Log-in</h1>

            <form method="POST" class="w-full flex flex-col gap-6">
                <div class="flex flex-col">
                    <label for="email" class="text-[#56554C] mb-1">EMAIL</label>
                    <input type="email" id="email" name="emaillog" required
                           class="border-2 p-3 rounded-[10px] w-full
                                  border-[#BDBDB9] outline-none
                                  focus:border-[#7940E7]
                                  focus:ring-2 focus:ring-[#7940E7]/30"
                           placeholder="EMAIL">
                </div>

                <div class="flex flex-col">
                    <label for="password" class="text-[#56554C] mb-1">PASSWORD</label>
                    <input type="password" id="password" name="passwordlog" required
                           autocomplete="current-password"
                           class="border-2 p-3 rounded-[10px] w-full
                                  border-[#BDBDB9] outline-none
                                  focus:border-[#7940E7]
                                  focus:ring-2 focus:ring-[#7940E7]/30"
                           placeholder="PASSWORD">
                </div>

                <div class="text-sm text-[#56554C] flex flex-col gap-2">
                    <a href="#" class="hover:underline">Forget Password?</a>
                    <p>
                        You don't have an account?
                        <button type="button" id="loginaccount"
                                class="underline text-blue-600 hover:text-blue-800 bg-transparent">
                            Create one
                        </button>
                    </p>
                </div>

                <button type="submit" name="signin"
                        class="bg-[#7940E7] text-white text-[20px]
                               py-3 rounded-[10px]
                               hover:bg-[#4B239C]
                               active:scale-95 transition">
                    Log-in
                </button>

            </form>
        </div>

    </div>

    <script src="/Scripts/script.js"></script>
</body>
</html>
