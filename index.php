<?php
require __DIR__ . '/header.php';
?>

<main>
    <!-- PRODUCTS PAIR -->
    <section class="collection-media">

        <section class="pair">
            <img class="product-image js-product-image"
                src="images/backpack/backpack-beige.jpg" alt=""
                data-folder="backpack"
                data-name="backpack"
                data-color="beige" />

            <div class="btn-controls">
                <div class="color-picker">
                    <button class="color-circle active" data-color="beige"></button>
                    <button class="color-circle" data-color="green"></button>
                    <button class="color-circle" data-color="black"></button>
                </div>
                <button class="play-btn" aria-label="Spela upp produktvideo"></button>
            </div>

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


            <div class="btn-controls">
                <div class="color-picker">
                    <button class="color-circle active" data-color="beige"></button>
                    <button class="color-circle" data-color="green"></button>
                    <button class="color-circle" data-color="black"></button>
                </div>
                <button class="play-btn" aria-label="Spela upp produktvideo"></button>
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

            <div class="btn-controls">
                <div class="color-picker">
                    <button class="color-circle active" data-color="beige"></button>
                    <button class="color-circle" data-color="green"></button>
                    <button class="color-circle" data-color="black"></button>
                </div>
                <button class="play-btn" aria-label="Spela upp produktvideo"></button>
            </div>

            <h3 class="media-label">the shoe 01</h3>

            <video class="media-video" autoplay loop muted>
                <source src="videos/shoe-02.mp4">
            </video>
        </section>

        <section class="pair reverse">
            <img class="product-image js-product-image"
                src="images/watch/watch-beige.jpg" alt=""
                data-folder="watch"
                data-name="watch"
                data-color="beige" />


            <div class="btn-controls">
                <div class="color-picker">
                    <button class="color-circle active" data-color="beige"></button>
                    <button class="color-circle" data-color="green"></button>
                    <button class="color-circle" data-color="black"></button>
                </div>
                <button class="play-btn" aria-label="Spela upp produktvideo"></button>
            </div>

            <h3 class="media-label">the watch 01</h3>

            <video class="media-video" autoplay loop muted>
                <source src="videos/watch-01.mp4">
            </video>
        </section>

        <section class="pair">
            <img class="product-image" src="images/stick/stick-01.jpg" alt="" />

            <button class="play-btn" aria-label="Spela upp produktvideo"></button>

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

                            <button class="slide-btn" aria-label="Läs mer om oss">
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

                            <button class="slide-btn" aria-label="Läs mer om The Hub">
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

                            <button class="slide-btn" aria-label="Läs mer om hållbarhet">
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

<?php require __DIR__ . '/footer.php'; ?>