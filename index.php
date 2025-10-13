<?php

require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/recources/data.php';

?>

<!-- HERO-IMG AND INTRO-TEXT -->
<div class="heading-block-start">
    <div class="heading-block-text">
        <h1>UEFA Women’s Champions League 2025</h1>
        <p>The new season of the UEFA Women’s Champions League is here,
            bringing together Europe’s top clubs in the ultimate battle for glory.
            From reigning champions to exciting newcomers, the group stage
            features some of the best players and most competitive teams in the world.
            Below, you can explore all the clubs participating in this year’s
            edition and follow their journey towards the knockout rounds.</p>
    </div>
</div>

<!-- PRESENTATION TEAMS -->
<div class="teams-background">
    <div class="teams-grid">


        <!-- LOOP DATA.PHP -->
        <?php
        foreach ($teams as $team => $team_info) :

            // ID for URL
            $id = $team;

        ?>

            <!-- PRESENTATION CARDS -->
            <div class="teams-box">

                <div class="teams-logo">
                    <img src=" <?= $team_info['logo'] ?> " alt=" <?= $team ?> ">
                </div>

                <h2>
                    <?= $team ?>
                </h2>

                <h3>
                    <?= $team_info['city'] ?>
                </h3>

                <p class="uefa-ranking">
                    Uefa ranking: <?= $team_info['uefa-coefficient-ranking'] ?>
                </p>

                <!-- BUTTON -->
                <a href="/teams-info.php?id=<?= $id ?>" class="button-primary">Learn more</a>

            </div>

        <?php
        endforeach;
        ?>
    </div>

    <div class="back-to-top">
        <a href="/index.php"><img src="/assets/arrow-angle-pointing-up.svg"></a>
    </div>

</div>

<?php

require_once __DIR__ . '/components/footer.php';
