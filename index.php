<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="./assets/bootstrap/bootstrap5.3.0.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }
        .login-form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .logo {
            max-width: 100px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="login-form">
                    <!-- Logo -->
                    <img src="https://via.placeholder.com/100" alt="Logo" class="logo">

                    <!-- Login Form -->
                    <h2 class="mb-4">Login</h2>
                    <form>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>

                        <!-- Forgot Password Link -->
                        <a href="#" class="d-block mb-3">Forgot Password?</a>
                    </form>

                    <!-- Register Link -->
                    <p class="mb-0">Don't have an account? <a href="./register.php">Register</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="./auth/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="./assets/bootstrap/bootstrap5.3.0.min.js"></script>
    
    <script src="./auth/1__api.js"></script>
    <script src="./auth/2__localStorage.js"></script>
    <script src="./auth/auth.js"></script>
</body>
</html>
