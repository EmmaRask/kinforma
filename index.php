<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kinforma</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="header-inner">
            <!-- LOGOTYPE  -->
            <a href="index.php" class="logo">
                <img src="logo/kinforma-logo.svg" alt="Company logotype Kinforma">
            </a>

            <!-- NAVIGATION -->
            <nav class="main-nav">
                <ul class="fade-in-menu">
                    <li class="item"><a href="">the gear</a></li>
                    <li class="item"><a href="">the hub</a></li>
                    <li class="item"><a href="">om oss</a></li>
                    <li class="item"><a href="">kontakt</a></li>
                    <li class="item"><a href="">SV | <span class="inactive-lang">EN</span></a></li>
                </ul>
            </nav>

            <!-- ICONS -->
            <menu class="header-icons">
                <li> <a href="#" class="cart">[00]</a></li>

                <button class="hamburger">
                    <img class="menu-icon" src="icons/menu-icon.svg" alt="Meny ikon">
                    <img class="close-icon" src="icons/close-icon.svg" alt="Stänga menyn">
                </button>
            </menu>
        </div>

    </header>

    <!-- MAIN -->
    <main>
        <!-- PRODUCTS PAIR -->
        <section class="collection-media">

            <section class="pair">
                <img class="product-image js-product-image"
                    src="images/backpack/backpack-beige.jpg" alt=""
                    data-folder="backpack"
                    data-name="backpack"
                    data-color="beige" />


                <div class="color-picker">
                    <button class="color-circle active" data-color="beige"></button>
                    <button class="color-circle" data-color="green"></button>
                    <button class="color-circle" data-color="black"></button>
                </div>

                <button class="play-btn" aria-label="play video"></button>


                <h3 class="media-label">the backpack 01</h3>
                <video class="media-video" autoplay loop muted>
                    <source src="videos/backpack-01.mp4">
                </video>
            </section>

            <section class="pair reverse">
                <img class="product-image js-product-image"
                    src="images/tent/tent-beige.jpg" alt=""
                    data-folder="tent"
                    data-name="tent"
                    data-color="beige" />

                <button class="play-btn" aria-label="play video"></button>

                <div class="color-picker">
                    <button class="color-circle active" data-color="beige"></button>
                    <button class="color-circle" data-color="green"></button>
                    <button class="color-circle" data-color="black"></button>
                </div>

                <h3 class="media-label">the tent 01</h3>

                <video class="media-video" autoplay loop muted>
                    <source src="videos/tent-01.mp4">
                </video>
            </section>

            <section class="pair">
                <img class="product-image js-product-image"
                    src="images/shoe/shoe-beige.jpg" alt=""
                    data-folder="shoe"
                    data-name="shoe"
                    data-color="beige" />

                <button class="play-btn" aria-label="play video"></button>

                <div class="color-picker">
                    <button class="color-circle active" data-color="beige"></button>
                    <button class="color-circle" data-color="green"></button>
                    <button class="color-circle" data-color="black"></button>
                </div>

                <h3 class="media-label">the shoe 01</h3>

                <video class="media-video" autoplay loop muted>
                    <source src="videos/shoe-01.mp4">
                </video>
            </section>

            <section class="pair reverse">
                <img class="product-image js-product-image"
                    src="images/watch/watch-green.jpg" alt=""
                    data-folder="watch"
                    data-name="watch"
                    data-color="beige" />

                <button class="play-btn" aria-label="play video"></button>

                <div class="color-picker">
                    <button class="color-circle active" data-color="beige"></button>
                    <button class="color-circle" data-color="green"></button>
                    <button class="color-circle" data-color="black"></button>
                </div>

                <h3 class="media-label">the watch 01</h3>

                <video class="media-video" autoplay loop muted>
                    <source src="videos/watch-01.mp4">
                </video>
            </section>

            <section class="pair">
                <img class="product-image" src="images/stick/stick-01.jpg" alt="" />

                <button class="play-btn" aria-label="play video"></button>

                <h3 class="media-label">the stick 01</h3>
                <video class="media-video" autoplay loop muted>
                    <source src="videos/stick-01.mp4">
                </video>
            </section>

            <!-- SLIDESHOW-->
            <div class="slider">
                <div class="slides">
                    <section class="slide">
                        <img src="images/about-section/about-card-1.jpg" alt="">
                        <article class="slide-content">
                            <div class="slide-heading">
                                <h3>om oss</h3>

                                <button class="slide-btn">
                                    <img src="icons/arrow-outward.svg" alt="">
                                </button>
                            </div>
                            <p class="slide-text">Vår levande mötesplats med café, co-working, event och inspirerande föreläsningar där människor,
                                varumärken och idéer möts. Här hämtar, provar och returnerar du dina produkter på plats.
                                Allt för att minska klimatpåverkan.</p>
                        </article>
                    </section>

                    <section class="slide">
                        <img src="images/about-section/about-card-2.jpg" alt="">
                        <article class="slide-content">
                            <div class="slide-heading">
                                <h3>the hub</h3>

                                <button class="slide-btn">
                                    <img src="icons/arrow-outward.svg" alt="">
                                </button>
                            </div>
                            <p class="slide-text">Vår levande mötesplats med café, co-working, event och inspirerande föreläsningar där människor,
                                varumärken och idéer möts.
                                Här hämtar, provar och returnerar du dina produkter på plats. Allt för att minska klimatpåverkan.</p>
                        </article>
                    </section>

                    <section class="slide">
                        <img src="images/about-section/about-card-3.jpg" alt="">
                        <article class="slide-content">
                            <div class="slide-heading">
                                <h3>hållbarhet</h3>

                                <button class="slide-btn">
                                    <img src="icons/arrow-outward.svg" alt="">
                                </button>
                            </div>
                            <p class="slide-text">Nästan var femte plagg som beställs online skickas tillbaka
                                — en process som ökar både utsläpp och förpackningsavfall med upp till 60 %.
                                Genom att samla leveranser och returer på samma plats kan vi minska transporterna med upp till 70 %. </p>
                        </article>
                    </section>
                </div>
            </div>

    </main>
    <!-- FOOTER -->
    <footer>

        <!-- NEWSLETTER -->
        <section class="newsletter">
            <h3>nyhetsbrev</h3>
            <p>Anmäl dig till vårt nyhetsbrev, få tillgång till nya släpp och få 10% rabatt på din första beställning.</p>
            <form>
                <input type="email" id="newsletter-email" name="email" autocomplete="email" placeholder="Skriv in din e-postadress">
                <button type="reset" class="newsletter-btn"><img src="icons/arrow-forward.svg" alt=""></button>
                <br>

            </form>

        </section>

        <nav>
            <h3>kundtjänst</h3>
            <ul>
                <li><a href="javascript:void(0)">kontakta oss</a></li>
                <li><a href="javascript:void(0)">allmänna villkor</a></li>
                <li><a href="javascript:void(0)">leverans & returer</a></li>
                <li><a href="javascript:void(0)">integritetspolicy</a></li>
            </ul>
        </nav>

        <nav>
            <h3>om oss</h3>
            <ul>
                <li><a href="javascript:void(0)">butiker</a></li>
                <li><a href="javascript:void(0)">the hub</a></li>
                <li><a href="javascript:void(0)">the gear</a></li>
                <li><a href="javascript:void(0)">hållbarhet</a></li>
            </ul>
        </nav>

        <a href="index.php" class="logo-footer"><img src="logo/kinforma-logo.svg" alt="Company logotype Kinforma"></a>
    </footer>

    <script src="JavaScript/script.js"></script>
</body>

</html>