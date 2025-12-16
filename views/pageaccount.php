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
    <div class="loginform">
            <h1>Login</h1>
        <form method="POST" action="login">
            <div class="div">
                <label for="email">EMAIL</label>
                <input type="text" id="email" name="email" placeholder="EMAIL" required>
            </div>
            <div class="div">
                <label for="password">PASSWORD</label>
                <input type="text" id="password" name="password" placeholder="PASSWORD" required>
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