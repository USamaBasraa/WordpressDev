<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <form action="">
            <h2>Login</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></span>
                <input type="text" name="usernames" id="" placeholder="User Name" required>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="userpassword" id="" placeholder="Password" required>
            </div>
            <div class="forgot-pass">
                <a href="#">FORGOT PASSWORD?</a>
            </div>
            <button type="submit"name="submit-btn">Login</button>
            <div class="regisration-link">
                <p>Don't have an account ?<a href="registration.php">Register</a></p>
            </div>
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>