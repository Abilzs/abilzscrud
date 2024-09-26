<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SMKN 3 Yogyakarta</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Hubungkan dengan file CSS eksternal -->
    <link rel="icon" type="image/x-icon" href="../gambar/skm.png">
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="logo">
        <img src="../gambar/skm.png" alt="Logo SMKN 3 Yogyakarta">
            <a href="#">SMKN 3 Yogyakarta</a>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container">
        <div class="auth-box">
            <!-- Tab untuk Login/Register -->
            <div class="tab">
                <button class="button" onclick="openTab(event, 'Login')">Login</button>
                <button class="button" onclick="openTab(event, 'Register')">Daftar</button>
            </div>

            <!-- Login Form -->
            <div id="Login" class="tabcontent">
                <h2>Login</h2>
                <form action="process_login.php" method="POST">
                    <label for="login-username">Username:</label>
                    <input type="text" id="login-username" name="username" required>
                    
                    <label for="login-password">Password:</label>
                    <input type="password" id="login-password" name="password" required>
                    
                    <input type="submit" value="Login">
                </form>
                <br>
                <!-- Button Admin -->
                <small class="smalladmin"><a href="../admin/loginadmin.php">Admin?</a></small>
            </div>

            <!-- Register Form -->
            <div id="Register" class="tabcontent">
                <h2>Daftar</h2>
                <form action="process_register.php" method="POST">
                    <label for="register-username">Username:</label>
                    <input type="text" id="register-username" name="username" required>
                    
                    <label for="register-email">Email:</label>
                    <input type="email" id="register-email" name="email" required>
                    
                    <label for="register-password">Password:</label>
                    <input type="password" id="register-password" name="password" required>
                    
                    <input type="submit" value="Daftar">
                </form>
            </div>
        </div>
    </div>

    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Open default tab
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector(".tablinks.active").click();
        });
    </script>
</body>
</html>
