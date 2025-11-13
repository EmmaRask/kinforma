<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kinforma test</title>
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <header>
        <a href="#" class="logo"><img src="/images/logga.png" alt="Company logotype Kinforma"></a>
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

        <section class="collection-products">
            <!-- produkt 1 -->
            <ul class="product-grid">
                <li class="product">
                    <article class="product">
                        <img src="images/tent/tent-beige.jpg" alt="" />
                    </article>
                </li>

                <!-- produkt 2 -->
                <li class="product">
                    <article class="product">
                        <img src="images/backpack.png" alt="" />
                    </article>
                </li>

                <!-- produkt 3 -->
                <li class="product">
                    <article>
                        <img src="images/watch.png" alt="" />
                    </article>
                </li>

                <!-- produkt 4 -->
                <li class="product">
                    <article>
                        <img src="images/shoe.jpg" alt="" />
                    </article>
                </li>

                <!-- produkt 5 -->
                <li class="product">
                    <article>
                        <img src="images/multistick.png" alt="" />
                    </article>
                </li>
            </ul>
        </section>

        <section class="carousel">
            <img src="images/carousel-img.jpg" alt="">
            <h3>om oss</h3>
            <p>Upplev en ny dimension av mode med vår senaste kollektion. Designad av dig, drivet av teknik, skapat för planeten.</p>
        </section>

        <section class="newsLetter">
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