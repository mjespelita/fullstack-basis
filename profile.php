<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="./assets/bootstrap/bootstrap5.3.0.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }
        .sidebar {
            background-color: #343a40;
            color: white;
            padding: 50px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            margin-bottom: 15px;
            font-size: 16px;
        }
        .sidebar a:hover {
            color: #ffc107;
        }
        .sidebar .logo {
            margin-bottom: 30px;
            text-align: center;
        }
        .sidebar .logo img {
            max-width: 100px;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
            background-color: #f8f9fa;
            overflow-y: auto;
        }
        .menu-title {
            margin-top: 20px;
            margin-bottom: 10px;
            font-weight: bold;
            color: #adb5bd;
        }
        /* Sidebar toggling for mobile view */
        @media (max-width: 768px) {
            .sidebar {
                position: absolute;
                left: -250px;
                width: 250px;
                transition: left 0.3s;
            }
            .sidebar.active {
                left: 0;
            }
            .content {
                padding: 15px;
            }
            .sidebar-toggler {
                display: inline-block;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="logo">
            <img src="https://via.placeholder.com/100" alt="Logo">
        </div>
        <h5 class="menu-title">Menu</h5>
        <a href="./dashboard.php">Dashboard</a>
        <a href="./profile.php">Profile</a>
        <a href="#">Settings</a>
        <a href="#" class="_logout-btn">Logout</a>
    </div>

    <!-- Main content -->
    <div class="content">
        <!-- Sidebar Toggler for mobile -->
        <button class="btn btn-outline-primary d-md-none sidebar-toggler" onclick="toggleSidebar()">☰ Menu</button>

        <section class="head">
            <div class="container">
                <h1>Profile</h1>
                <p>This is your main content area. You can add charts, tables, and other components here.</p>
            </div>
        </section>

        <section class="form">
            <div class="container">
                <form>
                    <div class="notif">
                        <!-- notif here... -->
                    </div>
                    <div class="mb-3">
                        <label for="">Change Name</label>
                        <input type="text" class="form-control _name" id="name" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                    <label for="">Change Email</label>
                        <input type="email" class="form-control _email" id="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control _password" id="password" placeholder="New Password" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control _confirm-password" id="password" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-3 _update-profile">Update Profile</button>
                </form>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="./assets/bootstrap/bootstrap5.3.0.min.js"></script>
    <script>
        // Function to toggle sidebar visibility on mobile
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('active');
        }
    </script>
    
    <script src="./auth/jquery.min.js"></script>
    <script src="./auth/1__api.js"></script>
    <script src="./auth/2__localStorage.js"></script>
    <script src="./auth/3_creds.js"></script>
    <script src="./auth/4_logout.js"></script>
    <script src="./auth/profile.js"></script>
    <!-- <script src="./auth/middleware/proxy_middleware.js"></script> -->
</body>
</html>

