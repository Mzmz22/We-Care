<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Care</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:300');

        body {
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .login-container {
            background-image: url('22222.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #login-form {
            background-color: rgba(255, 255, 255, 0.8); /* semi-transparent white background */
            padding: 60px;
            border-radius: 2px;
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #0c0b0b;
            border-radius: 5px;
        }

        button {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #555;
        }

        p.message {
            text-align: center;
        }

        p.error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form id="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h2>Register</h2>
            <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" id="full_name" name="Full_Name" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="Username" required>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" id="phone_number" name="Phone_Number" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="User_password" required>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="role" required>
                    <option value="user">User</option>
                    <option value="doctor">Doctor</option>
                </select>
            </div>
            <button type="submit">Create</button>
            <p class="message">Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>
</html>