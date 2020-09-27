<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Fernando Hernandez Portal</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="navigation">
        <input type="checkbox" class="navigation-checkbox" id="nav-toggle">
        <label for="nav-toggle" class="navigation-button">Menu<span class="navigation-icon">&nbsp;</span></label>
        <div class="navigation-background">&nbsp;</div>
        <nav class="navigation-nav">
            <ul class="navigation-list">
                <li class="navigation-item"><a href="index.php" class="navigation-link">Homepage</a></li>
                <li class="navigation-item"><a href="assignments.php" class="navigation-link">Assignments</a></li>
                <li class="navigation-item"><a href="#" class="navigation-link">About Me</a></li>
            </ul>
        </nav>
    </div>
    <header class="header">
        <div class="row">
            <h2 class="brand">
                <span class="brand-main">Fernando Hernandez</span>
                <span class="brand-sub">Web Designer &amp; Developer</span>
            </h1>
        </div>
    </header>
    <main class="main">
        <div class="row">
            <section class="section-main">
                <div class="col-1-of-2">
                    <h1 class="heading-primary moveInLeft">Designig and Developing great Websites and Apps</h1>
                    <p class="paragraph">Hello and welcome! I created this website for my CSE 341 - Web Backend Development II class. Here will find all my assignments in for this class.</p>
                    <p class="paragraph">I plan to continue improving this website and design and in the near future will subtitute my current portfolio website at <a href="https://fhwebdeveloper.com" target="_blank">fhwebdeveloper.com</a></p>
                    <a href="assignments.php" class="action-link u-margin-bottom-medium">View Assignments</a>
                </div>
                <div class="col-1-of-2 u-center-text">
                    <img src="img/profile.png" alt="Fernando Hernandez Photo">
                </div>
            </section>
        </div>
    </main>
    <footer class="footer">
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer-navigation">
                    <ul class="footer-list">
                        <li class="footer-item"><a href="assignments.php" class="footer-link">Assignments</a></li>
                        <li class="footer-item"><a href="https://fhwebdeveloper.com/portfolio" class="footer-link" target="_blank">View Portfolio</a></li>
                        <li class="footer-item"><a href="#" class="footer-link">About Me</a></li>
                    </ul>
                </div>
                <p class="footer-copyright">&copy; <?php echo date("Y"); ?> - All Rights Reserved - Fernando Hernandez</p>
            </div>
            <div class="col-1-of-4 social-div">
                    <a href="https://facebook.com/fhwebdeveloper" class="social-link" target="_blank">
                        <svg class="social-icon">
                            <use xlink:href="img/symbol-defs.svg#icon-facebook"></use>
                        </svg>
                    </a>
                    <a href="https://instagram.com/fhwebdeveloper" class="social-link" target="_blank">
                        <svg class="social-icon">
                            <use xlink:href="img/symbol-defs.svg#icon-instagram"></use>
                        </svg>
                    </a>
                    <a href="https://twitter.com/fhwebdeveloper" class="social-link" target="_blank">
                        <svg class="social-icon">
                            <use xlink:href="img/symbol-defs.svg#icon-twitter"></use>
                        </svg>
                    </a>
            </div>
        </div>
    </footer>
</body>
</html>