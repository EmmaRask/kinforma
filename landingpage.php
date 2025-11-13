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
        <button class="menu-btn" aria-controls="site-menu" aria-expanded="false">
            <img src="icons/Menu.svg" alt="" />
        </button>
        <nav class="header-nav">
            <button class="language-opt">
                <img src="icons/SV_EN.svg" alt="" />
            </button>
            <button class="shopping-cart">
                <img src="icons/[00].svg" alt="" />
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
            <div class="collection-header">
                <p>KOLLEKTION 01</p>
                <button>SE MER</button>
            </div>
            <!-- produkt 1 -->
            <ul class="product-grid">
                <li class="product">
                    <article class="product">
                        <img src="images/product-img.svg" alt="" />
                        <p class="product-name">NAMN PÅ PRODUKT</p>
                        <p class="product-price">SEK 10 000</p>
                    </article>
                </li>

                <!-- produkt 2 -->
                <li class="product">
                    <article class="product">
                        <img src="images/product-img.svg" alt="" />
                        <p class="product-name">NAMN PÅ PRODUKT</p>
                        <p class="product-price">SEK 10 000</p>
                    </article>
                </li>

                <!-- produkt 3 -->
                <li class="product">
                    <article>
                        <img src="images/product-img.svg" alt="" />
                        <p class="product-name">NAMN PÅ PRODUKT</p>
                        <p class="product-price">SEK 10 000</p>
                    </article>
                </li>

                <!-- produkt 4 -->
                <li class="product">
                    <article>
                        <img src="images/product-img.svg" alt="" />
                        <p class="product-name">NAMN PÅ PRODUKT</p>
                        <p class="product-price">SEK 10 000</p>
                    </article>
                </li>

                <!-- produkt 5 -->
                <li class="product">
                    <article>
                        <img src="images/product-img.svg" alt="" />
                        <p class="product-name">NAMN PÅ PRODUKT</p>
                        <p class="product-price">SEK 10 000</p>
                    </article>
                </li>

                <!-- produkt 6 -->
                <li class="product">
                    <article>
                        <img src="images/product-img.svg" alt="" />
                        <p class="product-name">NAMN PÅ PRODUKT</p>
                        <p class="product-price">SEK 10 000</p>
                    </article>
                </li>
            </ul>
        </section>
    </main>
    <footer>
        <h2>FOOTER</h2>
    </footer>
</body>

</html>