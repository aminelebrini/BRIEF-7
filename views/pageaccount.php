<?php include __DIR__ . "/../controllers/loginValidation.php" ?>
<?php include __DIR__ . "/../controllers/signUpvalidation.php" ?>

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
<body>
    <div class="signupform hidden" id="signupform">
            <h1>SIgn-Up</h1>
        <form method="POST">
            <div class="div flex flex-col">
                <label for="fullname">EMAIL</label>
                <input type="text" id="fullname" name="fullname" placeholder="FULL NAME" class="border-2 border-black" required>
            </div>
            <div class="div flex flex-col">
                <label for="email">EMAIL</label>
                <input type="email" id="email" name="email" placeholder="EMAIL" class="border-2 border-black" required>
            </div>
            <div class="div flex flex-col">
                <label for="url">IMAGE DE PROFILE</label>
                <div class="img flex flex-col">
                    <img src="" width="50px" height="50px">
                    <input type="url" id="url" name="url" class="border-2 border-black" placeholder="URL DE IMAGE">
                </div>
            </div>
            <div class="div flex flex-col">
                <label for="password">PASSWORD</label>
                <input type="password" id="password" name="password" class="border-2 border-black" placeholder="PASSWORD" required>
            </div>
            <div class="divfor flex flex-col">
                <a>Forget Password</a>
                <a>Do you have an account? You can <a id="creataccount" href="#">Log-in</a></a>
            </div>
            <button type="submit" name="signup">Sign-up</button>
        </form>
    </div>

    <div class="loginform" id="loginform">
            <h1>Login</h1>
        <form method="POST">
            <div class="div">
                <label for="email">EMAIL</label>
                <input type="email" id="email" name="emaillog" placeholder="EMAIL" class="border-2 border-black" required>
            </div>
            <div class="div">
                <label for="password">PASSWORD</label>
                <input type="password" id="password" name="passwordlog" placeholder="PASSWORD" class="border-2 border-black" required>
            </div>
            <div class="divfor">
                <a>Forget Password</a>
                <a>You don't have an account? You can <a id="loginaccount" href="#">create an account.</a></a>
            </div>
            <button type="submit" id="submittbtn" name="signin">Login</button>
        </form>
    </div>
    <script src="/Scripts/script.js"></script>
</body>
</html>