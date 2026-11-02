<footer class="travel-footer">

    <div class="container-fluid px-lg-5 py-4">

        

        <?php
        $destinazioni = [
            ["Albania", "albania", "al"],
            ["Austria", "austria", "at"],
            ["Bangladesh", "bangladesh", "bd"],
            ["Bulgaria", "bulgaria", "bl"],
            ["Cina", "cina", "cn"],
            ["Città del Vaticano", "vaticano", "va"],
            ["Corea del Sud", "corea-del-sud", "crs"],
            ["Croazia", "croazia", "hr"],
            ["Emirati Arabi", "emirati-arabi", "uae"],
            ["Italia", "italia", "it"],
            ["Francia", "francia", "fr"],
            ["Giappone", "giappone", "gp"],
            ["Germania", "germania", "de"],
            ["Hong Kong", "hong-kong", "hk"],
            ["Indonesia", "indonesia", "id"],
            ["Inghilterra", "inghilterra", "gb"],
            ["Liechtenstein", "liechtenstein", "li"],
            ["Macao", "macao", "mo"],
            ["Maldive", "maldive", "mv"],
            ["Malta", "malta", "mt"],
            ["Malesia", "malesia", "my"],
            ["Monte Carlo", "monte-carlo", "mc"],
            ["Polonia", "polonia", "pl"], 
            ["Portogallo", "portogallo", "pt"],
            ["San Marino", "san-marino", "sm"],
            ["Singapore", "singapore", "sg"],
            ["Spagna", "spagna", "es"],
            ["Sri Lanka", "sri-lanka", "lk"],
            ["Svizzera", "svizzera", "ch"],
            ["Taiwan", "taiwan", "tw"],
            ["Thailandia", "thailandia", "th"],
            ["Vietnam", "vietnam", "vn"]
         
        ];

        $numeroDestinazioni = count($destinazioni);
        $durataCarousel = 45;
        ?>

        <!-- CAROUSEL -->
        <div class="country-slider"
             style="--width: 190px;
                    --height: 155px;
                    --quantity: <?= $numeroDestinazioni ?>;">

            <div class="country-track">

                <?php foreach ($destinazioni as $index => $paese): ?>

                    <?php
                    $nome = $paese[0];
                    $slug = $paese[1];
                    $bandiera = $paese[2];

                    $ritardo = -$durataCarousel +
                        ($durataCarousel / $numeroDestinazioni * $index);
                    ?>

                    <div class="country-item"
                         style="--position: <?= $index + 1 ?>;
                                --delay: <?= $ritardo ?>s;">

                        <a href="/destinazioni/<?= htmlspecialchars($slug) ?>"
                           class="country-card"
                           style="--flag: url('https://flagcdn.com/w80/<?= $bandiera ?>.png');"
                           aria-label="Scopri <?= htmlspecialchars($nome) ?>">

                            <div class="country-card-body">

                                <img
                                    src="images/paesi/<?= htmlspecialchars($slug) ?>.jpg"
                                    alt="<?= htmlspecialchars($nome) ?>"
                                    loading="lazy">

                                <div class="country-card-name">
                                    <?= htmlspecialchars($nome) ?>
                                </div>

                            </div>

                        </a>

                    </div>

                <?php endforeach; ?>

            </div>
        </div>

        <!-- COPYRIGHT E SOCIAL -->
        <!-- COPYRIGHT, TESTO CENTRALE E SOCIAL -->
<div class="footer-bottom mt-4 pt-3">

    <div class="row align-items-center gy-3">

        <!-- SINISTRA: COPYRIGHT -->
        <div class="col-md-4 text-center text-md-start">
            <p>
                © <?= date("Y") ?> WanderMore |
                <a href="/privacy-policy">Privacy Policy</a>
            </p>
        </div>

        <!-- CENTRO: TESTO -->
        <div class="col-md-4 text-center">
            <p class="footer-subtitle mb-0">
                Ogni Paese, una storia. Ogni viaggio, un ricordo.
            </p>
        </div>

        <!-- DESTRA: SOCIAL -->
        <div class="col-md-4">
            <div class="footer-socials justify-content-center justify-content-md-end">

                <a href="https://www.instagram.com/"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="Instagram">
                    <i class="bi bi-instagram"></i>
                </a>

                <a href="https://www.facebook.com/"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="Facebook">
                    <i class="bi bi-facebook"></i>
                </a>

                <a href="https://www.tiktok.com/"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="TikTok">
                    <i class="bi bi-tiktok"></i>
                </a>

                <a href="https://www.linkedin.com/"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="LinkedIn">
                    <i class="bi bi-linkedin"></i>
                </a>

            </div>
        </div>

    </div>

</div>

                </div>

            </div>

        </div>

    </div>

</footer>
