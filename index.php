<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kinforma</title>
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <header>
        <a href="index.php" class="logo"><img src="icons/logo.svg" alt="Company logotype Kinforma"></a>
        <nav class="header-nav">
            <button class="language-opt">
                <img src="icons/Language.svg" alt="" />
            </button>
            <button class="shopping-cart">
                <img src="icons/Cart.svg" alt="" />
            </button>
            <button class="menu-btn" aria-controls="site-menu" aria-expanded="false">
                <img src="icons/Menu.svg" alt="" />
            </button>
        </nav>
    </header>

    <!-- <nav class="site-menu" id="site-menu">
      <ul>
        <li><a href="#">HEM</a></li>
        <li><a href="#">KOLLEKTION</a></li>
        <li><a href="#">NYHETSBREV</a></li>
        <li><a href="#">OM OSS</a></li>
        <li><a href="#">KONTAKT</a></li>
      </ul>
    </nav> -->
    <main>

        <section class="collection-media">
            <!-- produkt 1 -->

            <section class="pair">
                <img class="media-image" src="images/tent/tent-beige.jpg" alt="" />
                <h3 class="media-label">the tent 01</h3>
                <video class="media-video" autoplay loop muted>
                    <source src="videos/video-1.mp4">
                </video>
            </section>

            <section class="pair reverse">
                <img class="media-image" src="images/tent/tent-blue.jpg" alt="" />
                <h3 class="media-label">the tent 01</h3>
                <video class="media-video" autoplay loop muted>
                    <source src="videos/video-1.mp4">
                </video>
            </section>

            <section class="pair">
                <img class="media-image" src="images/tent/tent-orange.jpg" alt="" />
                <h3 class="media-label">the tent 01</h3>
                <video class="media-video" autoplay loop muted>
                    <source src="videos/video-1.mp4">
                </video>
            </section>

            <section class="pair reverse">
                <img class="media-image" src="images/tent/tent-beige.jpg" alt="" />
                <h3 class="media-label">the tent 01</h3>
                <video class="media-video" autoplay loop muted>
                    <source src="videos/video-1.mp4">
                </video>
            </section>

            <section class="pair">
                <img class="media-image" src="images/tent/tent-blue.jpg" alt="" />
                <h3 class="media-label">the tent 01</h3>
                <video class="media-video" autoplay loop muted>
                    <source src="videos/video-1.mp4">
                </video>

            </section>

        </section>



        <section class="carousel">
            <img src="images/about-us-card.jpg" alt="">
            <div class="carousel-content">
                <h3 class="carousel-title">om oss</h3>
                <p class="carousel-text">Upplev en ny dimension av mode med vår senaste kollektion. Designad av dig, drivet av teknik, skapat för planeten.</p>
            </div>
        </section>

        <section class="newsletter">
            <img src="images/newsletter-img.jpg" alt="">
            <form>
                <input type="text" placeholder="name@email.com">
                <button type="reset" class="newsletter-btn">submit</button>
            </form>

        </section>
    </main>
    <footer>
        <h2>FOOTER</h2>
    </footer>
</body>

</html>