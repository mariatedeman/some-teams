<?php

require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/recources/data.php';

?>

<div>
    <img class="header-img" src="/assets/champions-league-winners_q9l8bkoy.avif" alt="Arsenal celebrates their Champions League win 2025.">
</div>

<div class="one-clmn-grey">
    <p>Presentation</p>
</div>

<!-- PRESENTATION TEAMS -->
<div class="teams-background">
    <div class="teams-grid">


        <!-- LOOPA DATA.PHP -->
        <?php
        foreach ($teams as $team => $team_info) :

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





                <ul>
                    <li>
                        <?= $team_info['opponents']['0'] ?>
                    </li>
                </ul>




                <p>
                    Ranking: <?= $team_info['uefa-coefficient-ranking'] ?>
                </p>

                <!-- BUTTON -->
                <a href="/teams-info.php?id=<?= $id ?>" class="button-primary">Learn more</a>

            </div>

        <?php
        endforeach;
        ?>
    </div>
</div>









<?php

require_once __DIR__ . '/components/footer.php';
