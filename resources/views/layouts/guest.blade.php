<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Pointwealthtrades | Best Platform" />
    

    <title>Pointwealthtrades | Best  Platform</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="/frontend/css/font-awesome.min.css" />
    <!-- Themify Icons CSS -->
    <link rel="stylesheet" href="/frontend/css/themify-icons.css" />
    <!-- Elegant Line Icons CSS -->
    <link rel="stylesheet" href="/frontend/css/elegant-line-icons.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css" />
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="/frontend/css/slicknav.min.css" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="/frontend/css/animate.min.css" />
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="/frontend/css/slick.css" />
    <!-- Slick Theme CSS -->
    <link rel="stylesheet" href="/frontend/css/slick-theme.css" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="/frontend/css/main.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/frontend/css/responsive.css" />

    <script src="/frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body data-spy="scroll" data-target="#navmenu" data-offset="70">




    <header id="header" class="header-section">
        <div class="container">
            <nav class="navbar">
                <a href="#" class="navbar-brand"><img src="/backend/images/app-logo.png" height="50"
                        width="80" alt="logo" /></a>
                <div class="d-flex menu-wrap">
                    <div id="navmenu" class="mainmenu">
                        <ul class="nav">
                            <li>
                                <a data-scroll class="nav-link active" href="#home">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li>
                                <a data-scroll class="nav-link" href="#features">Features</a>
                            </li>
                            <li>
                                <a data-scroll class="nav-link" href="#pricing">Pricing</a>
                            </li>
                            <li>
                                <a data-scroll class="nav-link" href="#reviews">Reviews</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-btn">
                        <a href="{{ route('register') }}" class="signup-btn">Sign-Up Now</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- /.header-section -->
    {{ $slot }}
    <!--================================= COPYRIGHT-1 START ==========================================-->

    <footer class="footer-section align-center">
        <div class="container">
            <p>
                &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                Powered by Pointwealthtrades
            </p>
        </div>
    </footer>
    <!-- /.footer-section -->

    <div>
        <div class="notification-container" id="notificationContainer"></div>

        <style>
            .notification-container {
                position: fixed;
                top: 20vh;
                right: 2vw;
                width: clamp(250px, 80vw, 350px);
                z-index: 1000;
            }

            .notification {
                background-color: #333;
                color: #fff;
                padding: 1rem;
                margin-bottom: 0.5rem;
                border-radius: 0.5rem;
                box-shadow: 0 0.2rem 0.5rem rgba(0, 0, 0, 0.2);
                opacity: 0;
                transform: translateX(100%);
                transition: opacity 0.5s ease, transform 0.5s ease;
                font-size: clamp(0.9rem, 2.5vw, 1.1rem);
            }

            .notification.show {
                opacity: 1;
                transform: translateX(0);
            }

            .notification.deposit {
                background-color: #28a745;
            }

            .notification.withdraw {
                background-color: #dc3545;
            }

            /* Small devices (phones, < 600px) */
            @media (max-width: 600px) {
                .notification-container {
                    width: 90vw;
                    right: 1vw;
                    top: 15vh;
                }

                .notification {
                    padding: 0.8rem;
                    font-size: 0.85rem;
                }
            }

            /* Medium devices (tablets, 600px - 900px) */
            @media (min-width: 601px) and (max-width: 900px) {
                .notification-container {
                    width: 85vw;
                    right: 1.5vw;
                }

                .notification {
                    padding: 0.9rem;
                    font-size: 1rem;
                }
            }

            /* Large devices (desktops, > 900px) */
            @media (min-width: 901px) {
                .notification-container {
                    width: 350px;
                    right: 2vw;
                }

                .notification {
                    padding: 1rem;
                    font-size: 1.1rem;
                }
            }
        </style>

        <script>
            const names = [
                'John Smith', 'Kate Johnson', 'Michael Brown', 'Abel Davis', 'Sarah Wilson',
                'David Martinez', 'Emma Taylor', 'James Anderson', 'Lisa Thomas', 'Thomas Lee',
                'Anna Garcia', 'Chris Walker', 'Julia Hall', 'Mark Allen', 'Sophie Young',
                'Paul Hernandez', 'Laura King', 'Steven Wright', 'Grace Lopez', 'Robert Scott',
                'Emily Green', 'Daniel Adams', 'Olivia Baker', 'William Gonzalez', 'Sophia Nelson',
                'Jacob Carter', 'Isabella Mitchell', 'Liam Perez', 'Charlotte Roberts', 'Ethan Turner',
                'Mia Phillips', 'Alexander Campbell', 'Amelia Parker', 'Lucas Evans', 'Harper Collins',
                'Benjamin Edwards', 'Evelyn Stewart', 'Jack Sanchez', 'Ava Morris', 'Logan Rogers',
                'Lily Reed', 'Mason Cook', 'Chloe Morgan', 'Henry Bell', 'Zoe Murphy', 'Gabriel Rivera',
                'Ella Cooper', 'Noah Bailey', 'Aria Howard', 'Jackson Kim', 'Scarlett Ward',
                'Sebastian Torres', 'Layla Peterson', 'Owen Gray', 'Mila Foster', 'Elijah Cox',
                'Hannah Brooks', 'Carter Butler', 'Avery Ross', 'Landon Hughes', 'Violet Sanders',
                'Luke Price', 'Madeline Kelly', 'Dylan Simmons', 'Penelope Bennett', 'Isaac Wood',
                'Victoria Myers', 'Samuel Ford', 'Hazel James', 'Julian Watson'
            ];

            function getRandomName() {
                return names[Math.floor(Math.random() * names.length)];
            }

            function getRandomAction() {
                return Math.random() > 0.5 ? 'deposited' : 'withdrew';
            }

            function getRandomAmount() {
                return Math.floor(Math.random() * (50000 - 2000 + 10)) + 500;
            }

            function createNotification() {
                const container = document.getElementById('notificationContainer');
                const notification = document.createElement('div');
                const name = getRandomName();
                const action = getRandomAction();
                const amount = getRandomAmount();
                notification.className = `notification ${action === 'deposited' ? 'deposit' : 'withdraw'}`;
                notification.textContent = `${name} ${action} $${amount}`;
                container.appendChild(notification);

                setTimeout(() => {
                    notification.classList.add('show');
                }, 100);

                setTimeout(() => {
                    notification.classList.remove('show');
                    setTimeout(() => {
                        notification.remove();
                    }, 500);
                }, 3000);
            }

            let notificationCount = 0;
            const interval = setInterval(() => {
                if (notificationCount < 20) {
                    createNotification();
                    notificationCount++;
                } else {
                    clearInterval(interval);
                }
            }, 6000);
        </script>
    </div>

    <a data-scroll href="#header" id="scroll-to-top"><i class="ti-arrow-up"></i></a>

    <!-- jQuery Lib -->
    <script src="/frontend/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/frontend/js/vendor/bootstrap.min.js"></script>
    <!-- Tether JS -->
    <script src="/frontend/js/vendor/tether.min.js"></script>
    <!-- Slicknav JS -->
    <script src="/frontend/js/vendor/jquery.slicknav.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="/frontend/js/vendor/slick.min.js"></script>
    <!-- Smooth Scroll JS -->
    <script src="/frontend/js/vendor/smooth-scroll.min.js"></script>
    <!-- Wow JS -->
    <script src="/frontend/js/vendor/wow.min.js"></script>
    <!-- Main JS -->
    <script src="/frontend/js/main.js"></script>
</body>

</html>
