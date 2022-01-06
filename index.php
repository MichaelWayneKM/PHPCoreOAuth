<?php include "BrowserSync.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./styles/Home.css">
    <title>My first website</title>
    <style>
        
    </style>
</head>

<body>
    <div class="container">

        <div class="main">
            <div class="header">
                <div class="label">My First Website</div>
                <div class="hamburger">
                    <span style="left: 13px; position: relative;"><i class="fa fa-bars" style="transform: scale(1.5)"></i></span>
                </div>
            </div>
        </div>

        <div class="sidebar-container">
            <div class="sidebar">
                <div class="logo" style="color: white;"></div>
                <div class="buttons">
                    <div class="login"><a href="/auth/login.php">Login</a></div>
                    <div class="signup"><a href="/auth/register.php">Register</a></div>
                </div>
                <div>
                    <img style="width: 50px; height: 50px; border-radius: 50%; border: 1px solid white;" src="http://assets.stickpng.com/images/585e4bf3cb11b227491c339a.png" alt="user">
                </div>
            </div>
        </div>
    </div>
    <script type="module">
        import {globalx} from "./js/globals.js"
        
        const titles = ["title", ".logo", ".label"]
        for(const x of titles) {document.querySelector(x).innerHTML = globalx.webName}

        const hamburger = document.querySelector(".hamburger");
        const sidebar = document.querySelector(".sidebar");
        const sidebarContainer = document.querySelector(".sidebar-container")

        sidebarContainer.style.display = "none";
        
        

        sidebarContainer.addEventListener("click", () => {
            setTimeout(() => sidebarContainer.style.display = "none", 3000)
            sidebar.style.left = -420 + "px";
            sidebarContainer.style.opacity = 0;
        })
        hamburger.addEventListener("click", function(e) {
            sidebarContainer.style.display = "block";
            sidebarContainer.style.opacity = 1;
            sidebar.style.left = 0 + "px";
        })

        function navigate(route) {
            window.location.assign(route)
        }

        //navigate()
    </script>
</body>

</html>