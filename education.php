<?php
require_once __DIR__ . '../config/configuration.php';

// Prepare the SQL statement to retrieve data
$sql = "SELECT grade, school_name, info FROM education";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
   <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.min.css">

      <!--=============== SWIPER CSS ===============-->
      <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


       <!--=============== CSS ===============-->
      <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: black;
            color: white;
        }
        .card {
            background-color: white;
            color: black;
        }
        .education{
            font-size: 30px;
            margin-bottom: 10px;
            margin-top: 10px;

        }
    </style>
    
    <title>Education Details</title>
</head>
<body>
     <!--==================== HEADER ====================-->
      <header class="header" id="header">
           <nav class="nav container">
                <a href="#" class="nav__logo">
                    andal.io
                </a>

                <div class="nav__menu" id="nav_menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php" class="nav__link ">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="about.php" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Education</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Services</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Portfolio</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Contact</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Edit</a>
                        </li>
                    </ul>
                    <!--Close button-->
                      
                    <div class="nav__close" id="nav-close">
                       <i class="ri-close-line"></i> 
                    </div>

                    <div class="nav__social">
                            <a href="https://web.facebook.com/chopatchie.ashley" target="_blank" class="nav__social-link">
                                <i class="ri-facebook-box-fill"></i>    
                                </a>

                            <a href="https://www.instagram.com/psalmashlife/" target="_blank" class="nav__social-link">
                                <i class="ri-instagram-fill"></i>
                                </a>

                            <a href="https://x.com/psalmashleyy" target="_blank" class="nav__social-link">
                                <i class="ri-twitter-x-fill"></i>
                                </a>

                            <a href="https://github.com/psalmey" target="_blank" class="nav__social-link">
                                <i class="ri-github-fill"></i>
                                </a>

                            <a href="https://web.whatsapp.com" target="_blank" class="nav__social-link">
                                <i class="ri-whatsapp-fill"></i>
                                </a>

                        </div>
                  </div>

                <!-- Toggle button-- -->
                 <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-7-line"></i>
                 </div>
            </nav>
      </header>
    <div class="container mt-5">
        <h2 class="mb-4">Education Details</h2>

      
     <div class="education">education</div>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='card mb-3'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'> " . htmlspecialchars($row["grade"]) . "</h5>";
                echo "<h6 class='card-subtitle mb-2 text-muted'>" . htmlspecialchars($row["school_name"]) . "</h6>";
                echo "<p class='card-text'> " . htmlspecialchars($row["info"]) . "</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<div class='alert alert-warning'>No data found.</div>";
        }
        // Close the connection
        $conn->close();
        ?>
    </div>
      <script src="swiper-bundle.min.js"></script>

      <!--=============== MAIN JS ===============-->
      <script src="main.js"></script>
    <!-- Bootstrap JS and dependencies (Popper.js and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
