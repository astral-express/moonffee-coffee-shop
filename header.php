<body>
    <header id="header">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg moonffee-font fw-bold text-center hidden">
            <div class="container">
                <!-- Logo -->
                <a id="moonffee-logo" class="navbar-brand mt-1" href="index.php">
                    <img src="assets/moonffee_logo.webp" alt="Logo" width="40" class="d-inline-block mb-2">
                    Moonffee
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-2 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link border_hover active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border_hover" href="contact.php">Contact</a>
                        </li>
                        <!-- Dropdown link -->
                        <li class="nav-item">
                            <a class="nav-link border_hover" href="#">Shop</a>
                        </li>
                    </ul>
                    <!-- Search bar -->
                    <!-- <form class="d-flex mx-auto" role="search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-dark" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form> -->
                    <!-- Sign in / Login -->
                    <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                        <?php
                            if (isset($_SESSION["userName"])) {
                                echo "<li class='nav-item'>";
                                if ($userImageData === 'default' || $userImageData === null) {
                                    echo "<img src='uploads/default_user_avatar.jpg' class='nav-user-avatar' alt='user_Default_Profile_Image'>";
                                } 
                                else { 
                                    echo "<img src='uploads/" . $userImageData, "' class='nav-user-avatar' alt='user_Profile_Image'>"; 
                                }
                                echo "<a class='nav-link border_hover' href='user_profile.php'>Profile</a></li>";
                                echo "<li class='nav-item'>
                                        <a class='nav-link border_hover' href='includes/user_logout.inc.php'>Log Out</a>
                                      </li>";
                            } 
                            else {
                                echo "<li class='nav-item'>
                                        <a class='nav-link border_hover' href='user_login.php'>Log In</a>
                                    </li>";
                                echo
                                    "<li class='nav-item'>
                                        <a class='nav-link border_hover' href='user_sign_in.php'>Sign In</a>
                                    </li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>