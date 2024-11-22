<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <form id="loginForm" action="admin.php" method="post" onsubmit="return validateLogin()">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        function validateLogin() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Replace these with your actual admin credentials
            const adminUsername = 'admin';
            const adminPassword = 'password';

            if (username === adminUsername && password === adminPassword) {
                return true; // Proceed to the dashboard
            } else {
                alert('Invalid username or password');
                return false; // Prevent form submission
            }
        }
    </script>
</body>
</html>
