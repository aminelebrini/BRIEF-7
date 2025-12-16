<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>NovaCraft</title>
</head>
<body>
    <?php include __DIR__ . "/../controllers/loginValidation.php" ?>
    <?php include __DIR__ . "/../controllers/signUpvalidation.php" ?>
    <div class="signupform">
            <h1>SIgn-Up</h1>
        <form method="POST" action="signup">
            <div class="div flex flex-col">
                <label for="fullname">EMAIL</label>
                <input type="text" id="fullname" name="fullname" placeholder="FULL NAME" class="border-2 border-black" required>
            </div>
            <div class="div flex flex-col">
                <label for="email">EMAIL</label>
                <input type="text" id="email" name="email" placeholder="EMAIL" class="border-2 border-black" required>
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
                <input type="text" id="password" name="password" class="border-2 border-black" placeholder="PASSWORD" required>
            </div>
            <div class="divfor flex flex-col">
                <a>Forget Password</a>
                <a>You don't have an account? You can create an account.</a>
            </div>
            <button type="submit">Sign-up</button>
        </form>
    </div>

    <div class="loginform hidden">
            <h1>Login</h1>
        <form method="POST" action="login">
            <div class="div">
                <label for="email">EMAIL</label>
                <input type="text" id="email" name="email" placeholder="EMAIL" class="border-2 border-black" required>
            </div>
            <div class="div">
                <label for="password">PASSWORD</label>
                <input type="text" id="password" name="password" placeholder="PASSWORD" class="border-2 border-black" required>
            </div>
            <div class="divfor">
                <a>Forget Password</a>
                <a>You don't have an account? You can create an account.</a>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
    <script src="/Scripts/script.js"></script>
</body>
</html>