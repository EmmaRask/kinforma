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
            <a href="index.php" class="logo"><img src="logo/kinforma-logo.svg" alt="Company logotype Kinforma"></a>

            <!-- NAVIGATION-->
            <nav class="main-nav">
                <ul class="fadeInMenu">
                    <li class="item home-btn"><a href="#">hem</a></li>
                    <li class="item"><a href="">kollektion</a></li>
                    <li class="item"><a href="">nyhetsbrev</a></li>
                    <li class="item"><a href="">om oss</a></li>
                    <li class="item"><a href="">kontakt</a></li>
                </ul>
            </nav>

            <!-- HEADER ICONS -->
            <menu class="header-icons">
                <button class="language-opt" aria-label="Byt språk från svenska till engelska">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.908 28.144C7.22 28.144 6.644 28.016 6.18 27.76C5.724 27.496 5.332 27.148 5.004 26.716L5.544 26.272C5.84 26.664 6.172 26.968 6.54 27.184C6.916 27.4 7.38 27.508 7.932 27.508C8.58 27.508 9.076 27.356 9.42 27.052C9.772 26.74 9.948 26.308 9.948 25.756C9.948 25.244 9.8 24.868 9.504 24.628C9.208 24.388 8.792 24.212 8.256 24.1L7.512 23.944C6.712 23.784 6.132 23.516 5.772 23.14C5.412 22.764 5.232 22.284 5.232 21.7C5.232 21.332 5.296 21.012 5.424 20.74C5.552 20.46 5.732 20.228 5.964 20.044C6.204 19.86 6.488 19.72 6.816 19.624C7.152 19.528 7.52 19.48 7.92 19.48C8.544 19.48 9.072 19.592 9.504 19.816C9.936 20.04 10.292 20.356 10.572 20.764L10.032 21.16C9.8 20.824 9.508 20.568 9.156 20.392C8.812 20.208 8.388 20.116 7.884 20.116C7.284 20.116 6.808 20.248 6.456 20.512C6.112 20.768 5.94 21.156 5.94 21.676C5.94 22.172 6.096 22.536 6.408 22.768C6.72 23 7.136 23.168 7.656 23.272L8.4 23.428C9.232 23.612 9.816 23.896 10.152 24.28C10.488 24.664 10.656 25.144 10.656 25.72C10.656 26.488 10.412 27.084 9.924 27.508C9.436 27.932 8.764 28.144 7.908 28.144ZM14.4163 28L11.6083 19.624H12.3883L14.8603 27.268H14.9083L17.4043 19.624H18.1603L15.3283 28H14.4163ZM22.6973 29.656V18.88H23.2853V29.656H22.6973Z" fill="black" />
                        <path d="M28.7271 28V19.624H33.6231V20.26H29.4471V23.428H33.4191V24.064H29.4471V27.364H33.6231V28H28.7271ZM36.3497 20.608H36.3137V28H35.6177V19.624H36.5177L40.9217 27.016H40.9577V19.624H41.6537V28H40.7537L36.3497 20.608Z" fill="#8A8A8A" />
                    </svg>
                </button>

                <button class="shopping-cart" aria-label="Varukorg">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.188 29.656V18.88H15.964V19.42H14.788V29.116H15.964V29.656H14.188ZM20.3266 28.144C18.4386 28.144 17.4946 26.7 17.4946 23.812C17.4946 20.924 18.4386 19.48 20.3266 19.48C22.2146 19.48 23.1586 20.924 23.1586 23.812C23.1586 26.7 22.2146 28.144 20.3266 28.144ZM20.3266 27.52C21.0306 27.52 21.5506 27.24 21.8866 26.68C22.2306 26.12 22.4026 25.352 22.4026 24.376V23.248C22.4026 22.272 22.2306 21.504 21.8866 20.944C21.5506 20.384 21.0306 20.104 20.3266 20.104C19.6146 20.104 19.0906 20.384 18.7546 20.944C18.4186 21.504 18.2506 22.272 18.2506 23.248V24.376C18.2506 25.352 18.4186 26.12 18.7546 26.68C19.0906 27.24 19.6146 27.52 20.3266 27.52ZM27.5219 28.144C25.6339 28.144 24.6899 26.7 24.6899 23.812C24.6899 20.924 25.6339 19.48 27.5219 19.48C29.4099 19.48 30.3539 20.924 30.3539 23.812C30.3539 26.7 29.4099 28.144 27.5219 28.144ZM27.5219 27.52C28.2259 27.52 28.7459 27.24 29.0819 26.68C29.4259 26.12 29.5979 25.352 29.5979 24.376V23.248C29.5979 22.272 29.4259 21.504 29.0819 20.944C28.7459 20.384 28.2259 20.104 27.5219 20.104C26.8099 20.104 26.2859 20.384 25.9499 20.944C25.6139 21.504 25.4459 22.272 25.4459 23.248V24.376C25.4459 25.352 25.6139 26.12 25.9499 26.68C26.2859 27.24 26.8099 27.52 27.5219 27.52ZM33.6612 18.88V29.656H31.8852V29.116H33.0612V19.42H31.8852V18.88H33.6612Z" fill="black" />
                    </svg>
                </button>

                <button class="hamburger">
                    <svg class="menuIcon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="10.5031" y="20.6002" width="26.9938" height="0.899794" rx="0.449897" fill="black" />
                        <rect x="10.5031" y="26.5" width="26.9938" height="0.899794" rx="0.449897" fill="black" />
                    </svg>

                    <svg class="closeIcon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="13.9562" y="33.1819" width="26.9938" height="0.899794" rx="0.449897" transform="rotate(-45 13.9562 33.1819)" fill="black" />
                        <rect x="14.9562" y="14.1819" width="26.9938" height="0.899794" rx="0.449897" transform="rotate(45 14.9562 14.1819)" fill="black" />
                    </svg>
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
                    src="images/tent/tent-beige.jpg" alt=""
                    data-folder="tent"
                    data-name="tent"
                    data-color="beige" />

                <div class="color-picker">
                    <button class="color-circle active" data-color="beige"></button>
                    <button class="color-circle" data-color="blue"></button>
                    <button class="color-circle" data-color="orange"></button>
                </div>

                <h3 class="media-label">the tent 01</h3>
                <video class="media-video" autoplay loop muted>
                    <source src="videos/video-1.mp4">
                </video>
            </section>

            <section class="pair reverse">
                <img class="product-image" src="images/backpack/backpack-beige.jpeg" alt="" />
                <h3 class="media-label">the backpack 01</h3>
                <video class="media-video" autoplay loop muted>
                    <source src="videos/video-1.mp4">
                </video>
            </section>

            <section class="pair">
                <img class="product-image" src="images/shoe/shoe.jpg" alt="" />
                <h3 class="media-label">the shoe 01</h3>
                <video class="media-video" autoplay loop muted>
                    <source src="videos/video-1.mp4">
                </video>
            </section>

            <section class="pair reverse">
                <img class="product-image" src="images/watch/watch-green.jpg" alt="" />
                <h3 class="media-label">the watch 01</h3>
                <video class="media-video" autoplay loop muted>
                    <source src="videos/video-1.mp4">
                </video>
            </section>
        </section>

        <section class="merch-product">
            <img src="images/stick/stick-02-box.png" alt="">
            <img src="images/stick/stick-01.png" alt="">
            <h3 class="media-label">the stick 01</h3>
        </section>

        <!-- SLIDESHOW-->
        <div class="slider">
            <div class="slides">
                <section class="slide">
                    <img src="images/about-section/about-card-1.jpg" alt="">
                    <article class="slide-content">
                        <h3>om oss</h3>
                        <p class="slide-text">Upplev en ny dimension av mode med vår senaste kollektion.
                            Designad av dig, drivet av teknik, skapat för planeten.</p>
                    </article>
                </section>

                <section class="slide">
                    <img src="images/about-section/about-card-2.jpg" alt="">
                    <article class="slide-content">
                        <h3>the hub</h3>
                        <p class="slide-text">Vår levande mötesplats med café, co-working, event och inspirerande föreläsningar där människor,
                            varumärken och idéer möts.
                            Här hämtar, provar och returnerar du dina produkter på plats. Allt för att minska klimatpåverkan.</p>
                    </article>
                </section>

                <section class="slide">
                    <img src="images/about-section/about-card-3.jpg" alt="">
                    <article class="slide-content">
                        <h3>hållbarhet</h3>
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
                <input type="text" placeholder="Skriv in din e-postadress">
                <button type="reset" class="newsletter-btn"><img src="icons/arrow_forward.svg" alt=""></button>
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