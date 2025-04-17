<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user"])) {
    header("Location: ../login.php");
    exit();
}

// Access the logged-in user's data
$user = $_SESSION["user"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Good News Publishers</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <nav>
        <div class="main-nav container flex">
            <a href="#" onclick="reload()" >
<<<<<<< HEAD
                <img class="company-logo" src="../assets/logo.jpg" alt="company logo">
=======
                <img class="company-logo" src="../assets/logo2.png" alt="company logo">
>>>>>>> 644dc8f48231957c13f12c78b884c6763599c872
            </a>
            <div class="nav-links">
                <ul class="flex">
                    <li class="hover-link nav-item" id="ipl" onclick="onNavItemClick('ipl')">IPL</li>
                    <li class="hover-link nav-item" id="finance" onclick="onNavItemClick('finance')">Finance</li>
                    <li class="hover-link nav-item" id="politics" onclick="onNavItemClick('politics')">Politics</li>
                </ul>
            </div>
            <div class="search-bar flex">
                <input id="search-text" type="text" class="news-input" placeholder="e.g. Science">
                <button id="search-button" class="search-button">Search</button>
                <a href="../logout.php" onclick="" class="btn btn-warning">Logout</a>
            </div>
            <div class="toggle-btn">
                <input type="checkbox" id="checkbox"/>
                <label for="checkbox" class="toggle-label">
                    <span class="toggle-ball"></span>
                </label>
            </div>
        </div>
    </nav>
    

    <main>
        <div class="cards-container container flex" id="cards-container">
            
        </div>
    </main>

    <template id="template-news-card">
        <div class="card">
            <div class="card-header">
                <img src="https://via.placeholder.com/400x200" alt="news-image" id="news-img">
            </div>
            <div class="card-content">
                <h3 id="news-title">This is the Title</h3>
                <h6 class="news-source" id="news-source">End Gadget 26/08/2023</h6>
                <p class="news-desc" id="news-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe quis voluptatum quisquam vitae doloremque facilis molestias quae ratione cumque!</p>
            </div>
        </div>
    </template>

    <script src="index.js"></script>
</body>
</html> 
