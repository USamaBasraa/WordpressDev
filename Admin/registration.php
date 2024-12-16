<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reg.css">
    <title>Registration</title>
</head>
<body>
    <div class="wrapper">
        <form action="">
            <h2>Registration</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></span>
                <input type="text" name="usernames" placeholder="User Name" required>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></span>
                <input type="email" name="useremail" placeholder="User E-mail" required>
            </div>
            <div class="input-box password">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="userpassword" placeholder="Password" required>
            </div>
            <button type="submit"name="submit-btn">Registration</button>
            <div class="regisration-link">
                <p>You have already an account ?<a href="#">Login</a></p>
            </div>
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>