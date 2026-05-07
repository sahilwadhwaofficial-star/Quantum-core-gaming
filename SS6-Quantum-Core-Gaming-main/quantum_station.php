<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<head>
    <title>QUANTUM CORE GAMING</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="game1.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text:wght@100..900&family=Saira+Stencil+One&display=swap"
        rel="stylesheet">
        <div>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Bungee+Spice&family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
        </div>
</head>

<body>
    <!-- code for navigation bar ends-->
         <nav>
        <div class="content">
            <div class="parts"><img src="WhatsApp_Image_2024-10-15_at_7.25.02_PM-removebg-preview.png" height="100px"></div>
            <div class="parts">
                <a href="index1.php" style="text-decoration: none;">
                    <h1 style="color: aliceblue;" class="saira-stencil-one-regular">QUANTUM CORE GAMING</h1>
                </a>
            </div>
            <div class="parts">
                <ul>
                    <a href="#">
                        <a href = "game pass.php" style ="text-decoration: none;"><li class="elements"> Game Pass</li></a>
                    </a>
                    <a href="#">
                        <a href = "game1.php" style ="text-decoration: none;"><li class="elements">Games</li></a>
                    </a>
                    <a href="#">
                        <a href = "under_dev.php" style ="text-decoration: none;"><li class="elements">Store</li></a>
                    </a>
                    <a href="#">
                        <a href = "under_dev.php" style ="text-decoration: none;"><li class="elements">Devices</li></a>
                    </a>
                    <a href="#">
                        <a href = "under_dev.php" style ="text-decoration: none;"><li class="elements">Community</li></a>
                    </a>
                    <a href="#">
                        <a href = "support.php" style ="text-decoration: none;"><li class="elements">Support</li></a>
                    </a>
                    
                    <?php
                    // DYNAMIC LINKS START HERE
                    // Check if the 'username' variable exists in the session memory
                    if (isset($_SESSION['username'])): 
                    ?>
                        <a href="profile.php" style="text-decoration: none;"><li class="elements">Profile</li></a>
                        <a href="logout.php" style="text-decoration: none;"><li class="elements">Logout</li></a>
                    <?php else: ?>

                        <a href="login.php" style="text-decoration: none;"><li class="elements">Login</li></a>
                        <a href="register.php" style="text-decoration: none;"><li class="elements">Register</li></a>
                    
                    <?php endif; // End of the dynamic block ?>
                    
                </ul>
            </div>
        </div>
    </nav>
<head>
    <title>quantum station</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="quantum_station.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text:wght@100..900&family=Saira+Stencil+One&display=swap"
        rel="stylesheet">
        <div>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Bungee+Spice&family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
        </div>
</head>

<body>
    <!-- code for navigation bar-->
      <nav>
        <div class="content">
            <div class="parts"><img src="WhatsApp_Image_2024-10-15_at_7.25.02_PM-removebg-preview.png" height="100px"></div>
            <div class="parts">
                <a href="index.php" style="text-decoration: none;">
                    <h1 style="color: aliceblue;" class="saira-stencil-one-regular">QUANTUM CORE GAMING</h1>
                </a>
            </div>
            <div class="parts">
                <ul>
                    <a href="#">
                        <a href = "game pass.php" style ="text-decoration: none;"><li class="elements"> Game Pass</li></a>
                    </a>
                    <a href="#">
                        <a href = "game1.php" style ="text-decoration: none;"><li class="elements">Games</li></a>
                    </a>
                    <a href="#">
                        <a href = "under_dev.php" style ="text-decoration: none;"><li class="elements">Store</li></a>
                    </a>
                    <a href="#">
                        <a href = "under_dev.php" style ="text-decoration: none;"><li class="elements">Devices</li></a>
                    </a>
                    <a href="#">
                        <a href = "under_dev.php" style ="text-decoration: none;"><li class="elements">Community</li></a>
                    </a>
                    <a href="#">
                        <a href = "support.php" style ="text-decoration: none;"><li class="elements">Support</li></a>
                    </a>
                    
                    <?php
                    // DYNAMIC LINKS START HERE
                    // Check if the 'username' variable exists in the session memory
                    if (isset($_SESSION['username'])): 
                    ?>
                        <a href="profile.php" style="text-decoration: none;"><li class="elements">Profile</li></a>
                        <a href="logout.php" style="text-decoration: none;"><li class="elements">Logout</li></a>
                    
                    <?php else: ?>

                        <a href="login.php" style="text-decoration: none;"><li class="elements">Login</li></a>
                        <a href="register.php" style="text-decoration: none;"><li class="elements">Register</li></a>
                    
                    <?php endif; // End of the dynamic block ?>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- code for navigation bar ends-->
    <!-- code for main content-->
    <img class="echoes5" src="59994_quantum station is a gaming console manufactured b_xl-1024-v1-0.png">
    <h1 class="big-shoulders-stencil-text-content"
        style="color: whitesmoke; text-align:center;text-decoration: underline;">QUANTUM STATION</h1><br>
    <br>
    <div style="display: flex;">
        <div style="display: inline;">
            <p class="saira-stencil-one-regular" style="color: whitesmoke; margin-left: 2cm;">WELCOME TO THE FUTURE OF CONTROL:QUANTUM STATION</p>
            <p class="saira-stencil-one-regular" style="color: whitesmoke;margin-left: 2cm">Quantum Station Console is a state-of-the-art, sci-fi-inspired command interface</p>
            <p class="saira-stencil-one-regular" style="color: whitesmoke;margin-left: 2cm">designed for enthusiasts, gamers, and tech professionals.</p>
            <p class="saira-stencil-one-regular" style="color: whitesmoke;margin-left: 2cm">From real-time system monitoring to futuristic design,</p>
            <p class="saira-stencil-one-regular" style="color: whitesmoke;margin-left: 2cm"> it combines functionality with aesthetics to create an unparalleled user experience.</p>
        </div>
        <div style="display: inline;">
            <img src="59991_quantum station is a gaming console manufactured b_xl-1024-v1-0.png" class="echoes_poster">
        </div>
    </div>
    <h2 class="big-shoulders-stencil-text-content" style="color: whitesmoke; text-align:center;margin: 50px;">REVOLUTIONIZING COMMAND INTERFACES
    </h2>
    <div class="features">
        <div class="div1"></div>
        <div class="feat1">
            <h4 style="color: whitesmoke;text-align: center;margin-top: 2cm;"
                class="big-shoulders-stencil-text-content">Designed with neon aesthetics, glowing effects, and sci-fi elements to give users a sense of operating in a futuristic station.</h4>
        </div>
        <div class="div2"></div>
        <div class="feat2">
            <h4 style="color: whitesmoke;text-align: center;margin-top: 2cm;"
                class="big-shoulders-stencil-text-content">Execute commands instantly, monitor statuses, and visualize data in dynamic ways
            </h4>
        </div>
        <div class="div3"></div>
        <div class="feat3">
            <h4 style="color: whitesmoke;text-align: center;margin-top: 2cm;"
                class="big-shoulders-stencil-text-content">Tailor the interface to your preferences with flexible themes, layouts, and integrations.
            </h4>
        </div>
        <div class="div4"></div>
        <div class="feat4">
            <h4 style="color: whitesmoke;text-align: center;margin-top: 2cm;"
                class="big-shoulders-stencil-text-content">Accessible on web, desktop, and mobile, ensuring you’re always in command.</h4>
        </div>
    </div><br>

    <!--code for register button-->
    <center>
        <div style="align-items: center;">
            <button class="btn btn-primary bruno-ace-sc-regular" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">BUY NOW</button>

            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header">
                    <h2 class="offcanvas-title big-shoulders-stencil-text-content" id="offcanvasScrollingLabel">ENTER DETAILS</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
    <form action="process_purchase.php" method="post">
        <label>
            <h5 class="saira-stencil-one-regular">ENTER GAMER TAG-</h5>
        </label><br>
        <input style="width: 9cm; border-radius: 20px;" type="text" id="gtag" class="bruno-ace-sc-regular" placeholder="ENTER GAMER TAG" name="gamer_tag" required><br><br>
        
        <label>
            <h5 class="saira-stencil-one-regular">ENTER DEBIT CARD DETAILS-</h5>
        </label><br>
        <input style="width: 9cm; border-radius: 20px;" type="text" id="dbdt" ...><br><br>
        <label>
            <h5 class="saira-stencil-one-regular">ENTER EXPIRY DATE-</h5>
        </label><br>
        <input style="width: 9cm; border-radius: 20px;" type="text" id="exp" ...><br><br>
        <label>
            <h5 class="saira-stencil-one-regular">ENTER ACCOUNT HOLDER NAME-</h5>
        </label><br>
        <input style="width: 9cm; border-radius: 20px;" type="text" id="acn" ...><br><br>
        <label>
            <h5 class="saira-stencil-one-regular">ENTER CVV CODE-</h5>
        </label><br>
        <input style="width: 9cm; border-radius: 20px;" type="text" id="cvv" ...><br><br>
        
        <label>
            <h5 class="saira-stencil-one-regular">AMOUNT PAYABLE : RS.3500/-</h5>
        </label><br>

        <input type="hidden" name="product_name" value="Quantum Station">
        <input type="hidden" name="amount" value="3500.00">
        
        <script src="Purchase.js"></script>
        
        <button type="submit" onclick="return validateForm()" class="btn btn-primary bruno-ace-sc-regular" style="background-color: blueviolet;">Submit</button>
    </form>
</div>
            </div>
        </div>
        <div>
    </center><br>
    <!--code for register button ends-->
    <!-- code for main content ends-->

    <!-- code for footer-->
    <h3 style="color: whitesmoke; text-align: center; margin-left: 3.5%;" class="big-shoulders-stencil-text-content">
        FOLLOW FOR MORE UPDATES</h3>
    <ul>
        <a href="#">
            <li class="contact big-shoulders-stencil-text-content">INSTAGRAM <svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg></li>
        </a>
        <a href="#">
            <li class="contact big-shoulders-stencil-text-content">PLAY STATION <svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-playstation" viewBox="0 0 16 16">
                    <path
                        d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356M9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.45 8.45 0 0 1-4.018-.323Z" />
                </svg></li>
        </a>
        <a href="#">
            <li class="contact big-shoulders-stencil-text-content">YOUTUBE <svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path
                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                </svg></li>
        </a>
        <a href="#">
            <li class="contact big-shoulders-stencil-text-content">DISCORD <svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                    <path
                        d="M13.545 2.907a13.2 13.2 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.2 12.2 0 0 0-3.658 0 8 8 0 0 0-.412-.833.05.05 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.04.04 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032q.003.022.021.037a13.3 13.3 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019q.463-.63.818-1.329a.05.05 0 0 0-.01-.059l-.018-.011a9 9 0 0 1-1.248-.595.05.05 0 0 1-.02-.066l.015-.019q.127-.095.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.05.05 0 0 1 .053.007q.121.1.248.195a.05.05 0 0 1-.004.085 8 8 0 0 1-1.249.594.05.05 0 0 0-.03.03.05.05 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.2 13.2 0 0 0 4.001-2.02.05.05 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.03.03 0 0 0-.02-.019m-8.198 7.307c-.789 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612" />
                </svg></li>
        </a>
    </ul>
    </div>
    <!--codefor footer ends-->
</body>

</html>